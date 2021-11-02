<?php

try {
    $bdd = new PDO('mysql:host="127.0.0.1";dbname=argent;charset=utf8', 'root', 'root');
}
catch(Exception $e){
    die ('Ereur :'. $e->getMessage());
}

?>