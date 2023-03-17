<?php include("connection.php");

error_reporting(0);?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <form name="f1" action="#" method="POST">
        NAME: <input type="text" name="name"><br>
        AGE:  <input type="text" name="age"><br>

        <input type="submit" name="submit" value="SUBMIT"><br>

</form>
</body>
</html>


<?php

if($_POST['submit']){
    $name = $_POST['name'];
    $age = $_POST['age'];


    $query = "INSERT INTO test VALUES ('$name','$age')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Successful');</script>";
    }
    else
    {
        echo "<script>alert('Failed');</script>";
    }
}
?>