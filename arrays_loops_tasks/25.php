<?php
for ($i = 0; $i <= 9; $i++) {
    $arr[$i] = rand(0, 100);
}
print_r($arr);
"<br/>";

$cnt = count($arr);
$min = $max = $arr[0];
$index_min = $index_max = 0;

for ($i = 1; $i < $cnt; $i++) {
    if ($arr[$i] > $max) {
        $index_max = $i;
        $max = $arr[$i];
}
    else
    if ($arr[$i] < $min) {
    $index_min = $i;
$min = $arr[$i];
}
}
echo "Максимальное значение \$arr[$index_max] = $max<br>";
echo "Минимальное значение \$arr[$index_min] = $min<br>";

list($arr[$index_max], $arr[$index_min]) = array($arr[$index_min], $arr[$index_max]);
print_r($arr);
?>