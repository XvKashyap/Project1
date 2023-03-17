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
    

$select="select * from formdata where id='$id'";
    $run=$conn->query($select);
    
    $record=mysqli_fetch_array($run); 
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
   
<div class="update">
            <div class="title">
                UPDATE FORM
            </div>
    <div class="update_form">
<form name="f1" action="#" method="POST">
  
        Name:  <br> 
       <input type="text" name="name" autocomplete="off" required value="<?php echo $record['name'];?>"><br><br>
        Father's Name: 
        <br>
        <input type="text" name="fname"   autocomplete="off" required value="<?php echo $record['fname'];?>"><br><br>
    
         Mother's Name: 
         <br>
        <input type="text" name="mname" autocomplete="off"  required value="<?php echo $record['mname'];?>"><br><br>
         Email: 
         <br>
         <input type="email" name="email" autocomplete="off"  required value="<?php echo $record['email'];?>"><br><br>
       

      

        <label>Course</label>
        <br>
        <select name="gender"  required value="<?php echo $record['gender'];?>">
        <option value="">SELECT</option>

            <option value="BCA"
                <?php 
                if($record['gender'] == 'BCA')
                {
                    echo "selected";
                }
                ?>
            >
                BCA</option>
            <option value="BBA"<?php 
                if($record['gender'] == 'BBA')
                {
                    echo "selected";
                }
                ?>
                >
                BBA</option>
            <option value="B.COM"<?php 
                if($record['gender'] == 'B.COM')
                {
                    echo "selected";
                }
                ?>>
                
            B.COM</option>

            <option value="MCA"<?php 
                if($record['gender'] == 'MCA')
                {
                    echo "selected";
                }
                ?>>
                
            MCA</option>

            <option value="MBA"<?php 
                if($record['gender'] == 'MBA')
                {
                    echo "selected";
                }
                ?>>
                
            MBA</option>

            <option value="M.COM"<?php 
                if($record['gender'] == 'M.COM')
                {
                    echo "selected";
                }
                ?>>
                
            M.COM</option>
            

        </select>
        <br><br>

        State: 
        
        <br><input type="text" name="state"  autocomplete="off" required value="<?php echo $record['state'];?>"><br><br>

        District: 
       <br><input type="text" name="district"  autocomplete="off" required value="<?php echo $record['district'];?>"><br><br>

        
        Address: <br> <textarea name="address" autocomplete="off"  required>
        <?php echo $record['address'];?></textarea><br> <br>
        

        Academic Qualification: <br>
        
            <input type="radio" name=qualification   value="HighSchool" required

            <?php 
                if($record['qualification'] == "HighSchool")
                {
                    echo "checked";
                }
                ?>
            >
            <label>HighSchool</label>
            <input type="radio" name=qualification value="HigherSchool" required
            <?php 
                if($record['qualification'] == "HigherSchool")
                {
                    echo "checked";
                }
                ?>
            >
            <label>HigherSchool</label>
            <input type="radio" name=qualification value="Graduation" required
            <?php 
                if($record['qualification'] == "Graduation")
                {
                    echo "checked";
                }
                ?>
            >
            <label>Graduation(Bachelor)</label>
     

       <br><br> Name of the School/College (last attended): <br>  <input type="text" name="institute" 
       autocomplete="off" required value="<?php echo $record['institute'];?>">

       <br><br> Percentage:
       <br> <input type="text" name="percent" autocomplete="off"  required value="<?php echo $record['percent'];?>">
            </div>

      
        
        
        




        
        <center><input type="submit" name="update" value="UPDATE" class="btn"><br><br></center>
            
            

        <?php

if(isset($_POST['update'])){
    
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $institute = $_POST['institute'];
    $percent = $_POST['percent'];
    
  
    
   
  


    $query = "UPDATE formdata set name='$name',fname='$fname',mname='$mname',email='$email',
    gender='$gender',state='$state',district='$district',address='$address',qualification='$qualification',institute='$institute',
    percent='$percent' where id='$id'";

    $data = mysqli_query($conn,$query);

    if($data){
        header('location:display.php?msg=updated');
        exit();
    
    }else{
        header('location:display.php?msg=failedupdate');
    }
    
    }

?>


</form>    
</pre>

</body>
</html>
 
