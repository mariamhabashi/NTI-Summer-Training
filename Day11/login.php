<?php

$job="developer";
$age=22;
$city="Alexandria";

$name="Mariam";
$MariamJob="developer";
$MariamAge=22;
$MariamCity="Alexandria";
if($job == $MariamJob && $age == $MariamAge && $city == $MariamCity){
    echo "Welcome $name";
}else{
    echo "Access Denied";
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con =mysqli_connect("localhost", "root", "Mariam177#", "unsecure_login");
    $query = "SELECT * FROM `users` where username='$username' AND password ='$password'"; //bad query
    echo $query;
    echo "<br>";
    $result = mysqli_query($con, $query);
    $data=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
       echo "Login Successfully" , $username;
    } else {
        echo "Invalid Username or Password";
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
    <h2>Login Page</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
