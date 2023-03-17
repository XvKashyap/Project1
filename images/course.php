


<!DOCTYPE html>
<html lang="en">
<head>
  <title>College Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="carousel.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="image.css">
 
 
    
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">NORTHEAST COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="course.php">COURSE</a>
      </li>
      
     
      <li class="nav-item">
        <a class="nav-link" href="form.php">REGISTRATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"> ADMIN LOGIN</a>
      </li>

     
      
      
    </ul>
    
  </div>
</nav>

<?php
include "connection.php";
error_reporting(0);

$select="select * from course";
$run=$conn->query($select);
?>
<table border="5px" width="75%">
       
       <h1>Available Courses with Fees Details</h1>
       <br><br>
       <tr bgcolor="Yellow">
       
      <th width="10%">Course Id</th>
       <th width="7">Course Name</th>

       <th width="10%">Duration</th>
       <th width="10%">Semester Fees</th>
       <th width="15%">Total fees</th>
       <th width="10%" >CLICK APPLY</th>
       
<?php

while($record=mysqli_fetch_array($run)) {
?>
<tr bgcolor="white">
     <b><td><?php echo $record['id'];?></td>
    
    <td><?php echo $record['course_name'];?></td>
    <td><?php echo $record['duration'];?></td>
    <td><?php echo $record['sem_fees'];?></td>
    <td><?php echo $record['total_fees'];?></td>
    <td>
        <a href="form.php">Apply for Course</a>
    </td>
    
</tr>
<?php }?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
  <p class="p-3 bg-dark text-white text-center">@NorthEast | 2022 | All Right Reserved</p>
</footer> 

</body>
</html>
