<?php
function occurances($str, $char){
    $count= 0;
    for($i=0;isset($str[$i]);$i++){
            if(($char) == $str[$i]){
                $count ++;
            }
        }
        return $count;
    }
echo "he who controls the spice controls the universe";
echo (occurances("he who controls the spice controls the universe", "o"));
?>