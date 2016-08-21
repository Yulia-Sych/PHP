<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $color => $col) {
    echo $color.'<br/>';
}
foreach ($arr as $col) {
    echo $col.'<br/>';
}
?>