<?php
    $a = array(1,2,3,4,5,6);
    echo count($a);
    echo '<hr />';

    $b[0] = 12 ;
    $b[4] = 33.2 ;
    $b[7] = 'sample' ;
    echo gettype($b).':'.count($b);
    echo '<hr />';

    $c[] = 12 ;
    $c[] = 123.14 ;
    $c[] = 'sample';
    echo gettype($c).':'.count($c);
    echo '<hr />';

    $d['name'] = 'sample' ;
    $d['gender'] = false ;
    $d['age'] = 44 ;
    echo gettype($d).':'.count($d);
    echo '<hr />';

    $ary = array(1,2);
    $ary[] = '123';
    $ary[7] = 12.3 ;
    $ary['name'] = 'sample';
    var_dump($ary);
    echo '<hr />';

    for($i=0;$i<count($a);$i++){
        echo "{$a[$i]}<br />";
    }
    echo '<hr />';

    foreach($ary as $value){
        echo "{$value}<br>";
    }

    foreach($ary as $key => $value){
        echo "{$key} --> {$value}<br>";
    }
?>
