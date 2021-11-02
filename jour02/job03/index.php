<?php
for($i = 1; $i <=100; $i++){
    if($i <= 20){
        echo '<i>'. $i .'</i><br>';
    }
    //CE CODE ETQNT PRSEDURALE SI CE ELSEIF EST PLACER APRES LE PROCHAIN SON EFFET NE SERA PAS APPLIQUÉ
    elseif($i == 42){
        echo 'La Plateforme_ <br>';
    }
    elseif($i>=25 && $i<=50){
        echo '<u>'. $i .'</u><br>';
    }
    else{
        echo $i.'<br>';
    }
}
?>