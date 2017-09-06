<?php

//JSON => 陣列 => 不是PHP的陣列

$a = array(1,2,3,4,5,6);
//echo json_encode($a);
//echo '<hr>';

$b = array(1,'cname'=>'sample',3,'id'=>4,5,6); //object
//echo json_encode($b);
//echo '<hr>';

class membet{
    var $name , $id;
}

class MyCart {
    var $list , $member;
}

$m1 = new membet(); $m1->id='001'; $m1->name='sample';
$cart1 = new MyCart(); $cart1->member=$m1;
$cart1->list = array('P001'=>'12','P003'=>3,'P008'=>13);

$m2 = new membet(); $m2->id='002'; $m2->name='cat';
$cart2 = new MyCart(); $cart2->member=$m2;
$cart2->list = array('P029'=>'13','P036'=>9,'P033'=>53);

$m3 = new membet(); $m3->id='003'; $m3->name='soul';
$cart3 = new MyCart(); $cart3->member=$m3;
$cart3->list = array('P001'=>'12','P003'=>3,'P008'=>13);

$a=array($cart1,$cart2,$cart3);

echo json_encode($a);
//echo '<hr>';
//foreach ($cart1->list as $k => $v){
//    echo "{$k}:{$v}<br>";
//}