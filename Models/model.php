<?php


class Model
{
    /**
     * Attribut contenant l'instance PDO
     */
    private $bdd;

    /**
     * Attribut statique qui contiendra l'unique instance de Model
     */
    private static $instance = null;

    /**
     * Constructeur : effectue la connexion à la base de données.
     */
    public function __construct()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=portfolio','root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->bdd=$bdd;
        }
        catch(Exception $e){
            die ('Connexion error :'. $e->getMessage());
        }
    }

    /**
     * Méthode permettant de récupérer un modèle car le constructeur est privé
     */
    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Retourne les 25 derniers messages
     * @return [array] Contient les informations des messages
     */
    public function getLast()
    {
        $req = $this->bdd->prepare('SELECT * FROM formulaire ORDER BY id DESC LIMIT 25');
        $req->execute();
        return $req->fetchall();
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

}