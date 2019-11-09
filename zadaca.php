<?php

$number = [];

for ($i = 0; $i > $number; $i++) {

     $number[] =  rand(-11, 22) . "</br>";
}

$max = 0;
$min = 0;
$otrnumber = 0;
foreach ($number as $value){
    if ($number > 0){
     $max = $max + 1;
     }
    if ($number < 0){
        $min = $min ++;
         }
    if   ($number == 0){
        $otrnumber = $otrnumber ++;
    }
}
echo '';
?>