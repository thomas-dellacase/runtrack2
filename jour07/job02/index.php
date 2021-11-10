<?php
$nbvisite = 0;
if(isset($_COOKIE['nbvisite'])){   
    $nbvisite = $_COOKIE['nbvisite'];
    $nbvisite +1;
}
setcookie('nbvisite', $nbvisite+1,  time()+3600);

if($nbvisite == 0){
    echo "Welcome";
    } else {
    echo "This is your visit number ".$nbvisite;
    }
    if(isset($_GET['reset'])){
        setcookie('nbvisite', 0);
    }
?>


<form method="GET" action="index.php">
<button type="submit" name="reset" value="submit">reset</button>
</form>

