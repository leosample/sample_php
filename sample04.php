<?php
$x = $y = $sum = '';

if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $moter = $_GET['moter'];
    switch ($moter){
        case 1:
            $sum = $x + $y;
        case 2:
            $sum = $x - $y;
        case 3:
            $sum = $x * $y;
        case 4:
            $v = (int)($x/$y);
            $a = $x % $y;
            $sum = "{$v}.{$a}";
    }
//    echo "$x + $y = $sum";
}
?>

<!--<form action="sample05.php">-->
<form>
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select name="moter">
        <option name="1">+</option>
        <option name="2">-</option>
        <option name="3">X</option>
        <option name="4">/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/><?php echo $sum ?>
</form>