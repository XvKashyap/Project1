

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
    <div>
   
    <a href="admindashboard.php">
    <input type="text" name="back" value="BACK" style="background: blue; color: white;
    height: 35px; width: 100px; margin-top: 20px; font-size:18px; border: 0; border-radius:
    5px;cursor:pointer;text-align:center;"></a>
</div>
    
    
<?php
include('connection.php');
error_reporting(0);


$select="select * from course";
$run=$conn->query($select);
?>
<table border="5px" width="75%" cellspacing="7" align="center">
       
       <caption><h1>List Of Courses</h1></caption>
       <tr bgcolor="Yellow">
       
       <th width="10%">Course Id</th>
       <th width="7">Course Name</th>

       <th width="10%">Duration</th>
       <th width="10%">Semester Fees</th>
       <th width="15%">Total fees</th>
       <th width="5%" >Update Action</th>
       <th width="5%">Delete Action</th>
</tr>
<?php

while($record=mysqli_fetch_array($run)) {
?>
<tr bgcolor="white">
    <td><?php echo $record['id'];?></td>
    
    <td><?php echo $record['course_name'];?></td>
    <td><?php echo $record['duration'];?></td>
    <td><?php echo $record['sem_fees'];?></td>
    <td><?php echo $record['total_fees'];?></td>
   

    <?php echo "
    <td> <a href='update_course.php?id=$record[id]'>  <input type='submit' value='UPDATE' class='update'></a> "?></td>
           
     <?php echo "
   <td> <a href='delete_course.php?id=$record[id]'>  <input type='submit' value='DELETE' class='delete' onclick='return checkdelete()
   '></a>  "?></td>

   <!-- internal css -->
   <style>
                 .update,.delete{ background-color:green;
                           color: white;
                            border: 0;
                            outline: none;
                            border-radius: 5px;
                            height: 22px;
                            width: 80px;
                            font-weight: bold;
                            cursor: pointer;}

                 .delete{
                           background-color:red;
    
                       }

    </style>

    <!-- internal css end -->               

</tr>
<?php }?>

<div>
   
   <a href="addcourse.php">
   <input type="text" name="back" value="ADD NEW" style="background: green; color: white;
   height: 35px; width: 100px; margin-top: 20px; font-size:18px; border: 0; border-radius:
   5px;cursor:pointer;text-align:center;"></a>
</div>


</div>
</table>
<script>
        function checkdelete()
        {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
    
</body>
</html>


