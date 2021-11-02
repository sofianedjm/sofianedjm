<?php
header('Content-Type: application/json');

try {
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=portfolio', 'root', '');
    $bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
    echo $e;
}
?>