<?php

require_once 'layout/header.php';
require_once 'layout/navbar.php';

?>

<form action="add.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title">

    <label for="releaseDate">Release date:</label>
    <input type="date" id="releaseDate">

    <label for="image">Image cover</label>
    <input type="file" id="image">

    <input type="submit" value="Submit">
</form>

<?php 

require_once 'layout/footer.php';