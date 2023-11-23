<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$number = (int) readline("Enter the length of the number: "); 
$arr = explode(' ', readline("Enter the number: ")); 
$evenTotal = 0;
$oddTotal = 0;

for ($i = 0; $i <$number; $i++) { 
    if ($i % 2 == 0) {
        $evenTotal += $arr[$i]; 
    }else {
        $oddTotal += $arr[$i]; } 
        } 
$sum = $oddTotal-$evenTotal; 
echo $sum;
?>