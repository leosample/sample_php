<?php
//$sum = rand(0, 100);
//echo "sum: $sum <br>";
//if ($sum >= 60) {
//    echo '60';
//} else {
//    echo '59';
//}

$sum = rand(99, 100);
echo "sum = $sum <br>";
if ($sum == 100) {
    echo 'AA';
} else {


    if ($sum >= 90) {
        echo 'A';
    } else {
        if ($sum >= 80) {
            echo 'B';
        } else {
            if ($sum >= 70) {
                echo 'C';
            } else {
                if ($sum >= 60) {
                    echo 'D';
                } else {
                    echo 'E';
                }
            }
        }
    }
}