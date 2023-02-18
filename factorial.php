<?php
function factorial($n){
    if($n <= 1){
        return 1;
    }
    else{
        return $n * factorial($n-1);
    }
}

// Usage example
$number = 5;
$fact = factorial($number);
echo "Factorial of $number is $fact";
?>