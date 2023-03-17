<?php
    include('connection.php');
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Course</h2>
  <form action="" method="POST">

    
    <div class="form-group">
      <label for="">Course_Name:</label>
      <input type="text" class="form-control"  name="course_name">
    </div>
    <div class="form-group">
      <label for="">Duration:</label>
      <input type="text" class="form-control"  name="duration">
    </div>
    <div class="form-group">
      <label for="">Semester Fees:</label>
      <input type="text" class="form-control"  name="sem_fees">
    </div>
    <div class="form-group">
      <label for="">Total Fees:</label>
      <input type="text" class="form-control"  name="total_fees">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
<br><br>
<center>
  	<a href="courses.php" class="btn" input type="text" style="background:  #5F9EA0; color: white;
    margin-top: 20px; font-size:18px; border: 0;
    cursor:pointer; text-decoration:none;">CLOSE
  	</a>
</center>


</body>
</html>

<?php
error_reporting(0);

if(isset($_POST['submit'])){
 
  
    $cname = $_POST['course_name'];
    $cduration = $_POST['duration'];
    $semfees = $_POST['sem_fees'];
    $tfees = $_POST['total_fees'];

    $select="select * from course where course_name= '$cname'";
    $data_select=mysqli_query($conn,$select);

    $number=mysqli_num_rows($data_select);

    if($number>0){
      echo "<script>alert('Course Is Already Present')</script>";
  }else{

    
    $query = "INSERT INTO course (id,course_name,duration,sem_fees,total_fees)
    VALUES ('$id','$cname','$cduration','$semfees','$tfees')";
    
    $data = mysqli_query($conn,$query);

     if($data){
         echo "<script>alert('Successfully Added')</script>";
     }
     
}}
?>  
