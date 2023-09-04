<?php
session_start();
if (!isset($_SESSION['employeeno'])) {
    header("Location: login.php");
}
include 'img.html';
require_once "database.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$employeeno = $_SESSION['employeeno'];
$sql = "SELECT * FROM employee WHERE employeeno='$employeeno'";
$result = $conn->query($sql);
if (!$result) {
    die("Error executing the query: " . $conn->error);
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
    <style>
        .passport-size-img {
            max-width: 150px;
            max-height: 200px;
            border: 1px solid #ddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>My Profile</h1>
    <?php
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['image'])) {
            echo "<img class='passport-size-img' src='" . $row['image'] . "' alt='Passport Size Photo'>";
        }
        echo "<table>";
        foreach ($row as $column => $value) {
            echo "<tr><th>" . ucwords(str_replace('_', ' ', $column)) . "</th><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No profile information found.</p>";
    }
    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>