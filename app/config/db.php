<?php
function db(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $dsn = 'mysql:host=localhost;port=3306;dbname=cookbook;charset=utf8mb4';
        $user = 'root';
        $pass = ''; // Laragon/MAMP: adapter si besoin
        $opts = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opts);
    }
    return $pdo;
}
