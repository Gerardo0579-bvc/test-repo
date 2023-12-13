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

$email = $_POST['email'];
$password = $_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cookie_name = "user_verified";
    $cookie_value = $row["user_id"];

    // Set the cookie to expire in 1 hour (3600 seconds)
    setcookie($cookie_name, $cookie_value, time() + 3600, '/');
    header("Location: ../index.php?page=home");
} else {
    header("Location: ../index.php?page=login&result=error");
    exit;
}

$stmt->close();
$conn->close();
