<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstcssAdmin-css -->
    <link rel="stylesheet" href="cssAdmin/bootstrap.min.css" >
    <!-- //bootstcssAdmin-css -->
    <!-- Custom CSS -->
    <link href="cssAdmin/style.css" rel='stylesheet' type='text/css' />
    <link href="cssAdmin/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="cssAdmin/font.css" type="text/css"/>
    <link href="cssAdmin/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="jsAdmin/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <?php require "partial/headerBackend.view.php"?>
    <!--header end-->
    <!--sidebar start-->
    <?php require "partial/menuBackend.view.php"?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Gerer comptes utilisateurs
                                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                            </header>
                            <div class="panel-body">
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-6">
                                        <div>
                                            <h4><legend style="text-align: center">Creer un nouvel utilisateur interne</legend></h4>
                                            <form enctype="multipart/form-data" method="post" action="dispatcher.php?action=saveBesoin">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="text" name="nomComplet" id="nomComplet" class="form-control">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select name="genre" class="form-control" id="genre">
                                                            <option>Select genre</option>
                                                            <option value="M">Homme</option>
                                                            <option value="F">Femme</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="tel" id="tel" class="form-control">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="email" name="email" id="email" placeholder="Titre poste" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="fonction" id="fonction" class="form-control">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <select name="typeUser" id="typeUser" class="form-control" id="">
                                                            <option>Select type utilisateur</option>
                                                            <option value="Chef departement">Chef departement</option>
                                                            <option value="Responsable RH">Responsable RH</option>
                                                            <option value="Recruteur">Recruteur</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="text" name="username" id="username" placeholder="Titre poste" class="form-control">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="password" name="pwd" id="pwd" placeholder="Titre poste" class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="password" name="pwdConfirm" id="pwdConfirm" class="form-control">
                                                        <span id="verify"></span>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary" type="button">Valider besoin</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered" id="myTable">
                                            <thead>
                                            <tr>
                                                <td>N°</td>
                                                <td>Nom complet</td>
                                                <td>Operation</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $compteur = 1;
                                            foreach ($listAllUsers as $user){
                                                echo "<tr>";
                                                echo "<td>".$compteur."</td>";
                                                echo "<td>".$user['nomComplet']."</td>";
                                                if($user['statut'] == "Actif"){
                                                    echo "<td><a href='' class='btn btn-danger'>Block</a></td>";
                                                }else{
                                                    echo "<td><a href='' class='btn btn-warning'>Enable</a></td>";
                                                }

                                                $compteur++;
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>

                <!-- page end-->
            </div>
        </section>
        <!-- footer -->
        <?php require "partial/footerBackend.view.php"?>
        <!-- / footer -->
    </section>

    <!--main content end-->
</section>
<script src="jsAdmin/bootstrap.js"></script>
<script src="jsAdmin/jquery.dcjqaccordion.2.7.js"></script>
<script src="jsAdmin/scripts.js"></script>
<script src="jsAdmin/jquery.slimscroll.js"></script>
<script src="jsAdmin/jquery.nicescroll.js"></script>
<!--[if lte IE 8]>
<script language="javascript" type="textjsAdminavascript" src="jsAdmin/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="jsAdmin/jquery.scrollTo.js"></script>

<script src="jsAdmin/jquery.dataTables.min.js"></script>
<script src="jsAdmin/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#myTable').dataTable();
    });
</script>

<script>
    $("#pwdConfirm").keyup(function () {
        if($('#pwdConfirm').val() != $('#pwd').val() && $('#pwdConfirm').val().length > 0){
            $('#verify').text("Mot de passe different").css('color','red');
        } else if($('#pwdConfirm').val() == $('#pwd').val() && $('#pwdConfirm').val().length > 0){
            $('#verify').text("Mot de passe conforme").css('color','#0b2e13');
        }else {
            $('#verify').hide();
        }
    });
</script>

</body>
</html>
