<?php
$month_of_year=[
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];
$month = date('F')+7;

foreach ($month_of_year as $key => $year){
    echo $key=$month ? "<b>$year</b> <br/>" : "$year<br/>";
}
?>