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


        $dbcon=mysqli_connect("localhost","root","","akhil123");

        $sql="select * from newies";

        $data=mysqli_query($dbcon,$sql);

        if($data)
        {

        $total=mysqli_num_rows($data);

        if($total>0)
        {
            echo"<table border=1 align=center>";
            echo"<tr>";
            echo"<th>EMPLOYEE NAME</TH>";
            echo"<th  class=yoyo>DESIGNATION</TH>";
            echo"<th>CITY</th>";
            echo"<th>SALARY</TH>";
            echo"</tr>";

            while($r=mysqli_fetch_array($data))
            {
                echo"<tr>";
                echo"<td>".$r['newname']."</td>";
                echo"<td  class=yoyo>".$r['newdesign']."</td>";
                echo"<td>".$r['newdesign']."</td>";
                echo"<td>".$r['salary']."</td>";
                echo"</tr><br>";
                
            }
            echo"</table>";

        }
        else
        {
            echo"no contents in the table";
        }

        }
        
        else
        {
            echo"not connected to database";
        }

     ?>   
</body>
</html>