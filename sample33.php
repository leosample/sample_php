<?php
    $poker = range(0,51);
    shuffle($poker);
//    echo '<table bgcolor="#ffd700">';
//    foreach ($poker as $a => $v){
//        echo "{$a} : {$v} <br>";
//    }
//    echo '<hr />';

    $players = array(array(),array(),array(),array());
    foreach ($poker as $k => $v ){
        $players[$k%4][(int)($k/4)] = $v;
    }
//    for($i=0;$i<4;$i++){
//        foreach($players[$i] as $v){
//            echo "{$v}<br>";
//        }
//        echo '<hr>';
//    }
    $patterns = array('&spades;',
        '&hearts;',
        '&diams;',
        '&clubs;');
$values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    echo '<table border="1px">';
    foreach($players as $player){
      echo '<tr>';
        foreach($player as $card){
            echo '<td>';
            $pattern = (int)($card/13);
            $value = $card % 13 ;
            echo "{$patterns[$pattern]}{$values[$value]}";
            echo '</td>';
        }
      echo '</tr>';
    }
    echo '</table>';