<?php
    $json = file_get_contents('http://localhost/localhost/sample76.php');
//    var_dump($json);
    $root = json_encode($json);
    var_dump($root);
    echo '<hr>';
    foreach($root as $k => $value){
        echo "{$value}<br>";
    }
//    foreach ($root as $v){
//        echo "{$v}<br>";
//    }