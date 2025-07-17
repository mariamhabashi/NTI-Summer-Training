<?php 
echo __DIR__;
include("../connecting.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href=<?php echo ROOT_STYLE  ?>>
</head>

<body>

<nav>
    <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>
<div class="clearfix"></div>