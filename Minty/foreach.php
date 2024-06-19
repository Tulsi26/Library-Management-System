<?php

$arr = [
    "HTML" => 2000,
    "CSS" => 2500,
    "Js" => 3000,
    "PHP" => 5000
];
foreach($arr as $course => $fees){
    echo "The fees of $course is Rs $fees<br/>"; 
}

?>