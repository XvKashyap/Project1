<?php
include("connection.php");
?>

 <!DOCTYPE html>
<html>
<head>
   
    <title>Document</title>
   
</head>
<body>
        <pre>
        <form name="f1" action="#" method="POST">
         
                    <label>Full Name</label>
                    <input type="text" class="input" name="name">
        
                    <label>Father's Name</label>
                    <input type="text" class="input" name="fname" >
                
                    <label>Email Id</label>
                    <input type="email" class="input" name="email">

        
                    <label>Date of Birth</label>
                    <input type="date" class="input" name="date">


                    <label>Mobile Number</label>
                    <input type="text" class="input" name="mobile">
    

                    
    
                    <label>Gender</label>
                    <select class="selectbox" name="gender">
                        <option value="Not Selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option>Others</option>
                    </select>
            

                
                    <label>Course Applied For</label>
                    <select name="course">
                        <option>BCA</option>
                        <option>BBA</option>
                        <option>B.Sc</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                        <option>MCA</option>
                        <option>MBA</option>
                        
</select>
             
                
                    
                    <label>Select State</label>
                    <select name="state">
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chattisgarh</option>
                        <option>Goa</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttarkhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                        
                    </select>
                    
            
                   
                
 
                 
                 
                
                    <input type="submit" value="Register" name="register">
                
</pre>
        
</form>

</body>
</html> 

<?php
    if(isset($_POST['register']))
    {
       $name= $_POST['name'];
       $fname= $_POST['fname'];
    
       $email= $_POST['email'];
       $date= $_POST['date'];
       $mobile= $_POST['mobile'];
        
       
       $gender= $_POST['gender'];
       
       $course = $_POST['course'];
       $state= $_POST['state'];
        
       $sql = "INSERT INTO student VALUES('$name','$fname','$email','$date','$mobile','$gender','$course','$state')"; 

       $data=mysqli_query($conn,$sql);

       if(($data))

       {
        echo "Data Inserted";

       }else{
        echo "<script>alert('failed');</script>";
       }
      
    }
?>