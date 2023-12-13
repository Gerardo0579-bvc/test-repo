<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fitness Registration</title>
    <link href="account/registration.css" rel="stylesheet">
</head>

<body>
    <h1>Fitness Registration Form</h1>
    <form action="requests/upd_account.php" method="post">
        <input <?php
                echo 'value="' . $_COOKIE['user_verified'] . '" ';
                ?> type="text" id="user_id" name="user_id" hidden>
        <?php
        include "requests/get_account.php";
        ?>

        <div class="buttons-center">
            <input class="btn registration-btn" type="submit" value="Update account">
            <a onclick='window.history.back();' class="btn return-btn">Return</a>
        </div>
    </form>
</body>

</html>