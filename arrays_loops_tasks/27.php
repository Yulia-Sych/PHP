<?php
$row = rand (10, 15);
$cols = rand (15, 20);

$colors = ['red','yellow','blue','gray','maroon','brown','green'];
?>

<table border="2" cellpadding="10" cellspacing="1">
    <?php for ($r=1; $r<=$row; $r++) {?>
    <tr>
        <?php
        for ($c=1; $c<=$cols; $c++) {
            $color = array_rand($colors);
        ?>
            <td bgcolor="<?php echo $colors[$color]?>"><?php echo rand(100, 500);?></td>
        <?php }?>
    </tr>
    <?php }?>
</table>