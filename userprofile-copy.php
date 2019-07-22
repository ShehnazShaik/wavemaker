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
	<link rel="assets/css/common.css" href="/css/master.css">
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
		<script src="assets/js/sidenavjscode.js"></script>
	<!-- <script src="global_assets/js/demo_pages/dashboard.js"></script> -->
	<!-- Theme JS files -->
	<!-- <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/datatables_sorting.js"></script> -->
	<script src="assets/js/plannerprofile.js"></script>
	<script src="global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="global_assets/js/demo_pages/form_validation.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

	<!-- /theme JS files -->

	<!-- /theme JS files -->

</head>
<style media="screen">
.login-form {
	width: 100% ;
}
	.select2-selection--single .select2-selection__rendered{
		padding-left: 2.75rem !important;
	}
	.form-control-feedback {
	    position: absolute;
	    top: 33px;
}
.form-group-feedback-left .form-control {
	    padding-left: 10px;
}
.select2-selection--single .select2-selection__rendered{
	 padding-left: 10px !important;
}
.hide{
	display: none;
}
.navbar-nav-link{
	display: none !important;
}
.loading{
	position: fixed;
background: rgba(177, 172, 172, 0.4);
width: 81vw;
height: 100vh;
top: 62px;
z-index: 999999999999999999999999999999;
text-align: center;
padding-top:37vh;
left: 20%;
}
.loading img{
	width: 70px;
}
#admin{
	display: none !important;
}
</style>
<body>

	<!-- Main navbar -->

	<!-- /main navbar -->
			<?php include 'header.php';?>

	<!-- Page content -->
	<div class="page-content">
<?php	include 'assets/includes/side_navbar.php';?>


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<!-- <div class="page-header page-header-light">

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index-2.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div> -->
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row" style="height:100%">
					<div class="col-xl-1" style="height:100%"></div>
					<div class="col-xl-10" style="height:100%">
						<div class="card" style="height:100%">
							<!-- Registration form -->
							<!-- <form class="login-form"> -->
								<div class="card mb-0">
									<div class="card-body">
										<div class="text-center mb-3">
											<!-- <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i> -->
											<h5 class="mb-0">Create Profile</h5>
											<span class="d-block text-muted">All fields are required</span>
											<!-- <button type="button" name="button" class="edit_createprofile">Edit</button> -->
										</div>
<!--
										<div class="form-group text-center text-muted content-divider">
											<span class="px-2">Your credentials</span>
										</div> -->
										<!-- <div class="form-group row">
											<label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
											<div class="col-lg-9">
												<input type="text" name="basic" class="form-control textt" required placeholder="Text input validation">
											</div>
										</div> -->
										<div class="form-group form-group-feedback form-group-feedback-left">
											<h6 class="font-weight-semibold">Email Id
											</h6>
											<input type="email" name="email" value="shehnaz@gmail.com" class="form-control" id="email" required placeholder="Enter a valid email address" readonly style="background:#ccc;">
											<div class="form-control-feedback">
												<!-- <i class="icon-envelop2 text-muted"></i> -->
											</div>

										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<h6 class="font-weight-semibold">Location<span class="text-danger">*</span>
											</h6>
												<select data-placeholder="Location" required class="form-control select locationClass" data-fouc>
													<option value=""></option>
												</select>
												<div data-placeholder="" class="freezeLoc" data-fouc>

												</div>
												<!-- <select class="locationClass" name="">

												</select> -->
											<div class="form-control-feedback">
												<!-- <i class="icon-location3 text-muted"></i> -->
											</div>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<h6 class="font-weight-semibold">Client<span class="text-danger">*</span>
											</h6>
												<select data-placeholder="Client" required class="form-control select clientClass" multiple="multiple" data-fouc>
                                                     <option value=""></option>
												 </select>
											<div data-placeholder="" class="freezeclient" data-fouc>

											</div>
											<div class="form-control-feedback">
												<!-- <i class="icon-user text-muted"></i> -->
											</div>
										</div>


										<div class="form-group form-group-feedback form-group-feedback-left">
											<h6 class="font-weight-semibold">Client Lead Email Id's<span class="text-danger">*</span>
											</h6>
											<input type="text" name="" value="" required placeholder="Client Email Id's" readonly class="form-control CLemId">
											<div data-placeholder="Client Lead" class="clientleadClass" data-fouc>

											</div>
											<div data-placeholder="" class="freezeClientLead" data-fouc>

											</div>
										<div class="form-control-feedback">
											<!-- <i class="icon-envelop2 text-muted"></i> -->
										</div>
									</div>





										<button type="submit" class="btn bg-teal-400 btn-block create_btn create_plan" key="created">Create <i class="icon-circle-right2 ml-2"></i></button>

										<button type="submit" class="btn bg-teal-400 btn-block  update_btn create_plan" key="updated">Update <i class="icon-circle-right2 ml-2"></i></button>
									</div>
								</div>
							<!-- </form> -->
							<!-- /registration form -->
						</div>


					</div>
						<div class="col-xl-1" style="height:100%"></div>
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
			<div class="loading">
				<img src="assets/images/loader.gif" alt="">
			</div>
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:41:06 GMT -->
</html>
