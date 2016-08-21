<?php
$weekdays=[
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

foreach ($weekdays as $key => $days) {
    if ($key == 5 or $key == 6) {
        echo "<b>$days</b><br/>";
    }
    else {
        echo $days.'<br/>';
}
}
?>