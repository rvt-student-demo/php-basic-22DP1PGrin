<?php

//1. uzdevums
echo "Hello, World!";
//2. uzdevums
echo "\nToday is ".date("d.m.y").". The time is ".date("H:i:s").".";
//3. uzdevums
$x=20;
$y=30;
echo "\n".$x."+".$y."=".$x+$y;
//4. uzdevums
$z=$x+$y;
if($z%2==0){
    echo "\nThe number ".$z." is even!";
}else{
    echo "\nThe number ".$z." is odd!";
}
// 5. uzdevums
$numbers = array(20,13,89,5,10);
echo"\nThe min number in array is ".(min($numbers)).", but max number is ".(max($numbers)).".";
?>