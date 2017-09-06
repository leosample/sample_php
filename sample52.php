<?php
include 'sample50.php';
session_start();

$Car = $_SESSION['Cart'];

$name = $Car->getmember()->getName();

echo "hello:{$name}<BR>";

$list = $Car->getButlist();
foreach ($list as $k => $v){
    echo "{$k} : {$v}<br>";
}
//
$Car->addTtem('P042', 72);
$Car->addTtem('P142', 2);
$Car->addTtem('P049', 7);
$Car->rmItem('P003');
?>
<a href="sample54.php">Close</a>