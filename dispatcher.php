<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 02/11/2021
 * Time: 18:04
 */
require "control/lancerFrontend.controller.php";

if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] == "accueil"){
        accueil();
    }elseif ($_GET['action'] == "about"){
        about();
    }elseif ($_GET['action'] == "contact"){
        contact();
    }elseif ($_GET['action'] == "job_list"){
        job_list();
    }elseif ($_GET['action'] == "job_single"){
        job_single();
    }
}else{
    accueil();
}
