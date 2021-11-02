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

foreach ($_GET as $key => $val){
    if($_GET['select'] == "gras"){
        echo gras($val);
    }
    elseif($_GET['select'] == "cesar"){
        echo cesar($val, 2);
    }
    elseif($_GET['select'] == "laplateforme"){
        echo laplateforme($val);
    }
}
echo '<pre>';
print_r($_GET);
echo '</pre>';
// function ne cible pas le mot
function gras($str){
    $maj = "AZERTYUIOPQSDFGHJKLMWXCVBN";
    for($i=0; isset($maj[$i]); $i++){
        if($str[0] == $maj[$i]){
            return "<b>$str</b>";
        }
    
    }
}
// function ne cible pas le mot
function laplateforme($str){
    $i = -1;
    $j = -2;
    if($str[$i] == "e" && $str[$j] == "m" ){

    }
    return "$str _";
}
// function OK
function cesar($str, $decal){
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
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