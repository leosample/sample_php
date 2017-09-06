<?php
echo "<table>";
//$j = 0 ;
//for($y = 0 ; $y <= 1 ; $y++){
//    echo "<tr>";
//    for($x = 2;$x<=5;$x++){
//        if($x%2){
//            echo "<td bgcolor=#FFFF33 >";
//        }else{
//            echo "<td bgcolor=#FFAA33 >";
//        }
//        for($i = 1 ; $i <= 9; $i++ ){
//            $s = $x + $j ;
//            $r = $s * $i ;
//            echo "$s X $i = $r <br>";
//        }
//        echo "</td>";
//    }
//    echo "</tr>";
//    $j = 4;
//}
//echo "</table>";
for($y = 0 ; $y < 2 ; $y++){
    echo "<tr>";
    for($x = 2;$x<=5;$x++){
        $newx = $x + $y*4 ;
        if(($x+$y)%2){
            echo "<td bgcolor=#FFFF33 >";
        }else{
            echo "<td bgcolor=#FFAA33 >";
        }
        for($i = 1 ; $i <= 9; $i++ ){
            $r = $newx * $i ;
            echo "$newx X $i = $r <br>";
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>