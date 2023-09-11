<?php

require_once 'db.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

$title = $_POST['title'];
$releaseDate = $_POST['releaseDate'];
$image = $_POST['image'];

$stmtInsert = $pdo->prepare("INSERT INTO games(`name`, release_date, `image`)
VALUES (?, ?, ?)");

$stmtInsertd->execute([
    $title, 
    $releaseDate,
    $image
]);

echo "The game has been succesfully added to the website.";