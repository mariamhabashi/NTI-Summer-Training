<?php

    include("header.php");


    /// Connect To Database 
    $con = mysqli_connect( "localhost", "root", "Mariam177#", "store");


    /// Query Database 
    if ($_POST){
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = date( "Y-m-d");
        $query=  "INSERT INTO user (username, email, password, date) values ('$username', '$email', ' $password', '$date')";
        $result = mysqli_query($con,  $query);
        if ($result){
            echo "Send Data Succefullay";
        }
    }

?>


<form action="" method="post">


<input type="text" name="username" placeholder="Username"/>
<input type="text" name="email" placeholder="Email"/>
<input type="password" name="password"placeholder="Password"/>
<input type="submit" value="Sign Up"/>

</form>

<?php 

include("footer.php")
?>