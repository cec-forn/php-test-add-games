<?php

require_once __DIR__ . '/../classes/Utils.php';
require_once __DIR__ . '/../classes/ErrorCode.php';
require_once 'db.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

/* if (empty($_POST['email']) || empty($_POST['password'])) {
    Utils::redirect('index.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
}

[
    'email' => $email,
    'password' => $password
] = $_POST;

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE email=:email");
$stmtUser->execute(
    [
        'email' => $email
    ]
);

$user = $stmtUser->fetch();

if ($user === false) {
    Utils::redirect('/../index.php?error' . ErrorCode::INVALID_CREDENTIALS);
    http_response_code(404);
}

$userHash = $user['password_hash'];

if (password_verify($password, $userHash)) {
    $_SESSION['status'] = 'connected';
    $_SESSION['email'] = $user['email'];
}

// Authentification
/*
if ($_SERVER["REQUEST_METHOD"] == "post") {
    
    if(empty($_POST['email'])) {
        $emailErr = "Please enter an email";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bindValue(1, $_POST['email']);
        $stmt->execute();
    }

    if(empty($_POST['passwordHash'])) {
        $emailErr = "Please enter a password";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE password_hash = ?");
        $stmt->bindValue(1, $_POST['passwordHash']);
        $stmt->execute();
    }
    
    if(
        $_POST['email'] === "SELECT email FROM users" && 
        $_POST['passwordHash'] === "SELECT password_hash FROM users"
    ) {
        $_SESSION['connected'] = true;
    }
} 

header('Location: /../index.php');

// préparer ma requête et la storer dans une $, */