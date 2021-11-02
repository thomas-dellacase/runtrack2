<?php
//BOUCLE FOR
for($i = 1; $i <3233; $i++){
    // IF AVEC PLUSIEUR CONDITION AMENANT AU MEME EFFET      || = OU   && = ET
    if($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233){
        echo '<br>';
    }
    //APLIQUE UNE 2EME CONDITION A LA BOUCLE LA 2EME CONDITION N'AURAT PAS LE MEME EFFET 
    elseif($i > 1337){
        echo '<br>';
    }
    else{
        echo $i."<br>";
    }
}
?>