
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="number" name="nombre" placeholder="mail"><br>
        <input type="submit" name="submit" value="envoyer"><br>
    </form>
    <?php
        if(!empty($_GET)){
            if ($_GET['nombre']%2==0){
                echo "Nombre pair";
            }
            else{
                echo "Nombre impair";
            }
        }
    ?>
</body>
</html>
