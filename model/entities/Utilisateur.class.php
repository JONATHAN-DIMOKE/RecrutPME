<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:36
 */
class Utilisateur
{
    private $id;
    private $matricule;
    private $nomComplet;
    private $genre;
    private $tel;
    private $email;
    private $fonction;
    private $typeUser;
    private $username;
    private $pwd;
    private $statut;
    private $etatConnection;

    /**
     * Utilisateur constructor.
     * @param $id
     * @param $matricule
     * @param $nomComplet
     * @param $genre
     * @param $tel
     * @param $email
     * @param $fonction
     * @param $typeUser
     * @param $username
     * @param $pwd
     * @param $statut
     * @param $etatConnection
     */
    public function __construct($id, $matricule, $nomComplet, $genre, $tel, $email, $fonction, $typeUser, $username, $pwd, $statut, $etatConnection)
    {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->nomComplet = $nomComplet;
        $this->genre = $genre;
        $this->tel = $tel;
        $this->email = $email;
        $this->fonction = $fonction;
        $this->typeUser = $typeUser;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->statut = $statut;
        $this->etatConnection = $etatConnection;
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
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * @param mixed $nomComplet
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
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
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * @param mixed $typeUser
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getEtatConnection()
    {
        return $this->etatConnection;
    }

    /**
     * @param mixed $etatConnection
     */
    public function setEtatConnection($etatConnection)
    {
        $this->etatConnection = $etatConnection;
    }

}