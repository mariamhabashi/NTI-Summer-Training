<?php 
include(__DIR__ . "\..\connecting.php");
if(!@session_start()){
    @session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>

<body>

<nav>
    <ul>

        <li><a href="Home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
                <?php 
        
        if(isset($_SESSION['xyz']) ){
            @session_start();
            echo "<li><a href=logout.php>Logout</a></li>";
            echo "<li> Welcome " .$_SESSION['xyz']['username'].  "</li>";
        } else{

        ?>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
        <?php }?>
    </ul>
</nav>
<div class="clearfix"></div>