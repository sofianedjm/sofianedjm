<?php 

/* Page ajout d'un commentaire - commentaire.php */

setlocale(LC_TIME, 'fra_fra');
session_start();

if (isset($_POST['submit']))
{
    try {
        
        //instance de la PDO
        $bdd = new PDO('mysql:host=localhost;port=3306;dbname=portfolio', 'root', 'root');
        $bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e){
        echo $e;
    }
    
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $query = "INSERT INTO formulaire_data(nom,email,sujet,message) VALUES('$nom' , '$email', '$sujet' , '$message')";
    $res = $bdd->prepare($query);
    $res->execute(); 
    header("Location: ../index.html");
}else
{
    echo 'Commentaire non envoyé';
    header("Location: ../index.html");
}
?>