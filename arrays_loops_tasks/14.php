<?php
$arr= array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $e) {
    if ($e >=2 & $e <=4) {
        echo 'Есть!';
    }
    break;
    if ($e <2 & $e >4) {
        echo 'Нет!';
    }
}
?>
