<?php
$mysqli = new mysqli('localhost','root','root','gosql');
$account=$_GET['account'];
$id = $_GET['id'];
$sql="SELECT account FROM member WHERE id!={$id} and account='{$account}'";
$rel = $mysqli->query($sql);
echo $rel->num_rows;