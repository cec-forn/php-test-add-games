<?php 

require_once 'db.php';
require_once 'auth.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

$userId = $pdo->prepare("SELECT * FROM users");
$userId->execute();

$result = $userId->fetch(PDO::FETCH_ASSOC);

var_dump($result);