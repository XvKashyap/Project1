<?php 

error_reporting(0);

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="login.css">
 
</head>
<body>

  
  
      <div class="header">
    <form action="#" method="POST" autocomplete="off">
  	<h2>Login</h2>
  </div>
	 <div class="form">
  
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="btn">
  		<input type="submit" class="btn" name="login" value="LOGIN">
  	</div>
</div>
<br>
<br>
  	

<center><div class="home">
  	<a href="index.php"	<input type="text" style="background:  #5F9EA0; color: white;
    margin-top: 20px; font-size:18px; border: 0;
    cursor:pointer; text-decoration:none;">BACK HOME
  	</div></a>
</div></center>

  </form>
</body>
</html>

<?php
    include("connection.php");
  

   
    
    if(isset($_POST['login'])){
       $username = $_POST['username'];
       $password = $_POST['password'];

       $query="SELECT * FROM admin  where
        username='$username' && password='$password' ";
        $data=mysqli_query($conn,$query);

        $total=mysqli_num_rows($data);
       if($total == 1)
       {
          $_SESSION['user_name']=$username;
          header('location:admindashboard.php');
       }else{
        echo "Login Failed";
       }
    }

   
      
      
      

    
?>