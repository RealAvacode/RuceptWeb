<?php
// Fabbrica invite endpoint for the second invite page (invite2.html).
// Expects POST with 'name', 'email' and 'role'. Stores them in Postgres (DATABASE_URL) and returns JSON.
// Table is created automatically on first run; the role column is added automatically if missing.

header('Content-Type: application/json');

function out($ok, $error = null) {
    echo json_encode(['ok' => $ok] + ($error ? ['error' => $error] : []));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') out(false, 'Method not allowed.');

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$source = substr(preg_replace('/[^A-Za-z0-9\/_.-]/', '', trim($_POST['source'] ?? '')), 0, 120);
$role = trim($_POST['role'] ?? '');
$roles = ['Fabricator', 'Streamer', 'Product designer', 'Brand or studio', 'Collector'];
if (!in_array($role, $roles, true)) {
    out(false, 'Please choose how you are joining.');
}
if ($name === '' || strlen($name) > 120) {
    out(false, 'Please enter your name.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    out(false, 'Please enter a valid email address.');
}

$dbUrl = getenv('DATABASE_URL');
if (!$dbUrl) out(false, 'Invites are not configured yet — please try again later.');

try {
    $parts = parse_url($dbUrl);
    $dsn = sprintf(
        'pgsql:host=%s;port=%s;dbname=%s;sslmode=require',
        $parts['host'], $parts['port'] ?? 5432, ltrim($parts['path'], '/')
    );
    $pdo = new PDO($dsn, $parts['user'], $parts['pass'] ?? null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    $pdo->exec("CREATE TABLE IF NOT EXISTS fabbrica_invites (
        id SERIAL PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
    )");
    $pdo->exec("ALTER TABLE fabbrica_invites ADD COLUMN IF NOT EXISTS source TEXT");
    $pdo->exec("ALTER TABLE fabbrica_invites ADD COLUMN IF NOT EXISTS role TEXT");
    $stmt = $pdo->prepare(
        'INSERT INTO fabbrica_invites (name, email, source, role) VALUES (:name, :email, :source, :role)
         ON CONFLICT (email) DO UPDATE SET name = EXCLUDED.name, source = EXCLUDED.source, role = EXCLUDED.role'
    );
    $stmt->execute([':name' => $name, ':email' => $email, ':source' => $source !== '' ? $source : null, ':role' => $role]);
    out(true);
} catch (Exception $e) {
    error_log('invite error: ' . $e->getMessage());
    out(false, 'Something went wrong — please try again.');
}
