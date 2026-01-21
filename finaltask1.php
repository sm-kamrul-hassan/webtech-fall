<?php
$name = "Kamrul";
$age = 22;
$height = 5.8;
$isStudent = true;

$num1 = 10;
$num2 = 5.5;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

echo "Addition: $addition<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";

// Output sum using echo and print
$sum = $num1 + $num2;
echo "Sum using echo: $sum<br>";
print "Sum using print: $sum<br>";

echo "<br><strong>Variable Details:</strong><br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($height);
echo "<br>";
var_dump($isStudent);
?>
