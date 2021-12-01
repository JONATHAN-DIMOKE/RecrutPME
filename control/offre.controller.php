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
        $listBesoins = OffreDAO::getAllBesoin();
        require "view/backend/soumettreBesoin.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}
function downloadExprBesoin(){
    try{
        $url = 'exprBesoin/'.$_GET['document'];
        $parse_url = parse_url($url) ;
        $path_info = pathinfo($parse_url['path']) ;
        $file_extension = $path_info['extension'] ;
        $save_path = 'C:\Users\Josh DIMOKE\Downloads/' ;
        $file_name = $_GET['document'];
        file_put_contents($save_path . $file_name , fopen($url, 'r'));
    }catch (Exception $ex){
        errorManage($ex);
    }
    $listBesoins = OffreDAO::getAllBesoin();
    include "view/backend/soumettreBesoin.view.php";
}

function downloadFileOffre(){
    try{
        $url = 'docsOffres/'.$_GET['documentOffre'];
        $parse_url = parse_url($url) ;
        $path_info = pathinfo($parse_url['path']) ;
        $file_extension = $path_info['extension'] ;
        $save_path = 'C:\Users\Josh DIMOKE\Downloads/' ;
        $file_name = $_GET['documentOffre'];
        file_put_contents($save_path . $file_name , fopen($url, 'r'));
    }catch (Exception $ex){
        errorManage($ex);
    }
    $compteur = 1;
    $listOffre = OffreDAO::getAllOffres();
    include "view/backend/listOffre.view.php";
}

function publierOffre(){
    try{
        $listBesoins = OffreDAO::getAllBesoin();
        require "view/backend/publierOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function listOffreDejaPostules(){
    try{
        $listOffre = OffreDAO::getAllOffresDejaPostules($_SESSION['user']['id']);
        require "view/backend/publierOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}

function showPageCreateOffre(){
    try{
        $listBesoins = OffreDAO::getAllBesoin();
        require "view/backend/createOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}
function createOffre($id, $dateFin, $fileOffre, $typeOffre){
    try{
        $listBesoins = OffreDAO::getAllBesoin();
        OffreDAO::createOffre($id, $dateFin, $fileOffre, $typeOffre);
        require "view/backend/publierOffre.view.php";
    }catch (Exception $ex){
        errorManage($ex);
    }
}



