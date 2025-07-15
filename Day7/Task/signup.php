<?php
include("header.php");
include("function.php");

if ($_POST) {
    echo "posted";
    echo "<pre>";
    var_dump($_POST);
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO user (username,email,password) values ('$username' , '$email' , '$password')";
 
    $result = mysqli_query($con, $query);
    if ($result) {
    echo "✅ Inserted successfully";
    header("Location: login.php");
    exit();
    } else {
        echo "❌ Error: " . mysqli_error($con);
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
    <h1 class="signuphead">Signup</h1>
    <form action="signup.php" method="post">
        <label for="uname">User Name:</label>
        <input type="text" id="uname" name="uname" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Signup" id="submitbtn">
    </form>
</body>
</html>
<?php 
    include("footer.php");
?>