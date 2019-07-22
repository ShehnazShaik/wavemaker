<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:24:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/form_select2.js"></script>
	<script src="global_assets/js/demo_pages/dashboard.js"></script>
	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
	<!-- /theme JS files -->

	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->

	<!-- /main navbar -->
		<?php	include 'header.php';?>

	<!-- Page content -->
	<div class="page-content">

		<?php	include 'assets/includes/side_navbar.php';?>


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index-2.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row" style="height:100%">
					<div class="col-xl-12" style="height:100%">
						<div class="card" style="height:100%">

											<!-- Order direction sequence control -->
											<div class="card">
												<!-- <div><div style="margin-top:6px;float:right;" class="col-sm-2"><input class="form-control" placeholder="Campaign ID" type="text"/></div></div> -->
												<div class="row">
														<div class="col-sm-3">
															<div style="margin-top:12px;margin-right:12px;padding:12px;">Campaign ID
																<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Campaign Duration">
																	<option value="AZ">Arizona</option>
																	<option value="CO">Colorado</option>
																	<option value="ID">Idaho</option>
																	<option value="WY">Wyoming</option>
																	<option value="AL">Alabama</option>
																	<option value="IA">Iowa</option>
																	<option value="KS">Kansas</option>
																	<option value="KY">Kentucky</option>
																</select>
															</div>
														</div>
													<div class="col-sm-3">
														<div style="margin-top:12px;margin-right:12px;padding:12px;">Start Date:
															<input class="form-control"  placeholder="start date" type="date"/>
														</div>
													</div>
													<div class="col-sm-3">
														<div style="margin-top:12px;margin-right:12px;padding:12px;">End Date:
															<input  class="form-control" placeholder="end date" type="date"/>
														</div>
													</div>
													<div class="col-sm-3">
														<div style="margin-top:12px;margin-right:12px;padding:12px;">Client Name:
															<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Campaign Duration">
																<option value="AZ">Arizona</option>
																<option value="CO">Colorado</option>
																<option value="ID">Idaho</option>
																<option value="WY">Wyoming</option>
																<option value="AL">Alabama</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
															</select>
														</div>
													</div>

													<div class="col-sm-3">
														<div style="margin-top:12px;margin-right:12px;padding:12px;">Brand:
															<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Campaign Duration">
																<option value="AZ">Arizona</option>
																<option value="CO">Colorado</option>
																<option value="ID">Idaho</option>
																<option value="WY">Wyoming</option>
																<option value="AL">Alabama</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
															</select>
														</div>
													</div>
												</div>



                        <table class="table datatable-multi-sorting">
                          <thead>
                            <tr>
                              <th>Campaign ID</th>
                              <th>Brand</th>
                              <th>Client</th>
                              <th>Planner Name</th>
                              <th>Start Date</th>
                              <th>Prioritization</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">Campaign 1232322</a></td>
                              <td>Enright</td>
                              <td>Traffic Court Referee</td>
                              <td>checker</td>
                              <td>22 Jun 1972</td>
                              <td><button>Prioritize</button></td>

                            </tr>

                          </tbody>
                        </table>
											</div>
											<!-- /order direction sequence control -->
						</div>
						<!-- /traffic sources -->

					</div>
				</div>
				<!-- /main charts -->
			</div>
			<!-- Footer -->
			<!-- <div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div> -->
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:41:06 GMT -->
</html>
