
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
    <input type="text" name="mail" placeholder="mail" value="1" ><br>
    <input type="text" name="name" placeholder="name" value="2"><br>
    <input type="date" name="date" placeholder="date" value="3"><br>
    <input type="submit" name="submit" value="envoyer"><br>
    </form>
    <table>
        <thead>
            <tr>
                <th>
                    Key
                </th>
                <th>
                    Values
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = 0;
            foreach($_POST as $key => $val){
                echo "<tr>";
                    echo "<td>";
                        echo $key;
                    echo "</td>";
                    echo "<td>";
                        echo $val;
                    echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>