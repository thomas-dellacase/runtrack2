<?php
//$tab = ['abc', 'def', 'hij', 'klm', 'nop'];
//$croissant = false;

function bubblesort($tab){
    $croissant = false;

                                                //sans $croissant avec le formulaire
   /*if($_GET['bool'] == 'true'){
        for($i=0;$i<count($tab);$i++){
            echo $tab[$i]." ";
        }

   }
   elseif($_GET['bool'] == 'false'){
        rsort($tab);
        for($i=0;$i<count($tab);$i++){
            echo ($tab[$i])." ";
    }
}

}*/
                                                // sans le formulaire mais avec croissant 
    if($croissant == true){
        foreach($tab as $key => $val){
            echo("$val<br>");
            
            }
    }
    elseif($croissant == false ){
        rsort($tab);
            foreach($tab as $key => $val){
                echo "$val<br>";
            }
        }
}


?>
    <form method="GET" action="index.php">
    <label for="bool">True or false</label>
    <select name="bool" id="bool">
        <option value="true" name="true">true</option>
        <option value="false" name="false">false</option>
    </select>
    <button type="submit" value="submit">Valider</button>
    </form>
    <br>

<?php echo  bubblesort(['abc', 'def', 'hij', 'klm', 'nop']);?>