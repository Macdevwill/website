<?php
$host = "94.136.185.37";
$port = "5432";
$db = "synergy_erp";
$user = "postgres";
$pass = "pgroot";

$dsn = "pgsql:host=$host;port=$port;dbname=$db;";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>