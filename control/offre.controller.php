<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 11/11/2021
 * Time: 12:35
 */

require_once "config/config.php";
require_once "model/DAO/ConnectionDAO.class.php";
require_once "model/DAO/OffreDAO.class.php";

function createBesoin($titreBesoin, $fileExprBesoin, $idChefDep){
    try{
        OffreDAO::createBesoin($titreBesoin, $fileExprBesoin, $idChefDep);
        require "view/backend/soumettreBesoin.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}