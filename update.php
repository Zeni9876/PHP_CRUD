<?php
include 'connect.php';

    $id = $_GET['updateid'];

    $sql = "select * from `student` where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['Name'];
    $email = $row['Email'];
    $password = $row['Password'];

    if(isset($_POST['submit'])){
        $name1 = $_POST['name'];
        $email1 = $_POST['email'];
        $password = $_POST['password'];
        $sql1 = "update `student` set Name='$name1',Email='$email1',Password='$password' where id='$id' ";
        $result = mysqli_query($con,$sql1);
        if($result){
            header("location:data.php");
        }
        else{
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <center>
            <h1>Update Information</h1>
            <br>

            Name:<input type="text" name="name" value="<?php echo "$name" ?>"><br><br>
            Email:<input type="email" name="email" value="<?php echo "$email" ?>"><br><br>
            Password:<input type="password" name="password" value="<?php echo "$password" ?>"><br><br>
            <input type="submit" name="submit" title="Update">
        </center>
    </form>
</body>
</html>