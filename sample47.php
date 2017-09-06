<?php
//畫布
$img = imagecreatefromjpeg( "./image/pic01.jpg" );
//開始畫
$black = imagecolorallocate( $img , 255 , 255 , 255 );
imagettftext( $img , 24 , 0 , 40 , 200 , $black , "./fonts/fire.ttf" , "你好,sample." );
//記憶體 -> 輸出 (1.畫面2.檔案)
//header( "Content-type:image/jpeg" );
imagejpeg( $img ,"./div2/test.jpg");
//清除
imagedestroy( $img );


