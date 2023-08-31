<nav>
    <ul>
        <li><a href="/index.php">Welcome</a></li>
        <li><a href="/your-games.php">Your games</a></li>
        <li><a href="/what-is-this-website.php">What is this thing?</a></li>
    </ul>

    <img src="/assets/login-logoff-logo.svg" alt="">

    <?php if (isset($_GET['error'])) { ?>
        <div class="error">
    <?php echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
        </div>
    <?php } ?>

    <div class="login">
        <p>Connect:</p>

        <form action="auth.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="submit" value="Log in">
        </form>

        <p>Don't have an account yet? Sign up <a href="/sign-up.php">here</a></p>
    </div>
</nav>