<?php
//    $sum = 0 ;
//    $i = 1 ;
//    while($i<=10){
//        $sum += $i;
//        $i++;
//    }
//    echo $sum;
    echo '<table border="1" >';

    for($j=0;$j<10;$j++){
        echo '<tr>';
        for($i=1;$i<=10;$i++){
            $v = $j*10 + $i;
            for($k=2;$k<$v;$k++){
                if($v % $k==0){
                    echo "<td width=50 bgcolor='#ffd700'>{$v}</td>";
                    break;
                }else{
                    echo "<td width=50>{$v}</td>";
                    break;
                }
            }
        }
        echo '</tr>';
    }
    echo '</table>';
?>




