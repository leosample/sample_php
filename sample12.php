<?php
$month = rand(1, 12);
switch ($month) {
    case 1 :
    case 3 :
    case 5 :
    case 7 :
    case 8 :
    case 10 :
    case 12 :
        echo "31天";
        break;
    case 4 :
    case 6 :
    case 9 :
    case 11 :
        echo "31天";
        break;
    case 2 :
        echo "28天";
        break;
    default:
        echo 'XX';
        break;
}