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
require "control/candidat.controller.php";

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
        if(!(in_array($extensionFileExprBesoin, $tableauExtesion))){
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
    }elseif ($_GET['action'] == "consulterEtatConnectUsers"){
        getAllUsers();
    }elseif ($_GET['action'] == "gererComptesUsers"){
        showPageManageAccountsUsers();
    }elseif($_GET['action'] == "telechargerExprBesoin"){
        downloadExprBesoin();
    }elseif ($_GET['action'] == "telechargerFileDescripOffre"){
        downloadFileOffre();
    }elseif($_GET['action'] == "publierOffre"){
        publierOffre();
    }elseif ($_GET['action'] == "ShowPageCreateOffre"){
       showPageCreateOffre();
    }elseif ($_GET['action'] == "createOffre"){
        $repertoireDestination = "docsOffres/";
        $fileDescriptionOffre= date("YmdHis")." - ".$_FILES["fileOffre"]["name"];
        $cheminFileDescripOffre = pathinfo($fileDescriptionOffre);
        $extensionDescripFileOffre = $cheminFileDescripOffre['extension'];
        $tableauExtesion = array("pdf", "docx");
        if(!(in_array($extensionDescripFileOffre, $tableauExtesion))){
            echo "L'extension n'est pas attendue";
        }
        else {
            if (is_uploaded_file($_FILES["fileOffre"]["tmp_name"])) {
                if (rename($_FILES["fileOffre"]["tmp_name"],
                    $repertoireDestination . $fileDescriptionOffre)
                ) {
                }
            }
            if(isset($_POST['idExprBesoin'], $_POST['dateFin']) && !empty($_POST['dateFin']) && !empty($_POST['idExprBesoin'])){
                createOffre($_POST['idExprBesoin'], $_POST['dateFin'],$fileDescriptionOffre, $_POST['typeContrat']);
            }else{
                publierOffre();
            }

        }
    }elseif ($_GET['action'] == "postulerOffre"){
        showListOffre();
    }elseif ($_GET['action'] == "valideApprobation"){
        if(isset($_GET['idCandidature'], $_GET['operation']) && !empty($_POST['idCandidature']) && !empty($_POST['operation'])){
            validerApprobation($_GET['idCandidature'], $_GET['operation']);
        }
    }elseif ($_GET['action'] == "approuvCandidature"){
        approuvCandidature();
    }elseif ($_GET['action'] == "showPostulerOffre"){
        postulerOffre();
    }elseif($_GET['action'] == "soumettreCandidature"){
        $repertoireDestination = "cvCandidat/";
        $fileDescriptionOffre= date("YmdHis")." - ".$_FILES["cvCandidat"]["name"];
        $cheminFileDescripOffre = pathinfo($fileDescriptionOffre);
        $extensionDescripFileOffre = $cheminFileDescripOffre['extension'];
        $tableauExtesion = array("pdf", "zip");
        if(!(in_array($extensionDescripFileOffre, $tableauExtesion))){
            echo "L'extension n'est pas attendue";
        }
        else {
            if (is_uploaded_file($_FILES["cvCandidat"]["tmp_name"])) {
                if (rename($_FILES["cvCandidat"]["tmp_name"],
                    $repertoireDestination . $fileDescriptionOffre)
                ) {
                }
            }
            if(isset($_POST['idCandidat'], $_POST['idOffre']) && !empty($_POST['idCandidat']) && !empty($_POST['idOffre'])){
                soumettreCandidature($_POST['idCandidat'], $_POST['idOffre'],$fileDescriptionOffre);
            }else{
                publierOffre();
            }

        }
    }
}else{
    accueil();
}
