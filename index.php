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
echo "\nIn array:";
foreach($numbers as $x){
    echo $x.", ";
}
echo"\nThe min number in array is ".(min($numbers)).", but max number is ".(max($numbers)).".";
// 6. uzdevums
$String="Madam";
echo"\nThe reverse '".$String."' is '".strrev($String)."'.";
// 7. uzdevums
if(strtolower($String)==strtolower(strrev($String))){
    echo "This word is palindrome!";
}else{
    echo "This word isn't palindrome! ";
}
// 8. uzdevums
echo "\nThe random number is: ".rand(1,10);
// 9. uzdevums
$SomeWords="I like cartoons dogs";
echo"\n".strtoupper($SomeWords);
// 10. uzdevums
echo ". In this sentence is ".str_word_count($SomeWords)." words.";
?>