<?php
$weekdays=[
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
   ];
$day = date('l')+1;

foreach ($weekdays as $key => $week){
    echo $key==$day ? "<i>$week</i> <br/>" : "$week<br/>";
}
?>