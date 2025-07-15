<?php
session_start();
include("header.php");
include("function.php");

// check if user is logged in
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["user"]["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1 style="text-align: center;">Welcome <?php echo $username ?>, You're Logged In</h1>
</body>
</html>
