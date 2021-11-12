<?php
 $con = new mysqli("localhost","root","root","jour08");

 if($con->connect_errno){
     echo "Failed" . $con -> connect_error;
    }
     $query = $con->prepare("SELECT nom, naissance FROM `etudiants` WHERE naissance BETWEEN '1998/01/01/' AND '2018/12/31'");
     $query->execute(); 

     
     $resultSet = $query->get_result();
     $titres= $resultSet->fetch_assoc();
     $result = $resultSet->fetch_all();

    //  echo "<pre>";
    //  print_r($result);
    //  echo "</pre>";

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
