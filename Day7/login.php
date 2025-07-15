<?php
session_start();
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";


if ($_POST){
    if($_POST["username"] == "Mariam"){
        $_SESSION["username"] ="Mariam";
        $_SESSION["email"] ="mariamhabshi177@gmail";
        $_SESSION["id"] = "177";
    }
}
if ($_SESSION["username"] == "Mariam"){
    echo "Welcome " .$_SESSION["username"];
}else{
    echo "Please Login";
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="Login">
</form>