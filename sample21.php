<?php
if(isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $s = 0;
    $m = '';
    $j = '';
    if ($x % 4 == 0) {
        if ($x % 100 == 0) {
            if ($x % 400 == 0) {
                $j = '這是閏年';
                $s = 1;
            } else {
                $j = '這不是閏年';
                $s = 0;
            }
        } else {
            $j = '這是閏年';
            $s = 1;
        }
    } else {
        $j = '這不是閏年';
        $s = 0;
    }
    if ($s == 1 && $y == 2) {
        $m = "29天";
    } else {
        switch ($y) {
            case 1 :
            case 3 :
            case 5 :
            case 7 :
            case 8 :
            case 10 :
            case 12 :
                $m = "31天";
                break;
            case 4 :
            case 6 :
            case 9 :
            case 11 :
                $m = "31天";
                break;
            case 2 :
                $m = "28天";
                break;
            default:
                $m = "XX" ;
                break;
        }
    }
}
?>
<form>
    <input name="x" value="<?php echo $x ; ?>"/>
    年
    <input name="y" value="<?php echo $y ; ?>"/>
    月
    <input type="submit" value="是"/><?php echo "$j 的 $y 月 $m "; ?>
</form>
