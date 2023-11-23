<?php 
    $n=intval(readline());
    $factors=array();
    for($i=2; $i<=sqrt($n);$i++){
        while($n%$i===0){
            $factors[]=$i;
            $n/=$i;
        }
    }
    if($n>1){
        $factors[]=$n;
    }
    echo implode("*", $factors);
?>