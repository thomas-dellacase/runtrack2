<?php
session_start();

if(!(isset($_SESSION['name']))) {
    $_SESSION['name'] = array();
}
if (!empty($_POST)){
    $name = $_POST['name'];
}
array_push($_SESSION['name'], $name);

if (!empty($_POST)){
    "<pre>".print_r($_SESSION['name'])."</pre>";
}
if(isset($_POST['reset'])){
    unset($_SESSION['name']);
}


?>
        <form method="POST" action="index.php">
            <input type="text" name="name" placeholder="name">
            <input type="submit" value="submit" name="submit">
            <input type="submit" value="reset" name="reset">
        </form>
        