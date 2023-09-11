<?php 

require_once 'classes/ErrorCode.php';

?>

<nav>
    <ul>
        <li><a href="/index.php">Welcome</a></li>
        <li><a href="/adding-games.php">Add games</a></li>
        <li><a href="/browse-games.php">Browse games</a></li>
        <li><a href="/your-games.php">Your games</a></li>
        <li><a href="/what-is-this-website.php">What is this thing?</a></li>
    </ul>

    <a href="/functions/logout.php"><img src="/assets/login-logoff-logo.svg" alt=""></a>

    <?php if (isset($_GET['error'])) { ?>
        <div class="error">
    <?php echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
        </div>
    <?php } ?>

    <div class="login">
        <p>Connect:</p>

        <form action="/functions/auth.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="submit" value="Log in">
        </form>

        <p>Don't have an account yet? Sign up <a href="/sign-up.php">here</a></p>
    </div>
</nav>