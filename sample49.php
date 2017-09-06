<?php

class pepo
{
    var $color;
    private $year;
    var $gb;

    //建構式/方法/子＝>物件初始化
    function __construct($y=0)
    {
        $a = (int)$y;
        $this->year = $a;
    }

    function yearUp()
    {
        $this->year = $this->year == 0 ? 1 : $this->year *= 1.4;
    }

    function yearDown()
    {
        $this->year = $this->year < 0 ? 0 : $this->year *= 0.7;
    }

    function setyear()
    {
        return $this->year;
    }
}

$my = new pepo;
$ur = new pepo('vses');
$my->yearUp();
$my->yearDown();
$my->yearUp();

$ur->yearUp();
$ur->yearDown();
$ur->yearUp();
echo "{$my->setyear()}<BR>";
echo $ur->setyear();

//$ur = new pepo;
//
////$my->year = 1;
////$ur->year = 1;
//
//function goyear($cc)
//{
//    $aho = rand( 0 , 20 );
//    for ( $i = 0; $i <= $aho; $i++ ) {
//        if ( ( $v = rand( 0 , 1 ) ) == 1 ) {
//            $cc->yearUp();
//        } else {
//            $cc->yearDown();
//        }
//    }
//}
//
//
////$my->yearUp();
////$my->yearUp();
////$my->yearUp();
////$my->yearUp();
////
////
////$ur->yearUp();
////$ur->yearDown();
////$ur->yearUp();
////$ur->yearUp();
//
//
//goyear($my);
//goyear($ur);
//
//echo "my:{$my->setyear()}<br>";
//echo "ur:{$ur->setyear()}<br>";
