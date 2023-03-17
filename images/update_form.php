
<?php
include('connection.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select=mysqli_query($db,"select * from student where id='$id'");
    $data=mysqli_fetch_array($select);

    


    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
</head>
<body>
    <div class="container">
        <form id="contact" action="update_form.php" method="post">
            <h1> Update Registration Form</h1>
            <h3>Fill the form below and press the submit button!</h3>
            <div class="row">
                <!-- first column -->
                <div class="column">                        
                    <fieldset>
                        <input type="text" placeholder="Full Name *" name="name" autofocus="true"  value="<?php echo $data['name']; ?>">
                        
                    </fieldset>
                    <fieldset>
                        <input type="text" placeholder="Father name *" name="fname" value="<?php echo $data['fname'];?>" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input type="email" placeholder="Your email *" name="email"  value="<?php echo $data['email'];?>"required autofocus>
                    </fieldset>
                    <fieldset>
                        <input type="text" placeholder="Date of birth *" name="date" onfocus="(this.type = 'date')"  
                        value="<?php echo $data['date'];?>" required autofocus>
                    </fieldset>
                    <!-- adding all country code list -->
                    <fieldset>
                        <input type="text" placeholder="Phone number *" name="phone" id="phone"  value="<?php echo $data['phone'];?>" required autofocus>
                    </fieldset>
                </div>
                <!-- second column -->
                <div class="column">
                    
 
                   <label>   
                           Gender :  
                   </label>  
                           <select name="gender" > 
                             
                           <option value="">Select</option>   
                           <option value="MALE"
                                <?php
                                if($data['gender']=='MALE')
                                {
                                    echo "selected";
                                }
                                ?>
                           >MALE</option>  
                           <option value="FEMALE"
                           <?php
                                if($data['gender']=='FEMALE')
                                {
                                    echo "selected";
                                }
                                ?>
                           >FEMALE</option>  
                           <option value="TRANSGENDER">TRANSGENDER</option>  
                           <option value="OTHER">OTHER</option>  
                           
                           </select>  
                       
                   </fieldset>
                       
                    </fieldset>
                    <fieldset>
                   
                    <br>
                    <label>   
                            Course :  
                    </label>  
                            <select name="course"  value="<?php echo $data['course'];?>">  
                             
                            <option value="BCA">BCA</option>  
                            <option value="BBA">BBA</option>  
                            <option value="B.Tech">B.Tech</option>  
                            <option value="MBA">MBA</option>  
                            <option value="MCA">MCA</option>  
                            <option value="M.Tech">M.Tech</option>  
                            </select>  
                        
                    </fieldset>
                    <fieldset>
                   
 
                   <label>   
                           Select State:  
                   </label>  
                           <select name="state" value="<?php echo $data['state'];?>">  
                            
                           <option value="ASSAM">ASSAM</option>  
                           <option value="MIZORAM">MIZORAM</option>  
                           <option value="MANIPUR">MANIPUR</option>  
                           <option value="NAGALAND">NAGALAND</option>  
                           <option value="BIHAR">BIHAR</option>  
                           <option value="UTTARPRADESH">UTTARPRADESH</option>  
                           </select>  
                       
                   </fieldset>
                    <!--<fieldset>
                        <p>Upload File</p>
                        <input type="file" id="file" required>
                    </fieldset>
                </div>
            </div>
                    --->
            <!-- submit button -->
            <fieldset>
                <button type="submit" id="button" name="update">Update Now</button>
            </fieldset>
        </form>
    </div>
 
 
   

</body>
</html>
</body>
</html>
<?php

if($_POST['update'])
{

$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$state=$_POST['state'];
$id=$_POST['id'];


$update=mysqli_query($db,"update student SET
name='$name',fname='$fname',email='$email',date='$date',phone='$phone',gender='$gender',
course='$course',state='$state' where id='$id'");
$data=mysqli_query($db,$query);

if($update){
   echo" <script>alert('Successful')</script>";
    header('location:student_online.php?msg=updated');
    exit();

}else{
    header('location:student_online.php?msg=failedupdate');
}

}
?>