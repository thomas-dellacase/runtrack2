
<?php
    $num = 2 ;
    while ($num < 1000 ){
        $div=0;
        for ( $i=1;$i<=$num;$i++){
            if (($num%$i)==0){
                $div++;
            }
        }
        if ($div<3){
            echo $num."<br>";
            }
        $num=$num+1;
    }
?>