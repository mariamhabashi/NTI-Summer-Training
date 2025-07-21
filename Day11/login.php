<?php

// $job="developer";
// $age=22;
// $city="Alexandria";

// $name="Mariam";
// $MariamJob="developer";
// $MariamAge=22;
// $MariamCity="Alexandria";
// if($job == $MariamJob && $age == $MariamAge && $city == $MariamCity){
//     echo "Welcome $name";
// }else{
//     echo "Access Denied";
// }

// if($_SERVER['REQUEST_METHOD']=='POST'){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $con =mysqli_connect("localhost", "root", "Mariam177#", "unsecure_login");
//     $query = "SELECT * FROM `users` where username='$username' AND password ='$password'"; //bad query
//     echo $query;
//     echo "<br>";
//     $result = mysqli_query($con, $query);
//     $data=mysqli_fetch_assoc($result);
//     if (mysqli_num_rows($result) > 0) {
//        echo "Login Successfully" , $username;
//     } else {
//         echo "Invalid Username or Password";
//     }
// }
$con = mysqli_connect("localhost", "root", "Mariam177#", "unsecure_login");
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $user = $_POST['username'];
//     $password = $_POST['password'];
    
//     //  Vulnerable to SQL Injection
//     $query = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
//     $result = mysqli_query($con, $query);
//     $data = mysqli_fetch_all($result);
    
//     // Secure Version Using Prepared Statements ✅

//     //  Step 1: Use a placeholder ( ? ) instead of injecting user input directly
//     $query = "SELECT * FROM users WHERE username = ? AND password = ?";

//     //  Step 2: Prepare the SQL query
//     // This tells MySQL to expect parameters instead of inserting variables directly
//     $stmt = mysqli_prepare($con, $query);

//     //  Step 3: Bind user inputs to placeholders
//     // "ss" means we expect two strings
//     mysqli_stmt_bind_param($stmt, "ss", $user, $password);

//     //  Step 4: Execute the statement
//     mysqli_stmt_execute($stmt);

//     //  Step 5: Get the result set from the prepared statement
//     $result = mysqli_stmt_get_result($stmt);

//     //  Step 6: Check if any rows were returned (i.e., credentials matched)
//     if (mysqli_num_rows($result)) {
//         echo "البيانات صحيحة"; // Correct credentials
//     } else {
//         echo "لا يوجد مستخدم"; // Invalid credentials
//     }
// }

// // Right JOIN
// SELECT o.order_id, o.total, o.telephone, c.firstname, c.lastname, c.email FROM `order` o RIGHT JOIN customer c on o.customer_id = c.customer_id;

// // inner join
// SELECT o.order_id, o.total, o.telephone, c.firstname, c.lastname, c.email FROM `order` o INNER JOIN customer c on o.customer_id = c.customer_id;

// // LEFT JOIN
// SELECT o.order_id, o.total, o.telephone, c.firstname, c.lastname, c.email FROM customer c LEFT JOIN `order` o ON o.customer_id = c.customer_id;

// // FULL JOIN
// SELECT o.order_id, o.total, o.telephone, c.firstname, c.lastname, c.email FROM `customer` c JOIN `order` o ON c.customer_id = o.customer_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
