<?php
if (isset($_GET['type'])) {
    $page = $_GET['type'];
    if ($page == 'connection') {
        echo 'Error connecting with Mysql';
    } elseif ($page == 'request') {
        echo 'Error in the request';
    }
} else {
    echo 'Another generic error :(';
}
