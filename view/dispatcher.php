<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 02/11/2021
 * Time: 18:04
 */
if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] == "accueil"){
        include "../control/lancerFrontend.controller.php";
    }
}