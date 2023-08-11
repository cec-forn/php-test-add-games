<?php

require_once 'layout/header.php';
require_once 'layout/navbar.php';

?>

    <section>
        <p>
        Discover a seamless web app for your Steam games. Effortlessly view your entire collection, sort by genre, and explore game details. No name needed – just pure functionality. Justy enter your Steam ID below.
        </p>

        <form action="">
            <input type="text" name="steam-id">

            <button type="submit">
                Click here to rediscover your library
            </button>
        </form>
    </section>

<?php

require_once 'layout/footer.php';

?>