<?php
session_start(); // Start the session (if not already started)n exists and contains the employee number)
if (isset($_SESSION['employeeno'])) {
    header("Location:jatin.php");
    exit(); // Make sure to exit after redirecting
}
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="employeedata";

$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something went wrong");
}


if (isset($_POST["login"])) {
    $employeeno = $_POST["employeeno"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM employee WHERE employeeno='$employeeno'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION['employeeno'] = $user['employeeno'];
            header("Location:jatin.php");
            die();
        } else {
            echo "<div class='alert alert-danger'>Employee Password does not Match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Employee ID does not Match</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login
    </title>
    <link rel="stylesheet"href="employeelogin.css">
<style>
      .img{
                    width: 99.9%;
                    height:99.9%;
                    position: absolute;
                    z-index: -1;
                    opacity: 0.9;
                    left: 1px;
                    top: 1px;
                }
    </style>
</head>
<body>
    
<img class="img" src="khargone_edited-custom.jpg" alt="">
    <h1> Larsen & Toubro CORPORATION</h1>
    <div class="b"></div>
<div class="container">
    <h2><u>Employee Login</u></h2>
    <form action="login.php" method="post">
        <div class="j">
            <input type="text"placeholder="employee no" name="employeeno" class="">
        </div>
        <div class="k">
            <input type="password" placeholder="Enter password" name="password" class="">
        </div>
        <div class="l">
            <input type="submit" value="login" name="login" >
        </div>
    </form>

</div>
<div class="c"></div>
</body>
</html>
