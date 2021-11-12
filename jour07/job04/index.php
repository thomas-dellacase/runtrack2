<?php
    if(isset($_GET['prenom'])){
        setcookie('prenom', $_GET['prenom'], time()+3600);
        header("location:index.php");
    }
    if(isset($_GET['deconnexion'])){
        setcookie('prenom', 0, 1,);
    } 
     if(!isset($_COOKIE['prenom'])){
         ?>

    <form method="GET" action="index.php">
        <input type="text" name="prenom">
        <button type="submit" name="submit" value='1'> Connexion </button>
    </form>


<?php }else{ ?>
    <p>Bonjour <?php echo $_COOKIE['prenom'] ?> . </p>
    <form action="index.php" method="GET">
        <button name="deconnexion" value="1"> Déconnexion </button>
</form>
<?php } ?>