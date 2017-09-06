<?php
include 'sample50.php';
session_start();

$var1 = 10;
$var2 = array( 3 , 1 , 6 );
$var3 = false;
$var4 = new sample;

$_SESSION['var1'] = $var1;
$_SESSION['var2'] = $var2;
$_SESSION['var3'] = $var3;
$_SESSION['var4'] = $var4;

$var4->var1 = array( 13 , 41 , 52 );


?>

<a href="sample56.php">gogo</a>
