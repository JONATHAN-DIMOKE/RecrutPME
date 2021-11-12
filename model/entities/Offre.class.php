<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:48
 */
class Offre
{
    private $id;
    private $numOffre;
    private $dateOffre;
    private $etatOffre;
    private $fileOffre;
    private $titreExpression;
    private $fileExprBesoin;
    private $idChefDepartement;

    /**
     * Offre constructor.
     * @param $id
     * @param $numOffre
     * @param $dateOffre
     * @param $etatOffre
     * @param $fileOffre
     * @param $titreExpression
     * @param $fileExprBesoin
     * @param $idChefDepartement
     */
    public function __construct($id, $numOffre, $dateOffre, $etatOffre, $fileOffre, $titreExpression, $fileExprBesoin, $idChefDepartement)
    {
        $this->id = $id;
        $this->numOffre = $numOffre;
        $this->dateOffre = $dateOffre;
        $this->etatOffre = $etatOffre;
        $this->fileOffre = $fileOffre;
        $this->titreExpression = $titreExpression;
        $this->fileExprBesoin = $fileExprBesoin;
        $this->idChefDepartement = $idChefDepartement;
    }

    /**
     * @return mixed
     */
    public function getTitreExpression()
    {
        return $this->titreExpression;
    }

    /**
     * @param mixed $titreExpression
     */
    public function setTitreExpression($titreExpression)
    {
        $this->titreExpression = $titreExpression;
    }


    /**
     * @return mixed
     */
    public function getIdChefDepartement()
    {
        return $this->idChefDepartement;
    }

    /**
     * @param mixed $idChefDepartement
     */
    public function setIdChefDepartement($idChefDepartement)
    {
        $this->idChefDepartement = $idChefDepartement;
    }


    /**
     * @return mixed
     */
    public function getFileExprBesoin()
    {
        return $this->fileExprBesoin;
    }

    /**
     * @param mixed $fileExprBesoin
     */
    public function setFileExprBesoin($fileExprBesoin)
    {
        $this->fileExprBesoin = $fileExprBesoin;
    }


    /**
     * @return mixed
     */


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
    public function getNumOffre()
    {
        return $this->numOffre;
    }

    /**
     * @param mixed $numOffre
     */
    public function setNumOffre($numOffre)
    {
        $this->numOffre = $numOffre;
    }

    /**
     * @return mixed
     */
    public function getDateOffre()
    {
        return $this->dateOffre;
    }

    /**
     * @param mixed $dateOffre
     */
    public function setDateOffre($dateOffre)
    {
        $this->dateOffre = $dateOffre;
    }

    /**
     * @return mixed
     */
    public function getEtatOffre()
    {
        return $this->etatOffre;
    }

    /**
     * @param mixed $etatOffre
     */
    public function setEtatOffre($etatOffre)
    {
        $this->etatOffre = $etatOffre;
    }

    /**
     * @return mixed
     */
    public function getFileOffre()
    {
        return $this->fileOffre;
    }

    /**
     * @param mixed $fileOffre
     */
    public function setFileOffre($fileOffre)
    {
        $this->fileOffre = $fileOffre;
    }



}