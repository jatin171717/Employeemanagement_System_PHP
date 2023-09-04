<?php
// Start the session (if not already started)
session_start();

// Check if the user is not logged in (i.e., if the session does not exist or does not contain the employee ID)
if (!isset($_SESSION['user'])) {
    // Redirect the user to the login page
    header("Location: employeelogin.php");
    exit(); // Make sure to exit after redirecting
}

// Database connection details (modify these with your actual credentials)
require_once "database.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the employee number from the session
$employeeno = $_SESSION['employeeno'];

// Prepare and execute the SQL query to fetch the user's profile information
$sql = "SELECT * FROM employee WHERE employeeno='$employeeno'";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit Profile</title>
</head>
<body>
<h1 style="text-align: center;">Edit Profile</h1><br>
<br>
    <?php
    // Check if the query result contains any rows
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="update.php" method="post" style="margin-left: 38%;">
            <input type="hidden" name="employeeno" value="<?php echo $row['employeeno']; ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>"><br>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename" value="<?php echo $row['middlename']; ?>"><br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="<?php echo $row['department']; ?>"><br>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo $row['category']; ?>"><br>
            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" value="<?php echo $row['grade']; ?>"><br>
            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" value="<?php echo $row['designation']; ?>"><br>
            <label for="dateofjoining">Dateofjoining:</label>
            <input type="text" id="dateofjoining" name="dateofjoining" value="<?php echo $row['dateofjoining']; ?>"><br>
            <label for="pfno">Pf no:</label>
            <input type="text" id="pfno" name="Pfno" value="<?php echo $row['Pfno']; ?>"><br>
            <label for="epsno">Epsno:</label>
            <input type="text" id="epsno" name="epsno" value="<?php echo $row['epsno']; ?>"><br>
            <label for="pfjoiningdate">pf Joining Date:</label>
            <input type="date" id="pfjoiningdate" name="pfjoiningdate" value="<?php echo $row['pfjoiningdate']; ?>"><br>
            <label for="epsjoiningdate">Eps Joining Date:</label>
            <input type="date" id="epsjoiningdate" name="epsjoiningdate" value="<?php echo $row['epsjoiningdate']; ?>"><br>
            <label for="emailid">Email id:</label>
            <input type="text" id="emailid" name="emailid" value="<?php echo $row['emailid']; ?>"><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"><br>
            <label for="phoneo">phone(O):</label>
            <input type="text" id="phoneo" name="phoneo" value="<?php echo $row['phoneo']; ?>"><br>
            <label for="phoner">phone(R):</label>
            <input type="text" id="phoner" name="phoner" value="<?php echo $row['phoner']; ?>"><br>
            <label for="phonem">phone(M):</label>
            <input type="text" id="phonem" name="phonem" value="<?php echo $row['phonem']; ?>"><br>
            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" value="<?php echo $row['qualification']; ?>"><br>
            <label for="dateofbirth">Date Of Birth:</label>
            <input type="date" id="dateofbirth" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>"><br>
            <label for="bloodgroup">Blood group:</label>
            <input type="text" id="bloodgroup" name="bloodgroup" value="<?php echo $row['bloodgroup']; ?>"><br>
            <label for="careofname">Care Of Name:</label>
            <input type="text" id="careofname" name="careofname" value="<?php echo $row['careofname']; ?>"><br>
            <label for="panno">Pan no:</label>
            <input type="text" id="panno" name="panno" value="<?php echo $row['panno']; ?>"><br>
            <label for="addaadharnoress">Aadhar no:</label>
            <input type="text" id="aadharno" name="aadharno" value="<?php echo $row['aadharno']; ?>"><br>
            <label for="voteridcardno">Voter ID card no:</label>
            <input type="text" id="voteridcardno" name="voteridcardno" value="<?php echo $row['voteridcardno']; ?>"><br><br><br><br>
            <input type="submit" value="Save Changes" style="margin-left: 133px;">
        </form>
        <?php
    } else {
        echo "<p>No profile information found.</p>";
    }
    ?>
    <br>
   
</body>
</html