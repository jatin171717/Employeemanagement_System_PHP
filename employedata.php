<?php
// Start the session (if not already started)
session_start();

// Check if the user is not logged in (i.e., if the session does not exist or does not contain the employee ID)


// Database connection details (modify these with your actual credentials)
require_once "database.php";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variable to store the employee number
$selectedEmployeeNo = '';

// Check if the employee ID is submitted via the form
if (isset($_POST['submit'])) {
    // Get the employee ID from the submitted form
    $selectedEmployeeNo = $_POST['employeeno'];

    // Prepare and execute the SQL query to fetch the user's profile information including the image attribute
    $sql = "SELECT * FROM employee WHERE employeeno='$selectedEmployeeNo'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if (!$result) {
        die("Error executing the query: " . $conn->error);
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
    <style>
        .passport-size-img {
            max-width: 150px;
            max-height: 200px;
            border: 1px solid #ddd;
            margin-top: 20px;
        }
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
    <h1>Employee Profile</h1>
    <!-- Form to input the employee ID -->
    <form action="employedata.php" method="post">
        <label for="employeeno">Enter Employee ID:</label>
        <input type="text" name="employeeno" id="employeeno" value="<?php echo $selectedEmployeeNo; ?>" required>
        <input type="submit" name="submit" value="Show Profile">
      
    </form>

    <?php
    // Check if the query result contains any rows
    if (isset($_POST['submit']) && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the image if it exists
      
        echo "<table>";
        // Loop through the columns and display the data in a table
        foreach ($row as $column => $value) {
            echo "<tr><th>" . ucwords(str_replace('_', ' ', $column)) . "</th><td>$value</td></tr>";
        }
        echo "</table>";
    } elseif (isset($_POST['submit'])) {
        // If no result is available, show an error message
        echo "<p>No profile information found for the entered Employee ID.</p>";
    }

  
    ?>
    <br>