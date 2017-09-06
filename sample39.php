<?php
if(!isset($_GET['filename']))
    header("Location:sample38.php");

$fliename = $_GET['filename'];
$content = $_GET['content'];

$fp = fopen("./div2/{$fliename}","w");
fwrite($fp,$content);
fclose($fp);

header("Location:./div2/{$fliename}");