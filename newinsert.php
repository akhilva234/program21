<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<h1 class="heading">ONLINE JOB PORTAL</h1><br>

<h3>JOBSEEKER WINDOW</h3><br><br>

<div class="link">
    <nav>
        <a href="newinsert.php">REGISTER</a>|
        <a href="newsearch.php">SEARCH JOBS</a>|
</nav>
</div>
<br><br>
<div class="insert-container">
   <form action="" method="post">

     NAME
    <input type="text" name="emname"class="formbar" ><br><br>

DESIGNATION
    <input type="text" name="designation"class="formbar" ><br><br>
    
    CITY
    <input type="text" name="city" class="formbar"><br><br>

    EXP SALARY

    <input type="text" name="salary" class="formbar"><br><br>

    <input type="submit" name="insert" class="accept" value="Register"><br>
</div>
</form>
<?php
    if(isset($_POST['insert']))
    {
        $dbcon=mysqli_connect("localhost","root","","akhil123");

        $emname=$_POST['emname'];
        $desig=$_POST['designation'];
        $city=$_POST['city'];
        $salary=$_POST['salary'];

        $sql="insert into newies values('$emname','$city','$desig','$salary')";

        $data=mysqli_query($dbcon,$sql);

        if($data)
        {
            echo"<br>Registered successfully";

        }
        else
        {
            echo"insertion failed";

        }
    }

   ?> 


</body>
</html>