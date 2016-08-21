<?php
$rows = 10;
$cols = 10;

$table = '<table border="3" cellspacing="5" cellpadding="4">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
?>