<?php

$title = "Your games";

require_once 'layout/header.php';
require_once 'layout/navbar.php';

?>

<h1>Your games:</h1>

<form action="">
    <label for="search">Search:</label>
    <input type="text" name="search" placeholder="Search by name or release date">
</form>

<section>
    <img src="" alt="">
    <h2>Title</h2>
    <h3>Released the </h3>
</section>

<?php

require_once 'layout/footer.php';

?>