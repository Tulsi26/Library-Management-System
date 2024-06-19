<?php

$sum = 0;
for($i=1; $i<10 ; $i++){
    $sum+=$i;
    if($sum > 10){

        break;
    }
    echo $i;
     echo $sum;
}

?>