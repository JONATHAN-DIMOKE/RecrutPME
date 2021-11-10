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
require_once "model/entities/Utilisateur.class.php";
function connectUser($username, $pwd){
    try{
        $resultDB = UtilisateurDAO::connectUser($username, $pwd);
        if($resultDB['username']){
            session_start();
            $_SESSION['user'] = $resultDB;
            /*echo "<pre>";
                print_r($_SESSION['user']);
            echo "</pre>"; */
            require "view/backend/index.php";
        }else{
            require "view/frontend/index.php";
        }
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function disconnectUser($id){
    try{
        UtilisateurDAO::disconnectUser($_GET['id']);
        require "view/frontend/index.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function createAccountCandidiat($nomComplet, $genre, $tel, $email, $username, $pwd){
    try{
        $user = new Utilisateur(0,"",$nomComplet,$genre,$tel,$email,"","Candidat",$username,md5($pwd),"Actif","Disconnected");
        UtilisateurDAO::createAccout($user);
        require "view/frontend/index.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}