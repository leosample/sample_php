<?php
//畫布
$imgS = imagecreatefromjpeg( "./image/pic02.jpg" );
$imgT = imagecreate( 200 , 200 );
//開始畫
$imgSW = imagesx($imgS);
$imgSH = imagesy($imgS);
//echo "{$imgSW} X {$imgSH}";


if($imgSH > $imgSW){
    $imgTH = 200;
    $imgTW = $imgSW * $imgTH / $imgSH ;
}else{
    $imgTW = 200;
    $imgTH = $imgSH * $imgTW / $imgSW ;
}

$whilt = imagecolorallocate($imgT,255,255,255);
imagefilledrectangle($imgT,0,0,200,200,$whilt);
//echo "{$imgTW} X {$imgTH}";
imagecopyresized($imgT,$imgS,0,0,0,0,$imgTW,$imgTH,$imgSW,$imgSH);
// $black = imagecolorallocate( $img , 255 , 255 , 255 );
// imagettftext( $img , 24 , 0 , 40 , 200 , $black , "./fonts/fire.ttf" , "你好,sample." );
//記憶體 -> 輸出 (1.畫面2.檔案)
header( "Content-type:image/jpeg" );
 imagejpeg( $imgT );
//清除
imagedestroy( $imgS );
imagedestroy( $imgT );