<?php
require_once "api/config.php";
session_start();
if(!isset($_SESSION['vr_email']) && empty($_SESSION['vr_email'])) {
	echo "<script>";
	//echo "alert('Welcome!');";
	echo "window.location = ' index.html'"; // redirect with javascript, after page loads
	echo "</script>";
 }
 else{
     echo "<script>";
     echo "window.sessionStorage.setItem('vr_email','".$_SESSION['vr_email']."');";
     echo "</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="DOOH-X -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="assets/img/pari_logo.png" type="image/x-icon"/>

		<!-- Title -->
		<title>DOOH-X</title>

		<!-- Bootstrap css-->
		<link  id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		
		<!-- Icons css-->
		<link href="assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- Select2 css-->
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css">

		<!-- Internal Morrirs Chart css-->
		<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

		<style>
			@font-face {
                font-family: Montserrat;
                src: url(assets/font/Montserrat/Montserrat-Regular.ttf);
            }
            html * {
              font-family: Montserrat;
            }
			.scroll-div{
				padding:5px;
				margin:5px;
				overflow-y: auto;
				overflow-x: hidden;
				text-align:justify;
				height:500px;
				}
				.btn-1 {
			/*background-image: url("assets/img/playdooh_btn.png");*/
			background-color:green;
			 background-size: cover;
			 background-position: center;
            background-repeat: no-repeat;
			border: none;
			}
			.center {
             margin-left:20%;
             margin-right:15%;
            }
		  </style>

	</head>

	<body class="ltr main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page" style="background-color:#FCF9FA">

		<!-- Main Header-->
		<div class="main-header sticky">
			<div class="main-container container-fluid">
				<div class="main-header-left" style=" display: flex;align-items: left;">
					<a href="index.html"><img src="assets/img/pari_logo.png" class="mobile-logo" alt="logo" style="height:50px"></a>
				</div>
				<div class="main-header-center">
					
					
				</div>
				<div class="main-header-right">
					<button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button><!-- Navresponsive closed -->
					
					<div class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="d-flex order-lg-2 ms-auto">
								<div class="main-header-notification">
									<a class="nav-link" href="campaign.php" style="font-size: small;">
										<i class="fe fe-grid header-icons"></i>
										Campaigns
									</a>
								</div>
								<div class="main-header-notification">
									<a class="nav-link" href="" style="font-size: small;">
										<i class="fe fe-monitor header-icons"></i>
										Account Settings
									</a>
								</div>
								<div class="main-header-notification">
									<a class="nav-link" href="index.html" style="font-size: small;">
										<i class="fe fe-user header-icons"></i>
										Logout
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Header-->

			<!-- Main Content-->
			<div class="main-content pt-0">

				<div class="main-container container-fluid">
					<div class="inner-body">
						<div class="page-header"> 
							<div> 
							<h5 style="font-weight: bold;">Welcome, <?php echo $_SESSION['vr_name'];?></h5>
							
								
							</div>
							<div class="d-flex"> 
								<div class="justify-content-center"> 
								<br>
									<a href="dashboard.php"> 
										<button type="button" class="btn my-2 btn-1 btn-icon-text" style="color: white;">
										<i class="fe fe-plus me-2"></i>New Campaign</button> 
									</a>
									</div> 
								</div> 
							</div>
						<!-- Row -->
						<div class="mg-t-5">
							<div class="row row-sm"> 
											    <div class="col-xl-12"> 
											        <div class="row row-cols-1 row-cols-md-4 g-4"> 
											            <div class="col"> 
											                <div class="card custom-card">
											                    <div class="card-body"> 
											                        <button class="btn rounded-10 btn-success center"> 
    											                        <i class="fa fa-check"></i> 
    											                        <span>Complete Campaign</span> 
											                        </button>
											                        <p class="card-text" style="margin-top:10px"><b>New campaign</b></p>
											                        <img src="assets/img/no-image.png" class="mx-auto d-block" alt="..." height="100"> 
											                        <i class="fa fa-images"></i><span>&nbsp;&nbsp;No Designs</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-calendar"></i><span>&nbsp;&nbsp;ASAP - Ongoing</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-dollar"></i><span>&nbsp;&nbsp;Total spend : $0.00</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        
											                        <div class="row row-sm">
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:8px">Total reach</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">This week</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">Yesterday</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                        </div>
											                        <i class="fa fa-chart-line"></i><span>&nbsp;&nbsp;<a href="#">See all analytics</a></span>
											                     </div> 
											                 </div> 
											             </div> 
											            <div class="col"> 
											                <div class="card custom-card">
											                    <div class="card-body"> 
											                        <button class="btn rounded-10 btn-success center"> 
    											                        <i class="fa fa-check"></i> 
    											                        <span>Complete Campaign</span> 
											                        </button>
											                        <p class="card-text" style="margin-top:10px"><b>UntitldeCampaign-04-07-23</b></p>
											                        <img src="assets/img/no-image.png" class="mx-auto d-block" alt="..." height="100"> 
											                        <i class="fa fa-images"></i><span>&nbsp;&nbsp;No Designs</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-calendar"></i><span>&nbsp;&nbsp;ASAP - Ongoing</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-dollar"></i><span>&nbsp;&nbsp;Total spend : $0.00</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        
											                        <div class="row row-sm">
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:8px">Total reach</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">This week</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">Yesterday</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                        </div>
											                        <i class="fa fa-chart-line"></i><span>&nbsp;&nbsp;<a href="#">See all analytics</a></span>
											                     </div> 
											                 </div> 
											             </div> 
											            <div class="col"> 
											                <div class="card custom-card">
											                    <div class="card-body"> 
											                        <button class="btn rounded-10 btn-success center"> 
    											                        <i class="fa fa-check"></i> 
    											                        <span>Complete Campaign</span> 
											                        </button>
											                        <p class="card-text" style="margin-top:10px"><b>Crave</b></p>
											                        <img src="assets/img/no-image.png" class="mx-auto d-block" alt="..." height="100"> 
											                        <i class="fa fa-images"></i><span>&nbsp;&nbsp;No Designs</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-calendar"></i><span>&nbsp;&nbsp;ASAP - Ongoing</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        <i class="fa fa-dollar"></i><span>&nbsp;&nbsp;Total spend : $0.00</span>
											                        <hr style="margin-top:2px;margin-bottom:5px">
											                        
											                        <div class="row row-sm">
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:8px">Total reach</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">This week</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                            
											                            <div class="col-xl-4"> 
											                                <div class="card border border-dark custom-card"> 
											                                    <div class="card-body"> 
											                                        <h1 style="text-align:center">0</h1>
											                                        <span style="font-size:9px">Yesterday</span>
											                                    </div> 
											                                 </div> 
											                            </div>
											                        </div>
											                        <i class="fa fa-chart-line"></i><span>&nbsp;&nbsp;<a href="#">See all analytics</a></span>
											                     </div> 
											                 </div> 
											             </div> 
											         </div> 
											     </div> 
											 </div>
							
						</div>
						<!-- End row -->
	
						
					</div>
				</div>
				<!-- Basic modal -->
				<div class="modal" id="modaldemo11">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Share Campaign Settings</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
							</div>
							<div class="modal-body">
								<p>Who would you like to share the Campaign with?</p>
								<input class="form-control" placeholder="Enter One or More Emails" type="text">
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-1" type="button" style="color:white">Share Campaign Plan</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End Basic modal -->
			</div>
			<!-- End Main Content-->

			<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2024 <a href="#">DOOH-X</a>. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!-- Peity js-->
		<script src="assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- Internal Flot Chart js-->
		<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
		<script src="assets/js/chart.flot.js"></script>

		<!-- Select2 js-->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<script src="assets/js/select2.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js -->
		<script src="assets/plugins/sidemenu/sidemenu.js" id="leftmenu"></script>

		<!-- Sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- Internal Apexchart js-->
		<script src="assets/js/apexcharts.js"></script>

		<!-- Internal Dashboard js-->
		<script src="assets/js/crypto-market.js"></script>

		<!-- Color Theme js -->
		<script src="assets/js/themeColors.js"></script>

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>

		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>


	</body>
</html>