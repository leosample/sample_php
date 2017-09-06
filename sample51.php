<?php
include 'sample50.php';
session_start();

//$lod = rand(1,49);
//$_SESSION['id']=$lod;


$menber = new Menber( '001' , 'sample' , 1 );
$Car = new Carts( $menber );
$_SESSION['Cart'] = $Car;


$Car->addTtem( 'P001' , 51 );
$Car->addTtem( 'P003' , 34 );
$Car->edItem( 'P001' , 33 );

$list = $Car->getButlist();

echo "Member:{$menber->getName()},welcome!<BR>";
echo "<hr>";

foreach ( $list as $k => $v ) {
    echo "{$k}:{$v}<BR>";
}

?>

<a href="sample52.php">gogo</a>

