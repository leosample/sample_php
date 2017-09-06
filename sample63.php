<?php
$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );
$account = $_GET['account'];
$passwd = password_hash( $_GET['passwd'] , PASSWORD_BCRYPT );
$relname = $_GET['relname'];

$sql = "INSERT INTO member (account,passwd,relname) VALUE ('{$account}','{$passwd}','{$relname}')";

$mysqli->query( $sql );
header( "Location:sample64.php" );