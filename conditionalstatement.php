<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color: red;
            color: black;
            margin-left: 100px;
            margin-right: 100px;


        }
        body{
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1>this is a container</h1>
    <?php
    $age=35;
    if($age>15){//here conditional statement use
        
        echo"you can go to the party";
    }
else{
    echo"you cant go to the party";
}
    ?>    
</div>
</body>
</html>
