<?php
function leetspeak($str){
    $replace = ['a' => '4', 'b' => '8', 
                'e' => '3', 'g' => '6', 
                'l' => '1', 's' => '5', 
                't' => '7', 'A' => '4', 
                'B' => '8', 'E' => '3', 
                'G' => '6', 'L' => '1', 
                'S' => '5', 'T' => '7'];
    return (str_replace(array_keys($replace), $replace, $str));  
}
echo (leetspeak("WASUP leet my men come back to CS 1.6"));
?>



<?php
function leetspeak($str) {
    $strarray = (str_split($str));
    $result = "";
    foreach($strarray as $char) {
        switch(strtolower($char)) {
            case 'a';
                $result = $result . "4";
                break;
            case 'b';
                $result = $result . "8";
                break;
            case 'e';
                $result = $result . "3";
                break;
            case 'g';
                $result = $result . "6";
                break;
            case 'l';
                $result = $result . "1";
                break;
            case 's';
                $result = $result . "5";
                break;
            case 't';
                $result = $result . "7";
                break;
            default: $result = $result . $char;
                break;
        }
        
    }
    return $result;
}
    echo(leetspeak("WASUP leet my men come back to CS 1.6"));*/
    
?>

<?php
/*function leetspeak($str){
    $strtable =(str_split($str));
    $result = "";
    foreach($strtable as $char){
        if(strtolower($char) == 'a'){
            $result = $result . '4';
        }
        elseif(strtolower($char) == 'b'){
            $result = $result . '8';
        }
        elseif(strtolower($char) == 'e'){
            $result = $result . '3';
        }
        elseif(strtolower($char) == 'g'){
            $result = $result . '6';
        }
        elseif(strtolower($char) == 'l'){
            $result = $result . '1';
        }
        elseif(strtolower($char) == 's'){
            $result = $result . '5';
        }
        elseif(strtolower($char) == 't'){
            $result = $result . '7';
        }
        else{
            $result = $result . $char;
        }
        
    }
 return $result;
}
echo (leetspeak("WASUP leet my men come back to CS 1.6"));*/
?>

