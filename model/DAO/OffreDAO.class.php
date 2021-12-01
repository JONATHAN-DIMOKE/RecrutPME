<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:54
 */
class OffreDAO
{
    public static function createBesoin($idBesoin, $fileExprBesoin, $idChefDep){
        try{

            $query = "CALL proc_createBesoin(?, ?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($idBesoin, $fileExprBesoin, $idChefDep));
            $queryPrepare->closeCursor();
        }catch (Exception $ex){
            errorManage($ex);
        }
    }
    public static function getAllOffresDejaPostules($idCandidat){
        try{
            $query = "CALL prco_getAllOffresPostules(?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($idCandidat));
            $resultDB = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
            $queryPrepare->closeCursor();
            return $resultDB;
        }catch (Exception $ex){
            errorManage($ex);
        }
    }

    public static function getAllBesoin(){
        try{
            $query = "CALL proc_getAllExprBesoin()";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute();
            $resultDB = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
            $queryPrepare->closeCursor();
            return $resultDB;
        }catch (Exception $ex){
            errorManage($ex);
        }
    }

    public static function createOffre($idExpBesoin, $dateFin, $fileOffre, $typeOffre){
        try{
            $query = "CALL createOffre(?, ?, ?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($idExpBesoin, $dateFin, $fileOffre, $typeOffre));
            $queryPrepare->closeCursor();
        }catch (Exception $ex){
            errorManage($ex);
        }
    }

    public static function getAllOffres(){
        try{
            $query = "CALL proc_getAllOffres()";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute();
            $resultDB = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
            $queryPrepare->closeCursor();
            return $resultDB;
        }catch (Exception $ex){
            errorManage($ex);
        }
    }

    public static function approuverEtDesapprouverCandidature($idCandidature, $operation){
        try{
            $query = "CALL proc_approuverEtDesapprouverCandidature(?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($idCandidature, $operation));
        }catch (Exception $ex){
            errorManage($ex);
        }
    }
}