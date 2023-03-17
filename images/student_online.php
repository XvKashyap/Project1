<!--- Fetching of data from the database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
    <h1>STUDENT REGISTRATION FORM</h1>
</div>
    <hr>
    <ul>
        <li>
            <a href="" class="active">HOME</a>
        </li>
        <li>
            <a href="registration.php" >Apply</a>
        </li>
        <li>
            <a href="" class="active">LOGOUT</a>
        </li>
    </ul>
    </body>
    </html>
    <!--including connection and for selection-->
    <?php
    include('connection.php');
    //deleting query
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $delete="delete from student where id=$id";
        $run=$db->query($delete);
    }

    $select="select * from student";
    $run=$db->query($select);
    ?>
    <table border="3px" width="100%">
       
            <caption><h1>Student Record</h1></caption>
            <tr bgcolor="Yellow">
            <th>Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Course</th>
            <th>State</th>
            
            <th>Edit/Delete</th>
            <th></th>
           

        </tr>
        <!-- the below query used for fetching the data-->
        <?php

        while($record=mysqli_fetch_array($run)) {
        ?>
        <tr>
            <td> <?php echo $record['id'];?> </td>
            <td><?php echo $record['name'];?></td>
            <td><?php echo $record['fname'];?></td>
            <td><?php echo $record['email'];?></td>
            <td><?php echo $record['date'];?></td>
            <td><?php echo $record['phone'];?></td>
            <td><?php echo $record['gender'];?></td>
            <td><?php echo $record['course'];?></td>
            <td><?php echo $record['state'];?></td>
           
           
            <td><a onclick="return confirm('Are you Sure want to delete')"href="student_online.php?id=<?php echo $record['id'];?>">
            <button>
            DELETE</button></td>
            <td><a href="update_form.php?id=<?php echo $record['id'];?>"><button>Edit</button></a></td>


        </tr>

        <?php }?>


    </table>
</body>
</html>