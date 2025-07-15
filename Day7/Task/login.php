<?php
session_start();
include("header.php");
include("function.php");
//CONNECT to database

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `user` WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header("location:home.php");
    } else {
        echo "Sorry your data is invalid";
    }



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="signinhead">SignIn</h1>
    <form action="login.php" method="post">
        <label for="uname">User Name:</label>
        <input type="text" id="uname" name="uname" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="SignIn" id="submitbtn">
    </form>
</body>
</html>