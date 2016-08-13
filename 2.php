<?php
$age=rand(0, 100);
$str1= "Возраст {$age}";
echo $str1. "<br/>";

  if ($age <18) {
        $message =  'Вам еще рано работать';
} elseif ($age >=18 & $age <=65) {
        $message ='Вам еще работать и работать';
} else {
        $message = 'Вам пора на пенсию';
}
echo $message;

?>