<?php

    try{

        $bdd = new PDO('mysql:host=localhost;dbname=tchat;charset=utf8','root','');

    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sms=$_POST['sms2'];
    $nom=$_POST['users2'];

    $donnee = $bdd->prepare('INSERT into tchat(Noms,Messages,Dates) values(?,?,now())');
    $donnee ->execute(Array($nom,$sms));

    $donnee->closeCursor();
    header('Location: index.php');


?>