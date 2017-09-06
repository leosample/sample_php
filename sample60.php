<?php
$mysqli = @new mysqli( 'localhost' , 'root' , 'root' );

if($mysqli->connect_error){
    die($mysqli->connect_error);
}

$ret = $mysqli->query("CREATE DATABASE test05");
var_dump($ret);

//$mysqli = @new mysqli( 'localhost' , 'root' , 'root' , gosql );
//
//if($mysqli->connect_error){
//    die($mysqli->connect_error);
//}
//echo 'OK';
