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
    <form action="" method="post">

    ENTER EMPLOYEE ID TO UPDATE DETAILS
    <input type="num" name="eid" class="formbar" >

    <input type="submit" name="submit" class="accept">

</form>  
<?php
    session_start();
    $dbcon=mysqli_connect("localhost","root","","akhil123");
if(isset($_POST['submit']))
{

    

    $eid=$_POST['eid'];

    $eidcheck="select empid from employee where empid=$eid";

    $check=mysqli_query($dbcon,$eidcheck);

    $rows=mysqli_num_rows($check);

    if($rows>0)
    {

        $_SESSION['emid']=$eid;


    //$data=mysqli_query($dbcon,$sql);

        echo"<br><br>";
        echo"employee found";
       
        require'displaysingle.php';  

        echo"<br><br>";
        
        echo"<a href=updatesingle.php>update the details</a>";

        echo"<br><br>";

        echo"<a href=delete.php>delete the record</a>";

    }
    else
    {
        echo"<br><br>";
        echo"invalid id";
    }
}
    ?>

</body>
</html>