<?php
 $con = new mysqli("localhost","root","root","jour08");

 if($con->connect_errno){
     echo "Failed" . $con -> connect_error;
    }
     $query = $con->prepare("SELECT etages.nom as etage, salles.nom FROM salles INNER JOIN etages WHERE salles.id_etage = etages.id");
     $query->execute(); 

     
     $resultSet = $query->get_result();
     $titres= $resultSet->fetch_assoc();
     $result = $resultSet->fetch_all();

     
     echo "<pre>";
     var_dump($result);
     echo "</pre>";

    //  echo "<pre>";
    //  print_r($result);
    //  echo "</pre>";

    // La lounge ne marche pas 
?>


<table>

<thead>
<?php
foreach ($titres as $titre => $value) 
    {
        echo "<td>" . $titre . "</td>";
    }
?>
</thead>
<tbody>
    <tr>
    <?php
        foreach ($titres as $titre => $value) {
          echo "<td>" . $value . "</td>";
          
      }
    ?>
    </tr>
    <tr>
        <?php
          foreach ($result as $key => $values) 
          {
              echo "<tr>";
              foreach ($values as $key => $value) 
              {
                  echo "<td>" . $value . "</td>";
              }
              echo "</tr>";
          }
        ?>
    </tr>
</tbody>

</table>