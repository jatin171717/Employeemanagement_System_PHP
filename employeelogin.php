<?php
// Start session
session_start();


// Check if the user is already authenticated (logged in)
if (isset($_SESSION['user'])) {
    // Redirect to main page
    header("Location:employedata.php");
    exit();
}


// Database connection
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="employeedata";

$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something went wrong");
}


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employeeno = $_POST['employeeno'];
    $password = $_POST['password'];

    // Perform SQL injection prevention (not a complete solution; use prepared statements)
    $employeeno = mysqli_real_escape_string($conn, $employeeno);
    $password = mysqli_real_escape_string($conn, $password);

    // Perform SQL query to fetch data from the database
    $query = "SELECT * FROM employee WHERE employeeno = '$employeeno' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if the login was successful
    if (mysqli_num_rows($result) === 1) {
        // Fetch the user's data (you may want to store only essential info in the session)
        $user = mysqli_fetch_assoc($result);

        // Store the user data in the session
        $_SESSION['user'] = $user;

        // Redirect to another page on successful login
        header('Location:employedata.php');
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid employee number or password";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
        <img src="images1.png" alt="logo" style="width:30px;">
        </a>
        <span>L & T</span>
        
        <!-- Links -->
        <div class="a">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">science</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">tutorial </a>
        </li>
        </ul>
        </div>
    </nav>
    
    <?php
    





    // Check if there is a login error message to display
    if (isset($_GET['login_error']) && $_GET['login_error'] === '1') {
        echo '<p style="color: red;">Invalid email or password. Please try again.</p>';
    }
    ?>
    <div class="container">

<form  method="POST" action="">
  <h2 class="sign" >Login</h2>
  <input class="un" type="text" name="employeeno" placeholder="employeeno" required>
  <input class="pass" type="password" name="password" placeholder="Password">
  <button class="submit" name="login" type="submit">Login</button>

</form>
</div>