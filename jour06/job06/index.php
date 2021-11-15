<?php
$css = "style0.css";
if(isset($_GET['style'])){
    if($_GET['style'] == 'style1'){
        $css = 'style1.css';
    }
    elseif($_GET['style'] == 'style2'){
        $css = 'style2.css';
    }
    elseif($_GET['style'] == 'style3'){
        $css = 'style3.css';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo $css; ?> type="text/css">
    <title>Document</title>
</head>
<body>
    <?php echo $css ." choisit" ?>
<form method="GET" action="index.php">
    <label for="style"></label>
    <select name="style" id="style">
        <option value="style1" name="style1">style1</option>
        <option value="style2" name="style2">style2</option>
        <option value="style3" name="style3">style3</option>
    </select>
        <button type="submit" value="submit">Valider</button>
</form>
</body>
</html>