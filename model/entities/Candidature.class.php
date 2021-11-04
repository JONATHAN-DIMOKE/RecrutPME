<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:57
 */
class Candidature
{
    private $id;
    private $numOffre;
    private $dateOffre;
    private $etatOffre;
    private $fileOffre;
    private $idCandidat;
    private $idOffre;
    private $dateCandidature;

    /**
     * Candidature constructor.
     * @param $id
     * @param $numOffre
     * @param $dateOffre
     * @param $etatOffre
     * @param $fileOffre
     * @param $idCandidat
     * @param $idOffre
     * @param $dateCandidature
     */
    public function __construct($id, $numOffre, $dateOffre, $etatOffre, $fileOffre, $idCandidat, $idOffre, $dateCandidature)
    {
        $this->id = $id;
        $this->numOffre = $numOffre;
        $this->dateOffre = $dateOffre;
        $this->etatOffre = $etatOffre;
        $this->fileOffre = $fileOffre;
        $this->idCandidat = $idCandidat;
        $this->idOffre = $idOffre;
        $this->dateCandidature = $dateCandidature;
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

    /**
     * @return mixed
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * @param mixed $idCandidat
     */
    public function setIdCandidat($idCandidat)
    {
        $this->idCandidat = $idCandidat;
    }

    /**
     * @return mixed
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * @param mixed $idOffre
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    }

    /**
     * @return mixed
     */
    public function getDateCandidature()
    {
        return $this->dateCandidature;
    }

    /**
     * @param mixed $dateCandidature
     */
    public function setDateCandidature($dateCandidature)
    {
        $this->dateCandidature = $dateCandidature;
    }


}