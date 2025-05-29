<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emp.com</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h1 class="heading">ONLINE JOB PORTAL</h1><br>
    <div class="login-container">
    <h2>Select Your Role</h2>
        <FORM action="" method="post">

            <select name="role" id="role" required>
            <option value="" disabled selected>Select an option</option>
            <option value="jobseeker">Jobseeker</option>
            <option value="jobprovider">Jobprovider</option>
        </select>
        <br><br>
            <input type="submit"  name="login" value="login" class="login"><br><br>
        </FORM>
    </div>
        <?php

         
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $role = $_POST['role'];

            if ($role === "jobseeker") {
                
                header("Location: newinsert.php");
                exit();
            } elseif ($role === "jobprovider") {
               
                 header("Location: insert.php");
                 exit();
            } else {
                echo "Invalid selection.";
            }
        }

         ?>   
</body>
</html>