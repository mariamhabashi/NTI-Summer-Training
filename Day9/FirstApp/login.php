<?php 
   @session_start();
        if(@$_SESSION['xyz']){ 
        header("location:profile.php");
}
    include("part/header.php");

    include("function.php");
    /// Connect To Database 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `user` where email = '$email' AND password = '$password' LIMIT 1 ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['xyz'] = $row;     
        header("location:profile.php");
    } else{
        $error =  "<h3 class='text-center alert-danger'>Sorry Your Data Is Invalid</h3>";
        
    }
}

?>
    



<h1 class="text-center">Login Page</h1>

<?php
    if(isset($error)){
        echo $error;
    }
?>
<form method="post">
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="password"/>
<input type="submit" value="Login"/>
</form>




<?php include("part/footer.php");?>