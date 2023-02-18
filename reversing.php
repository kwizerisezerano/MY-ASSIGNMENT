<?php
// define the string to reverse
$string = "KWIZERISEZERANO";

// initialize an empty string to store the reversed string
$reversed_string = "";

// loop through the string from the end to the beginning
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    // concatenate each character to the reversed string
    $reversed_string .= $string[$i];
}

// output the reversed string
echo $reversed_string;
?>
