<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // VARIABLE STRING CHAINE DE CHARACTERE 
    $str = "Hello";
    // VARIABLE INTERGER NOMBRES ENTIER
    $int = 42;
    //VARIABLE FLOAT NOMBRE DECIMAL
    $float = 1.42069;
    // VARIABLE BOOLEEN TRUE OR FALSE , 1 OU 0 
    $bool = true;
    //PHP FUNCTION NATIVE GET TYPE RENVOIE LE TYPE DE VARRIABLE
    ?>
    <table>
        <thead>
            <th class="table">Type</th>
            <th class="table">Nom</th>
            <th class="table">Valeur</th>
        </thead>
        <tbody>
            <tr>
                <td class="table"><?php echo gettype($str); ?></td>
                <td class="table"><?php echo $str; ?></td>
                <td class="table"> Une varriable String contien une chaine de characte.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($int); ?></td>
                <td class="table"><?php echo $int; ?></td>
                <td class="table"> Une varriable Integer contien un nombre entier.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($float); ?></td>
                <td class="table"><?php echo $float; ?></td>
                <td class="table"> Une varriable Float contien un nombre decimal.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($bool); ?></td>
                <td class="table"><?php echo $bool; ?></td>
                <td class="table"> Une varriable Bool permet de definir un etat vrais ou faux.</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<style>
.table {
        border: 1px solid black;
        padding: 5px;
        border-collapse: collapse;
        text-align: center;
    }
</style>