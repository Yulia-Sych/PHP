<?php
if (isset($_POST['num'])) {
    $number = intval($_POST ['num']);
    $number = (string)$number;
    $summ = 0;
    $i = 0;
    while (isset($number [$i])){
        $summ +=$number[$i];
        $i++;
    }
}
?>

<html>
<head></head>
<body>
    <form action="" method="post">
        <label>Enter number</label>&nbsp;
        <input type="number" name="num" value="<?php echo isset($_POST['num']) ? $_POST['num'] : ''?>"/><br/>
        <input type="submit" value="Ok"/>
    </form>
    <?php if(isset($summ)){?>
        <div>Summ: <?php echo $summ;?></div>
    <?php }?>
</body>
</html>