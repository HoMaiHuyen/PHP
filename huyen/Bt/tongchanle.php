<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$number = (int) readline("Enter the length of the number: "); 
// Enter a series of numbers 8 7 8 7 7
$arr = explode(' ', readline("Enter a series of numbers: ")); 
$sum = 0;
foreach ($arr as $number) {
    $number = intval($number); // Convert it to an integer

    if ($number % 2 != 0) {
        $sum += $number;
    }
}
// Print the sum of odd numbers
echo $sum;
?>