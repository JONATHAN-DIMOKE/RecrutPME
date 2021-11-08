<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/11/2021
 * Time: 18:36
 */

class UtilisateurDAO
{
    public static function connectUser($username, $pwd){
        try{
            $query = "CALL proc_connectUser(?, ?)";
            $queryPrepare = ConnectionDAO::getConnexion()->prepare($query);
            $queryPrepare->execute(array($username, $pwd));
            $resultDB = $queryPrepare->fetch(PDO::FETCH_ASSOC);
            $queryPrepare->closeCursor();
            return $resultDB;
        }catch (Exception $ex){
            errorManage($ex);
        }
    }
}