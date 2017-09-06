<?php
    date_default_timezone_set("Asia/Taipei");
    $dir = opendir(".") or die ('dwaa');

    while($vuler = readdir($dir)){
        echo readdir($dir).':';
        if(is_dir("./$vuler")){
            echo '[dir]';
        }else if(is_file("./$vuler")) {
            echo '[file]';
        }
        echo date('Y-m-d H:i:s',filemtime("./$vuler"));
        echo "<br>";
    }
    if(copy('./div1/cccc','./div2/xxxx')){
        echo "成功";
    }else{
        echo "失敗";
    }

    unlink("./div2/xxxx");