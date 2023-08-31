<?php

require_once 'classes/Utils.php';
require_once 'classes/ErrorCode.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
    Utils::redirect('login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
}

[
    'email' => $login,
    'password' => $password
] = $_POST;

// Authentification
$message = "";

if (count($_POST) > 0) {
    $isSuccess = 0;
    $conn = mysqli_connect("localhost", "root", "", "user_authentification");
    $email = $_POST('email');
    $sql = "SELECT * FROM users WHERE email= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        if (! empty($row)) {
            $passwordHash = $row['password'];
            if (password_verify($_POST['password'], $passwordHash)) {
                $isSuccess = 1;
            }
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid email or password";
    } else {
        echo "You sucessfully logged in";
    }
}