<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'portfolio';
            
            //Connexion avec la bdd
            $conn = new mysqli($servername, $username, $password,$database);
            echo 'Configuration du serveur' . '<br>' . 'Nom du serveur : ' . $servername . '<br> ' . 'Nom utilisateur : ' . ' ' . $username . '<br>' . 'Nom de base de donnée :' . ' ' . $database ; 
            
            //Vérification de la cohérence de la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
?>