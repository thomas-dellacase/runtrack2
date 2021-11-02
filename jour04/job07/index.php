<form action="" method="GET">
    <label for="largeur">Largeur</label>
    <input type="largeur" name="largeur" id="largeur">

    <label for="hauteur">Hauteur</label>
    <input type="hauteur" name="hauteur" id="hauteur">
    <button type="submit" name="submit">Print</button>
</form>

<?php
    if(!empty($_GET['largeur']) == 10 && $_GET['hauteur'] == 5){
        echo "<pre>
            /\
           /__\
          /____\
         /______\
        /________\
        |        |
        |        |
        |        |
        |        |
        |________| </pre>";
    }
    elseif(!empty($_GET['largeur']) == 20 && $_GET['hauteur'] == 10){
        echo "<pre>    
                                 /\
                                /__\
                               /____\
                              /______\
                             /________\
                            /__________\
                           /____________\
                          /______________\
                         /________________\
                        /__________________\
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |                  |
                        |__________________|  </pre>";
                            }
                        ?>