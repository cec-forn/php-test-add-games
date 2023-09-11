<?php

function getDbConnection(): PDO {
    $dbSettings = parse_ini_file(__DIR__ . '/../db.ini');

    [
        'DB_HOST' => $host,
        'DB_NAME' => $dbName,
        'DB_CHARSET' => $charset,
        'DB_USER' => $user,
        'DB_PASSWORD' => $password
    ] = $dbSettings;

    // DSN
    $pdo = new PDO(
        "mysql:dbname=$dbName;host=$host;charset=$charset",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
        );
    return $pdo;
}