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

// Initialize variables
$selectedEmployeeNo = '';
$userData = null;
$errorMessage = '';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the employee number from the form
    $selectedEmployeeNo = $_POST['employeeno'];

    // Prepare and execute the SQL query to fetch the employee's data from the database
    $sql = "SELECT * FROM employee WHERE employeeno='$selectedEmployeeNo'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the employee's data as an associative array
        $userData = $result->fetch_assoc();
    } else {
        // No employee found with the given employee number
        $errorMessage = "Employee not found with the given Employee Number.";
    }
}

// Check if the form is submitted for updating data
if (isset($_POST['update'])) {
    // Get the employee number from the form
    $selectedEmployeeNo = $_POST['employeeno'];

    // Get all the form data
    // For simplicity, we assume you have an input field for each column in the employee table
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $middlename = isset($_POST['middlename']) ? $_POST['middlename'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
    $designation = isset($_POST['designation']) ? $_POST['designation'] : '';
    $dateofjoining = isset($_POST['dateofjoining']) ? $_POST['dateofjoining'] : '';
    $saturdayleaveallowed = isset($_POST['saturdayleaveallowed']) ? $_POST['saturdayleaveallowed'] : '';
    $Pfno = isset($_POST['Pfno']) ? $_POST['Pfno'] : '';
    $epsno = isset($_POST['epsno']) ? $_POST['epsno'] : '';
    $pfjoiningdate = isset($_POST['pfjoiningdate']) ? $_POST['pfjoiningdate'] : '';
    $epsjoiningdate = isset($_POST['epsjoiningdate']) ? $_POST['epsjoiningdate'] : '';
    $pftrust = isset($_POST['pftrust']) ? $_POST['pftrust'] : '';
    $salarybankname = isset($_POST['salarybankname']) ? $_POST['salarybankname'] : '';
    $salarybankacno = isset($_POST['salarybankacno']) ? $_POST['salarybankacno'] : '';
    $erabankname = isset($_POST['erabankname']) ? $_POST['erabankname'] : '';
    $erabankacno = isset($_POST['erabankacno']) ? $_POST['erabankacno'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $phoneo = isset($_POST['phoneo']) ? $_POST['phoneo'] : '';
    $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
    $areaofinterest = isset($_POST['areaofinterest']) ? $_POST['areaofinterest'] : '';
    $professionalmembership = isset($_POST['professionalmembership']) ? $_POST['professionalmembership'] : '';
    $dateofbirth = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '';
    $bloodgroup = isset($_POST['bloodgroup']) ? $_POST['bloodgroup'] : '';
    $deactivationdate = isset($_POST['deactivationdate']) ? $_POST['deactivationdate'] : '';
    $deactivationreason = isset($_POST['deactivationreason']) ? $_POST['deactivationreason'] : '';
    $intranetaccess = isset($_POST['intranetaccess']) ? $_POST['intranetaccess'] : '';
    $careofname = isset($_POST['careofname']) ? $_POST['careofname'] : '';
    $panno = isset($_POST['panno']) ? $_POST['panno'] : '';
    $aadharno = isset($_POST['aadharno']) ? $_POST['aadharno'] : '';
    $voteridcardno = isset($_POST['voteridcardno']) ? $_POST['voteridcardno'] : '';
    
    // Add more fields here as per your database schema

    // Construct the SQL update query
    $sql = "UPDATE employee SET firstname='$firstname',middlename='$middlename',lastname='$lastname',department='$department',category='$category',grade='$grade',designation='$designation',dateofjoining='$dateofjoining',saturdayleaveallowed='$saturdayleaveallowed',Pfno='$Pfno',epsno='$epsno',pfjoiningdate='$pfjoiningdate',epsjoiningdate='$epsjoiningdate',pftrust='$pftrust',salarybankname='$salarybankname',salarybankacno='$salarybankacno',erabankname='$erabankname',erabankacno='$erabankacno', emailid='$email',address='$address',phoneo='$phoneo',qualification='$qualification',areaofinterest='$areaofinterest',professionalmembership='$professionalmembership',dateofbirth='$dateofbirth',bloodgroup='$bloodgroup',deactivationdate='$deactivationdate',deactivationreason='$deactivationreason',intranetaccess='$intranetaccess',careofname='$careofname',panno='$panno',aadharno='$aadharno',voteridcardno='$voteridcardno'";
    // Add more fields here as per your database schema
    // For example, to update "department" and "category":
    // $department = isset($_POST['department']) ? $_POST['department'] : '';
    // $category = isset($_POST['category']) ? $_POST['category'] : '';
    // $sql .= ", department='$department', category='$category'";

    // Add a condition for the specific employee number you want to update
    $sql .= " WHERE employeeno='$selectedEmployeeNo'";

    // Execute the update query
    if ($conn->query($sql) === true) {
        // Data updated successfully
        // Redirect back to the profile page or any other page as needed
        header("Location: adminviewpage.php?employeeno=$selectedEmployeeNo");
        exit();
    } else {
        $errorMessage = "Error updating data: " . $conn->error;
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
    <title>Edit Employee Data</title>
    <link rel="stylesheet" href="edit.css">
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
    <h1>Edit Employee Data</h1>
    <form action="edit.php" method="post">
        <label for="employeeno">Enter Employee Number:</label>
        <input type="text" name="employeeno" value="<?php echo htmlspecialchars($selectedEmployeeNo); ?>">
        <input type="submit" name="submit" value="Search">
    </form>

    <?php if ($userData) { ?>
        <form action="edit.php" method="post">
            <!-- Display existing data for the selected employee -->
            <label for="name">First Name:</label>
            <input type="text" name="firstname" value="<?php echo isset($userData['firstname']) ? htmlspecialchars($userData['firstname']) : ''; ?>">
            <br>
            <label for="name">Middle Name:</label>
            <input type="text" name="middlename" value="<?php echo isset($userData['middlename']) ? htmlspecialchars($userData['middlename']) : ''; ?>">
            <br>
            <label for="name">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo isset($userData['lastname']) ? htmlspecialchars($userData['lastname']) : ''; ?>">
            <br>
            <label for="name">department:</label>
            <input type="text" name="department" value="<?php echo isset($userData['department']) ? htmlspecialchars($userData['department']) : ''; ?>">
            <br>
            <label for="name">Category:</label>
            <input type="text" name="category" value="<?php echo isset($userData['category']) ? htmlspecialchars($userData['category']) : ''; ?>">
            <br>
            <label for="name">Grade:</label>
            <input type="text" name="grade" value="<?php echo isset($userData['grade']) ? htmlspecialchars($userData['grade']) : ''; ?>">
            <br>
            <label for="name">designation:</label>
            <input type="text" name="designation" value="<?php echo isset($userData['designation']) ? htmlspecialchars($userData['designation']) : ''; ?>">
            <br>
            <label for="name">date of joining:</label>
            <input type="text" name="dateofjoining" value="<?php echo isset($userData['dateofjoining']) ? htmlspecialchars($userData['dateofjoining']) : ''; ?>">
            <br>
            <label for="name">saturday leave allowed:</label>
            <input type="text" name="saturdayleaveallowed" value="<?php echo isset($userData['saturdayleaveallowed']) ? htmlspecialchars($userData['saturdayleaveallowed']) : ''; ?>">
            <br>
            <label for="name">Pf no:</label>
            <input type="text" name="Pfno" value="<?php echo isset($userData['Pfno']) ? htmlspecialchars($userData['Pfno']) : ''; ?>">
            <br>
            <label for="name">epsno:</label>
            <input type="text" name="epsno" value="<?php echo isset($userData['epsno']) ? htmlspecialchars($userData['epsno']) : ''; ?>">
            <br>
            <label for="name">pf joining date:</label>
            <input type="text" name="pfjoiningdate" value="<?php echo isset($userData['pfjoiningdate']) ? htmlspecialchars($userData['pfjoiningdate']) : ''; ?>">
            <br>
            <label for="name">eps joining date:</label>
            <input type="text" name="epsjoiningdate" value="<?php echo isset($userData['epsjoiningdate']) ? htmlspecialchars($userData['epsjoiningdate']) : ''; ?>">
            <br>
            <label for="name">pf trust:</label>
            <input type="text" name="pftrust" value="<?php echo isset($userData['pftrust']) ? htmlspecialchars($userData['pftrust']) : ''; ?>">
            <br>
            <label for="name">salary bank name:</label>
            <input type="text" name="salarybankname" value="<?php echo isset($userData['salarybankname']) ? htmlspecialchars($userData['salarybankname']) : ''; ?>">
            <br>
            <label for="name">salary bank ac no:</label>
            <input type="text" name="salarybankacno" value="<?php echo isset($userData['salarybankacno']) ? htmlspecialchars($userData['salarybankacno']) : ''; ?>">
            <br>
            <label for="name">era bank name:</label>
            <input type="text" name="erabankname" value="<?php echo isset($userData['erabankname']) ? htmlspecialchars($userData['erabankname']) : ''; ?>">
            <br>
            <label for="name">era bank ac no:</label>
            <input type="text" name="erabankacno" value="<?php echo isset($userData['erabankacno']) ? htmlspecialchars($userData['erabankacno']) : ''; ?>">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo isset($userData['emailid']) ? htmlspecialchars($userData['emailid']) : ''; ?>">
            <br>
            <label for="name">address:</label>
            <input type="text" name="address" value="<?php echo isset($userData['address']) ? htmlspecialchars($userData['address']) : ''; ?>">
            <br>
            <label for="name">phone(O):</label>
            <input type="text" name="phoneo" value="<?php echo isset($userData['phoneo']) ? htmlspecialchars($userData['phoneo']) : ''; ?>">
            <br>
            <label for="name">qualification:</label>
            <input type="text" name="qualification" value="<?php echo isset($userData['qualification']) ? htmlspecialchars($userData['qualification']) : ''; ?>">
            <br>
            <label for="name">areaofinterest:</label>
            <input type="text" name="areaofinterest" value="<?php echo isset($userData['areaofinterest']) ? htmlspecialchars($userData['areaofinterest']) : ''; ?>">
            <br>
            <label for="name">professional membership:</label>
            <input type="text" name="professionalmembership" value="<?php echo isset($userData['professionalmembership']) ? htmlspecialchars($userData['professionalmembership']) : ''; ?>">
            <br>
            <label for="name">date of birth:</label>
            <input type="text" name="dateofbirth" value="<?php echo isset($userData['dateofbirth']) ? htmlspecialchars($userData['dateofbirth']) : ''; ?>">
            <br>
            <label for="name">bloodgroup:</label>
            <input type="text" name="bloodgroup" value="<?php echo isset($userData['bloodgroup']) ? htmlspecialchars($userData['bloodgroup']) : ''; ?>">
            <br>
            <label for="name">deactivation date:</label>
            <input type="text" name="deactivationdate" value="<?php echo isset($userData['deactivationdate']) ? htmlspecialchars($userData['deactivationdate']) : ''; ?>">
            <br>
            <label for="name">deactivation reason:</label>
            <input type="text" name="deactivationreason" value="<?php echo isset($userData['deactivationreason']) ? htmlspecialchars($userData['deactivationreason']) : ''; ?>">
            <br>
            <label for="name">intranet access:</label>
            <input type="text" name="intranetaccess" value="<?php echo isset($userData['intranetaccess']) ? htmlspecialchars($userData['intranetaccess']) : ''; ?>">
            <br>
            <label for="name">care of name:</label>
            <input type="text" name="careofname" value="<?php echo isset($userData['careofname']) ? htmlspecialchars($userData['careofname']) : ''; ?>">
            <br>
            <label for="name">pan no:</label>
            <input type="text" name="panno" value="<?php echo isset($userData['panno']) ? htmlspecialchars($userData['panno']) : ''; ?>">
            <br>
            <label for="name">aadhar no:</label>
            <input type="text" name="aadharno" value="<?php echo isset($userData['aadharno']) ? htmlspecialchars($userData['aadharno']) : ''; ?>">
            <br>
            <label for="name">voter id cardno:</label>
            <input type="text" name="voteridcardno" value="<?php echo isset($userData['voteridcardno']) ? htmlspecialchars($userData['voteridcardno']) : ''; ?>">
            <br>
            
            <br>
            <!-- Add more input fields for other columns in the "employee" table as needed -->
            <input type="hidden" name="employeeno" value="<?php echo htmlspecialchars($selectedEmployeeNo); ?>">
            <input type="submit" name="update" value="Update">
        </form>
    <?php } ?>

    <?php if ($errorMessage) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>
</body>
</html>