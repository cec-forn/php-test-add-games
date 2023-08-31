<?php

$title = "Welcome";

require_once 'layout/header.php';
require_once 'layout/navbar.php';

if (isset($_SESSION['login'])) {
    $welcomeMessage = "Welcome, " . $_SESSION['login'];
} else {
    $welcomeMessage = "Welcome";
}

?>

    <h1><?php echo $welcomeMessage ?></h1>
    <section>
        <p>
            Discover and organize your favorite video games with ease using this web app. This innovative web app lets you curate a personalized game collection and connect with other gamers. Simply add games to your library, explore recommendations from the community, and build a catalog that reflects your gaming journey. Join us today and level up your gaming experience! You can already add your games, or browse to see which game you have. 
        </p>
        <form action=""></form>
    </section>

<?php

require_once 'layout/footer.php';

?>