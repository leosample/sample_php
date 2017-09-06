<?php
    $op = fopen("http://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=c9d8a18a-cbaa-4e23-812d-cfc34c18508d&rid=cc29c573-9542-450c-8e7f-e7d0d3e4e7dd",'r') or die("dddd");
//    while ($v=fread($op,1)){
//        echo "$v<br>";
//    }
//    while ($line = fgets($op)){
//        echo "{$line}<BR>";
//    }
    $line = fgets($op);
    $line = fgets($op);
    $line = iconv("BIG5","UTF-8",$line);
    $row = explode(',',$line);

    foreach ($row as $v){
        echo "{$v}<BR>";
    }











    fclose($op);