<?php
//    engaz = array(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z);
//    function preCheck($id){
//        if(strlen($id)==10){
//            if(){
//                if(){
//                    if(){
//
//                        return 1;
//                    }
//                    return 0;
//                }
//                return 0;
//            }
////            for($i = 0;$i<26;$i++){
////
////            }
//            return 0;
//        }
//        return 0;
//    }

    if(isset($_GET['twid'])){
        $twid = $_GET['twid'];

        if(preg_match('/^[A-Z][12][0-9]{8}$/',$twid)){
            $id0 = $twid[0];
            $twarea = 'ABCDEFGHJKLMNOQRSTUVXYWZIO';
            $n12 = strpos($twarea,$id0)+10;
            $n1 = $n12[0];
            $n2 = $n12[1];
            $n3 = $twid[1];
            $n4 = $twid[2];
            $n5 = $twid[3];
            $n6 = $twid[4];
            $n7 = $twid[5];
            $n8 = $twid[6];
            $n9 = $twid[7];
            $n10 = $twid[8];
            $n11 = $twid[9];

            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 + $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1 ;
            if($sum % 10 == 0){
                echo "OK";
            }else{
                echo 'XX';
            }
        }else{
            echo'請輸入正確的身分證字號';
        }
    }
?>
<form>
    <input name="twid" />
    <input type="submit" value="check" />
</form>