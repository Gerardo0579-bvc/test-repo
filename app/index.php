<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Calgary Wellness</title>
</head>

<body>
    <header>
        <nav class="top-menu">
            <div class="logo">
                <a href="index.php?page=home">
                    <img src="images/favicon.ico" alt="calgary wellness logo" width="60px" height="60px"> Calgary Wellness
                </a>
            </div>
            <ul class="menu">
                <li class="menu-item">
                    <a href="index.php?page=routines">
                        Routines
                    </a>
                </li>
                <li class="menu-item">
                    <a href="index.php?page=social">
                        Social
                    </a>
                </li>
                <li class="menu-item">
                    <?php
                    if (isset($_COOKIE['user_verified'])) {
                        echo '<a href="index.php?page=account">Account</a>';
                        echo $_ENV['servername'];
                    } else {
                        echo '<a href="index.php?page=login">Sign in!</a>';
                    }
                    ?>
                </li>

                <?php
                if (isset($_COOKIE['user_verified'])) {
                    echo '
                    <li class="menu-item">
                        <a href="index.php?page=logout">
                            Log out
                        </a>
                    </li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    <section id="content-wrapper">
        <?php
        if (!isset($_COOKIE['user_verified'])) {
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'home') {
                    include('home/home.php');
                } elseif ($page == 'registration') {
                    include('account/registration.php');
                } elseif ($page == 'login') {
                    include('account/login.php');
                } else {
                    include('errors/unverified.php');
                }
            } else {
                include('home.php');
            }
        } else {

            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page == 'home') {
                    include('home/home.php');
                } elseif ($page == 'routines') {

                    if (isset($_GET['category'])) {
                        $GLOBALS['category'] = $_GET['category'];

                        if (in_array($GLOBALS['category'], ['fitness', 'stress', 'food'])) {
                            include('requests/get_activities.php');
                        }
                    } else {
                        include('routines/routines.php');
                    }
                } elseif ($page == 'social') {
                    include('social/social.php');
                } elseif ($page == 'login') {
                    include('account/login.php');
                } elseif ($page == 'logout') {
                    include('requests/log_out.php');
                } elseif ($page == 'account') {
                    include('account/account.php');
                } elseif ($page == 'registration') {
                    include('account/registration.php');
                }
            } else {
                include('home.php');
            }
        }

        ?>
    </section>
</body>

</html>