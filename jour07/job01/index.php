<?php
session_start();
//$_SESSION['nbvisites'];
if(isset($_GET['reset'])){
    session_unset();
    //$_SESSION['nbvisites'] = 0;
}

if(!(isset($_SESSION['nbvisites']))){
    $_SESSION['nbvisites'] = 0; 
}
else{
    $_SESSION['nbvisites'] ++ ;
}
echo "Vous avez visitedé cette pages ".$_SESSION['nbvisites']." fois.";

?>
<form method="GET" action="index.php">
<button type="submit" name="reset" value="submit">Valider</button>
</form>
