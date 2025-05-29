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
<div class="link">
    <nav>
        <a href="newinsert.php">INSERT</a>|
        <a href="newsearch.php">SEARCH JOBS</a>|
</nav>
</div>
<br><br>
<div class="insert-container">
   <form action="" method="post">

DESIGNATION
    <input type="text" name="designation"class="formbar" ><br><br>
    
    CITY
    <input type="text" name="city" class="formbar"><br><br>

    <input type="submit" name="insert" class="accept" value="search"><br>
</div>
    <?php

    if(isset($_POST['insert']))
    {
       

        $dbcon=mysqli_connect("localhost","root","","akhil123");

        $desig=$_POST['designation'];
        $city=$_POST['city'];

        
        $sql="select * from jobs where jobname='$desig' && city='$city'";

        $data=mysqli_query($dbcon,$sql);

        if($data)
        {

        $total=mysqli_num_rows($data);

        if($total>0)
        {
            echo"<table border=1 align=center>";
            echo"<tr>";
            echo"<th  class=yoyo>DESIGNATION</TH>";
            echo"<th>CITY</TH>";
            echo"<th class=yoyo>SALARY</TH>";
            echo"</tr>";

            while($r=mysqli_fetch_array($data))
            {
                echo"<tr>";
                echo"<td  class=yoyo>".$r['jobname']."</td>";
                echo"<td>".$r['city']."</td>";
                echo"<td class=yoyo>".$r['salary']."</td>";
                echo"</tr><br>";
                
            }
            echo"</table>";

        }
        else
        {
            echo"<br>no jobs found";
        }

        }
        
        else
        {
            echo"not connected to database";
        }
    }
     ?>   
</body>
</html>