<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link rel="stylesheet" href="cssAdmin/lightbox.css">
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
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <em class="fa fa-tasks"></em>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <em class="fa fa-envelope-o"></em>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="imagesAdmin/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="imagesAdmin/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="imagesAdmin/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="imagesAdmin/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <em class="fa fa-bell-o"></em>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><em class="fa fa-bolt"></em></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><em class="fa fa-bolt"></em></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><em class="fa fa-bolt"></em></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="imagesAdmin/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><em class=" fa fa-suitcase"></em>Profile</a></li>
                <li><a href="#"><em class="fa fa-cog"></em> Settings</a></li>
                <li><a href=""><em class="fa fa-key"></em> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<?php require "partial/menuBackend.view.php"?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- gallery -->
		<!-- gallery -->
	<div class="gallery">
		<h2 class="w3ls_head">Gallery</h2>
		<div class="gallery-grids">
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g1.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g2.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g3.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g5.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g6.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g7.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-top-grids">
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g8.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g9.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="imagesAdmin/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="imagesAdmin/g4.jpg" alt="" />
								<div class="captn">
									<h4>Visitors</h4>
									<p>Aliquam non</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<script src="jsAdmin/lightbox-plus-jquery.min.js"> </script>
		
	</div>
	</div>
	<!-- //gallery -->

</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
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
<!-- gallery -->

</body>
</html>
