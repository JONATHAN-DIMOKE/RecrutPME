<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 15/11/2021
 * Time: 13:08
 */
require_once "config/config.php";
require_once "model/DAO/ConnectionDAO.class.php";
require_once "model/DAO/OffreDAO.class.php";
require_once "model/DAO/CandidatureDAO.class.php";

function showListOffre(){
    try{
        $listOffre = OffreDAO::getAllOffres();
        $compteur = 1;
        require "view/backend/listOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function postulerOffre(){
    try{
        $listOffre = OffreDAO::getAllOffresDejaPostules($_SESSION['user']['id']);
        require "view/backend/postulerOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function soumettreCandidature($idCandidat, $idOffre, $cvCandidat){
    try{
        CandidatureDAO::createOffre($idCandidat, $idOffre, $cvCandidat);
        $listOffre = OffreDAO::getAllOffresDejaPostules($_SESSION['user']['id']);
        $compteur = 0;
        require "view/backend/listOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}
function validerApprobation($idCandidature, $operation){
    try{
        OffreDAO::approuverEtDesapprouverCandidature($idCandidature, $operation);
        $listCandidatures = CandidatureDAO::getAllCandidatures();
        $compteur = 1;
        require "view/backend/approuverCandidature.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}