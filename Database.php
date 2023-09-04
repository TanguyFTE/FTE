<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=tanguy;charset=utf8;','root','root');
}catch(Exception $e){
    die('une erreur a été trouvée:'.$e->getMessage());
}
?>