<?php
//    function getnum($n){
//        $poker = range(1,9);
//        shuffle($poker);
//        $red = '' ;
//        for($i=0;$i<$n;$i++){
//            $red .= $poker[$i];
//        }
//        return $red ;
//    }
//
//    function ggnum($a,$b){
//        $A = $B = 0 ;
//        for($i = 0 ; $i<strlen($a);$i++){
//            if()
//        }
//        return 'aaaa';
//    }
//
//    $setggnum = '';
//    if(!isset($_GET['getnums'])){
//        $getnums = getnum(3);
//    }else{
//        $getnums = $_GET['getnums'];
//        $gg = $_GET['gonum'];
//        $setggnum = ggnum($getnums,$gg);
//    }
//
//    echo $setggnum;
//?>
<!--<form>-->
<!--    <input type="hidden" name="getnums" value="--><?php //echo $getnums ?><!--"/>-->
<!--    <input name="gonum">-->
<!--    <input type="submit" value="猜">-->
<!--</form>-->
<!--<hr>-->
<?php
// 產生謎底
function createAnswer($n){
    // 洗牌
    $poker = range(0,9);
    shuffle($poker);
    $ret = '';
    for ($i=0; $i<$n; $i++){
        $ret .= $poker[$i];
    }
    return $ret;
}
function checkAB($a, $g){
    $A = $B = 0;
    for ($i = 0; $i<strlen($g); $i++){
//        $check = substr($g, $i, 1);
//        if ($check == substr($a, $i, 1)){
        $check = substr($g, $i, 1);
        if ($check == substr($a, $i, 1)){
            $A++;
        }else if (substr_count($a,$check,0,strlen($a))>0){
            $B++;
        }
    }
    return "{$A}A{$B}B";
}
$result = '';
if (!isset($_POST['answer']) || isset($_POST['newgame'])){
    // 首次進入
    $answer = createAnswer(3);
    $hist = '';
    echo 'New Game:';
}else{
    // 已經開始猜了
    $answer = $_POST['answer'];
    $guess = $_POST['guess'];
    $hist = $_POST['hist'];
    $result = checkAB($answer, $guess);
    $hist .= "{$guess} => {$result}<br>";
}
echo $result;
?>
    <form method="post">
        <input type="hidden" name="answer" value="<?php echo $answer; ?>">
        <input type="hidden" name="hist" value="<?php echo $hist; ?>">
        <input name="guess" />
        <input type="submit" value="猜" />
    </form>
    <form method="post">
        <input type="submit" name="newgame" value="新局" />
    </form>
    <hr>
<?php echo $hist; ?>