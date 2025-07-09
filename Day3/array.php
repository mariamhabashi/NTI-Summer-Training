<?php
$Menu = [
    "Pizza" => 50,
    "Burger" => 30,
    "Pasta" => 25,
    "Orange Juice" => 15,
    "Water" => 5,
];

$Order = [
    "Pizza" => 2,
    "Orange Juice" => 3,
    "Water" => 1,
];

$total = 0;

echo "MENU: <br>";
echo "Product - Price<br>";
foreach ($Menu as $key => $value) {
    echo $key . " - " . $value . "<br>";
}

echo "<br>";
echo "Customer Order:<br>";
echo "Product - Quantity<br>";
foreach ($Order as $key => $value) {
    echo $key . " - " . $value . "<br>";
    $total += $Menu[$key] * $value;
}

$tax = 0.1;
$taxAmount = $total * $tax;
$totalWithTax = $total + $taxAmount;

echo "<br>";
echo "Subtotal: " . $total . "<br>";
echo "Taxes (10%): " . $taxAmount . "<br>";
echo "Total price after taxes: " . $totalWithTax;
?>
