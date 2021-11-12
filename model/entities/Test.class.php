<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:55
 */
class Test
{
    private $id;
    private $idOffre;
    private $dateTest;
    private $heureDebut;
    private $heureFin;
    private $fileQuestionnaire;
    private $fileReponse;

    /**
     * Test constructor.
     * @param $id
     * @param $idOffre
     * @param $dateTest
     * @param $heureDebut
     * @param $heureFin
     * @param $fileQuestionnaire
     * @param $fileReponse
     */
    public function __construct($id, $idOffre, $dateTest, $heureDebut, $heureFin, $fileQuestionnaire, $fileReponse)
    {
        $this->id = $id;
        $this->idOffre = $idOffre;
        $this->dateTest = $dateTest;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->fileQuestionnaire = $fileQuestionnaire;
        $this->fileReponse = $fileReponse;
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
    public function getDateTest()
    {
        return $this->dateTest;
    }

    /**
     * @param mixed $dateTest
     */
    public function setDateTest($dateTest)
    {
        $this->dateTest = $dateTest;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * @param mixed $heureDebut
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @param mixed $heureFin
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }

    /**
     * @return mixed
     */
    public function getFileQuestionnaire()
    {
        return $this->fileQuestionnaire;
    }

    /**
     * @param mixed $fileQuestionnaire
     */
    public function setFileQuestionnaire($fileQuestionnaire)
    {
        $this->fileQuestionnaire = $fileQuestionnaire;
    }

    /**
     * @return mixed
     */
    public function getFileReponse()
    {
        return $this->fileReponse;
    }

    /**
     * @param mixed $fileReponse
     */
    public function setFileReponse($fileReponse)
    {
        $this->fileReponse = $fileReponse;
    }


}