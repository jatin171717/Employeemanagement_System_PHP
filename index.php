<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>jqhbdh</div>
    <?php echo" jatinkumar ";
    //echo is use for execute or print
    echo "<br>";
    //for comment line we use br
    $variable1=5;/*while creating a variable first we use $*/
    $variable2=6;

    define('pi',3.14);

    echo $variable1;
    echo"<br>"; 
    echo $variable2;
    echo"<br>";


    //Arithmatic operation
    echo"<h1>ARITHMATIC OPERATION</h1>";
    echo $variable1+$variable2;
    echo"<br>";
    //we can use also *,-,/,% also in the arithmatic operation


    //Assignment operation
    echo"<h1>ASSIGNMENT OPERATION</h1>";
    echo"assignment operation";
    echo"<br>";
    $var1=$variable1;
    echo"the value of new variable is ";
    echo $var1;
    echo"<br>";

    //comaprison operation
    echo"<h1>COMAPRISON OPERATOR</h1>";
    echo "the value of 1==4 is";
    echo var_dump(1==4);    
    echo "<br>";
    //var_dump means its identify the datatype and echo will show it in thr output side
    echo var_dump(1>=4);  
    echo "<br>";


    echo var_dump(1!=4);  
    echo "<br>";
    echo var_dump(1<=4);  
    echo "<br>";

    //increment operator
    echo"<h1>increment operator</h1>";

    echo $variable1++;//here first we print the variable then increment
    echo $variable1;//here the increment value print here;
    echo"<h1>logical operator</h1>";

    //and(&&)
    //or(||)
    //xor
    //!(not)
    //
    echo "<br>";
    $myvar=true and true;
    echo var_dump($myvar); 
    

    
    
    
    
?>
<?php
/*dataype of PHPlang 
1.integer
2.boolean
3.double
4.float
5.array
6.object
*/


?>

</body>
</html>