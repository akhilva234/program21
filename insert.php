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

<h3>JOBPROVIDER WINDOW</h3><br><br>
<div class="link">
    <nav>
        <a href="insert.php">INSERT</a>|
        <a href="display.php">DISPLAY REGISTERS</a>|
         <a href="addjob.php">ADD JOB</a>|
        <a href="update.php">SEARCH&UPDATE</a>
</nav>
</div>
<br><br>
<div class="insert-container">
   <form action="" method="post">

    EMPLOYEE ID
    <input type="text" name="emid" class="formbar"><br><br>
    EMPLOYEE NAME
    <input type="text" name="emname"class="formbar" ><br><br>

    DESIGNATION
    <input type="text" name="designation"class="formbar" ><br><br>

    SALARY

    <input type="number" name="salary" class="formbar"><br><br>

    <input type="submit" name="insert" class="accept"><br>
</div>
</form>
<?php
    if(isset($_POST['insert']))
    {
        $dbcon=mysqli_connect("localhost","root","","akhil123");

        $emid=$_POST['emid'];
        $emname=$_POST['emname'];
        $desig=$_POST['designation'];
        $salary=$_POST['salary'];

        $sql="insert into employee values($emid,'$emname','$desig',$salary)";

        $data=mysqli_query($dbcon,$sql);

        if($data)
        {
            echo"record inserted";

        }
        else
        {
            echo"insertion failed";

        }
    }

   ?> 


</body>
</html>