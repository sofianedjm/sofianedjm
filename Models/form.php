<?php

class Form {

    public string $nom;
    public string $email;
    public string $sujet;
    public string $message;

public function __construct(string $nom,string $email,string $sujet,string $message)
{
    $this->nom = $nom;
    $this->email = $email;
    $this->sujet = $sujet;
    $this->message = $message;
}

    /**
     * Ajoute les infos du formulaire passé en paramètre dans la base de données.
     * @return [boolean] retourne true si le formulaire a été ajoutée dans la base de données, et false sinon
     */
    public function addFormulaireInfos()
    {
        //Préparation de la requête
        $requete = $this->bdd->prepare('INSERT INTO formulaire (nom , email , sujet , message) VALUES (:nom , :email , :sujet , :message)');

        //Remplacement des marqueurs de place par les valeurs

         $requete->bindValue(':nom' , $this->nom);
         $requete->bindValue(':email' , $this->email);
         $requete->bindValue(':sujet' , $this->sujet);
         $requete->bindValue('message' , $this->message);


        //Exécution de la requête
        $requete->execute();

        return (bool) $requete->rowCount();
    }

}

?>