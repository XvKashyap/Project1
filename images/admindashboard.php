<?php
   
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="admindash.css">
</head>
<body>

<?php
    include('connection.php');

    
    error_reporting(0);

    $user_profile=$_SESSION['user_name'];

    if($user_profile == true)
    {

    }else{
        header('location:login.php');
    }
    ?>
<h1>THIS IS ADMIN HOME PAGE</h1>


    <header class="header">
        <a href="">ADMIN DASHBOARD</a>
        <div class="logout">
        <a href="logout.php" class=" btn btn-primary">LOGOUT</a>
        <div>
    </header>

    <aside>
    <ul>
        <li>
            <a href="display.php">MANAGE STUDENT</a>
        </li>
       
        <li>
            <a href="courses.php">MANAGE COURSE AND FEES</a>
        </li>
        


    </ul>

    </aside>

    <div class="content">
        <h1>WELCOME ADMIN</h1>
            <p><b>Have a great Day ahead :)</b></p>
            <img src="./photo3.jpg" alt="">

    </div>


    
</body>
</html>

