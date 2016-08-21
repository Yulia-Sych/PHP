<?php
$str='';
	for ($a = 1; $a <= 9; $a++) {
        for ($b = 0; $b < $a; $b++) {
            $str .= $a;
        }
        echo $str.'<br>';
        $str = '';
    }
?>