<?php
// $servername = "localhost";
// $username = "team2_user";
// $password = "password";
// $database = "fitness";

$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$database = $_SERVER['database'];


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    header("Location: error.php?type=connection");
    exit;
}

$category = $GLOBALS['category'];
$stmt = $conn->prepare("SELECT * FROM routine WHERE category = ?");
$stmt = $conn->prepare("SELECT rd.*, r.* 
        FROM routine_details rd
        INNER JOIN routine r ON rd.routine_id = r.id
        WHERE r.category = ?");
$stmt->bind_param("s", $category);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    include "routines/activities.php";
} else {
    header("Location: error.php?type=request");
    exit;
}

$stmt->close();
$conn->close();
