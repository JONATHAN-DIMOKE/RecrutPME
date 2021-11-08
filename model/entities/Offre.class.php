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

    /**
     * Offre constructor.
     * @param $id
     * @param $numOffre
     * @param $dateOffre
     * @param $etatOffre
     * @param $fileOffre
     */
    public function __construct($id, $numOffre, $dateOffre, $etatOffre, $fileOffre)
    {
        $this->id = $id;
        $this->numOffre = $numOffre;
        $this->dateOffre = $dateOffre;
        $this->etatOffre = $etatOffre;
        $this->fileOffre = $fileOffre;
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



}