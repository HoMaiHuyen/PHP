<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = intval(fgets($_fp));
$tempArray = [];
for ($i = 0; $i < $n; $i++) {
    $tempArray[] = trim(fgets($_fp));
}
sort($tempArray);
foreach ($tempArray as $value) {
    echo $value . "\n";
}
fclose($_fp);
?>