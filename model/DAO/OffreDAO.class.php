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
}