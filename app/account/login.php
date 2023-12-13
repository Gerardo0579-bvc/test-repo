<html>

<head>
    <link href="account/login.css" rel="stylesheet">
</head>

<body>

    <div class="login-wrapper">
        <div class="login-container">
            <h1>Login</h1>
            <?php
            if (isset($_GET['result'])) {
                $page = $_GET['result'];
                if ($page == 'error') {
                    echo '<div id="login-error"> The credentials are invalid. </div>';
                } elseif ($page == 'success') {
                    echo '<div id="signup-success"> Account created. Please, log in. </div>';
                }
            }
            ?>
            <form action="requests/log_user.php" method="post">
                <input name="email" type="email" class="input-field" placeholder="Email">
                <input name="password" type="password" class="input-field" placeholder="Password">
                <input type="submit" class="btn login-btn" value="Login" />
                <a href="index.php?page=registration" class="btn register-btn">Sign up</a>
            </form>
        </div>
    </div>
</body>

</html>