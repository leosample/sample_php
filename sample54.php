<?php
    include 'sample50.php';
    session_start();

    $Car = $_SESSION['Cart'];

    $name = $Car->getmember()->getName();

    echo "hello:{$name}<hR>";

    $list= $Car->getButlist();
    foreach ($list as $k =>$v){
        echo "{$k}:{$v}<BR>";
    }