<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainform.css">
</head>
<body>

<div>
    <h3>Welcome Admin :)</h3>
    <a href="admindashboard.php">
    <input type="text" name="back" value="BACK" style="background: blue; color: white;
    height: 35px; width: 100px; margin-top: 20px; font-size:18px; border: 0; border-radius:
    5px;cursor:pointer;text-align:center;"></a>
</div>
    <hr>
    <!-- <ul>
        <li>
            <a href="" class="active"></a>
        </li>
        <li>
            <a href="#" ></a>
        </li>
        <li>
            <a href="" class="active"></a>
        </li>
    </ul> -->
<!-- </body>
</html> -->

<!--including connection and for selection-->
<?php
    include('connection.php');

    
    error_reporting(0);

    $user_profile=$_SESSION['user_name'];

    if($user_profile == true)
    {

    }else{
        header('location:login.php');
    }
    
   
    $select="select * from formdata";
    $run=$conn->query($select);
    ?>
    <table border="5px" width="100%" cellspacing="7">
       
            <caption><h1>Student Record</h1></caption>
            <tr bgcolor="Yellow">
            <th width="7%">Id</th>
            <th width="7%">Name</th>
            <th width="7%">Father Name</th>
            <th width="7%">Mother Name</th>
            <th width="7%">Email</th>
            
            <th width="7%">Course</th>
           
            <th width="7%">State</th>
            <th width="7%">District</th>
            <th width="7%">Address</th>
            <th width="7%">Qualification</th>
            <th width="7%">Institute</th>
            
            <th width="7%">Percent</th>
            

            <th width="7%">Update Action</th>
            <th width="7%">Delete Action</th>
            
            
           

        </tr>
        <!-- the below query used for fetching the data-->
        <?php

        while($record=mysqli_fetch_array($run)) {
        ?>
        <tr bgcolor="white">
            <td> <?php echo $record['id'];?> </td>
            <td><?php echo $record['name'];?></td>
            <td><?php echo $record['fname'];?></td>
            <td><?php echo $record['mname'];?></td>
            <td><?php echo $record['email'];?></td>
            
            <td><?php echo $record['gender'];?></td>
            
            <td><?php echo $record['state'];?></td>
            <td><?php echo $record['district'];?></td>
            <td><?php echo $record['address'];?></td>
            <td><?php echo $record['qualification'];?></td>
            <td><?php echo $record['institute'];?></td>
            <td><?php echo $record['percent'];?></td>

    <?php echo "
    <td> <a href='update_design_form.php?id=$record[id]'>  <input type='submit' value='UPDATE' class='update'></a> "?></td>
           
     <?php echo "
   <td> <a href='delete.php?id=$record[id]'>  <input type='submit' value='DELETE' class='delete' onclick='return checkdelete()
   '></a>  "?></td>
                  


        </tr>

        <?php }?>


    </table>

    
    <script>
        function checkdelete()
        {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
</body>
</html>