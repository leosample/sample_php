<?php
function sayhi($court,$name='遊客'){
    for($i=0;$i<$court;$i++){
        echo "hi,{$name}<br>";
    }
}
//sayhi(3);
//
//sayhi(3,'sample');

function setx($x){
    return $x * 9 + 1 ;
}
function test(){
    echo func_num_args();
}

test3(3,3,4,5,3,34,2,3);

function test2(){
    for($i=0;$i<func_num_args();$i++){
        echo func_get_arg($i);
    }
}

function test3(){
    $name = func_get_args();
    foreach ($name as $v){
        echo "{$v}<br>";
    }
}

function testv2(){
    $args = func_get_args();
    foreach ($args as $v){
        echo "{$v}<br>";
    }
}
//$x = setx(3);
//echo $x;