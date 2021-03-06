<!DOCTYPE HTML>
<html>
	<head>
		<title>Terra 2015</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Geology fest of St. Xavier's College(Autonomous), Mumbai" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<style type="text/css">
		#logo h1
		#nav > ul > li:hover > a
			{
				background: #E0467C;
			}
			
		#nav > ul > li.active
		{
		}
		
			#nav > ul > li.active > a
			{
				background: #E0467C;
			}
			
		#nav > ul > li.current
		{
				background: #E41A61;
				color: #fff !important;
				font-weight: 700;
		}
		
			#nav > ul > li.current > a
			{
				background: #E41A61;
				color: #fff !important;
				font-weight: 700;
			}
			.dropotron
	{
		background-color: #E0467C;
	}
	.dropotron.level-0:before
			{
				
				border-bottom: solid 10px #E0467C;
				border-bottom-color: #E0467C;
			}
		</style>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header">
					
					<!-- Logo -->
						<div id="logo" width="100%" >
						terra<span style="font-size: 0.50em;top:-1em;"><sup>TM</sup></span>
						</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="events.html">Events</a></li>
								<li><a href="info.html">Information</a></li>
								<li class="current"><a href="register.php">Registration</a></li>
								<li>
									<a href="">Gallery</a>
									<ul>
										<li><a href="picgal.php">Photos</a></li>
										<li><a href="vidgal.php">Videos</a></li>
									</ul>
								</li>
								<li><a href="mag.html">Magazine</a></li>
							</ul>
						</nav>
				</div>
			</div>
		<!-- Main -->
			<div id="main-wrapper" style="background: #E0467C;">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Events -->
								<section>
									<header class="title major">
										<h2 >Registrations</h2>
									</header>
									
									<?php

										$host = "50.62.160.65";
										$user = "admin_user@50.62.160.65";
										$pass = "Terra2015admin";
										$db = "K3NNG_Registrations2015";

										$connection = @mysql_connect($host, $user, $pass);
										$selectdb = @mysql_select_db($db, $connection);
										if (!$connection || !$selectdb) {
											die($conn_error);
										} else {
											
										}

										$colname = $_POST['colname'];
										$colname = mysql_real_escape_string($colname);

										$coladd = $_POST['coladd'];
										$coladd = mysql_real_escape_string($coladd);

										$tuid = $_POST['tuid'];
										$tuid = mysql_real_escape_string($tuid);

										$teaml=implode(',', $_POST['teamleader']);

										$p1=implode(',', $_POST['p1']);
										
										$p2=implode(',', $_POST['p2']);
										
										$p3=implode(',', $_POST['p3']);
										
										$p4=implode(',', $_POST['p4']);
										
										$p5=implode(',', $_POST['p5']);
									
										$p6=implode(',', $_POST['p6']);
										
										$p7=implode(',', $_POST['p7']);
										
										$p8=implode(',', $_POST['p8']);

					                	date_default_timezone_set("Asia/Kolkata");

					 					$date1 = date("Y-m-d H:i:s");
						
								        $query1 = ("INSERT INTO `reg_details`(`Team_UID`, `dttime`, `College_Name`, `College_Add`, `Team_Leader`, `Participant_1`, `Participant_2`, `Participant_3`, `Participant_4`, `Participant_5`, `Participant_6`, `Participant_7`, `Participant_8`) VALUES ('$tuid','$date1','$colname','$coladd','$teaml','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8')");
					    			    if(mysql_query($query1, $connection)){   

											echo "Congratulations. You have registered successfully.<br>";
								        }
								        else
					    			    {
					         				echo 'There was some error. <a href="register.php">Try Again</a>';
					        			}

								        mysql_close($connection);
						        ?>
								</section>

						</div>
					</div>
					
				</div>
			</div>

	<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="6u">
						
									<iframe src="map.html" frameborder="0" style="border:0" id="map" height="100%" width="100%"></iframe>
								
						</div>
						<div class="6u">
						
							<!-- Contact -->
							<section>
								<header>
									<h2>Contact Us</h2>
								</header>
								<ul class="social">
									<li><a class="icon fa-facebook" href="https://www.facebook.com/The-Terra-Fest-1503240166669924/?fref=ts" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a class="icon fa-instagram" href="https://instagram.com/theterrafest/" target="_blank"><span class="label">Instagram</span></a></li>
								</ul>
								<ul class="contact">
									<li>
										<h3>Address</h3>
										<p>
											 St. Xavier&#39;s College (Autonoumous),<br />
										     5, Mahapalika Marg,<br />
										     Mumbai 400 001.<br />
										</p>
									</li>
									<li>
										<h3>Mail</h3>
										<p><a href="mailto:theterrafest@gmail.com">theterrafest@gmail.com</a></p>
									</li>
									
								</ul>
							</section>
								
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Department of Geology,St. Xavier's College (Autonomous) , Mumbai</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>