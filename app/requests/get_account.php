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

$stmt = $conn->prepare("SELECT *
FROM users
LEFT JOIN emergency_contact_information ON users.user_id = emergency_contact_information.user_id
LEFT JOIN fitness_goals ON users.user_id = fitness_goals.user_id
LEFT JOIN health_information ON users.user_id = health_information.user_id
WHERE users.user_id = ?");
$stmt->bind_param("s", $_COOKIE['user_verified']);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div id="sections-wrapper">';
    include "account/form_sections/personal.php";
    include "account/form_sections/health.php";
    include "account/form_sections/emergency_contact.php";
    include "account/form_sections/goals.php";
    echo '</div>';
} else {
    header("Location: error.php?type=no_user");
    exit;
}

$stmt->close();
$conn->close();
