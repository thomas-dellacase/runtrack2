<?php
for ($i=1; $i<=100; $i++){
    //CONDITION AVEC UN MODULO PERT DE SAVOIR SI UN CHIFFRE EST LE MULTIPLE D'UN AUTRE 
    if(!($i %3) && !($i %5)){
        echo "FizzBuzz<br>";
    }
    if(!($i %3)){
        echo "Fizz <br>";
    }
    elseif(!($i %5)){
        echo "Buzz<br>";
    }
    else{
        echo $i . '<br>';
    }
}
?>