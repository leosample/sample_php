<?php
$json = file_get_contents( 'http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx' );
$rel = json_decode( $json );
//var_dump( $rel );
//
$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );

foreach ( $rel as $data ) {
    $name = $data->Name;
    $tel = $data->Tel;
    $addr = $data->Address;
    $img = $data->PicURL;
    $coord = $data->Coordinate;//xxx.xxx , yyy.yyy
    $latlng = explode( ',' , $coord );
    $lat = $latlng[0];
    $lng = $latlng[1];
    $feature = $data->FoodFeature;
    $city = $data->City;
    $town = $data->Town;
    $sql = "INSERT INTO gotw (`name`,tel,addr,img,lat,lng,feature,city,town) VALUE ('{$name}','{$tel}','{$addr}','{$img}','{$lat}','{$lng}','{$feature}','{$city}','{$town}')";
    $mysqli->query($sql);
}

echo 'OK';