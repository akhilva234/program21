<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <?php
         $dbcon=mysqli_connect("localhost","root","","akhil123");

         $eid=$_SESSION['emid'];

         $sql="select * from employee where empid=$eid";
         
         $data=mysqli_query($dbcon,$sql);

         echo"<br><br>";
         echo"<table border=1 align=center>";
         echo"<tr>";
         echo"<th>EMPLOYEE ID</TH>";
         echo"<th>EMPLOYEE NAME</TH>";
         echo"<th>DESIGNATION</TH>";
         echo"<th>SALARY</TH>";
         echo"</tr>";
 
         while($r=mysqli_fetch_array($data))
         {
             echo"<tr>";
             echo"<td>".$r['empid']."</td>";
             echo"<td>".$r['empname']."</td>";
             echo"<td>".$r['destination']."</td>";
             echo"<td>".$r['salary']."</td>";
             echo"</tr><br>";
 
         }
         echo"</table>";
         ?>
</body>
</html>