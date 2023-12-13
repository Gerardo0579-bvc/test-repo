<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fitness Registration</title>
    <link href="account/registration.css" rel="stylesheet">
</head>

<body>
    <h1>Fitness Registration Form</h1>
    <form action="requests/process_registration.php" method="post">
        <div id="sections-wrapper">

            <?php
            include "account/form_sections/personal.php";
            include "account/form_sections/health.php";
            include "account/form_sections/emergency_contact.php";
            include "account/form_sections/goals.php";
            include "account/form_sections/agreement.php";
            ?>
        </div>

        <div class="buttons-center">
            <input class="btn registration-btn" type="submit" value="Create account">
            <a onclick='window.history.back();' class="btn return-btn">Back to sign in</a>
        </div>
    </form>
</body>

</html>