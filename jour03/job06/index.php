<?php
$str = "Les choses que l'on possede finissent par nous posseder";

for ($i=0; isset($str[$i]); $i++){

}
$last = $i;
for ($i=$last-1; isset($str[$i]); $i--){
    echo $str[$i];
}
?>