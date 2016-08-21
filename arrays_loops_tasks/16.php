<?php
$arr= [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach($arr as $key => $item) {
    if($key <= 2) {
    $a = $item;
    echo $a . ",";
    }
}
echo "<br>";
foreach($arr as $key => $item) {
    if($key >= 3 & $key <=5) {
    $a = $item;
    echo $a . ",";
    }
}
echo "<br>";
foreach($arr as $key => $item) {
    if($key >= 6 & $key <=8) {
    $a = $item;
    echo $a . ",";
    }
}
?>