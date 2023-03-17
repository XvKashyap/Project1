<?php
$servername="localhost";
$username="root";
$password="";
$dbname="realform";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection Successfull";

}else{
    echo "Connection Failed";
}

?>