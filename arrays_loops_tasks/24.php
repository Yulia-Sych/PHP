<?php
if (isset($_POST['number'])) {
    $number = intval($_POST ['number']);
    $number = (string)$number;
    $numeric = intval($_POST ['numeric']);
    $cnt = 0;
}
?>
<html>
<head></head>
<body>
    <form method="post" action="">
        <input type="number" name="number" placeholder="Enter the number"/><br/>
        <input type="number" name="numeric" placeholder="Select the numeric"/><br/>
        <input type="submit" name="Ok"/><br/>
    </form>
   <?php if(isset($cnt)){?>
        <div>Count: <?php echo substr_count($number, $numeric);?></div>
    <?php }?>
</body>
</html>