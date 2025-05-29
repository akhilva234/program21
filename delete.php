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
    <?php
        session_start();
        $eid=$_SESSION['emid'];
        $dbcon=mysqli_connect("localhost","root","","akhil123");

        require'displaysingle.php';

        $sql="delete from employee where empid=$eid";

        $data=mysqli_query($dbcon,$sql);

        if($data)
        {
            echo"record deleted";
        }
        else
        {
            echo"record deletion failed";
        }
    ?>    
</body>
</html>