<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainform.css">
    <title>Form</title>
</head>
<body>
        <div class="mainform">
            <div class="title">
                REGISTRATION FORM
            </div>
            <div class="form">
            <form name="f1" action="#" class="input" method="POST">
                <div class="input_field">
                    <label>Name </label>
                    <input type="text" class="input" name="name" required autocomplete="off">

                </div>
               
                <div class="input_field">
                    <label>Father's Name </label>
                    <input type="text" class="input" name="fname"  required autocomplete="off">

                </div>

                <div class="input_field">
                    <label> Mother's Name </label>
                    <input type="text" class="input" name="mname"  required autocomplete="off">

                </div>
                
                <div class="input_field">
                    <label> Email </label>
                    <input type="text" class="input" name="email"  required autocomplete>

                </div>

                
                <div class="input_field">
                    <label> Course</label>
                    <select name="gender" class="selectbox" required>
                        
                        <option value="">SELECT</option>
            
                         <option value="BCA">BCA</option>
                           
                          
                            <option value="BBA">BBA</option>
                            <option value="B.COM">B.COM</option>
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="M.COM">M.COM</option>
                          
                             

                    </select>

                </div> 
                <div class="input_field">
                    <label>State </label>
                    <input type="text" class="input" name="state"  required>

                </div>
                <div class="input_field">
                    <label> District </label>
                    <input type="text" class="input" name="district"  required>

                </div>
                <div class="input_field">
                    <label> Address </label>
                   <textarea class="textarea" name="address"  required></textarea>

                </div>

                <div class="input_field">
                    <label>Academic Qualification</label>
            <input type="radio" name=qualification  value="HighSchool" required><label>HighSchool</label>
            <input type="radio" name=qualification value="HigherSchool" required><label>HigherSchool</label>
            <input type="radio" name=qualification value="Graduation" required><label>Graduation(Bachelor)</label>
                </div>

                <div class="input_field">
                    <label>Name of the School/College </label>
                    <input type="text" name="institute" class="input" required>
                  
                </div>

                <div class="input_field">
                
                <label>
                Percentage</label>
                 <input type="text" name="percent" class="input" required>
    
            </div>

            <div class="input_field"> 
            <input type="submit" name="submit" value="REGISTER" class="btn"><br>
</div>






            </div>
        </div>
        <center>
  	<a href="index.php"	<input type="text" style="background:  #5F9EA0; color: white;
    margin-top: 20px; font-size:18px; border: 0;
    cursor:pointer; text-decoration:none;">BACK HOME
  	</a>
</center>

    
</body>
</html>

<!-- insertion -->

<?php

if(isset($_POST['submit'])){
    
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
    
  
    
   
  


    $query = "INSERT INTO formdata (id,name,fname,mname,email,gender,state,district,address,qualification,institute,percent)
VALUES ('$id','$name','$fname','$mname','$email',
    '$gender','$state','$district','$address','$qualification','$institute','$percent')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Thanks for registering! We will get back to you soon')</script>";
    }
    else
    {
        echo "<script>alert('Failed')</script>";
    }
}
?>