<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:54
 */
class OffreDAO
{
    public static function createBesoin($titreBesoin, $fileExprBesoin, $idChefDep){
        try{
            $query = "CALL proc_createBesoin(?, ?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($titreBesoin, $fileExprBesoin, $idChefDep));
            $queryPrepare->closeCursor();
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
}