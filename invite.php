<?php
// Fabbrica invite endpoint (separate invite page).
// Expects POST with 'name' and 'email'. Stores them in Postgres (DATABASE_URL) and returns JSON.
// Table is created automatically on first run.

header('Content-Type: application/json');

function out($ok, $error = null) {
    echo json_encode(['ok' => $ok] + ($error ? ['error' => $error] : []));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') out(false, 'Method not allowed.');

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$source = substr(preg_replace('/[^A-Za-z0-9\/_.-]/', '', trim($_POST['source'] ?? '')), 0, 120);
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
    $stmt = $pdo->prepare(
        'INSERT INTO fabbrica_invites (name, email, source) VALUES (:name, :email, :source)
         ON CONFLICT (email) DO UPDATE SET name = EXCLUDED.name, source = EXCLUDED.source'
    );
    $stmt->execute([':name' => $name, ':email' => $email, ':source' => $source !== '' ? $source : null]);
    out(true);
} catch (Exception $e) {
    error_log('invite error: ' . $e->getMessage());
    out(false, 'Something went wrong — please try again.');
}
