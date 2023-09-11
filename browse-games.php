<?php

require_once 'layout/header.php';
require_once 'layout/navbar.php';
require_once 'functions/db.php';
require_once 'functions/add-library.php';

try {
    $pdo = getDbConnection();
} catch (PDOException) {
    echo "Error while connecting to the database";
    exit;
}

$getAllGames = [];

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
            <a href="add-library.php?item=<?php echo $el['id']; ?>&user=<?php echo $userId['id']; ?>">Add to library</a>
        </article>
    <?php } ?>
</section>

<?php

require_once 'layout/footer.php';
