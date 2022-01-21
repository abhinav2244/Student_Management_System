<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Student Management System</h1><br><br><br>
        <form action="" method="post">
            <button type="submit" name="admin-login">Admin Login</button>
            <button type="submit" name="student-login">Student Login</button>
        </form>
        <?php
            if(isset($_POST['admin-login']))
            {
                header("Location: admin-login.php");
            }
            else if(isset($_POST['student-login']))
            {
                header("Location: student-login.php");
            }
            
        ?>
    </center>
</body>
</html>