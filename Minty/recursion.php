<?php

// function greet(){
//     echo "Hello";
//        greet();
// }


function countNumber($start){
  
    echo "$start<br>";
    if($start<=10){
    $start++;
    countNumber($start);
}
}
countNumber(1);
?>