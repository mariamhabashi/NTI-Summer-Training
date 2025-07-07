<?php
echo " Good Morning";
//variables
$firstName="Mariam";
$lastName="El-Habashi";
$age=22;
echo "<br>";
echo "My name is $firstName $lastName and I am $age years old";
//boolean 
$login=true;
$login=false;
$students=["Mariam","Ahmed","Mahmoud","Sayed"];
$test=null;
//get the type
echo gettype($login);
//operations
$sugarquantity=10;
$sugarprice=35;
$totalsugar=$sugarquantity*$sugarprice;
echo "<br>";
echo $totalsugar;
//increment
$sugarquantity++;
echo "<br>";
echo $sugarquantity;
//decrement
$sugarquantity--;
echo "<br>";
echo $sugarquantity;
echo "<br>";
//Function
function FirstFunction():void{
    echo "Welcome to My Function";
}
FirstFunction();
function TotalSugarPrice(int $quantity,int $price):int{
    return $quantity*$price;
}
echo "<br>";
echo TotalSugarPrice($sugarquantity,$sugarprice);
//define and const are the same 
define("FIRSTNAME","Mariam");
define("LASTNAME","El-Habashi");
const FULLNAME="Mariam El-Habashi";
echo "<br>";
echo FULLNAME;
echo "<br>";
echo FIRSTNAME;
echo "<br>";
echo LASTNAME;
//Condition
$Score=80;
if($Score>90){
    echo  "<h1> Congratulations You Got A </h1>";
}else if($Score>80){
    echo  "<h1> Congratulations You Got B </h1>";
}else if($Score>70){
    echo  "<h1> Congratulations You Got C </h1>";
}else if($Score>60){
    echo  "<h1> Congratulations You Got D </h1>";
}
else{
    echo "<h1> Better Luck Next Time </h1>";
}
//Built in functions
$cost= 10.5;
echo floor($cost);
echo "<br>";
echo ceil($cost);
echo "<br>";
echo round($cost);
//switch
$Score=95;
switch(floor($Score/10)){
    case 10:case 9:
        echo "<h1> Congratulations You Got A </h1>";
        break;
    case 8:
        echo "<h1> Congratulations You Got B </h1>";
        break;
    case 7:
        echo "<h1> Congratulations You Got C </h1>";
        break;
    case 6:
        echo "<h1> Congratulations You Got D </h1>";
        break;
    default:
        echo "<h1> Better Luck Next Time </h1>";
        break;
}