<?php
            $servername = '127.0.0.1';
            $username = 'root';
            $password = 'root';
            $database = 'portfolio';
            
            //Connexion avec la bdd
            $conn = new mysqli($servername, $username, $password,$database);
            //echo 'Configuration du serveur' . '<br>' . 'Nom du serveur : ' . $servername . '<br> ' . 'Nom utilisateur : ' . ' ' . $username . '<br>' . 'Nom de base de donnée :' . ' ' . $database ; 
            
            //Vérification de la cohérence de la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
?>