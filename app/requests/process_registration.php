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

// Call the stored procedure
$sql = "CALL RegisterUser(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssss",
    $_POST["username"],
    $_POST["fullName"],
    $_POST["email"],
    $_POST["password"],
    $_POST["phone"],
    $_POST["date_birth"],
    $_POST["gender"],
    $_POST["emergencyContactName"],
    $_POST["relationship"],
    $_POST["emergencyPhoneNumber"],
    $_POST["medicalConditions"],
    $_POST["allergies"],
    $_POST["medications"],
    $_POST["physicianContact"],
    $_POST["fitnessActivities"],
    $_POST["schedule"],
    $_POST["specificGoals"]
);


if ($stmt->execute()) {
    header("Location: ../index.php?page=login&result=success");
} else {
    echo "<button onclick='window.history.back();'>Back</button><br>";
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
