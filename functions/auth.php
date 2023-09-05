<?php

require_once __DIR__ . '/../classes/Utils.php';
require_once __DIR__ . '/../classes/ErrorCode.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
    Utils::redirect('login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
}

[
    'email' => $login,
    'password' => $password
] = $_POST;

// Authentification
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
    
    if(empty($_POST['email'])) {
        $emailErr = "Please enter an email";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bindValue(1, $_GET['email']);
        $stmt->execute();
    }

    if(empty($_POST['passwordHash'])) {
        $emailErr = "Please enter a password";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE password_hash = ?");
        $stmt->bindValue(1, $_GET['passwordHash']);
        $stmt->execute();
    }
}

header('Location: /index.php');