<?php
$mysqli = @new mysqli( 'localhost' , 'root' , 'root' , gosql );

if ( $mysqli->connect_error ) {
    die( $mysqli->connect_error );
}

//$sql = "INSERT INTO member (account,passwd,relname) VALUE ('aaa',123,'sample')";
//$sql = "DELETE FROM member WHERE id=5";
//$sql = "UPDATE member SET account='bbb',relname='you' WHERE id=6";
$sql = "SELECT * FROM member";

$ret = $mysqli->query( $sql );

//$data = $ret->fetch_assoc();

//foreach ($data as $k => $v){
//    echo "{$k}:{$v}<br>";
//}
//while ($data = $ret->fetch_assoc()){
//    echo "{$data['id']}:{$data['account']}:{$data['relname']}<BR>";
//}

$data = $ret->fetch_object();
//var_dump($data);
echo $data->id;


//echo $ret->num_rows;

//echo $mysqli->affected_rows;

//var_dump( $ret );