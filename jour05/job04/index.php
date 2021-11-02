<?php
function calcul(int $a, $operation, int $b ){
    switch( $operation ){
        case '+';
            $result = $a + $b;
        break;
        case '-';
            $result = $a - $b;
        break;
        case '*';
            $result = $a * $b;
        break;
        case '/';
            $result = $a / $b;
        break;
        case '%';
            $result = $a % $b;
        break;
    }
    return $result;
}
echo(calcul(62, '-', 20));


/*function calcul(int $a, $operation, int $b ){
    if( $operation == '+'){
        $result = $a + $b;
    }
    elseif( $operation == '-'){
        $result = $a - $b;
    }
    elseif($operation == '*'){
        $result = $a * $b;
    }
    elseif($operation == '/'){
        $result = $a / $b;
    }
    elseif($operation == '%'){
        $result = $a % $b;
    }
    return $result;
}
echo (calcul(7, '*',6))*/

?>

