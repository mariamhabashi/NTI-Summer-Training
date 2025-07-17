<?php
session_start();


include("header.php");
include("function.php");
//CONNECT to database

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `user` where email='$email' AND password ='$password' LIMIT 1";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header("Location: profile.php");
        exit();
    } else {
        $error = "<h3 class='text-center alert-danger'>Sorry Your Data Is Invalid</h3>";
    }
}
?>

<?php if (isset($error)) echo $error; ?>
<div class="form-container">
    <h2>Login Page</h2>
    
    <?php if (isset($error)) echo $error; // لعرض رسائل الخطأ ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password" required />
        </div>

        <input type="submit" value="Login" class="form-submit" />
    </form>
</div>



<?php include("footer.php"); ?>