<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voy" => ['a', 'e', 'i', 'o', 'u', 'y', 'O'],
    "con" => ['z','r','t','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n']
];
$Vcount= 0;
$Ccount= 0;

for($i=0; isset($str[$i]); $i++){
    foreach($dic["voy"] as $voyelle){
        if($str[$i]==$voyelle){
            $Vcount = $Vcount + 1;
        }
    }
}
for($i=0; isset($str[$i]); $i++){
    foreach($dic["con"] as $consonne){
        if($str[$i]==$consonne){
            $Ccount = $Ccount + 1;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelle</th>
                <th>consonne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $Vcount; ?></td>
                <td><?php echo $Ccount; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>