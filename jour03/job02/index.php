<?php
$str ="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
echo $str.'<br>';
//$tab = str_split($str);
//var_dump($tab);
for ($i = 0; $i <=75; $i++){
    $tab = str_split($str);
    if($i%2==1){
        echo ' ';
    }
    else{
        echo $str[$i];
    }
}


?>