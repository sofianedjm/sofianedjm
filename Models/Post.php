<?php


class Post

{
    private int $id;
    private string $nom;
    private string $email;
    private string $sujet;
    private string $message;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->sujet = $message;

        return $this;
    }
}