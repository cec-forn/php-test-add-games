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
$birthDate = $_POST['birthDate'];
$email = $_POST['email'];
$password = $_POST['passwordHash'];

// Validation des données

// Préparation de la requête avec les paramètres adéquats
$stmtInsert = $pdo->prepare("INSERT INTO users(firstname, lastname, birth_date, email, password_hash) VALUES (?, ?, ?, ?, ?)");

// Exécution de la requête
$stmtInsert->execute([
    $firstname,
    $lastname,
    $birthDate,
    $email,
    $password
]);

header('Location: /index.php');