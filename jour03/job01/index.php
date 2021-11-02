<?php
$table = [200, 204, 173, 98, 171, 404, 459];
foreach ($table as $val){
    if(!($val % 2)){
        echo $val ."Ce nombre est paire <br>";
    }
    else{
        echo $val ."Ce nombre est impaire <br>";
    }
}
?>