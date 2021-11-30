<?php

include_once("../sofianedjm/Models/Contact.php");


class ContactRepository

{
    /**
     * Attribut contenant l'instance PDO
     */
    private $bdd;

    /**
     * Attribut statique qui contiendra l'unique instance de Post
     */
    private static $instance = null;

    /**
     * Constructeur : effectue la connexion à la base de données.
     */
    public function __construct()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bdd = $bdd;
        } catch (Exception $e) {
            die('Connexion error :' . $e->getMessage());
        }
    }
    

    /**
     * Méthode permettant de récupérer un modèle car le constructeur est privé
     */
    public static function getPost()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Retourne les 5 derniers messages des formulaires
     * @return [array] Contient les informations des messages
     */
    public function getNb5Formulaire()
    {
        $req = $this->bdd->prepare('SELECT * FROM formulaire ORDER BY id DESC LIMIT 5');
        $req->execute();
        return $this->buildObject($req->fetchAll());
    }

    /**
     * Ajoute un formulaire dans la BDD
     */
    public function create_formulaire()
    {
        $req = $this->bdd->prepare("INSERT INTO formulaire (id,nom,email, sujet, message) VALUES (id,'$_POST[nom]','$_POST[email]','$_POST[sujet]','$_POST[message]') ");
        $req->execute();
        return $req;
    }

    /**
     * Retourne le nombre de message dans la base de données
     * @return [int]
     */
    public function getNbFormulaire()
    {
        $query = "SELECT COUNT(*) FROM formulaire";
        $req = $this->bdd->prepare($query);
        $req->execute();
        $tab = $req->fetch(PDO::FETCH_NUM);
        return $tab[0];
    }

    /**
     * Supprime le commentaire en fonction de ID
     */
    public function deleteLastFormulaire()
    {
        $query = "DELETE FROM formulaire WHERE id=(SELECT max(id) FROM formulaire)";
        $req = $this->bdd->prepare($query);
        $req->execute();
        return $req;
    }

    private function buildObject(array $row)
    {
        $contact = new Contact();
        $contact->setId((int) $row['id']);
        $contact->setNom($row['nom']);
        $contact->setEmail($row['email']);
        $contact->setSujet($row['sujet']);
        $contact->setMessage($row['message']);
        return $contact;
    }

}