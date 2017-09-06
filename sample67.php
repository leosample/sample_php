<?php
if ( ! isset( $_GET['alter'] ) ) {
    header( "Location:sample62.php" );
}

$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );

$id = $_GET['id'];
$account = $_GET['account'];
$passwd = password_hash($_GET['passwd'],PASSWORD_BCRYPT);
$relname = $_GET['relname'];

$sql = "UPDATE member SET account='{$account}',passwd='{$passwd}',relname='{$relname}' WHERE id='{$id}'";
$ret = $mysqli->query( $sql );
header("Location:sample64.php");