<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:58
 */
class CandidatureDAO
{
    public static function createOffre($idCandidat, $idOffre, $cvCandidat){
        try{
            $query = "CALL proc_createCandidature(?, ?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($idCandidat, $idOffre, $cvCandidat));
            $queryPrepare->closeCursor();
        }catch (Exception $ex){
            errorManage($ex);
        }
    }
    public static function getAllCandidatures(){
        try{
            $query = "CALL proc_getAllCandidatures()";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute();
            $resultDB = $queryPrepare->fetchAll(PDO::FETCH_ASSOC);
            $queryPrepare->closeCursor();
            return $resultDB;
        }catch (Exception $ex){
            errorManage($ex);
        }
    }

}