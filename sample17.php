<?php
//    $a = array() ;
//    for($i=0;$i<100;$i++){
//        $x = rand(1,6);
//        $a[$x]++;
//    }
//    for($j=1;$j<=6;$j++){
//        echo "{$j}出現{$a[$j]}次<br>";
//    }

//$a =  array(1=>0,0,0,0,0,0);
//for ($i=0;$i<100;$i++){
//    $p = rand(1,6);
//    $a[$p]++;
//}
//foreach($a as $k => $v){
//    echo "{$k}點出現{$v}次<br>";
//}

$a =  array(1=>0,0,0,0,0,0);
for ($i=0;$i<10000;$i++){
    $p = rand(1,9);
//    if($p>6){
//        $a[$p-3]++;
//    }else{
//        $a[$p]++;
//    }
    $a[$p>6?$p-3:$p]++;
}
foreach($a as $k => $v){
    echo "{$k}點出現{$v}次<br>";
}