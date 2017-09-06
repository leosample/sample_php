<?php
$year = rand(1800, 2020);
echo "$year 年<br>";
if ($year % 4 == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo '這是閏年';
        } else {
            echo '這不是閏年';
        }
    } else {
        echo '這是閏年';
    }
} else {
    echo '這不是閏年';
}