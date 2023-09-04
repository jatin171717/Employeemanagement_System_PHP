<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <img id="jack"src="images.png">
<h1><u>KANSHBAHAL L & T CORPORATION</u></h1>
    <img src="" alt="">


    <form action="project.php" method="post">
    <div class="main">
    <div  class="group">
        <label class="required">Employee Name :</label>
        <select id="x" name="gender">
            <option value ="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select>
        <input type="text" name="firstname" placeholder="first name">
        <input type="text"name="middlename" placeholder="middle name">
        <input type="text"name="lastname" placeholder="last name">
    </div>
</div>
<div class="both">
<div class="column1" >
    <div class="a" >
        <h3>Login Info</h3>


    
    <input id="input1" type="text" name="employeeno" placeholder="Employee no"><br>
    
    
    <input id="input1" type="password" name="password" placeholder="password"><br>

    
    <input id="input1" type="text" name="confirmpassword" placeholder="confirm password"><br>
    </div>

    

    
    <div class="z" style="padding-left: 100px; width: 400px;"  >
        <h3>Specific Info</h3>
        <div class="j1">
        <label class="info">department :</label>
        <select id="y" name="department">
            <option value ="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select></div>
        <div class="j2">
        <label class="info">catagory :</label>
        <select id="y" name="catagory">
            <option value ="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select></div>
        <div class="j3">
        <label class="info">grade :</label>
        <select id="y" name="grade">
            <option value ="Mr.">S1</option>
            <option value="Mrs.">S2</option>
            <option value="Mrs.">O1</option>
            <option value="Mrs.">O2</option>
            <option value="Mrs.">M1A</option>
            <option value="Mrs.">M1B</option>
            <option value="Mrs.">M1C</option>
            <option value="Mrs.">M2A</option>
            <option value="Mrs.">M2B</option>
        </select></div>
        <div class="j4">
        <label class="info">designation:</label>:</label>
        <select id="y" name="designation">
            <option value ="Mr.">Diploma engg Trainee </option>
            <option value="Mrs.">Graduate engg. Trainee</option>
            <option value ="Mr.">Graduate commercial Trainee </option>
            <option value ="Mr.">Engineer</option>
            <option value ="Mr.">Senior Engineer </option>
            <option value ="Mr.">Assistant Manager </option>
            <option value ="Mr.">Manager </option>
            <option value ="Mr.">Senior Manager </option>
        </select></div>
        <div class="j5">
        <label class="info">date of joining :</label>
        
        
            <input type="date" name="dateofjoining">
            
            
        </select>
        </div>
    <div class="j6">
    <label class="info">top level employee(L):</label>
    <input type="radio" id="yes" name="toplevelemployeeL" value="yes">
    <label for="html">yes</label>
    <input type="radio" id="css" name="toplevelemployeeL" value="no">
    <label for="css">no</label>
    </div>
    <div class="j10">
    <label class="info">top level employee(T):</label>
    <input type="radio" id="yes" name="toplevelemployeeT" value="yes">
    <label for="html">yes</label>
    <input type="radio" id="css" name="toplevelemployeeT" value="no">
    <label for="css">no</label>
    </div>
    
    <div class="j7">
    <label class="info">prolonged diseases:</label>
    <input type="radio" id="yes" name="prolongeddiseases" value="yes">
    <label for="html">yes</label>
    <input type="radio" id="css" name="prolongeddiseases" value="no">
    <label for="css">no</label>
    </div>
    <div class="j8">
    <label class="info">outstationedemployess:</label>
    <input type="radio" id="yes" name="outstationedemployess" value="yes">
    <label for="html">yes</label>
    <input type="radio" id="css" name="outstationedemployess" value="no">
    <label for="css">no</label>
    </div>
    <div class="j9">

    <label class="info">saturday leave allowed:</label>
    <input type="radio" id="yes" name="saturdayleaveallowed" value="yes">
    <label for="html">yes</label>
    <input type="radio" id="css" name="saturdayleaveallowed" value="no">
    <label for="css">no</label>
    </div>
    



    </div>
    <div class="pfinfo" style="padding-left: 100px; width: 400px;">
        <h3>PF Info</h3>
        <label for="pfno">PF NO:</label>
        <input id="pfno" type="text" name="pfno">
        <label for="epsno">EPS NO:</label>
        <input id="pfno"type="text" name="epsno">
        <label for="pfjoiningdate">PF joining date:</label>
        <input type="date" name="pfjoiningdate">
        <label for="epsjoiningdate">EPS joining date:</label>
        <input type="date" name="epsjoiningdate">
        <label for="pftrust">PF Trust:</label>
            <select name="pftrust" id="pfno">
                <option value="boi">boi</option>
                <option value="sts">sts</option>
                <option></option>
            </select>
        <label for="salarybankname">Salary Bank Name:</label>
            <select name="salarybankname" id="pfno">
                <option value="boi">boi</option>
                <option value="state bank of india">state bank of india</option>
                <option value="panjab national bank">punjab national bank</option>
            </select>
            <label for="salarybankaccountno">Salary Bank A/c No: </label>
            <input id="pfno"type="text" name="salarybankaccountno">
            <label for="erabankname">ERA Bank Name:</label>
            <select name="erabankname" id="pfno">
                <option value="boi">boi</option>
                <option value="state bank of india">state bank of india</option>
                <option value="panjab national bank">punjab national bank</option>
            </select>
            <label for="erabankaccountno">ERA Bank A/c No: </label>
            <input id="pfno"type="text" name="erabankaccountno">


        
    </div>
</div>

    <div class="contactinfo ">
        <h3 id="h">Contact Info</h3>
        <label id="s" for="emailid">Email id:</label>
        <input id= "s"type="Email" name="emailid"><br>
        <label id="s" for="address">Address:</label>
        <input id= "s"type="address" name="address"><br>
        <label id="s" for="phoneno">Phone(O):</label>
        <input id= "s"type="text" name="phoneno"><br>
        <label id="s" for="phoneno1">Phone(R):</label>
        <input id= "s"type="text" name="phoneno1"><br>
        <label id="s" for="phoneno2">Phone(M):</label>
        <input id= "s"type="text" name="phoneno2"><br>


    
</div>
<div class="personalinfo ">
    <h3 id="h">Personal Info</h3>
    <label id="j" for="qualification">qualification:</label>
    <input id= "k1"type="text" name="qualification"><br>
    <label id="j" for="areaofintrest">Address:</label>
    <textarea id= "k2"type="address" name="areaofintrest"></textarea><br>
    <label id="j" for="professionalmembership">Professionalmembership:</label>
    <textarea id= "k"type="text" name="professionalmembership"></textarea><br>
    <label id="j" for="dateofbirth">Date of Birth:</label>
    <input id= "k3"type="date" name="dateofbirth"><br>
    <label id="j" for="bloodgroup">Blood Group:</label>
    <input id= "k4"type="text" name="bloodgroup"><br>
    <label id="j" for="deactivationdate">Deactivation Date:</label>
    <input id= "k5"type="date" name="deactivationdate"><br>
    <label id="j" for="deactivationreason">Deactivation Reason:</label>
    <input id= "k"type="text" name="deactivationreason"><br>
    




</div>
<div class="otherinfo ">
    <h3 id="h">Contact Info</h3>
    <label id="s" for="fatherorhusbandname">Father/Husband Name:</label>
    <input id= "s"type="text" name="fatherorhusbandname"><br>
    <label id="s" for="panno">PAN NO:</label>
    <input id= "s"type="address" name="panno"><br>
    <label id="s" for="aadharno">Aadhar NO:</label>
    <input id= "s"type="text" name="aadharno"><br>
    <label id="s" for="voterno">Voter ID Card No:</label>
    <input id= "s"type="text" name="voterno"><br>



</div>





<div id="xyz">
<button type="submit" name="submit">submit</button>
<input type="reset" >
</div>

    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $gender=$_POST["gender"];
        $firstname=$_POST["firstname"];
        $middlename=$_POST["middlename"];
        $lastname=$_POST["lastname"];
        $employeeno=$_POST["employeeno"];
        $password=$_POST["password"];
        $confirmpassword=$_POST["confirmpassword"];
        $department=$_POST["department"];
        $catagory=$_POST["catagory"];
        $grade=$_POST["grade"];
        $designation=$_POST["designation"];
        $dateofjoining=$_POST["dateofjoining"];
        $toplevelemployeeL=$_POST["toplevelemployeeL"];
        $toplevelemployeeT=$_POST["toplevelemployeeT"];
        $prolongeddiseases=$_POST["prolongeddiseases"];
        $outstationedemployess=$_POST["outstationedemployess"];
        $saturdayleaveallowed=$_POST["saturdayleaveallowed"];
        $pfno=$_POST["pfno"];
        $epsno=$_POST["epsno"];
        $pfjoiningdate=$_POST["pfjoiningdate"];
        $epsjoiningdate=$_POST["epsjoiningdate"];
        $pftrust=$_POST["pftrust"];
        $salarybankname=$_POST["salarybankname"];
        $salarybankaccountno=$_POST["salarybankaccountno"];
        $erabankname=$_POST["erabankname"];
        $erabankaccountno=$_POST["erabankaccountno"];
        $emailid=$_POST["emailid"];
        $address=$_POST["address"];
        $phoneno=$_POST["phoneno"];
        $phoneno1=$_POST["phoneno1"];
        $phoneno2=$_POST["phoneno2"];
        $qualification=$_POST["qualification"];
        $areaofintrest=$_POST["areaofintrest"];
        $professionalmembership=$_POST["professionalmembership"];
        $dateofbirth=$_POST["dateofbirth"];
        $bloodgroup=$_POST["bloodgroup"];
        $deactivationdate=$_POST["deactivationdate"];
        $deactivationreason=$_POST["deactivationreason"];
    
        $fatherorhusbandname=$_POST["fatherorhusbandname"];
        $panno=$_POST["panno"];
        $aadharno=$_POST["aadharno"];
        $voterno=$_POST["voterno"];
        $passwordhash=password_hash($password,PASSWORD_DEFAULT);
        $passwordhash1=password_hash($confirmpassword,PASSWORD_DEFAULT);
    
        $errors=array();
        if(empty($gender) or empty($firstname) or empty($lastname) or empty($employeeno) or empty($password) or empty($confirmpassword) or empty($department) or empty($catagory) or empty($grade) or empty($designation) or empty($pfjoiningdate) or empty($epsjoiningdate) or empty($pftrust) or empty($emailid) or  empty($fatherorhusbandname)){
            array_push($errors,"All *  feilds are required");
        }
        if(!filter_var($emailid,FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Email is not Valid");
        }
        if(strlen($password)<5){
            array_push($errors,"password must be atleast 5 character long");
        }
        if($password!=$confirmpassword){
            array_push($errors,"Password doesnot match");
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo"<div class='alert alert-danger'>$error</div>"; 
            }
        }
        else{
            require_once "database.php";
            $sql="INSERT INTO employee (gender, firstname, middlename, lastname, employeeno, password, department, catagory, grade, designation, dateofjoining, toplevelemployeeL, toplevelemployeeT, prolongeddiseases, outstationedemployess, saturdayleaveallowed, pfno, epsno, pfjoiningdate, epsjoiningdate, pftrust, salarybankname, salarybankaccountno, erabankname, erabankaccountno, emailid, address, phoneno, phoneno1, phoneno2, qualification, areaofintrest, professionalmembership, dateofbirth, bloodgroup, deactivationdate, deactivationreason, fatherorhusbandname, panno, aadharno, voterno) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt=mysqli_stmt_init($conn);
            $preparestmt=mysqli_stmt_prepare($stmt,$sql);
            if($preparestmt){
                mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssssssiiisssssssssis",$gender,$firstname,$middlename,$lastname,$employeeno,$passwordhash,$department,$catagory,$grade,$designation,$dateofjoining,$toplevelemployeeL,$toplevelemployeeT,$prolongeddiseases,$outstationedemployess,$saturdayleaveallowed,$pfno,$epsno,$pfjoiningdate,$epsjoiningdate,$pftrust,$salarybankname,$salarybankaccountno,$erabankname,$erabankaccountno,$emailid,$address,$phoneno,$phoneno1,$phoneno2,$qualification,$areaofintrest,$professionalmembership,$dateofbirth,$bloodgroup,$deactivationdate,$deactivationreason,$fatherorhusbandname,$panno,$aadharno,$voterno);
                mysqli_stmt_execute($stmt);
                echo"<div class='alert alert-success'>you are registered successfully.</div>";

            }
            else{
                die("something went wrong");
            }

        }
        
        

        
    }
    ?>