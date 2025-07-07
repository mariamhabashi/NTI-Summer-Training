<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NTI Day2</title>
    </head>
    <body>
        <!-- 
        <form action="">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name"> 
            <select>
                <option>1905</option>
                <option>1906</option>
                <option>1907</option>
                <option>1908</option>
            </select> 
            <table border="1" cellpadding="10" cellspacing="0">
                <?php
                // for($i=1;$i<=5;$i++){
                //     echo "<tr>";
                //     for($j=1;$j<=3;$j++){
                //         $result=$i*$j;
                //         echo "<td>$result</td>";
                //     }
                //     echo "</tr>";
                // }
                ?>
            </table> 
        </form>
        -->

        <?php 
        // $x = 1;
        // $total1 = 0; // even numbers
        // $total2 = 0; // odd numbers
        // while ($x <= 100) {
        //     if ($x % 2 == 0) {
        //         $total1 += $x;
        //     } else {
        //         $total2 += $x;
        //     }
        //     $x++;
        // }
        // echo "The sum of even numbers is $total1 and the sum of odd numbers is $total2";

        // ?>
    <!-- </body>
</html> -->

<?php
    // $x=1;
    // while ($x<10){
    //     $x++;
    //     if ($x==5){
    //         continue;
    //     }
    //     else{
    //         echo $x;
    //     }
    // }
    // $x=1;
    // do{
    //     $x++;
    // echo $x;
    // }while($x<10);
    // echo "<br>";
    // for($x=1;$x<=10;$x++){
    //     if($x==5){
    //         continue;
    //     }
    //     else{
    //     echo $x;
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    .input-form{
        width: 400px;
        margin:auto;
        background-color: grey;
        display: flex;
        flex-direction: column;
    }
    input{
        margin-bottom: 10px;
    }
</style>
<body>
    <form method="POST" action="result.php" class="input-form">
        <label>Card Name</label>
        <input type="text" name="cardName">
        <br>
        <label>Card Number</label>
        <input type="text" name="cardNumber">
        <br>
        <label>CVV</label>
        <input type="text" name="cvv">
        <br>
        <label>Email</label>
        <input type="email" name="email">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>