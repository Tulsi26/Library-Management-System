<?php
$cars = array(
    0 => "Car1",
    1 => "Car2",
    2 => "Car3",
    3 => "Car4",
    4 => "Car5",
    5 => "Car6",
  );
  $chuncked = array_chunk($cars,4);
  print_r($chuncked);
?>