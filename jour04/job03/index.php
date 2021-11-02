
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
    <input type="text" name="mail" placeholder="mail" value="" ><br>
    <input type="text" name="name" placeholder="name" value=""><br>
    <input type="submit" name="submit" value="envoyer"><br>
    </form>
    <?php
    $result = 0;

    foreach($_POST as $val){
        $result ++;
    }
    echo "Il ya .' $result '. POST request."
    ?>
</body>
</html>