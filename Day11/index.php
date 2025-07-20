<?php

//parsing
//هل هناك اي اخطاء
//echo "Welcome";
//if (true){
//}

//compilation 
//excution => runtime تنفيذ سطر بسطر
//try Catch VS if switch


$con =mysqli_connect("localhost", "root", "Mariam177#", "store");
if($con){
    echo mysqli_connect_error();
}else{
$result = mysqli_query($con, "SELECT * FROM `user`");
$data = mysqli_fetch_assoc($result); //array
echo "<pre>";
}
//for Array var_dump($data['email]);
$data = mysqli_fetch_object($result);
//for Object var_dump($data<-email);

// try{
//     $con =mysqli_connect("localhost", "root", "Mariam177#", "store");
//     $result = mysqli_query($con, "SELECT * FROM `user`"); //r
//     $data = mysqli_fetch_assoc($result); //array result
//     echo "<pre>";
//     //for Array var_dump($data['email]);
//     $data = mysqli_fetch_object($result);
//     //for Object var_dump($data<-email);
// }catch(Exception $e){
//     echo $e->getMessage();
// }

echo "Welcome from NTI";