<?php
include "connection.php";
error_reporting(0);

session_start();

$id= $_GET['id'];

$user_profile=$_SESSION['user_name'];

    if($user_profile == true)
    {

    }else{
        header('location:login.php');
    }
    

$select="select * from course where id='$id'";
    $run=$conn->query($select);
    
    $record=mysqli_fetch_array($run); 
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    
</head>
<body>
   
<div class="container">
  <h2>UPDATE COURSE</h2>
  
  <form action="" method="POST">

    
    <div class="form-group">
      <label for="">Course_Name:</label>
      <input type="text" class="form-control"  name="course_name"  value="<?php echo $record['course_name'];?>">
    </div>
    <div class="form-group">
      <label for="">Duration:</label>
      <input type="text" class="form-control"  name="duration"  value="<?php echo $record['duration'];?>">
    </div>
    <div class="form-group">
      <label for="">Semester Fees:</label>
      <input type="text" class="form-control"  name="sem_fees"  value="<?php echo $record['sem_fees'];?>">
    </div>
    <div class="form-group">
      <label for="">Total Fees:</label>
      <input type="text" class="form-control"  name="total_fees"  value="<?php echo $record['total_fees'];?>">
    </div>
    
    <input type="submit" class="btn btn-primary" name="update" value="UPDATE"></button>
  </form>
</div>


</body>
</html>


        
       
            
            

        <?php

if(isset($_POST['update'])){
    
   
    $cname = $_POST['course_name'];
    $cduration = $_POST['duration'];
    $semfees = $_POST['sem_fees'];
    $tfees = $_POST['total_fees'];
    
    
  
    
   
  


    $query = "UPDATE course set course_name='$cname',duration='$cduration',sem_fees='$semfees',total_fees='$tfees' where id='$id'";

    $data = mysqli_query($conn,$query);

    if($data){
        header('location:courses.php?msg=updated');
        exit();
    
    }else{
        header('location:courses.php?msg=failedupdate');
    }
    
    }

?>


</form>    
</pre>

</body>
</html>
 
