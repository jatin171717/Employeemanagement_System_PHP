<?php
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="employeedata";

$conn=mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("something went wrong");
}

?>