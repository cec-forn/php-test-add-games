<?php

require_once "layout/header.php";
require_once "layout/navbar.php";

$title = "Sign up";

?>

<form action="/functions/auth-su.php" method="post">
    <label for="firstname">First name:</label>
    <input type="text" name="firstname" id="firstname">

    <label for="lastname">Last name:</label>
    <input type="text" name="lastname">

    <label for="birth-date">Date of birth:</label>
    <input type="date" name="birthDate">

    <label for="email">Email:</label>
    <input type="email" name="email">

    <label for="password-hash">Password:</label>
    <input type="password" name="passwordHash">

    <input type="submit" value="Submit">
</form>

<?php 

require_once "layout/footer.php";