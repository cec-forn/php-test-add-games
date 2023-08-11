<?php

require_once 'layout/header.php';
require_once 'layout/navbar.php';

?>

<h1>Your games:</h1>

<form action="">
    <label for="search">Search:</label>
    <input type="text" name="search" placeholder="Search by genre, name, release date">
</form>

<label for="filter">Filter by genre:</label>
<select name="filter">
    <option value=""></option>
</select>

<section>
    <img src="" alt="">
    <h2></h2>
    <h3>Released the </h3>
    <p>Genre:</p>
    <div></div>
</section>

<?php

require_once 'layout/footer.php';

?>