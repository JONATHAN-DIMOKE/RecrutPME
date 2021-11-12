
<?php
if($_SESSION['user']['typeUser'] == "Responsable RH"){
    echo '
        <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Maintenir comptes</span>
                    </a>
                    <ul class="sub">
                        <li><a href="dispatcher.php?action=gererComptesUsers">Gerer comptes utilisateurs</a></li>
                        <li><a href="dispatcher.php?action=consulterEtatConnectUsers">Consulter etat connection</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Approuver candidature </span>
                    </a>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Notifier candidat</span>
                    </a>
                   
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Lancer test </span>
                    </a>
        
                </li>
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}elseif ($_SESSION['user']['typeUser'] == "Candidat"){
    echo '
    <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Postuler offre</span>
                    </a>
                   
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Passer offre</span>
                    </a>
                </li>
               
               
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}elseif ($_SESSION['user']['typeUser'] == "Recruteur"){
    echo '
         <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Approuver candidature </span>
                    </a>
                </li>
                <li>
                    <a href="dispatcher.php?action=publierOffre">
                        <i class="fa fa-bullhorn"></i>
                        <span>Publier offre </span>
                    </a>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Notifier candidat</span>
                    </a>
                   
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Lancer test </span>
                    </a>
        
                </li>
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}else{
    echo '
        <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="dispatcher.php?action=soumettreBesoin">
                        <i class="fa fa-envelope"></i>
                        <span>Soumettre besoin en RH</span>
                    </a>
        
                </li>
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}