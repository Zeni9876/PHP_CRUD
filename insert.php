<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into `student` (Name,Email,Password) values('$name','$email','$password')";
    $result = mysqli_query($con,$sql);
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
            <h1>Registration Form</h1>
            <br>

            Name:<input type="text" name="name" placeholder="Enter Name" autocomplete="off"><br><br>
            Email:<input type="email" name="email" placeholder="Enter Email" autocomplete="off"><br><br>
            Password:<input type="password" name="password" placeholder="Enter Password" autocomplete="off "><br><br>
            <input type="submit" name="submit" title="Save">
        </center>
    </form>
</body>
</html> 