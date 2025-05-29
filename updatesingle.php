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
        EMPLOYEE NAME
    <input type=text name=emname  required class="formbar" >
    <input type=submit name=updatename value=update class="accept"><br><br>
</form>
<form>
    DESIGNATION
    <input type=text name=designation required class="formbar"> 
    <input type=submit name=updatedesig value=update class="accept"><br><br>
</form>

<form>
    SALARY
    <input type=number name=salary required class="formbar" >

    <input type=submit name=updatesal value=update class="accept" ><br><br>
</form>
    </form>
    <?php
        session_start();
        $dbcon=mysqli_connect("localhost","root","","akhil123");
        $eid=$_SESSION['emid'];
        if(isset($_POST['updatename']))
        {
            $newname=$_POST['emname'];

            $sql="update employee set empname='$newname' where empid=$eid";

            $data=mysqli_query($dbcon,$sql);
            {
                if($data)
                {
                    echo"record updated";

                    require'displaysingle.php';
                }
                else{
                    echo"failed to update record";
                }
            }
        }
        if(isset($_POST['updatedesig']))
        {
            $newdesig=$_POST['designation'];

            $sql="update employee set designation='$newdesig' where empid=$eid";

            $data=mysqli_query($dbcon,$sql);
            {
                if($data)
                {
                    echo"record updated";

                    require'displaysingle.php';
                }
                else{
                    echo"failed to update record";
                }
            }
        }
        if(isset($_POST['updatesal']))
        {
            $newsal=$_POST['salary'];

            $sql="update employee set salary='$newsal' where empid=$eid";

            $data=mysqli_query($dbcon,$sql);
            {
                if($data)
                {
                    echo"record updated";

                    require'displaysingle.php';
                }
                else{
                    echo"failed to update record";
                }
            }
        }
      ?>  
</body>
</html>