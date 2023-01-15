<?php
	include_once('login/session.php');
?>

<!DOCTYPE html>

<head>
	<title>SCOM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="none" />
	<link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/bootstrap-admin.min.css">
	<link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin.css" rel='stylesheet' type='text/css' />
	<link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin-responsive.css" rel="stylesheet" />
	<link href="http://localhost/php/SCOM/SComputers/assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/morris.css" type="text/css" />
	<link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/monthly.css">
	<script src="http://localhost/php/SCOM/SComputers/assets/js/jquery-3.3.1.min.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/raphael-min.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/morris.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/bootstrap.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/scripts.js"></script>
	<script src="http://localhost/php/SCOM/SComputers/assets/js/jquery.nicescroll.js"></script>
</head>

<body>
	<section id="container">
		<header class="header fixed-top clearfix">
			<div class="brand">
				<a href="index.html" class="logo">
					SCOM
				</a>
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars"></div>
				</div>
			</div>
		</header>
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
							<a href="contact/contact-inputs.php">
								<i class="fa fa-book"></i>
								<span>Contact Inputs</span>
							</a>
						</li>
						<li>
							<a href="newsletter/newsletters.php">
								<i class="fa fa-bullhorn"></i>
								<span>Newsletters</span>
							</a>
						</li>
						<li>
							<a href="login/logout.php">
								<i class="fa fa-user"></i>
								<span>Log Out</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<section id="main-content">
			<section class="wrapper">
				<div class="market-updates" id="numbers">

					<div class="clearfix"> </div>
				</div>
				
			</section>
			<div class="row" style="margin:2rem 2rem;">
					<header class="panel-heading">
						Upload Image Here
					</header>
					<div class="notify-scomls">
						<div class="alert alert-info clearfix">
							<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
							<div class="notification-info">
								<form action="modal/upload.php" method="POST" enctype="multipart/form-data">
									<input type="file" name="file" value="">
									<button type="submit" name="submit" class="btn btn-info" style="margin:15px 0 0 0">
										Upload Image
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			<!-- footer -->
			<div class="footer">
				<div class="wthree-copyright">
					<p>© 2023 Visitors. All rights reserved | Design by <a href="http://scominfotech.in">SCOM INFOTECH</a>
					</p>
				</div>
			</div>
			<!-- / footer -->
		</section>
		<!--main content end-->
	</section>
	
	<!-- morris JavaScript -->
	<script>
		$(document).ready(function () {
			getDashboardNumbers();
		});

		function getDashboardNumbers() {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("POST", "dashboard/dashboardNum.php", true);
			xmlhttp.send();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('numbers').innerHTML = this.responseText;
				}
			};
		}
	</script>
</body>

</html>