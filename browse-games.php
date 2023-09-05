<?php

require_once 'layout/header.php';
require_once 'layout/navbar.php';
require_once 'functions/db.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

$query = "SELECT * FROM games;";

$handle = $pdo->prepare($query);
$handle->execute();
$getAllGames = $handle->fetchAll(PDO::FETCH_ASSOC);

?>

<section class="container">
    <?php foreach ($getAllGames as $el) { ?>
        <article class="item">
            <div>
                <img src="<?php echo $el['image'] ?>">
            </div>
            <div class="content">
                <h2><?php echo $el['name']; ?></h2>
                <h3><?php echo $el['release_date'] ?></h3>
            </div>
        </article>
    <?php } ?>
</section>

<?php

require_once 'layout/footer.php';