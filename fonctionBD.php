<?php
function connexion(){
    try{
        global $bdd;
        $bdd=new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');
    }
    catch (exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}
?>