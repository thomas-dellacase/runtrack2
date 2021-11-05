<!-- Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes
et 3 colonnes représentant la grille. Au début de la partie, chacune des
cases contient un bouton de type submit dont la valeur est “-”. Si un joueur
clique sur ce bouton, le bouton est remplacé par un “O” ou par un “X”. C’est
le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et
réinitialisez la partie. Si toutes les cases ont été cliquées et que personne
n’a gagné, affichez “Match nul” et réinitialisez la partie. Un bouton
“réinitialiser la partie” présent en dessous de la grille permet également de
réinitialiser la partie à tout moment. -->

<?php
session_start();

// var_dump($_SESSION['case'])."<br>";
//var_dump($_POST);
//$game = '-';
if(isset($_POST['reset'])){
    session_unset();

}

if(!(isset($_SESSION['nbvisites']))){ 
    //echo 'coucou1';
    $_SESSION['nbvisites'] = 0; 
    echo "Tour du joueur X";
    //var_dump($_SESSION);
}
else{
    //echo 'coucou2';
    $_SESSION['nbvisites']++;
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit0'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit0'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit1'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit1'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit2'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit2'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit3'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit3'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit4'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit4'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit5'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit5'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit6'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit6'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit7'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit7'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

if($_SESSION['nbvisites']%2==0 && isset($_POST['submit8'])){
    //echo "cc1";
    $joueur = 1;
    //var_dump($joueur);
    echo "Tour du joueur X <br>";
    //$game = 'O';
}
elseif($_SESSION['nbvisites']%2!=0 && isset($_POST['submit8'])){
    //echo "cc2";
    $joueur = 2 ;
    //var_dump($joueur);
    echo "Tour du joueur O <br>";
    //$game = 'X';
}

$_SESSION['case'] = array('case1', 'case2', 'case3', 
                          'case4', 'case5', 'case6', 
                          'case7', 'case8', 'case9');

if(!(isset($_POST['submit']))){
    $_SESSION['case'] = '-';
}

if(isset($_POST['submit0']) && $joueur == 1){
    echo "coucouO <br>";
    $_SESSION['case1'] = 'O';    
}
elseif(isset($_POST['submit0']) && $joueur == 2){
    $_SESSION['case1'] = 'X';
}

if(isset($_POST['submit1'])&& $joueur == 1){
    $_SESSION['case2'] = 'O'; 
}
elseif(isset($_POST['submit1'])&& $joueur == 2){
    $_SESSION['case2'] = 'X';
}

if(isset($_POST['submit2'])&& $joueur == 1){
    $_SESSION['case3'] = 'O';    
}
elseif(isset($_POST['submit2'])&& $joueur == 2){
    $_SESSION['case3'] = 'X';
}

if(isset($_POST['submit3'])&& $joueur == 1){
    $_SESSION['case4'] = 'O';    
}
elseif(isset($_POST['submit3'])&& $joueur == 2){
    $_SESSION['case4'] = 'X';
}

if(isset($_POST['submit4'])&& $joueur == 1){
    $_SESSION['case5'] = 'O';    
}
elseif(isset($_POST['submit4'])&& $joueur == 2){
    $_SESSION['case5'] = 'X';
}

if(isset($_POST['submit5'])&& $joueur == 1){
    $_SESSION['case6'] = 'O';    
}
elseif(isset($_POST['submit5'])&& $joueur == 2){
    $_SESSION['case6'] = 'X';
}

if(isset($_POST['submit6'])&& $joueur == 1){
    $_SESSION['case7'] = 'O';    
}
elseif(isset($_POST['submit6'])&& $joueur == 2){
    $_SESSION['case7'] = 'X';
}

if(isset($_POST['submit7'])&& $joueur == 1){
    $_SESSION['case8'] = 'O';    
}
elseif(isset($_POST['submit7'])&& $joueur == 2){
    $_SESSION['case8'] = 'X';
}

if(isset($_POST['submit8'])&& $joueur == 1){
    $_SESSION['case9'] = 'O';    
}
elseif(isset($_POST['submit8'])&& $joueur == 2){
    $_SESSION['case9'] = 'X';
}

?>

<form method="post" action="index.php">
<table>
    <tr>
        <td><button type='submit' name='submit0'><?php 
        if(isset($_SESSION['case1']))
        echo $_SESSION['case1'];
        else{
            echo '-';
        }
        ?></button></td>
        <td><button type='submit' name='submit1'>
            <?php if(isset($_SESSION['case2']))
                echo $_SESSION['case2'];
            else{
                echo '-';
            }
            ?></button></td>
        <td><button type='submit' name='submit2'>
            <?php if(isset($_SESSION['case3']))
                echo $_SESSION['case3'];
            else{
                echo '-';
            }
            ?></button></td>
    </tr>
    <tr>
        <td><button type='submit' name='submit3'>
            <?php if(isset($_SESSION['case4']))
                echo $_SESSION['case4'];
            else{
                echo '-';
            }
            ?></button></td>
        <td><button type='submit' name='submit4'>
            <?php if(isset($_SESSION['case5']))
                echo $_SESSION['case5'];
            else{
                echo '-';
            }
            ?></button></td>
        <td><button type='submit' name='submit5'>
            <?php if(isset($_SESSION['case6']))
                echo $_SESSION['case6'];
            else{
                echo '-';
            }
            ?></button></td>
    </tr>
    <tr>
        <td><button type='submit' name='submit6'>
            <?php if(isset($_SESSION['case7']))
                echo $_SESSION['case7'];
            else{
                echo '-';
            }
            ?></button></td>
        <td><button type='submit' name='submit7'>
            <?php if(isset($_SESSION['case8']))
                echo $_SESSION['case8'];
            else{
                echo '-';
            }
            ?></button></td>
        <td><button type='submit' name='submit8'>
            <?php if(isset($_SESSION['case9']))
                echo $_SESSION['case9'];
            else{
                echo '-';
            }
            ?></button></td>
    </tr>
    
</table>
<?php
    if(isset($_SESSION['case1']) && $_SESSION['case1'] == 'X' && isset($_SESSION['case4']) && $_SESSION['case4'] == 'X'
     && isset($_SESSION['case7']) && $_SESSION['case7'] == 'X'){
        echo "Joueur X win Cheh 1<br>";
    }
    elseif(isset($_SESSION['case1']) && $_SESSION['case1'] == 'O' && isset($_SESSION['case4']) && $_SESSION['case4'] == 'O'
     && isset($_SESSION['case7']) && $_SESSION['case7'] == 'O'){
        echo "Joueur O win Cheh 1<br>";
    }
    elseif(isset($_SESSION['case2']) && $_SESSION['case2'] == 'X' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'X'
     && isset($_SESSION['case8']) && $_SESSION['case8'] == 'X'){
        echo "Joueur X win Cheh 2<br>";
    }
    elseif(isset($_SESSION['case2']) && $_SESSION['case2'] == 'O' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'O'
     && isset($_SESSION['case8']) && $_SESSION['case8'] == 'O'){
        echo "Joueur O win Cheh 2<br>";
    }
    elseif(isset($_SESSION['case3']) && $_SESSION['case3'] == 'X' && isset($_SESSION['case6']) && $_SESSION['case6'] == 'X'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'X'){
        echo "Joueur X win Cheh 3<br>";
    }
    elseif(isset($_SESSION['case3']) && $_SESSION['case3'] == 'O' && isset($_SESSION['case6']) && $_SESSION['case6'] == 'O'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'O'){
        echo "Joueur O win Cheh 3<br>";
    }
    elseif(isset($_SESSION['case1']) && $_SESSION['case1'] == 'X' && isset($_SESSION['case2']) && $_SESSION['case2'] == 'X' 
    && isset($_SESSION['case3']) && $_SESSION['case3'] == 'X'){
        echo "Joueur X win Cheh 4<br>";
        //var_dump($_SESSION['case1'],$_SESSION['case2'],$_SESSION['case3']);
    }
    elseif(isset($_SESSION['case1']) && $_SESSION['case1']== 'O' && isset($_SESSION['case2']) && $_SESSION['case2'] == 'O' &&
     isset($_SESSION['case3']) && $_SESSION['case3'] == 'O'){
        echo "Joueur O win Cheh 4<br>";
    }
    elseif(isset($_SESSION['case4']) && $_SESSION['case4'] == 'X' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'X'
     && isset($_SESSION['case6']) && $_SESSION['case6'] == 'X'){
        echo "Joueur X win Cheh 5<br>";
    }
    elseif(isset($_SESSION['case4']) && $_SESSION['case4'] == 'O' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'O'
     && isset($_SESSION['case6']) && $_SESSION['case6'] == 'O'){
        echo "Joueur O win Cheh 5<br>";
    }
    elseif(isset($_SESSION['case7']) && $_SESSION['case7'] == 'X' && isset($_SESSION['case8']) && $_SESSION['case8'] == 'X'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'X'){
        echo "Joueur X win Cheh 6<br>";
    }
    elseif(isset($_SESSION['case7']) && $_SESSION['case7'] == 'O' && isset($_SESSION['case8']) && $_SESSION['case8'] == 'O'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'O'){
        echo "Joueur O win Cheh 6<br>";
    }
    elseif(isset($_SESSION['case1']) && $_SESSION['case1'] == 'X' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'X'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'X'){
        echo "Joueur X win Cheh 7<br>";
    }
    elseif(isset($_SESSION['case1']) && $_SESSION['case1'] == 'O' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'O'
     && isset($_SESSION['case9']) && $_SESSION['case9'] == 'O'){
        echo "Joueur O win Cheh 7<br>";
    }
    elseif(isset($_SESSION['case3']) && $_SESSION['case3'] == 'X' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'X'
     && isset($_SESSION['case7']) && $_SESSION['case7'] == 'X'){
        echo "Joueur X win Cheh 8<br>";
    }
    elseif(isset($_SESSION['case3']) && $_SESSION['case3'] == 'O' && isset($_SESSION['case5']) && $_SESSION['case5'] == 'O'
     && isset($_SESSION['case7']) && $_SESSION['case7'] == 'O'){
        echo "Joueur O win Cheh 8<br>";
    }
    elseif(isset($_SESSION['case1']) && isset($_SESSION['case2']) && isset($_SESSION['case3'])
                && isset($_SESSION['case4']) && isset($_SESSION['case5']) && isset($_SESSION['case6']) 
                && isset($_SESSION['case7']) && isset($_SESSION['case8']) && isset($_SESSION['case9'])){
                    echo "Math nul vous etes bidon !!! <br>";
                }
?>
<button type="submit" name="reset" value="reset">Reset</button><br>

</form>

