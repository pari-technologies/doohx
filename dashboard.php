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
		
		<!-- DATA TABLE CSS -->
		<!--<link href="assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />-->
		<!--<link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css"  rel="stylesheet">-->
		<!--<link href="assets/plugins/datatable/css/responsive.bootstrap5.css" rel="stylesheet" />-->
			
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

		<!-- Style css-->
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- Select2 css-->
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css">

		<!-- Internal Morrirs Chart css-->
		<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">
		
		<!--Bootstrap-datepicker css-->
		<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">

		<!-- Internal Datetimepicker-slider css -->
		<link href="../assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
		
		<!--<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->
		<script src="quotation_features.js"></script>

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
			/*background-image: linear-gradient(to right, #34F5C5 0%, #2FBED0 51%, #3FA9F5 100%);*/
			background-image: url("assets/img/playdooh_btn.png");
			 background-size: cover;
			 background-position: center;
            background-repeat: no-repeat;
			border: none;
			}
			.leftbox {
                float:left;
                width:33%;
            }
            .middlebox{
                float:left;
                width:33%;
            }
            .rightbox{
                float:right;
                width:33%;
            }
            /* 
             * Always set the map height explicitly to define the size of the div element
             * that contains the map. 
             */
            #map {
              height: 100%;
              width: 100%;
            }
            .vr {
              width: 1px;
              border-right: 2px solid #fc1f0a;
            }
            
            .header {
              position: sticky;
              top: 0;
              z-index: 100;
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

						<!-- Page Header -->
						<div class="page-header">
							<!-- Row -->
											
							<div class="col-lg-1 col-md-1">
								&nbsp;
							</div>
							<div class="col-lg-10 col-md-10">
								<div class="card custom-card">
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-md-1">
												<a class="btn ripple" style="color:white;background-color:#983E97" onclick="save_quotation()">Save</a>
											</div>
											<div class="col-md-3">
												<input class="form-control" placeholder="Client Name" type="text" id="client_name" name="client_name">
											</div>
											<div class="col-md-3">
												<input class="form-control" placeholder="Campaign Name" type="text" id="campaign_name" name="campaign_name">
											</div>
											<div class="col-md-3">
												<!--<input class="form-control" placeholder="Duration" type="text">-->
												<select name="duration" id="duration" placeholder="Duration" class="form-control select2">
																<option value="">Default Select</option>
																<option value="1 week">1 week</option>
																<option value="2 weeks">2 weeks</option>
																<option value="1 month">1 month</option>
																<option value="2 months">3 months</option>
																<option value="6 moths">6 months</option>
																<option value="12 months">12 months</option>
																
															</select>
											</div>
											<div class="col-lg">
												<!--<button class="btn ripple btn-1" style="color:white">Share</button>-->
												<img src="assets/img/icons/share2.png" width="25px" style="color:orange;padding-top:5px"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-1">
								&nbsp;
							</div>
						
						<!-- End Row -->

						</div>
						<!-- End Page Header -->

						<!-- row -->
						
						<div class="row row-sm">
							<div style="width:15%">
								&nbsp;
							</div>
							<div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-6" >
								<h4 class="text-center tx-15">Analytics</h4>
								<div id="key_metrics_box" class="card custom-card text-center" style="background-color: #36454F;color:white">
									<div class="card-body pb-3">
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2" id="traffic_title">0</h4>
												<div class="d-flex tx-12">Impressions /mo</div>
											</div>
											<div style="width:5%;"></div>
											<div class="">
												<h4 class="mb-2" id="ecpm_average_title">0</h4>
												<div class="d-flex tx-12">eCPM average</div>
											</div>
											<!--<div class="">-->
											<!--	<h4 class="mb-2" id="average_sqfeet_title">0</h4>-->
											<!--	<div class="d-flex tx-12">Avg SqFeet</div>-->
											<!--</div>-->
											<!--<div style="width:5%;"></div>-->
											<!--<div class="">-->
											<!--	<h4 class="mb-2" id="total_sqfeet_title">0</h4>-->
											<!--	<div class="d-flex tx-12">Total SqFeet</div>-->
											<!--</div>-->
											<div style="width:5%;"></div>
											<div class="">
												<h4 class="mb-2" id="min_exposure_title">0</h4>
												<div class="d-flex tx-12">Min Exposures/Day</div>
											</div>
											<div style="width:5%;"></div>
											<div class="">
												<h4 class="mb-2" id="total_screens_title">0</h4>
												<div class="d-flex tx-12">Targetable screens</div>
											</div>
											<div style="width:5%;"></div>
											<div class="">
												<h4 class="mb-2" id="reach_title">2</h4>
												<div class="d-flex tx-12">Venue types</div>
											</div>
											<div style="width:5%;"></div>
											<!-- <a aria-controls="collapseExample" aria-expanded="false" data-bs-toggle="collapse" href="#collapseExample" style="color:white" onclick="openKeyMetricsBox()"> -->
											
											<!--<a href="#" style="color:white;" onclick="openKeyMetricsBox()">-->
											<!--	<div class="">-->
											<!--		<h6 class="tx-15" id="total_venue_type">Details</h6>-->
											<!--		<div class="tx-12" style="text-align: center;">-->
											<!--			<i id="key_metrics_box_carret" class="fas fa-caret-down ms-1"></i>-->
											<!--		</div>-->
											<!--	</div>-->
											<!--</a>-->

											<!-- <a href="#" style="color:white" onclick="openKeyMetricsBox()">
												<div>
													<h6 class="tx-15">Details</h6>
													<div class="text-center">
														<i id="key_metrics_box_carret" class="fas fa-caret-down ms-1"></i>
													</div>
												</div>
											</a> -->
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-2 col-12">
								<h4 class="tx-15 text-center">Budget</h4>
								<div id="quotation_box" class="card custom-card text-center" style="background-color: #36454F;color:white">
									<div class="card-body pb-3">
										
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2" id="quotation_title" style="padding-left:30px">RM0</h4>
												<div class="d-flex tx-12" style="padding-left:30px"> Total</div>
												<div class="d-flex tx-12"> &nbsp;</div>
												
											</div>
											<!--<div style="width:40%;"></div>-->
											<!-- <a aria-controls="collapse2" aria-expanded="false" data-bs-toggle="collapse" href="#collapse2" style="color:white" onclick="openQuotationBox()"> -->
											<!--<a href="#" style="color:white" onclick="openQuotationBox()">-->
											<!--	<div>-->
											<!--		<h6 class="tx-15">Details</h6>-->
											<!--		<div class="text-center"><i id="quotation_box_carret" class="fas fa-caret-down ms-1"></i></div>-->
											<!--	</div>-->
											<!--</a>-->
											
										</div>
									</div>
								</div>
							</div>
							<!--<div class="col-lg-2 col-xl-1 col-xxl-1 col-md-1 col-12">-->
							<!--	<h4 class="tx-15 text-center">Locations</h4>-->
							<!--	<div id="location_box" class="card custom-card text-center">-->
							<!--		<div class="card-body pb-1">-->
										<!-- <a aria-controls="collapse3" aria-expanded="false" data-bs-toggle="collapse" href="#collapse3" > -->
							<!--			<a href="#" onclick="openLocationBox()">-->
							<!--				<div class="">-->
							<!--					<img id="pic1" class="pic-1" alt="product-image-1" src="assets/img/icons/map2.png" style="width:50px;padding-bottom:10px">-->
							<!--					<div class="text-center"><i id="location_box_carret" class="fas fa-caret-down"></i></div>-->
							<!--				</div>-->
							<!--			</a>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
						
						</div>
						
						<div class="col-lg-8 col-xl-8 col-xxl-8 col-md-8 col-12" style="margin: auto;width: 50%;">
						    <div class="card-body">
                                <ul class="nav nav-pills mb-3 nav-justified tab-style-5 d-sm-flex d-block" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" onclick="setActiveTab('pills-home-tab')" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Geo-Targets & Venue Types</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" onclick="setActiveTab('pills-profile-tab')" data-bs-target="#modaldemo2" data-bs-toggle="modal" href="" role="tab"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Campaign Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" onclick="setActiveTab('pills-contact-tab')"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Target Audience</button>
                                    </li>
                                </ul>
                                
                            </div>
						</div>
						
                            
						<!-- End row -->
						<div class="collapse mg-t-5" id="collapseExample">
							<div class="row row-sm">
								<!-- <div class="col-md-12 col-lg-12 col-xl-12"> -->
									<div class="card custom-card transcation-crypto">
										<div class="card-body">

											<div class="leftbox"> 
												<div>
													<h5>Reach/Eyeballs - Daily and Monthly</h5>
													<canvas id="chart_one"></canvas>
												</div>
											</div>
											<div class="middlebox"> 
												<div>
													<h5>Traffic Light</h5>
													<canvas id="chart_two"></canvas>
												</div>
											</div>
											<div class="rightbox"> 
												<div>
													<h5>Traffic/Vehicles - Daily and Monthly</h5>
													<canvas id="chart_three"></canvas>
												</div>
											</div>

										</div>
										
									</div>

								<!-- </div> -->
							</div>
							<!-- <img src="assets/img/dooh_chart.png" /> -->
						</div>
						<!-- Row -->
						<div class="collapse mg-t-5" id="collapse2">
							<div class="row row-sm">
								<div class="col-md-12 col-lg-12 col-xl-12">
									<div class="card custom-card transcation-crypto">
										
										<div class="card-body">
										    <div class="table-responsive" style="width:40%">
												<div id="small_quotation_table"></div>
											</div>
											<br><br>
											<div class="table-responsive">
												<div id="quotation_table"></div>
											</div>
											
											
											<div class="table-responsive">
												<div id="takeout_quotation_table"></div>
											</div>
											
										</div>
									</div>
									<!-- Row End -->
								</div>
							</div>
							
						</div>
						<!-- End row -->
						<!--<div class="collapse mg-t-5" id="collapse3">-->
						<!--	<div class="card custom-card">-->
						<!--		<div class="row row-sm">-->
						<!--			<div class="col-xl-6 col-lg-6 col-sm-6 pe-0 ps-0 border-end">	-->
						<!--				<div id="map"></div>-->
											<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.880709041158!2d101.71099650800299!3d3.157485099425247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0xc955b08cfc1aae29!2sSuria%20KLCC!5e0!3m2!1sen!2smy!4v1681234604303!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
						<!--			</div>-->
						<!--			<div class="col-xl-6 col-lg-6 col-sm-6 pe-0 ps-0 border-end">-->
						<!--					<div class="scroll-div">-->
						<!--						<div class="col-xl-12 col-lg-12 col-md-12">-->
						<!--							<div id="map_locations"></div>-->
						<!--						</div>-->
						<!--					</div>-->
										
						<!--			</div>-->
									
						<!--		</div>-->

						<!--	</div>-->
							
							
						<!--</div>-->
						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-12">
								<div class="card custom-card">
								    
								    <div class="row row-sm">
								                <div class="col-xl-3 col-lg-3 col-sm-3 pe-0 ps-0 border-end">
            											<div class="scroll-div">
            												<div class="col-xl-12 col-lg-12 col-md-12">
            													<div id="map_locations"></div>
            												</div>
            											</div>
            										
            									</div>
            									<div class="col-xl-9 col-lg-9 col-sm-9 pe-0 ps-0 border-end">	
            										<div id="map"></div>
            											<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.880709041158!2d101.71099650800299!3d3.157485099425247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0xc955b08cfc1aae29!2sSuria%20KLCC!5e0!3m2!1sen!2smy!4v1681234604303!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            									</div>
            									
            									
            								</div>
						
								</div>
								<!-- Grid modal -->
								<div class="modal" id="modaldemo6">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content modal-content-demo">
											
											<div class="modal-body">
												<div class="row row-sm">
													<div class="col-md-3">
														<div class="item-card-img">
															<img id="detail_img" style="object-fit: cover;height:150px" src="" alt="no image" onerror="javascript:this.src='assets/img/no-image.png'">
														
														</div>
													</div>
													<div class="col-md-7">
														<h5 class="font-weight-bold mt-0" id="detail_title">Jalan Raja Laut</h5>
														<p class="font-weight-semibold mt-0" id="detail_desc">VR 2014</p>
														<p>3.1334 &deg;N, 101.629320 &deg;E</p>
														<img src="assets/img/icons/view.png" style="width:20px"/> &nbsp;<span>360,000 Average Daily Views</span><br>
														<img src="assets/img/icons/day-and-night.png" style="width:20px"/> &nbsp;<span>2160 per day</span><br>
														<img src="assets/img/icons/road.png" style="width:20px"/> &nbsp;<span>Left side of the road</span><br>
														<img src="assets/img/icons/stopwatch.png" style="width:20px"/> &nbsp;<span>15 seconds</span><br>
														<img src="assets/img/icons/scale-up.png" style="width:20px"/> &nbsp;<span>30x20</span><br>
														<img src="assets/img/icons/seen.png" style="width:20px"/> &nbsp;<span>Available</span>
													</div>
													<div class="col-md-2">
														<button class="btn ripple btn-block btn-1" style="color:white"><i class="fe fe-plus"></i>&nbsp;Add Sign</button>
													</div>
													
												</div>
												
											</div>
											
										</div>
									</div>
								</div>
								<!--End Grid modal -->
								
								
								<!-- Grid modal -->
								<div class="modal" id="modaldemo1">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content modal-content-demo">
											
											<div class="modal-body">
												<div class="row row-sm">
										<div class="col-xl-12 col-lg-12 col-sm-12">
											<div class="card-body">
											    <div class="row row-sm">
											        <div class="col-xl-11 col-lg-11 col-sm-11" >
    											        <h4 class="mb-0">Geo Targets</h4> 
    											    </div>
    											    <div class="col-xl-1 col-lg-1 col-sm-1">
    											        	<!--<a class="btn ripple btn-1" style="color:white" href="#" onclick="getQuotation();">Get quotation</a>-->
    											    </div>
											    </div>
												<br>
												<div class="row row-sm">
												    <div class="form-group col-lg-6 ">
														<span style="text-align: start;">State</span>
														<div class="form-group ">
														<select class="form-control select2 select2-hidden-accessible" name="state_name" id="state_name" multiple="" tabindex="-1" aria-hidden="true" onchange="getQuotation();">
														<?php
                                                            $sql = "SELECT DISTINCT(state) from vr_assets ";
                                                            if($result = mysqli_query($link, $sql)){
                                                                if(mysqli_num_rows($result) > 0){
                                                                    while($row = mysqli_fetch_array($result)){
                    												echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';
                                                                        }
                                
                                                                    // Free result set
                                                                    mysqli_free_result($result);
                                                                } 
                                                            }
                                                          ?>
														</select>
														</div>
													</div>
													
													<div class="form-group col-lg-6 ">
														<span style="text-align: start;">District</span>
														<div class="form-group ">
															<select class="form-control select2 select2-hidden-accessible" name="district" id="district" multiple="" tabindex="-1" aria-hidden="true" onchange="getQuotation();">
															<?php
																$sql = "SELECT DISTINCT(district) from vr_assets ";
																if($result = mysqli_query($link, $sql)){
																	if(mysqli_num_rows($result) > 0){
																		while($row = mysqli_fetch_array($result)){
																		echo '<option value="'.$row['district'].'">'.$row['district'].'</option>';
																			}
									
																		// Free result set
																		mysqli_free_result($result);
																	} 
																}
															?>
															</select>
														</div>
													</div>
													
												</div>
												
												<div class="row row-sm">
												    <div class="form-group col-lg-6 ">
														<span style="text-align: start;">Location: Urban/ Other Urban/ Rural</span>
														<div class="form-group ">
															<select name="location_1" id="location_1"  class="form-control select2" onchange="getQuotation();">
																<option value="">Default Select</option>
																<option value="Urban">Urban</option>
																<option value="Suburban">Suburban</option>
																<option value="Rural">Rural</option>
															</select>
														</div>
													</div>
													
													<div class="form-group col-lg-6 ">
														<span style="text-align: start;">Location: Road/Site</span>
														<div class="form-group ">
															<select class="form-control select2 select2-hidden-accessible" name="road_site" id="road_site" multiple="" tabindex="-1" aria-hidden="true" onchange="getQuotation();">
																<?php
																	$sql = "SELECT DISTINCT(road_site) from vr_assets ";
																	if($result = mysqli_query($link, $sql)){
																		if(mysqli_num_rows($result) > 0){
																			while($row = mysqli_fetch_array($result)){
																			echo '<option value="'.$row['road_site'].'">'.$row['road_site'].'</option>';
																				}
										
																			// Free result set
																			mysqli_free_result($result);
																		} 
																	}
															?>
															</select>
														</div>
													</div>
												</div>
												
												<div class="row row-sm">
												    <div class="form-group col-lg-6 ">
														<span style="text-align: start;">Zip Code</span>
														<div class="form-group ">
															<input class="form-control" placeholder="All Zip Codes" type="text">
														</div>
													</div>
												</div>
												
												<div class="row row-sm">
												    <div class="row row-sm">
    											        <div class="col-xl-3 col-lg-3 col-sm-3" >
        											        <a href="#" onclick="openImpactBox()" style="color:black"><h5><img id="impact_arrow" src="assets/img/icons/arrow_right.png" height="20px"/>Venue types</h5></a>
        											    </div>
        											    <div class="col-xl-1 col-lg-1 col-sm-1">
        											        	<!--<a class="btn ripple btn-1" style="color:white" href="#" onclick="getQuotation();">Get quotation</a>-->
        											    </div>
    											    </div>
    											    

            										<div id="impact_box" style="display:none">
            											<div class="row row-sm">
        													<div class="form-group col-lg-6 ">
        														<!--<span style="text-align: start;">Outdoor or indoor screens</span>-->
        														<span style="text-align: start;">Outdoor screens</span>
        														<div class="form-group ">
        															<select name="media_platform" id="media_platform" class="form-control select2" onchange="callAndRefresh();">
        																<option value="">Default Select</option>
        																<!--<option value="indoor">Indoor</option>-->
        																<option value="outdoor">Outdoor</option>
        																<!--<option value="network">Network</option>-->
        															</select>
        														</div>
        													</div>
        													<div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Venue types</span>
        														<!-- <div class="form-group ">
        															<select name="site_name" id="site_name" class="form-control select2">
        																<option value="">Default Select</option>
        															</select>
        														</div> -->
        														<select class="form-control select2 select2-hidden-accessible" name="site_code" id="site_code" multiple="" tabindex="-1" aria-hidden="true" onchange="getQuotation();">
        														<?php
        														
                                                                    $sql = "SELECT DISTINCT(media_platform) from vr_assets";
                                                                    if($result = mysqli_query($link, $sql)){
                                                                        if(mysqli_num_rows($result) > 0){
                                                                            while($row = mysqli_fetch_array($result)){
                                                                            
                            												echo '<option value="'.$row['media_platform'].'">'.$row['media_platform'].'</option>';
                            												
                                                                                }
                                        
                                                                            // Free result set
                                                                            mysqli_free_result($result);
                                                                        } 
                                                                    } 
                                        
                                                                    // Close connection
                                                                    // mysqli_close($link);
                                                                  ?>

        														</select>
        													</div>
												        </div>
												        
												        <div class="row row-sm">
												            <div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Screen orientation</span>
        														<div class="form-group ">
        														<select name="orientation" id="orientation" class="form-control select2" onchange="getQuotation();">
        																<option value="">All orientations</option>
        																<option value="Vertical">Vertical</option>
        																<option value="Horizontal">Horizontal</option>
        																
        															</select>
        														</div>
        													</div>
												            <div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Ad content sizes</span>
        														<div class="form-group ">
        														<select class="form-control select2 select2-hidden-accessible" name="total_screen_size" id="total_screen_size" multiple="" tabindex="-1" aria-hidden="true" onchange="getQuotation();">
        																<option value="">Default Select</option>
        																<option value="b_100ft">Small (0-300sqft)</option>
        																<option value="a_100ft">Medium (301-1000sqft)</option>
        																<option value="a_100ft">Large (1001-2500sqft)</option>
        																<option value="a_100ft">Spectacular (2500sqft & above)</option>
        															</select>
        														</div>
        													</div>
        													
												        </div>
            										</div>
            									</div>
            									
            									<div class="row row-sm">
												    <div class="row row-sm">
    											        <div class="col-xl-3 col-lg-3 col-sm-3" >
        											        <a href="#" onclick="openDemoBox()" style="color:black"><h5><img id="demo_arrow" src="assets/img/icons/arrow_right.png" height="20px"/>Advanced</h5></a>
        											    </div>
        											    <div class="col-xl-1 col-lg-1 col-sm-1">
        											        	<!--<a class="btn ripple btn-1" style="color:white" href="#" onclick="getQuotation();">Get quotation</a>-->
        											    </div>
    											    </div>
    											    

            										<div id="demo_box" style="display:none">
            											<div class="row row-sm">
        													<div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Dwell Time</span>
        														<div class="form-group ">
        															<select name="dwell_time" id="dwell_time" class="form-control select2" onchange="getQuotation();">
        																<option value="">Default Select</option>
        																<option value="slow traffic">Slow traffic</option>
        																<option value="moving traffic">Moving traffic</option>
        																<option value="traffic light">Traffic lights</option>
        																
        															</select>
        														</div>
        													</div>
        													<div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Angle of view</span>
        														<div class="form-group ">
        															<select name="angle_of_view" id="angle_of_view" class="form-control select2" onchange="getQuotation();">
        																<option value="">Default Select</option>
        																<option value="poor">Poor</option>
        																<option value="medium">Medium</option>
        																<option value="good">Good</option>
        															
        															</select>
        														</div>
        													</div>
												        </div>
												        
												        <div class="row row-sm">
												            <div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Board Viewing Distance</span>
        														<div class="form-group ">
        															<select name="board_viewing_distance" id="board_viewing_distance" class="form-control select2" onchange="getQuotation();">
        																<option value="">Default Select</option>
        																<option value="(S) Able to view from 50m">(S) Able to view from 50m</option>
        																<option value="(M) Able to view from 100m">(M) Able to view from 100m </option>
        																<option value="(L) Able to view from 150m">(L) Able to view from 150m </option>
        															</select>
        														</div>
        													</div>
												            <div class="form-group col-lg-6 ">
        														<span style="text-align: start;">Competing Screens</span>
        														<div class="form-group ">
        															<select name="competing_screens" id="competing_screens" class="form-control select2" onchange="getQuotation();">
        																<option value="">Default Select</option>
        																<option value="0">0</option>
        																<option value="1">1</option>
        																<option value="2">2</option>
        																<option value="3">3</option>
        																<option value="4">4</option>
        																<option value="5">5</option>
        																<option value="6">6</option>
        																<option value="7">7</option>
        																<option value="8">8</option>
        																<option value="9">9</option>
        																<option value="10">10</option>
        																
        															</select>
        														</div>
        													</div>
        													
												        </div>
            										</div>
            									</div>
											</div>
										</div>
									</div>
												
											</div>
											
										</div>
									</div>
								</div>
								<!--End Grid modal -->
								
								
								<!-- Grid modal -->
								<div class="modal" id="modaldemo2">
									<div class="modal-dialog modal-xl" role="document">
										<div class="modal-content modal-content-demo">
											
											<div class="modal-body">
												<div class="row row-sm">
        										<div class="col-xl-12 col-lg-12 col-sm-12">
        											<div class="card-body">
        											    <div class="row row-sm">
        												    <div class="form-group col-lg-5 ">
        														<h5 class="mb-0">Schedule & Dayparting</h5>
        														<br>
        														<h6 class="mb-0">Schedule</h6> 
        														<div class="row row-sm">
        														    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5"> 
            														    <label for="input-date" class="form-label">Start</label> 
                														<input type="date" class="form-control" id="input-date" style="padding: 2;"> 
            														</div>
            														<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5"> 
            														    <label for="input-date" class="form-label">End</label> 
                														<input type="date" class="form-control" id="input-date" style="padding: 2;"> 
            														</div>
        														</div>
        														<br><br>
        														<h6 class="mb-0">Timezone & Start/End Time</h6> 
        														<div class="row row-sm">
        														    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10"> 
        														        <label for="input-date" class="form-label">Timezone</label> 
                														<select name="timezone" id="timezone" placeholder="Timezone" class="form-control select2">
            																<option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                                                        	<option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                                                        	<option value="-10:00">(GMT -10:00) Hawaii</option>
                                                                        	<option value="-09:50">(GMT -9:30) Taiohae</option>
                                                                        	<option value="-09:00">(GMT -9:00) Alaska</option>
                                                                        	<option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                                                        	<option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                                                        	<option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                                                        	<option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                                                        	<option value="-04:50">(GMT -4:30) Caracas</option>
                                                                        	<option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                                                        	<option value="-03:50">(GMT -3:30) Newfoundland</option>
                                                                        	<option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                                                        	<option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                                                        	<option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                                                        	<option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                                        	<option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                                        	<option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                                                        	<option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                                                        	<option value="+03:50">(GMT +3:30) Tehran</option>
                                                                        	<option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                                                        	<option value="+04:50">(GMT +4:30) Kabul</option>
                                                                        	<option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                                                        	<option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                                                        	<option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                                                        	<option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                                                        	<option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                                                        	<option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                                                        	<option value="+08:00" selected="selected">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                                                        	<option value="+08:75">(GMT +8:45) Eucla</option>
                                                                        	<option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                                                        	<option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                                                        	<option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                                                        	<option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                                                        	<option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                                                        	<option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                                                        	<option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                                                        	<option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                                                        	<option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                                                        	<option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
            															</select>
        														    </div>
        														    
        														</div>
        														        
        														<div class="row row-sm">
        														    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5"> 
            														    <label for="input-date" class="form-label">Start</label> 
                														<input type="time" class="form-control" id="starttime" name="starttime" style="padding: 2;"> 
            														</div>
            														<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5"> 
            														    <label for="input-date" class="form-label">End</label> 
                														<input type="time" class="form-control" id="endtime" name="endtime" style="padding: 2;"> 
            														</div>
        														</div>
        														
        														
        													</div>
        													
        													<div class="form-group col-lg-4 ">
        														<h5 class="mb-0">Budget</h5>
        														<br>
        														<h6 class="mb-0">Total Budget</h6> 
        														<div class="row row-sm">
        														    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
            															<select name="currency" id="currency" class="form-control select2">
            																<option value="">Default Select</option>
            																<option value="USD" selected="selected" label="US dollar">USD</option>
                                                                            <option value="EUR" label="Euro">EUR</option>
                                                                            <option value="JPY" label="Japanese yen">JPY</option>
                                                                            <option value="GBP" label="Pound sterling">GBP</option>
                                                                            <option disabled>──────────</option>
                                                                            <option value="AED" label="United Arab Emirates dirham">AED</option>
                                                                            <option value="AFN" label="Afghan afghani">AFN</option>
                                                                            <option value="ALL" label="Albanian lek">ALL</option>
                                                                            <option value="AMD" label="Armenian dram">AMD</option>
                                                                            <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                                                                            <option value="AOA" label="Angolan kwanza">AOA</option>
                                                                            <option value="ARS" label="Argentine peso">ARS</option>
                                                                            <option value="AUD" label="Australian dollar">AUD</option>
                                                                            <option value="AWG" label="Aruban florin">AWG</option>
                                                                            <option value="AZN" label="Azerbaijani manat">AZN</option>
                                                                            <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
                                                                            <option value="BBD" label="Barbadian dollar">BBD</option>
                                                                            <option value="BDT" label="Bangladeshi taka">BDT</option>
                                                                            <option value="BGN" label="Bulgarian lev">BGN</option>
                                                                            <option value="BHD" label="Bahraini dinar">BHD</option>
                                                                            <option value="BIF" label="Burundian franc">BIF</option>
                                                                            <option value="BMD" label="Bermudian dollar">BMD</option>
                                                                            <option value="BND" label="Brunei dollar">BND</option>
                                                                            <option value="BOB" label="Bolivian boliviano">BOB</option>
                                                                            <option value="BRL" label="Brazilian real">BRL</option>
                                                                            <option value="BSD" label="Bahamian dollar">BSD</option>
                                                                            <option value="BTN" label="Bhutanese ngultrum">BTN</option>
                                                                            <option value="BWP" label="Botswana pula">BWP</option>
                                                                            <option value="BYN" label="Belarusian ruble">BYN</option>
                                                                            <option value="BZD" label="Belize dollar">BZD</option>
                                                                            <option value="CAD" label="Canadian dollar">CAD</option>
                                                                            <option value="CDF" label="Congolese franc">CDF</option>
                                                                            <option value="CHF" label="Swiss franc">CHF</option>
                                                                            <option value="CLP" label="Chilean peso">CLP</option>
                                                                            <option value="CNY" label="Chinese yuan">CNY</option>
                                                                            <option value="COP" label="Colombian peso">COP</option>
                                                                            <option value="CRC" label="Costa Rican colón">CRC</option>
                                                                            <option value="CUC" label="Cuban convertible peso">CUC</option>
                                                                            <option value="CUP" label="Cuban peso">CUP</option>
                                                                            <option value="CVE" label="Cape Verdean escudo">CVE</option>
                                                                            <option value="CZK" label="Czech koruna">CZK</option>
                                                                            <option value="DJF" label="Djiboutian franc">DJF</option>
                                                                            <option value="DKK" label="Danish krone">DKK</option>
                                                                            <option value="DOP" label="Dominican peso">DOP</option>
                                                                            <option value="DZD" label="Algerian dinar">DZD</option>
                                                                            <option value="EGP" label="Egyptian pound">EGP</option>
                                                                            <option value="ERN" label="Eritrean nakfa">ERN</option>
                                                                            <option value="ETB" label="Ethiopian birr">ETB</option>
                                                                            <option value="EUR" label="EURO">EUR</option>
                                                                            <option value="FJD" label="Fijian dollar">FJD</option>
                                                                            <option value="FKP" label="Falkland Islands pound">FKP</option>
                                                                            <option value="GBP" label="British pound">GBP</option>
                                                                            <option value="GEL" label="Georgian lari">GEL</option>
                                                                            <option value="GGP" label="Guernsey pound">GGP</option>
                                                                            <option value="GHS" label="Ghanaian cedi">GHS</option>
                                                                            <option value="GIP" label="Gibraltar pound">GIP</option>
                                                                            <option value="GMD" label="Gambian dalasi">GMD</option>
                                                                            <option value="GNF" label="Guinean franc">GNF</option>
                                                                            <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
                                                                            <option value="GYD" label="Guyanese dollar">GYD</option>
                                                                            <option value="HKD" label="Hong Kong dollar">HKD</option>
                                                                            <option value="HNL" label="Honduran lempira">HNL</option>
                                                                            <option value="HRK" label="Croatian kuna">HRK</option>
                                                                            <option value="HTG" label="Haitian gourde">HTG</option>
                                                                            <option value="HUF" label="Hungarian forint">HUF</option>
                                                                            <option value="IDR" label="Indonesian rupiah">IDR</option>
                                                                            <option value="ILS" label="Israeli new shekel">ILS</option>
                                                                            <option value="IMP" label="Manx pound">IMP</option>
                                                                            <option value="INR" label="Indian rupee">INR</option>
                                                                            <option value="IQD" label="Iraqi dinar">IQD</option>
                                                                            <option value="IRR" label="Iranian rial">IRR</option>
                                                                            <option value="ISK" label="Icelandic króna">ISK</option>
                                                                            <option value="JEP" label="Jersey pound">JEP</option>
                                                                            <option value="JMD" label="Jamaican dollar">JMD</option>
                                                                            <option value="JOD" label="Jordanian dinar">JOD</option>
                                                                            <option value="JPY" label="Japanese yen">JPY</option>
                                                                            <option value="KES" label="Kenyan shilling">KES</option>
                                                                            <option value="KGS" label="Kyrgyzstani som">KGS</option>
                                                                            <option value="KHR" label="Cambodian riel">KHR</option>
                                                                            <option value="KID" label="Kiribati dollar">KID</option>
                                                                            <option value="KMF" label="Comorian franc">KMF</option>
                                                                            <option value="KPW" label="North Korean won">KPW</option>
                                                                            <option value="KRW" label="South Korean won">KRW</option>
                                                                            <option value="KWD" label="Kuwaiti dinar">KWD</option>
                                                                            <option value="KYD" label="Cayman Islands dollar">KYD</option>
                                                                            <option value="KZT" label="Kazakhstani tenge">KZT</option>
                                                                            <option value="LAK" label="Lao kip">LAK</option>
                                                                            <option value="LBP" label="Lebanese pound">LBP</option>
                                                                            <option value="LKR" label="Sri Lankan rupee">LKR</option>
                                                                            <option value="LRD" label="Liberian dollar">LRD</option>
                                                                            <option value="LSL" label="Lesotho loti">LSL</option>
                                                                            <option value="LYD" label="Libyan dinar">LYD</option>
                                                                            <option value="MAD" label="Moroccan dirham">MAD</option>
                                                                            <option value="MDL" label="Moldovan leu">MDL</option>
                                                                            <option value="MGA" label="Malagasy ariary">MGA</option>
                                                                            <option value="MKD" label="Macedonian denar">MKD</option>
                                                                            <option value="MMK" label="Burmese kyat">MMK</option>
                                                                            <option value="MNT" label="Mongolian tögrög">MNT</option>
                                                                            <option value="MOP" label="Macanese pataca">MOP</option>
                                                                            <option value="MRU" label="Mauritanian ouguiya">MRU</option>
                                                                            <option value="MUR" label="Mauritian rupee">MUR</option>
                                                                            <option value="MVR" label="Maldivian rufiyaa">MVR</option>
                                                                            <option value="MWK" label="Malawian kwacha">MWK</option>
                                                                            <option value="MXN" label="Mexican peso">MXN</option>
                                                                            <option value="MYR" label="Malaysian ringgit">MYR</option>
                                                                            <option value="MZN" label="Mozambican metical">MZN</option>
                                                                            <option value="NAD" label="Namibian dollar">NAD</option>
                                                                            <option value="NGN" label="Nigerian naira">NGN</option>
                                                                            <option value="NIO" label="Nicaraguan córdoba">NIO</option>
                                                                            <option value="NOK" label="Norwegian krone">NOK</option>
                                                                            <option value="NPR" label="Nepalese rupee">NPR</option>
                                                                            <option value="NZD" label="New Zealand dollar">NZD</option>
                                                                            <option value="OMR" label="Omani rial">OMR</option>
                                                                            <option value="PAB" label="Panamanian balboa">PAB</option>
                                                                            <option value="PEN" label="Peruvian sol">PEN</option>
                                                                            <option value="PGK" label="Papua New Guinean kina">PGK</option>
                                                                            <option value="PHP" label="Philippine peso">PHP</option>
                                                                            <option value="PKR" label="Pakistani rupee">PKR</option>
                                                                            <option value="PLN" label="Polish złoty">PLN</option>
                                                                            <option value="PRB" label="Transnistrian ruble">PRB</option>
                                                                            <option value="PYG" label="Paraguayan guaraní">PYG</option>
                                                                            <option value="QAR" label="Qatari riyal">QAR</option>
                                                                            <option value="RON" label="Romanian leu">RON</option>
                                                                            <option value="RSD" label="Serbian dinar">RSD</option>
                                                                            <option value="RUB" label="Russian ruble">RUB</option>
                                                                            <option value="RWF" label="Rwandan franc">RWF</option>
                                                                            <option value="SAR" label="Saudi riyal">SAR</option>
                                                                            <option value="SEK" label="Swedish krona">SEK</option>
                                                                            <option value="SGD" label="Singapore dollar">SGD</option>
                                                                            <option value="SHP" label="Saint Helena pound">SHP</option>
                                                                            <option value="SLL" label="Sierra Leonean leone">SLL</option>
                                                                            <option value="SLS" label="Somaliland shilling">SLS</option>
                                                                            <option value="SOS" label="Somali shilling">SOS</option>
                                                                            <option value="SRD" label="Surinamese dollar">SRD</option>
                                                                            <option value="SSP" label="South Sudanese pound">SSP</option>
                                                                            <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
                                                                            <option value="SYP" label="Syrian pound">SYP</option>
                                                                            <option value="SZL" label="Swazi lilangeni">SZL</option>
                                                                            <option value="THB" label="Thai baht">THB</option>
                                                                            <option value="TJS" label="Tajikistani somoni">TJS</option>
                                                                            <option value="TMT" label="Turkmenistan manat">TMT</option>
                                                                            <option value="TND" label="Tunisian dinar">TND</option>
                                                                            <option value="TOP" label="Tongan paʻanga">TOP</option>
                                                                            <option value="TRY" label="Turkish lira">TRY</option>
                                                                            <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
                                                                            <option value="TVD" label="Tuvaluan dollar">TVD</option>
                                                                            <option value="TWD" label="New Taiwan dollar">TWD</option>
                                                                            <option value="TZS" label="Tanzanian shilling">TZS</option>
                                                                            <option value="UAH" label="Ukrainian hryvnia">UAH</option>
                                                                            <option value="UGX" label="Ugandan shilling">UGX</option>
                                                                            <option value="USD" label="United States dollar">USD</option>
                                                                            <option value="UYU" label="Uruguayan peso">UYU</option>
                                                                            <option value="UZS" label="Uzbekistani soʻm">UZS</option>
                                                                            <option value="VES" label="Venezuelan bolívar soberano">VES</option>
                                                                            <option value="VND" label="Vietnamese đồng">VND</option>
                                                                            <option value="VUV" label="Vanuatu vatu">VUV</option>
                                                                            <option value="WST" label="Samoan tālā">WST</option>
                                                                            <option value="XAF" label="Central African CFA franc">XAF</option>
                                                                            <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
                                                                            <option value="XOF" label="West African CFA franc">XOF</option>
                                                                            <option value="XPF" label="CFP franc">XPF</option>
                                                                            <option value="ZAR" label="South African rand">ZAR</option>
                                                                            <option value="ZMW" label="Zambian kwacha">ZMW</option>
                                                                            <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
            															</select>
            															
        														    </div>
        														    
        														    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        														        <input type="text" class="form-control" id="currency_val" name="currency_val"> 
        														    </div>
        														</div>
        														
        														<br>
        														<h6 class="mb-0">Daily Budget</h6> 
        														 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" style="padding-left: 0 !important;">
        														        <input type="text" class="form-control" id="currency_val_daily" name="currency_val_daily" placeholder="0.00" readonly> 
        														    </div>
        														
        													</div>
        													
        													
        													<div class="form-group col-lg-3 ">
        														<h5 class="mb-0">Venue Mix Allocation</h5> 
        														<br>
        														<span style="font-size:12px">Enter a budget to add constraints</span>
        													</div>
        													
        												</div>
        												
                    									
        											</div>
        										</div>
									</div>
												
											</div>
											
										</div>
									</div>
								</div>
								<!--End Grid modal -->
								
							</div>
						</div>
						<!-- End Row -->
					</div>
				</div>
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
		<a href="#top" id="back-to-top" style="background-color:#983E97;border-color: #983E97;"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Internal Chart.Bundle js-->
		<!--<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>-->

		<!-- Peity js-->
		<script src="assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- Internal Flot Chart js-->
		<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
		<!--<script src="assets/js/chart.flot.js"></script>-->

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
		<!--<script src="assets/js/apexcharts.js"></script>-->

		<!-- Internal Dashboard js-->
		<script src="assets/js/crypto-market.js"></script>

		<!-- Color Theme js -->
		<script src="assets/js/themeColors.js"></script>

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>
		
		<!-- Internal Data Table js -->
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
		<script src="assets/js/table-data.js"></script>
		<script src="assets/js/select2.js"></script>

		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>

		<script src="dashboard_features.js"></script>
		
		<script>
		    $(document).ready( function () {
		        getQuotation();
                $('#example1').DataTable();
            } );
            
            function setMediaPlatform(){
                var eMediaPlatform = document.getElementById("media_platform");
                var eMediaPlatformValue = eMediaPlatform.value;
                var sql = "api/get_sitecode.php?";
                
                
                if(eMediaPlatformValue !== ""){
                    sql += "media_platform="+eMediaPlatformValue;
                }
                const xhttp = new XMLHttpRequest();
                
                xhttp.onload = function() {
                var rData = JSON.parse(this.response);
                
                console.log(rData);
                
                document.getElementById("site_code").innerHTML = "";
                var parent = document.getElementById("site_code");
                
               var filteredList = rData.data.filter((value,index) => rData.data.indexOf(value) == index);
                
                for ( var pos = 0; pos < filteredList.length; pos++)
                {
                    //create an <option> to add the <select>
                    var child = document.createElement("option");
                
                    //assign values to the <option>
                    child.textContent = filteredList[pos].media_platform;
                    child.value = filteredList[pos].media_platform;
                    child.selected = true;
                
                    //attach the mew <option> to the <selection>
                    parent.appendChild(child);
                };
                xhttp.onreadystatechange = function() {
        console.log("readystate mediaplaform- "+this.readyState);
        console.log("status mediaplaform- "+this.status);
        console.log("responsetext mediaplaform- "+this.responseText);
        
    
  };
            
                }
                xhttp.open("GET", sql,true);
                xhttp.send();
               }
               
               
            function setActiveTab(tabId){
                // Get the container element
            var tab1 = document.getElementById(tabId);

            tab1.classList.add("active");
            
            if(tabId === "pills-home-tab"){
                document.getElementById("pills-profile-tab").classList.remove("active");
                document.getElementById("pills-contact-tab").classList.remove("active");
            }
            else if(tabId === "pills-profile-tab"){
                document.getElementById("pills-home-tab").classList.remove("active");
                document.getElementById("pills-contact-tab").classList.remove("active");
            }
            else if(tabId === "pills-contact-tab"){
                document.getElementById("pills-home-tab").classList.remove("active");
                document.getElementById("pills-profile-tab").classList.remove("active");
            }
            
            }
            
            
            function setDetails(img_name,img_title,img_desc){
                var filename = "assets/img/billboards/"+img_name.replaceAll(' ', '')+".png";
                document.getElementById("detail_img").src = filename; 
                document.getElementById("detail_title").innerHTML = img_title; 
                document.getElementById("detail_desc").innerHTML = img_desc; 
            }
            
            
            
		</script>

	

		<!--<script src="chart_features.js"></script>-->
		
		<script src="map_features.js"></script>

		<!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
		
		 <!-- prettier-ignore -->
     <script>//(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    //      ({key: "AIzaSyAfNwYDsoHn47AWav3I0-ht1Oh5ZnVnS0M", v: "weekly"});</script>
        
        <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfNwYDsoHn47AWav3I0-ht1Oh5ZnVnS0M">
</script>

	</body>
</html>