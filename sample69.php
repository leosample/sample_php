<?php
    $mysqli = new mysqli('localhost','root','root','gosql');
    $account=$_GET['account'];
    $sql="SELECT account FROM member WHERE account='{$account}'";
    $rel = $mysqli->query($sql);
    echo $rel->num_rows;