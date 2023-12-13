<?php
setcookie('user_verified', "", time() - 3600, '/');


header("Location: index.php?page=home");
exit;
