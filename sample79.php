<?php
$json = file_get_contents('http://localhost/localhost/sample76.php');
$root = json_decode($json);
var_dump($root);
echo '<hr>';
foreach ($root as $data){
    $member = $data->member;
    echo "{$member->name}:{$member->id}<br>";
    $list = $data->list;
    foreach ($list as $a => $v){
        echo "{$a}:{$v}<br>";

    }

    echo '<hr>';
}