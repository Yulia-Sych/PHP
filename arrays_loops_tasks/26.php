<?php
for ($i = 0; $i <= 9; $i++) {
    $arr[$i] = rand(0, 100);
}
print_r($arr);
$product=1;

for($i =2; $i <=8; $i += 2) {
   $product*=$arr[$i];
}
echo "<br/>Произведение равно:<nbsp/>".$product."<br/>";

for ($i =1; $i<=9; $i +=2) {
    echo $arr[$i]." ";
}
?>