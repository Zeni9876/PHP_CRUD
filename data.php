<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="insert.php">Insert Data</a></button><br><br>

    <center>
    <table border="1 px solid black">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>
        </thead>
        <tbody>
            <?php
                $sql = "select * from `student`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $password = $row['Password'];
                        echo '<tr>
                        <th>'.$id.'</th>
                        <th>'.$name.'</th>
                        <th>'.$email.'</th>
                        <th>'.$password.'</th>
                        <th>
                        <button><a href="update.php?updateid='.$id.'">Update</a></button>
                        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                        </th>
                    </tr>';
                    }
                }
            
            ?>
            
        </tbody>
    </table>
    </center>
</body>
</html>