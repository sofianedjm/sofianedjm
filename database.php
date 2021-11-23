<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio','root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo " Connexion to the database : OK";
}
catch(Exception $e){
    die ('Connexion error :'. $e->getMessage());
}

?>