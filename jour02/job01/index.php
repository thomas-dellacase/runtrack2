<?php
// BOUCLE FOR (POIT DE DEPART; POIT D'ARRET; INCREMENTATION)
for ($i=1; $i<1337; $i++) {
    // IF CREE UNE CONDITION POUR L'INCREMENTATION VOULUT
    if($i==42){
        //SI LA CONDITION ET VALIDE ON APLLIQUE 
        echo '<b><u>'. $i .'</b></u><br>';
    }
    //SI LA CONDITION N'EST PAS VALIDE 
    else {
        echo $i .'<br>';
    }
}
?>