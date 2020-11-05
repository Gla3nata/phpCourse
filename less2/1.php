<?php
$a = 1;
$b = -3;
echo $a." ".$b."<br>";

if($a >= 0 && $b >= 0){
    if($a > $b){
        echo  $a - $b;
    } 
    else {
        echo  $b - $a;
           }
}
else if($a<0 && $b<0) {
    echo  $a * $b;
}
else {
    echo $a + $b;
}
?>