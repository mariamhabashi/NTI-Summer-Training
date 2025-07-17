<?php
include("header.php");
include("function.php");

if ($_POST) {
    echo "posted";
    echo "<pre>";
    var_dump($_POST);
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = date("Y-m-d");
 
    $query = "INSERT INTO user (username,email,password,date) values ('$username' , '$email' , '$password' , '$date')";
 
    $result = mysqli_query($con, $query);

     header("Location: login.php");
}

   
?>
<div class="form-container">
    <h2>Signup Page</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-input" placeholder="Enter username" required />
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="******" required />
        </div>

        <input type="submit" value="Sign Up" class="form-submit" />
    </form>
</div>


<?php 

include("footer.php");

?>