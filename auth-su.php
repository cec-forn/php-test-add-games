<?php

require_once 'functions/db.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

// Récupération des données de formulaire
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$birthDate = $_POST['birthDate'];
$password = $_POST['passwordHash'];

// Validation des données

// Préparation de la requête avec les paramètres adéquats
$stmtInsert = $pdo->prepare("INSERT INTO users(firstname, lastname, birth_date, email, password_hash) VALUES (?, ?, ?, ?, ?)");

// Exécution de la requête
$stmtInsert->execute([
    $firstname,
    $lastname,
    $email,
    $birthDate,
    $password
]);

echo "ok";