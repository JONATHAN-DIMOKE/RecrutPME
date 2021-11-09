<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 02/11/2021
 * Time: 18:04
 */
require "control/lancerFrontend.controller.php";
require "control/utilisaateur.controller.php";

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
    }elseif($_GET['action'] == "connectUser"){
        connectUser(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['pwd']));
    }elseif ($_GET['action'] == "disconnect"){
        disconnectUser(htmlspecialchars($_GET['id']));
    }
}else{
    accueil();
}
