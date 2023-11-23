<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function happySequence($n){
    $sequence=array($n);
    while($n!=1){
        if($n%2==0){
            $n=$n/2;
        }
        else{
            $n=$n*3+1;
        }
        array_push($sequence, $n);
    }
    return $sequence;
}
$n=(int)readline("nhap so nguyen duong n:");
$result=happySequence($n);
foreach($result as $number){
    echo $number." ";
}
?>