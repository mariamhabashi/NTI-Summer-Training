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

<h1 class="text-center">Login Page</h1>
<?php if (isset($error)) echo $error; ?>
<form action="" method="post">
     <input type="text" name="username" placeholder="Username"/>
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="password" />
    <input type="submit"  value="Login" />
</form>



<?php include("footer.php"); ?>