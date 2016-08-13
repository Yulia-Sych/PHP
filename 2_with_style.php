<?php
$age=rand(0, 100);
$str1= "Возраст {$age}";
echo $str1. "<br/>";

  if ($age <18) {
        $message = "<ol style='list-style-type: lower-alpha;'> <li> Вам еще рано работать </li>";
} elseif ($age >=18 & $age <=65) {
        $message ="<li> Вам еще работать и работать </li>";
} else {
        $message = "<li>Вам пора на пенсию </li> </ol>";
}
echo $message;

?>