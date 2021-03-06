<!DOCTYPE html>
<head>
    <title>CE Recruitment</title>
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
                                Postuler à offre | Liste des offres
                                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                            </header>
                            <div class="panel-body">
                                <div class="row" style="padding-top: 10px">
                                    <div class="col-md-12">
                                        <table class="table table-responsive" id="myTable">
                                            <strong><caption style="text-align: center"></caption></strong>
                                            <thead>
                                            <tr>
                                                <td>N°</td>
                                                <th scope="col" id="nomComplet">Breve description de l'offre</th>
                                                <th scope="col" id="nomComplet">Fichier description de l'offre</th>
                                                <th scope="col" id="nomComplet">Operation</th>
                                            </tr>
                                            </thead>
                                            <tbody style="font-family: Consolas">
                                            <?php
                                            foreach ($listCandidatures as $offre){
                                                echo "<tr>";
                                                echo "<td>".$compteur."</td>";
                                                echo "<td>"."N° offre : ".$offre['numOffre'].'<br>Titre poste : '.$offre['titreExpression']."<br>Date Fin : ".$offre['dateOffre']."<br>Date fin : ".$offre['dateFinOffre']."<br>Type contrat : ".$offre['typeContrat']."</td>";
                                                echo "<td><a class='btn btn-primary' href='dispatcher.php?action=telechargerFileDescripOffre&documentOffre=".$offre['cvCandidat']."'>Download</a></td>";
                                                if($offre['etatCandidature'] == "En cours de traitement"){
                                                    echo "<td><a href='dispatcher.php?action=valideApprobation&idCandidature=".$offre['id']."&operation=approuver' class='btn btn-warning'>Approuver</a></td>";
                                                }elseif ($offre['etatCandidature'] == "Approuver"){
                                                    echo "<td><a href='dispatcher.php?action=showPostulerOffre&idOffre=".$offre['id']."&operation=desapprouver' class='btn btn-danger'>Desapprouver</a></td>";
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
    })
</script>
</body>
</html>
