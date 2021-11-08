<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 04/11/2021
 * Time: 18:37
 */
require "partial/errorManage.view.php";
require_once "config/config.php";
require_once "model/DAO/ConnectionDAO.class.php";
require_once "model/DAO/UtilisateurDAO.class.php";
function connectUser($username, $pwd){
    try{
        $resultDB = UtilisateurDAO::connectUser($username, $pwd);
        if($resultDB['username']){
            session_start();
            $_SESSION['user'] = $resultDB;
            echo $_SESSION['user']['username']." 's connected";
        }else{
            echo "Error de connection";
        }
    }catch (Exception $ex){
        errorManage($ex);
    }
}