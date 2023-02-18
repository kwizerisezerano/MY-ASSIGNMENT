<?php
// define two variables
$num1 = 5;
$num2 = 10;

// before swapping
echo "Before swapping: " . "num1 = " . $num1 . ", num2 = " . $num2 . "<br>";

// swap logic
$temp = $num1;
$num1 = $num2;
$num2 = $temp;

// after swapping
echo "After swapping: " . "num1 = " . $num1 . ", num2 = " . $num2 . "<br>";
?>