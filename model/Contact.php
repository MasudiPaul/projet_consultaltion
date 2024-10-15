<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 27/09/2024
 * Time: 10:29
 */
class Contact
{
    private $id;
    private $nom;
    private $telephone;
    private $email;
    private $entreprise;
    private $sujet;
    private $commentaire;

    /**
     * Contact constructor.
     * @param $nom
     * @param $telephone
     * @param $email
     * @param $entreprise
     * @param $sujet
     * @param $commentaire
     */
    public function __construct($id,$nom, $telephone, $email, $entreprise, $sujet, $commentaire)
    {
        $this->nom = $id;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->entreprise = $entreprise;
        $this->sujet = $sujet;
        $this->commentaire = $commentaire;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    public static function Enregister( Contact $contact){
        try{
            $req="INSERT INTO contact (id,nom,telephone,email,entreprise,sujet,commentaire)VALUES(0,?,?,?,?,?,?)";
            $req_prepare=Connexion::getConnexion()->prepare($req);
            $req_prepare->execute(array(

                $contact->getNom(),
                $contact->getTelephone(),
                $contact->getEmail(),
                $contact->getEntreprise(),
                $contact->getSujet(),
                $contact->getCommentaire(),




            ));

        }catch (Exception $ex){

        }
    }





}