<?php
    if(isset($_POST['submit'])){
        if($_POST['username'] == 'John' && $_POST['password'] == 'Rambo'){
            $res = "C’est pas ma guerre";
        }
        elseif(isset($_POST['submit'])){
            $res = "Votre pire cauchemar";
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
    <form method="POST" action="index.php">
        <input type="text" name="username" placeholder="mail"><br>
        <input type="text" name="password" placeholder="name"><br>
        <input type="submit" name="submit" value="envoyer"><br>
    </form>
<?php
    if(isset($_POST['submit'])){
        echo $res;
    }
?>
</body>
</html>