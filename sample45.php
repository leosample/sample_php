<?php
$setcolor = $_GET['setcolor'];
//畫布
$img = imagecreate(400, 80);
//開始畫
$yellow = imagecolorallocate($img, 255, 255, 0);
$red = imagecolorallocate($img, 255, 0, 0);
$witte = imagecolorallocate($img, 0,0,0);

imagefilledrectangle($img, 0, 0, 400, 80, $yellow);
imagefilledrectangle($img, 0, 0, (int)(400*$setcolor/100), 80,  $red);
//記憶體 -> 輸出 (1.畫面2.檔案)
header("Content-type:image/jpeg");
imagejpeg($img);
//清除
imagedestroy($img);


