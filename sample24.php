<?php
    if(isset($_REQUEST['name'])){
        $name = $_REQUEST['name'];
        $passw = $_REQUEST['passw'];
        echo "{$name}<br>";
        echo "{$passw}<br>";
    }
    $like = $_REQUEST['like'];
    foreach ($like as $k => $v ){
        echo "{$k}:{$v}<BR>";
    }
