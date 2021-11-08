<?php
             //Ca marche pas !!!!!!!!!!!!!
$str = "Hello";
$bool = true;
$int = 1;
$float = 0.5;

$col = 4;
$row = 5;

$type = array("String, Integer, Float, Boolean");
$name = array("$ str ,$ int, $ float, $ bool ");
$values = array("Hello, true, 1, 0.5");

echo '<table>';
$k = 0;
for ($i=1; $i<=$row; $i++) {
    echo '<tr>';
        echo '<th>';
        if($i==1){
            echo 'Type ';
        }
        if($i==2){
            echo 'Nom ';
        }
        if($i==3){
            echo 'Valeur';
        }
        echo '</th>';
    echo '</tr>';
        for ($j=1; $j<=$col; $j++){
            if($k == 4){
                $k = 0;
            }
            echo '<tr>';
            if($j==1){
                // $k = 0;
                echo '<td>';
                echo $type[$k];
                echo '</td>';
            }
            if($j==2){
                // $k = 0;
                echo '<td>';
                echo $name[$k];
                echo '</td>';
            }
            if($j==3){
                // $k = 0;
                echo '<td>';
                echo $values[$k];
                echo '</td>';
            }
            $k++;
            echo '</tr>';
        }
    }
echo '</table>'

?>

<table>

<tr>
    <th>cc</th>
    <th>cmoa</th>
</tr>
<tr>
    <td>slt</td>
    <td>bye</td>
</tr>

</table>