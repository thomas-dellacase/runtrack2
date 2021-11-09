<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET" action="index.php">
        <label for="str">String</label>
        <input type="text" name="str" id='str'>
        <select name="select" id="select">
            <option value="gras" name="gras">Gras</option>
            <option value="cesar" name="cesar">Cesar</option>
            <option value="laplateforme" name="laplateforme">Laplateforme</option>
        </select>
        <button type="submit" value="submit">Valider</button>
<?php
//ya pas tout qui marche 
foreach ($_GET as $key => $val){
    if($_GET[$key] == "gras"){
        gras($_GET['str']);
    }
    elseif($_GET[$key] == "cesar"){
        cesar($_GET['str'], 2);
    }
    elseif($_GET[$key] == "laplateforme"){
        laplateforme($_GET['str']);
    }
}
//echo '<pre>';
//print_r($_GET);
//echo '</pre>';


function gras($str){
    $maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
    for($i=0; isset($str[$i]); $i++){
        for($j=0; isset($maj[$j]); $j++){
            if($str[$i] == $maj[$j] && $str[$i-1] == " "){
                echo "<b>";
            }
        }
    echo $str[$i];
    if($str[$i] == " " || $str[$i] =="."){
        echo "</b>";
    }
}
}
// function _ avant et apres le mot
function laplateforme($str){
    $i = -1;
    $j = -2;
    if($str[$i] == "e" && $str[$j] == "m" ){

    }
    return "$str _";
}
// function OK
function cesar($str, $decal){
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIKLMNOPQRSTUVWXYZ";
    $i = 0;
    $j = 0;
    for($i = 0; isset($str[$i]); $i ++){
        for($j = 0; isset($alphabet[$j]); $j++){
            if($str[$i] == $alphabet[$j]){
                $j = $j +$decal;
                $str[$i] = $alphabet[$j];
            }
        }
    }
    return $str;
}

?>

    </form>

</body>
</html>