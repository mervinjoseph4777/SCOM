<?php
	include '../login/session.php';
?>

<!DOCTYPE html>

<head>
    <title>SCOM ADMIN PANEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="none" />    
    <link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/bootstrap-admin.min.css">
	<link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin.css" rel='stylesheet' type='text/css' />
	<link href="http://localhost/php/SCOM/SComputers/assets/css/style-admin-responsive.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://localhost/php/SCOM/SComputers/assets/css/font.css" type="text/css" />
	<link href="http://localhost/php/SCOM/SComputers/assets/css/font-awesome.css" rel="stylesheet">
	<script src="http://localhost/php/SCOM/SComputers/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/cc8111f8a1.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="container">
    <header class="header fixed-top clearfix">
			<div class="brand">
				<a href="../index.php" class="logo">
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
							<a href="../index.php">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<li class="sub-menu">
							<a class="active"  href="contact-inputs.php">
								<i class="fa fa-book"></i>
								<span>Contact Inputs</span>
							</a>
						</li>
						<li>
							<a href="../newsletter/newsletters.php">
								<i class="fa fa-bullhorn"></i>
								<span>Newsletters</span>
							</a>
						</li>
						<li>
							<a href="../login/logout.php">
								<i class="fa fa-user"></i>
								<span>Log out</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- sidebar menu end-->
			</div>
		</aside>
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Contact Us Responses
                        </div>
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">
                                
                                    <select class="input-sm form-control w-sm inline v-middle" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <button class="btn btn-sm btn-default" onclick="changeStatus()" id="apply">Apply</button>
                                
                            </div>
                            <div class="col-sm-4">
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
    <script src="http://localhost/php/SCOM/SComputers/assets/js/bootstrap.js"></script>
    <script src="http://localhost/php/SCOM/SComputers/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="http://localhost/php/SCOM/SComputers/assets/js/scripts.js"></script>
    <script src="http://localhost/php/SCOM/SComputers/assets/js/jquery.nicescroll.js"></script>
    

    <script>
        $(document).ready(function () {
            let infoStatus = "active";
            getContactInfo(infoStatus);
        });


        function changeStatus(){
            let selectElement = document.querySelector('#status');
            output = selectElement.value;
            getContactInfo(output);
            
        }
        function getContactInfo(infoStatus){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "contact-info.php?status="+infoStatus, true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                document.getElementById('table-body').innerHTML = this.responseText;
                }
            };
        }

        

        function changeInStatus(){
            let selectElement = document.getElementById('Instatus');
            let ids = selectElement.parentElement.parentElement.id;
            output = selectElement.value;
            if(output=="None" || output == "Active"){
                output = "Active";
            }
            // console.log(output+","+ids);
            changeContactStatus(output,ids);
            
            
        }
        function changeContactStatus(output,ids){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "contact-status.php?status="+output+"&id="+ids, true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById('table-body').innerHTML = this.responseText;
                document.getElementById('apply').click();
                }
            };
        }


        function deleteContact(key){
            // console.log(key);
            let text = "Are you sure you want to delete?";
            if (confirm(text) == true) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "contact-delete.php?id="+key, true);
                xmlhttp.send();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                    // console.log(this.responseText);
                    document.getElementById('table-body').innerHTML = this.responseText;
                    document.getElementById('apply').click();
                    }
                };
            } else {
                text = "You canceled!";
            }
            
        }
    </script>

</body>

</html>