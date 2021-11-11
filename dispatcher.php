<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 02/11/2021
 * Time: 18:04
 */
session_start();
require "control/lancerFrontend.controller.php";
require "control/utilisaateur.controller.php";
require "control/offre.controller.php";

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
    elseif($_GET['action'] == "createUser"){
        createAccountCandidiat($_POST['nomComplet'], $_POST['genre'], $_POST['tel'], $_POST['email'], $_POST['username'], $_POST['pwd']);
    }elseif ($_GET['action'] == "soumettreBesoin"){
        showPageExprimerBesoin();
    }elseif ($_GET['action'] == "saveBesoin"){
        $repertoireDestination = "exprBesoin/";
        $fileExprimerBesoin= date("YmdHis")." - ".$_FILES["fileExprBesoin"]["name"];
        $cheminFileExpresBesoin = pathinfo($fileExprimerBesoin);
        $extensionFileExprBesoin = $cheminFileExpresBesoin['extension'];
        $tableauExtesion = array("pdf", "docx");
        if(!(in_array($extensionFileExprBesoin, $tableauExtesion)) && !(in_array($extensionFileExprBesoin, $tableauExtesion))){
            echo "L'extension n'est pas attendue";
        }
        else {
            if (is_uploaded_file($_FILES["fileExprBesoin"]["tmp_name"])) {
                if (rename($_FILES["fileExprBesoin"]["tmp_name"],
                        $repertoireDestination . $fileExprimerBesoin)
                ) {
                }
            }
            createBesoin($_POST['titreExpression'], $fileExprimerBesoin, $_POST['id']);
        }
    }
}else{
    accueil();
}
