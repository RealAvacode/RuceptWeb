<?php
// Fabbrica waitlist endpoint.
// Expects POST with 'email'. Stores it in Postgres (DATABASE_URL) and returns JSON.
// Table is created automatically on first run.

header('Content-Type: application/json');

function out($ok, $error = null) {
    echo json_encode(['ok' => $ok] + ($error ? ['error' => $error] : []));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') out(false, 'Method not allowed.');

$email = trim($_POST['email'] ?? '');
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    out(false, 'Please enter a valid email address.');
}

$dbUrl = getenv('DATABASE_URL');
if (!$dbUrl) out(false, 'Waitlist is not configured yet — please try again later.');

try {
    $parts = parse_url($dbUrl);
    $dsn = sprintf(
        'pgsql:host=%s;port=%s;dbname=%s;sslmode=require',
        $parts['host'], $parts['port'] ?? 5432, ltrim($parts['path'], '/')
    );
    $pdo = new PDO($dsn, $parts['user'], $parts['pass'] ?? null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    $pdo->exec("CREATE TABLE IF NOT EXISTS fabbrica_waitlist (
        id SERIAL PRIMARY KEY,
        email TEXT NOT NULL UNIQUE,
        created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
    )");
    $stmt = $pdo->prepare(
        'INSERT INTO fabbrica_waitlist (email) VALUES (:email) ON CONFLICT (email) DO NOTHING'
    );
    $stmt->execute([':email' => $email]);
    out(true);
} catch (Exception $e) {
    error_log('waitlist error: ' . $e->getMessage());
    out(false, 'Something went wrong — please try again.');
}
