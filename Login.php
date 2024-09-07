<?php
$servername = "localhost";
$username = "Viniksha Shree";
$password = "1234567";
$dbname = "travel_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Protect against SQL injection
    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to homepage
        header("Location: Homepage.html");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
