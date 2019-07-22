<?php
// session_start();
// if (!$_SESSION['UserRole']) {
//   header("location:index.php");
// }
?>


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
	<!-- <script src="global_assets/js/demo_pages/form_select2.js"></script> -->
	<script src="global_assets/js/demo_pages/dashboard.js"></script>
	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://www.samclarke.com/assets/migrating-to-hugo/monokai.css" />
	<!--NVD3-->
	<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js"></script>


	<script src="global_assets/js/demo_pages/uploader_bootstrap.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<!-- <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script> -->
	<script src="global_assets/js/demo_pages/form_select2.js"></script>

	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="global_assets/js/demo_pages/form_input_groups.js"></script>
	<script src="assets/js/plannerongoing.js"></script>
	<script src="assets/js/sidenavjscode.js"></script>
</head>
<style>
.file-drop-zone-title {
	padding: 11px;
}
.submit_btn{
	margin-top: 19px;
	float: right;
	text-align: right;
}
.cursor_pointer{
	cursor: pointer;
}
.cprp{
	padding: 30px 55px;
}
.budget{
	padding: 30px 55px;
}
.disabled {
	color: #999;
}
.disable_border{
	border:1px solid #ccc !important;
	cursor: auto;
}

.file-caption-name{
	height: 1.2rem !important;
	border-bottom: none !important;
}
.select2-search__field{
	margin: -10px !important;
}
.select2-search__field{
	margin-left: 10px !important;
}
.select2-selection__choice{
	margin-top: 10px !important;
}
/*
stepper */


main, .content {
	flex: 1 0 auto;
}

/*Handle the CHROME yellow background for autofill*/
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus input:-webkit-autofill,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
	border: none !important;
	-webkit-text-fill-color: inherit !important;
	-webkit-box-shadow: 0 0 0px 1000px #FFFFFF inset;
	transition: background-color 5000s ease-in-out 0s;
}

svg:not(:root),
svg {
	display: block;
	overflow:auto;
}


/* Icons */
.material-icons.md-18 {
	font-size: 18px;
}
.material-icons.md-24 {
	font-size: 24px;
}
.material-icons.md-36 {
	font-size: 36px;
}
.material-icons.md-48 {
	font-size: 48px;
}
/* Rules for using icons as black on a light background. */
.material-icons.md-dark {
	color: rgba(0, 0, 0, 0.54);
}
.material-icons.md-dark.md-inactive {
	color: rgba(0, 0, 0, 0.26);
}
/* Rules for using icons as white on a dark background. */
.material-icons.md-light {
	color: rgba(255, 255, 255, 1);
}
.material-icons.md-light.md-inactive {
	color: rgba(255, 255, 255, 0.3);
}

/*Helpers*/
.no-pad {
	padding: 0 !important;
}

/*Scroll bars*/

::-webkit-scrollbar {
	width: 3px;
	height: 2px;
}

::-webkit-scrollbar-button {
	width: 3px;
	height: 2px;
}

::-webkit-scrollbar-thumb {
	background: rgba(0, 0, 0, 0.54);
	border: 3px none rgba(0, 0, 0, 0.54);
	border-radius: 1px;
}

::-webkit-scrollbar-thumb:hover {
	background: rgba(0, 0, 0, 0.64);
}

::-webkit-scrollbar-thumb:active {
	background: rgba(0, 0, 0, 0.54);
}

::-webkit-scrollbar-track {
	background: #fff;
	border: 2px none #fff;
	border-radius: 1px;
}

::-webkit-scrollbar-track:hover {
	background: #fff;
}

::-webkit-scrollbar-track:active {
	background: #fff;
}

::-webkit-scrollbar-corner {
	background: transparent;
}


nav,
.navbar-fixed {
	color: #3f51b5 !important;
	background-color: #F5F5F5 !important;
	background: transparent;
	box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.14), 0px 0px 2px 2px rgba(0, 0, 0, 0.098), 0px 0px 5px 1px rgba(0, 0, 0, 0.084) !important;
	z-index: 999 !important;
}

nav a.button-collapse > i {
	font-size: 32px;
}

.side-nav a {
	margin: 0 !important;
	padding-bottom: 0 !important;
}

.side-nav a:hover {
	background-color: rgba(0, 0, 0, 0.23) !important;
}

.side-nav .top-bg {
	background-image: url(https://pathli.com/app/assets/build/images/todo_icon.png);
	background-repeat: no-repeat;
	background-size: contain;
	background-position: center;
	height: 140px;
	width: 100%;
	margin-top: 1rem;
	margin-bottom: 1.2rem;
	background-color: rgba(0, 0, 0, 0);
}

.side-nav.sub-side-nav {
	z-index: 999 !important;
	top: 62px !important;
	background-color: #F5F5F5 !important;
}

.side-nav.sub-side-nav > li:nth-child(2) {
	margin-top: .5rem !important;
}

.side-nav .divider {
	margin: 0 !important;
}

.side-nav .subheader {
	cursor: initial;
	pointer-events: none;
	color: rgba(0, 0, 0, 0.54);
	font-size: 1rem !Important;
	font-weight: 500;
	line-height: 32px !important;
	padding: 0.5rem 1rem !important;
	height: 32px !important;
	margin-bottom: .5rem !important;
}

.drag-target {
	z-index: 997 !important;
}

.dark-1 {
	background-color: #000000;
}

.dark-2 {
	background-color: #212121;
}

.dark-3 {
	background-color: #303030;
}

.dark-4 {
	background-color: #424242;
}

.light-1 {
	background-color: #E0E0E0;
}

.light-2 {
	background-color: #F5F5F5;
}

.light-3 {
	background-color: #FAFAFA;
}

.light-4 {
	background-color: #FFFFFF;
}

.primary-500 {
	background-color: #cddc39;
}

.primary-50 {
	background-color: #f9fbe7;
}

.primary-100 {
	background-color: #f0f4c3;
}

.primary-700 {
	background-color: #afb42b;
}

.accent-50 {
	background-color: #e0f7fa;
}

.accent-A100 {
	background-color: #84ffff;
}

.accent-A200 {
	background-color: #18ffff;
}

.accent-A400 {
	background-color: #00e5ff;
}

.warn-500 {
	background-color: #ff5722;
}

.warn-100 {
	background-color: #ffccbc;
}

.warn-700 {
	background-color: #e64a19;
}

.dropdown-content {
	overflow: visible !important;
	background-color: #e5e5e5 !important;
	margin-top: -4px !important;
}

.dropdown-content.sub-menu {
	margin-top: -0.3rem;
}

.button-collapse {
	width: 64px;
	text-align: -webkit-center;
}

a.button-collapse:hover {
	background: rgba(0, 0, 0, 0.13);
	border-radius: 50%;
}


/* Stepper */
label.invalid {
	font-size: 0.8rem;
	font-weight: 500;
	color: red !important;
	top: 50px !important;
}

label.invalid.active {
	-webkit-transform: translateY(0%) !important;
	transform: translateY(0%) !important;
}
/*Validate.js FIX*/

ul.stepper {
	counter-reset: section;
	/*max-width: 800px;*/
}

ul.stepper.horizontal {
	position: relative;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	min-height: 458px;
}

.card-content ul.stepper.horizontal {
	margin-left: -20px;
	margin-right: -20px;
	padding-left: 20px;
	padding-right: 20px;
	overflow: hidden;
}

.card-content ul.stepper.horizontal:first-child {
	margin-top: -20px;
}

ul.stepper.horizontal::before {
	content: '';
	background-color: transparent;
	width: 100%;
	min-height: 84px;
	box-shadow: 0px 2px 1px -1px rgba(228, 218, 218, 0.2), 0px 1px 1px 0px rgba(216, 210, 210, 0.14), 0px 1px 3px 0px rgb(255, 255, 255);
	position: absolute;
	left: 0;
}
ul.stepper .wait-feedback {
	left: 0;
	right: 0;
	top: 0;
	z-index: 2;
	position: absolute;
	width: 100%;
	height: 100%;
	text-align: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
}

ul.stepper:not(.horizontal) .step {
	position: relative;
}

ul.stepper .step.feedbacking .step-content>*:not(.wait-feedback) {
	opacity: 0.1;
}

ul.stepper.horizontal .step {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	height: 84px;
}

ul.stepper.horizontal .step:last-child {
	width: auto;
}

ul.stepper.horizontal .step:not(:last-child)::after {
	content: '';
	display: inline-block;
	width: 100%;
	height: 1px;
	background-color: rgba(0,0,0,0.1);
}

ul.stepper:not(.horizontal) .step:not(:last-child) {
	margin-bottom: 10px;
	-webkit-transition:margin-bottom 0.4s;
	transition:margin-bottom 0.4s;
}

ul.stepper:not(.horizontal) .step:not(:last-child).active {
	margin-bottom: 36px;
}

ul.stepper:not(.horizontal) .step::before {
	position: absolute;
	top: 12px;
	counter-increment: section;
	content: counter(section);
	height: 28px;
	width: 28px;
	color: white;
	background-color: rgba(0,0,0,0.3);
	border-radius: 50%;
	text-align: center;
	line-height: 28px;
	font-weight: 400;
}

ul.stepper:not(.horizontal) .step.active::before, ul.stepper:not(.horizontal) .step.done::before, ul.stepper.horizontal .step.active .step-title::before, ul.stepper.horizontal .step.done .step-title::before {
	background-color: #2196f3;
}

ul.stepper:not(.horizontal) .step.done::before, ul.stepper.horizontal .step.done .step-title::before {
	content: '\e5ca';
	font-size: 16px;
	font-family: 'Material Icons';
}

ul.stepper:not(.horizontal) .step.wrong::before, ul.stepper.horizontal .step.wrong .step-title::before {
	content: '\e001';
	font-size: 24px;
	font-family: 'Material Icons';
	background-color: red !important;
}

ul.stepper:not(.horizontal) .step-title {
	margin: 0 -20px;
	cursor: pointer;
	padding: 15.5px 44px 24px 60px;
	display: block;
}

ul.stepper.horizontal .step-title {
	line-height: 84px;
	height: 84px;
	padding-left: 65px;
	padding-right: 25px;
	display: inline-block;
	max-width: 220px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	-ms-flex-negative: 0;
	flex-shrink: 0;
}

ul.stepper.horizontal .step .step-title::before {
	position: absolute;
	top: 28.5px;
	left: 19px;
	counter-increment: section;
	content: counter(section);
	height: 28px;
	width: 28px;
	color: white;
	background-color: rgba(0,0,0,0.3);
	border-radius: 50%;
	text-align: center;
	line-height: 28px;
	font-weight: 400;
}

/*.card-content ul.stepper.horizontal .step .step-title:first-child {
margin-left: -20px;
padding-left: 85px;
}
.card-content ul.stepper.horizontal .step .step-title:first-child::before {
left: 39px;
}
.card-content ul.stepper.horizontal .step .step-title:last-child {
margin-right: -20px;
padding-right: 45px;
}
.card-content ul.stepper.horizontal .step .step-title:last-child::before {
left: 39px;
}*/

ul.stepper .step-title::after {
	content: attr(data-step-label);
	display: block;
	position: absolute;
	font-size: 0.8rem;
	color: #424242;
	font-weight: 400;
}

ul.stepper.horizontal .step-title::after {
	top:15px;
}

ul.stepper .step-title:hover {
	background-color: rgba(0, 0, 0, 0.06);
}

ul.stepper .step.active .step-title {
	font-weight: 500;
}

ul.stepper .step-content {
	position: relative;
	display: none;
	height: calc(100% - 132px);
	width: inherit;
	overflow: visible;
	margin-left: 41px;
	margin-right: 24px;
}

ul.stepper.horizontal .step-content {
	position: absolute;
	height: calc(100% - 142px);
	top: 84px;
	left: 0;
	width: 100%;
	overflow-y: auto;
	overflow-x: hidden;
	margin: 0;
	padding: 20px 20px 76px 20px;
}

.card-content ul.stepper.horizontal .step-content {
	padding-left: 40px;
	padding-right: 40px;
}

ul.stepper:not(.horizontal)>.step:not(:last-child)::after {
	content: '';
	position: absolute;
	top: 50px;
	left: 13.5px;
	width: 1px;
	height: calc(100% - 38px);
	background-color: rgba(0,0,0,0.1);
	-webkit-transition:height 0.4s;
	transition:height 0.4s;
}

ul.stepper:not(.horizontal)>.step.active:not(:last-child)::after {
	height: calc(100% - 12px);
}

ul.stepper .step-actions {
	padding-top: 16px;
	-webkit-display: flex;
	-moz-display: flex;
	-ms-display: flex;
	display: -webkit-box;
	display: flex;
	-webkit-box-pack: start;
	-ms-flex-pack: start;
	justify-content: flex-start;
}

ul.stepper:not(.horizontal) .step-actions .btn:not(:last-child), ul.stepper:not(.horizontal) .step-actions .btn-flat:not(:last-child), ul.stepper:not(.horizontal) .step-actions .btn-large:not(:last-child) {
	margin-right:5px;
}

ul.stepper.horizontal .step-actions .btn:not(:last-child), ul.stepper.horizontal .step-actions .btn-flat:not(:last-child), ul.stepper.horizontal .step-actions .btn-large:not(:last-child) {
	margin-left:5px;
}

ul.stepper.horizontal .step-actions {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	padding: 20px;
	background-color: #fff;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: reverse;
	-ms-flex-direction: row-reverse;
	flex-direction: row-reverse;
}

.card-content ul.stepper.horizontal .step-actions {
	padding-left: 40px;
	padding-right: 40px;
}

ul.stepper .step-content .row {
	margin-bottom: 7px;
}
.fileinput-cancel{
	display: none !important;
}
.kv-file-remove{
	box-shadow: none !important;
}
.icon-bin{
	color: #000;
}
.kv-file-upload {
	display: none !important;
}
.file-footer-buttons{
	float: none;
}
.input-group-btn{
	margin-top: -2px;
}
.total_div{
	width: 100%;
}

/* .input-group-prepend{
position: relative;
top: 10px;
}

.input-group-append{
position: relative;
top: 10px;
} */
.touchspin-no-mousewheel{
	padding-left: 10px !important;
}
.bootstrap-touchspin-down{
	display: none !important;
}
.bootstrap-touchspin-up{
	display: none !important;
}
.fileinput-upload-button{
	display: none !important;
}

.btn_{
	/* background: none;
	background-color: none;
	border: none;
	box-shadow: none; */
	margin-top: 40px;
	/* padding: 10px; */
}
.minus{
	background: none;
	background-color: none;
	border: none;
	box-shadow: none;
	padding: 10px;
	margin-top: 10px !important;
}
.minus:hover{
	background-color: none;
	background: none;
	box-shadow: none !important;
}

.icon-checkmark-circle{
	color: #4caf50;
}
.icon-cancel-circle2{
	color: red;
}
.red_color{
	color: #C62828;
}
#logoutbtnid{
    background-color: #ffffff2e !important;
    border: none;
    border-radius: 5px;
    padding: 2px 15px;
    color: white;
}

</style>
<script type="text/javascript">
function CheckNumeric(e) {
	if (window.event) // IE
	{
		if ((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 8 && e.keyCode != 44) {
			event.returnValue = false;
			return false;
		}
	}
	else { // Fire Fox
		if ((e.which < 48 || e.which > 57) & e.which != 8 && e.which != 44) {
			e.preventDefault();
			return false;
		}
	}
}
</script>
<body>

	<!-- Main navbar -->

	<!-- /main navbar -->
	<?php	include 'header.php';?>

	<!-- Page content -->
	<div class="page-content">

		<?php	include 'assets/includes/side_navbar.php';?>


		<!-- Main content -->
		<div class="content-wrapper">




			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row" style="height:100%">
					<div class="col-xl-12" style="height:100%">
						<div class="card" style="height:100%">
							<div><div style="margin-top:6px;float:right;" class="col-sm-2"><input class="form-control" placeholder="Campaign ID" type="text"/></div></div>
							<div class="col s12">
								<div class="">
									<div class="card-content">
										<ul class="stepper horizontal" id="horizontal">
											<li class="step active">
												<div data-step-label="To step-title!" class="step-title waves-effect waves-dark">
													Step 1
												</div>
												<div class="step-content">
													<div class="row">

														<form action="#" style="width: 100%;">
															<div class="form-group row">
																<h6 class="font-weight-semibold">Uploading Buying Basket:</h6>
																<div class="col-lg-10">
																	<input type="file" class="file-input-ajax" id="load-file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="multiple" data-fouc>

																	<span class="red_color">Accepts only Excel files</span>
																</div>
																<div class="col-lg-12 submit_btn">
																	<button type="submit" class="btn btn-primary" style="background: #4caf50;" id="upl-btn">Upload <i class="icon-upload ml-2"></i></button>
																</div>
															</div>
														</form>

														<div class="total_div">
															<hr>
															<div class="col-xl-6">
																<div class="form-group mb-3 mb-md-2">
																	<label class="d-block font-weight-semibold">Choose Path</label>
																	<div class="form-check form-check-inline cursor_pointer">
																		<label class="form-check-label cursor_pointer">
																			<input type="radio" class="form-check-input-styled cursor_pointer cprp_r" name="radio-inline-left" checked data-fouc>
																			<h6 class="font-weight-semibold">Optimize CPRP vs Reach</h6>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="form-check-label cursor_pointer">
																			<input type="radio" class="form-check-input-styled cursor_pointer budget_r" name="radio-inline-left" data-fouc>
																			<h6 class="font-weight-semibold">Budget Allocation</h6>
																		</label>
																	</div>

																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<div class="mb-4 complete_cprp">
																		<button type="submit" class="btn btn-primary" style="float: right;margin-bottom: 15px;background: #4caf50;">Complete <i class="icon-paperplane ml-2"></i></button>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<div class="mb-4 complete_budget">
																		<button type="submit" class="btn btn-primary" style="float: right;margin-bottom: 15px;background: #4caf50;">Complete <i class="icon-paperplane ml-2"></i></button>
																	</div>
																</div>
															</div>
															<div class="cprp">
																<div class="mb-4">
																	<h6 class="font-weight-semibold">Weightage</h6>
																	<div class="row">
																		<div class="col-md-4">
																			<h6 class="font-weight-semibold">CPRP</h6>
																			<input class="form-control touchspin-no-mousewheel input" id="a" type="number" name="number"  min="1" max="100"  placeholder="Select the range till 100">


																			<!-- <input type="text" value="0" class="form-control touchspin-no-mousewheel" id="a" min="1" max="100"  placeholder="Select the range till 100"> -->

																		</div>
																		<div class="col-md-4">
																			<h6 class="font-weight-semibold">Reach</h6>
																			<!-- <input type="text" value="0" class="form-control touchspin-no-mousewheel" id="b" min="1" max="100"  placeholder="Select the range till 100"> -->

																			<input class="form-control touchspin-no-mousewheel input" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
																		</div>
																	</div>



																</div>
																<div class="mb-4">
																	<h6 class="font-weight-semibold">Campaign Duration (in Days)</h6>
																	<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
																	<div class="row">
																		<div class="col-md-6">
																			<input class="form-control touchspin-no-mousewheel campaign" type="number" name="number" max="365" placeholder="Campaign Duration (in Days)">

																		</div>
																	</div>
																</div>

																<div class="mb-4">
																	<div class="main">
																		<div class="sub_div">
																			<div class="row keyword">


																				<div class="col-md-4">
																					<h6 class="font-weight-semibold">ACD</h6>
																					<input type="text" class=" name name_Class 0" id="txtNilai" onkeypress="CheckNumeric(event);">
																					<!-- <input class="form-control touchspin-no-mousewheel name_Class 0" id="a"  placeholder="Select the range till 100"> -->
																					<!-- <div class="mb-4"> -->
																					<!-- <h6 class="font-weight-semibold">Auto tokenization</h6> -->
																					<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->

																					<!-- <select class="form-control select-multiple-tokenization " multiple="multiple" id="a" data-fouc> -->
																					<!-- <option value="AZ">Arizona</option>
																					<option value="CO">Colorado</option>
																					<option value="ID">Idaho</option>
																					<option value="WY">Wyoming</option>
																					<option value="AL" selected>Alabama</option>
																					<option value="IA">Iowa</option>
																					<option value="KS">Kansas</option>
																					<option value="KY">Kentucky</option> -->
																					<!-- </select> -->
																					<!-- </div> -->
																				</div>
																				<div class="col-md-4">
																					<h6 class="font-weight-semibold">Dispresion</h6>
																					<!-- <input type="text" value="0" class="form-control touchspin-no-mousewheel" id="b" min="1" max="100"  placeholder="Select the range till 100"> -->

																					<input class="form-control touchspin-no-mousewheel path path_Class 0" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
																				</div>
																				<div class="col-md-4">
																					<button type="submit" class="btn btn-primary btn_ plus_btn" attr="">Add more</button>
																					<!-- <button type="submit" class="btn btn-primary btn_  minus" > <i class="icon-cancel-circle2 ml-2"></i></button> -->

																				</div>
																			</div>
																		</div>
																	</div>



																</div>


																<!-- <div class="mb-4">
																<h6 class="font-weight-semibold">ACD</h6>
																<div class="row">
																<div class="col-md-4">
																<input type="text" value="0" class="form-control touchspin-no-mousewheel">

															</div>
														</div>
													</div> -->
													<!-- <div class="mb-4">
													<h6 class="font-weight-semibold">Dispresion</h6>
													<div class="row">
													<div class="col-md-4">
													<input type="text" value="0" class="form-control touchspin-no-mousewheel">

												</div>
											</div>
										</div> -->
										<div class="mb-4">
											<button type="submit" class="btn btn-primary cprp_submit submit" style="background: #4caf50;">Submit </button>
										</div>


									</div>

									<!-- browse files -->

									<div class="card" id="cprp_upload">
										<div class="card-body">
											<form action="#" >
												<div class="form-group row">
													<h6 class="font-weight-semibold">Spillover Sheets</h6>
													<div class="col-lg-10">
														<input type="file" class="file-input-ajax" multiple="multiple" data-fouc>
													</div>
													<div class="col-lg-12 submit_btn">
														<button type="submit" class="btn btn-primary cprp_slip" style="background: #4caf50;">Upload <i class="icon-upload ml-2"></i></button>
													</div>
												</div>
											</form>
										</div>
									</div>

									<!-- budget -->
									<div class="budget">
										<div class="mb-4">
											<h6 class="font-weight-semibold">Campaign Duration (in Dayss)</h6>
											<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
											<div class="row">
												<div class="col-md-6">
													<!-- <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Campaign Duration">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="WY">Wyoming</option>
													<option value="AL">Alabama</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
												</select> -->
												<input type="text" value="10" class="form-control touchspin-no-mousewheel">

											</div>
										</div>
									</div>

									<div class="mb-4">
										<h6 class="font-weight-semibold">ACD</h6>
										<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
										<div class="row">
											<div class="col-md-6">
												<!-- <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select ACD">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
												<option value="AL">Alabama</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
											</select> -->
											<input type="text" value="10" class="form-control touchspin-no-mousewheel">

										</div>
									</div>
								</div>
								<div class="mb-4">
									<h6 class="font-weight-semibold">Dispresion</h6>
									<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
									<div class="row">
										<div class="col-md-6">
											<!-- <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Dispresion">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</select> -->

										<input type="text" value="10" class="form-control touchspin-no-mousewheel">

									</div>
								</div>
							</div>
							<div class="mb-4">
								<button type="submit" class="btn btn-primary submit_budget" style="background: #4caf50;">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
							<!-- /content area -->

						</div>
						<!-- /main content -->
						<!-- browse files -->

						<div class="card" id="budget_upload">
							<div class="card-body">
								<form action="#" >
									<div class="form-group row">
										<h6 class="font-weight-semibold">Spillover Sheets</h6>
										<div class="col-lg-10">
											<input type="file" class="file-input-ajax" multiple="multiple" data-fouc>
										</div>
										<div class="col-lg-12 submit_btn">
											<button type="submit" class="btn btn-primary budget_slip" style="background: #4caf50;">Upload <i class="icon-upload ml-2"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--
					<div class="row btns" style="margin-left: 15px;margin-right: 15px;">
					<div class="col-md-6">

					<button type="submit" class="btn btn-primary">Back</button>

				</div>
				<div class="col-md-6">

				<button type="submit" class="btn btn-primary" style="float: right;background: #4caf50;">Next</button>

			</div>
		</div> -->
		<div class="" style="height:30px;">

		</div>
	</div>
	<div class="step-actions" style="position:relative">
		<button type="submit" class="btn btn-primary" style="background: #4caf50;">Next</button>
		<!-- <button type="submit" class="btn btn-primary">Back</button> -->
		<button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
	</div>
</div>
</li>
<li class="step">
	<div class="step-title waves-effect waves-dark">Step 2</div>
	<div class="step-content">
		<div class="row">
			<div class="input-field col s12">
				<div class="">
					<div class="mb-4">
						<div class="row">
							<!-- <div class="col-md-4">
							<h6 class="font-weight-semibold">Selected Markets</h6>
							<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Markets">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
							<option value="AL">Alabama</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
						</select>
					</div> -->
					<div class="col-md-4">
						<h6 class="font-weight-semibold">Campaign Markets</h6>
						<div class="" id="campaign_market_text">

						</div>
						<select class="form-control select" multiple="multiple" data-fouc data-placeholder="Campaign Markets" id="campaign_market_id">
							<option value="AZ"></option>
						</select>
						<!-- <span id="submit_campaign"><i class="icon-checkmark-circle ml-2" ></i></span> -->
					</div>
					<div class="col-md-4">
						<!-- <h6 class="font-weight-semibold">Type</h6>
						<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Type">
						<option value="AZ">Arizona</option>
						<option value="CO">Colorado</option>
						<option value="ID">Idaho</option>
						<option value="WY">Wyoming</option>
						<option value="AL">Alabama</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
					</select> -->
				</div>
			</div>
		</div>
		<div class="mb-4">
			<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
			<div class="row">
				<div class="col-md-4">
					<h6 class="font-weight-semibold">Selected Primary TG</h6>
					<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Primary TG">
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
		<div class="mb-4">
			<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
			<div class="row">
				<div class="col-md-4">
					<h6 class="font-weight-semibold">Selected Base TG
					</h6>
					<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select Base TG">
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
		<div class="mb-4">
			<div class="row">
				<div class="col-md-4">
					<h6 class="font-weight-semibold">Selected End Week</h6>
					<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
					<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select End Week">
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
		<div class="mb-4">
			<button type="submit" class="btn btn-primary cprp_submit" style="background: #4caf50;">Submit <i class="icon-paperplane ml-2"></i></button>
		</div>
	</div>
</div>
</div>
<div class="step-actions" style="position:relative">
	<button class="waves-effect waves-dark btn blue next-step" data-feedback="someFunction">CONTINUE</button>
	<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
</div>
</div>
</li>
<!-- <li class="step">
<div class="step-title waves-effect waves-dark">Step 3</div>
<div class="step-content">
<form action="#" style="width: 100%;">
<div class="form-group row">
<h6 class="font-weight-semibold">Upload Accelerator File</h6>
<div class="col-lg-10">
<input type="file" class="file-input-ajax" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="multiple" data-fouc>
</div>
<div class="col-lg-12 submit_btn">
<button type="submit" class="btn btn-primary" style="background: #4caf50;">Submit <i class="icon-paperplane ml-2"></i></button>
</div>
</div>
</form>
<div class="step-actions">
<button class="waves-effect waves-dark btn blue" type="submit">SUBMIT</button>
</div>
</div>
</li> -->
</ul>
</div>
</div>
</div>


<!-- /order direction sequence control -->
</div>
<!-- /traffic sources -->

</div>
</div>
<!-- /main charts -->
</div>


</div>
<!-- /main content -->

</div>

<script>
$( document ).ready(function() {
	$(".budget").hide();
	$("body").on("click", ".cprp_r", function(){
		$(".cprp").show();
		$(".budget").hide();
	})
	$("body").on("click", ".budget_r", function(){
		debugger
		$(".budget").show();
		$(".cprp").hide();
		$("#cprp_upload").hide();
		$(".complete_cprp").hide();
	})
	$("#cprp_upload").hide();
	$(".complete_cprp").hide();
	$(".complete_budget").hide();
	$("#budget_upload").hide();
	$("body").on("click", ".cprp_submit", function(){
		// $(this).hide();
		$("#cprp_upload").show();
		$(".cprp").hide();
		$(".complete_cprp").show();
		$(".budget_r").attr('disabled', 'disabled');
		$(".uniform-choice span").addClass("disable_border")
		$(".cprp_r").attr('disabled', 'disabled');
	})
	$("body").on("click", ".submit_budget", function(){
		$("#budget_upload").show();
		$(".budget").hide();
		$(".complete_budget").show();
		$(".cprp_r").attr('disabled', 'disabled');
		$(".uniform-choice span").addClass("disable_border")
		$(".budget_r").attr('disabled', 'disabled');
	})

	$("body").on("click", ".cprp_slip", function(){
		$(".total_div").hide();
	})
	$("body").on("click", ".budget_slip", function(){
		$(".total_div").hide();
	})


	var validation = $.isFunction($.fn.valid) ? 1 : 0;

	$.fn.isValid = function() {
		if (validation) {
			return this.valid();
		} else {
			return true;
		}
	};


	if (validation) {
		$.validator.setDefaults({
			errorClass: 'invalid',
			validClass: "valid",
			errorPlacement: function(error, element) {
				if (element.is(':radio') || element.is(':checkbox')) { // Input checkboxes or radio, maybe switches?
					error.insertBefore($(element).parent());
				} else {
					error.insertAfter(element);
				}
			},
			success: function(element) {
				if (!$(element).closest('li').find('label.invalid:not(:empty)').length) {
					$(element).closest('li').removeClass('wrong');
				}
			}
		});
	}

	$.fn.getActiveStep = function() {
		active = this.find('.step.active');
		return $(this.children('.step:visible')).index($(active)) + 1;
	};

	$.fn.activateStep = function() {
		$(this).addClass("step").stop().slideDown(function() {
			$(this).css({
				'height': 'auto',
				'margin-bottom': ''
			});
		});
	};

	$.fn.deactivateStep = function() {
		$(this).removeClass("step").stop().slideUp(function() {
			$(this).css({
				'height': 'auto',
				'margin-bottom': '10px'
			});
		});
	};

	$.fn.showError = function(error) {
		if (validation) {
			name = this.attr('name');
			form = this.closest('form');
			var obj = {};
			obj[name] = error;
			form.validate().showErrors(obj);
			this.closest('li').addClass('wrong');
		} else {
			this.removeClass('valid').addClass('invalid');
			this.next().attr('data-error', error);
		}
	};

	$.fn.activateFeedback = function() {
		active = this.find('.step.active:not(.feedbacking)').addClass('feedbacking').find('.step-content');
		active.prepend(
			'<div class="wait-feedback">' +
			'  <div class="preloader-wrapper active">' +
			'    <div class="spinner-layer spinner-blue">' + //style attribute in class
			'      <div class="circle-clipper left">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="gap-patch">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="circle-clipper right">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'    </div>' +
			'    <div class="spinner-layer spinner-red">' + //style attribute in class
			'      <div class="circle-clipper left">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="gap-patch">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="circle-clipper right">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'    </div>' +
			'    <div class="spinner-layer spinner-yellow">' + //style attribute in class
			'      <div class="circle-clipper left">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="gap-patch">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="circle-clipper right">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'    </div>' +
			'    <div class="spinner-layer spinner-green">' + //style attribute in class
			'      <div class="circle-clipper left">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="gap-patch">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'      <div class="circle-clipper right">' +
			'        <div class="circle"></div>' +
			'      </div>' +
			'    </div>' +
			'  </div>' +
			'</div>');

		};

		$.fn.destroyFeedback = function() {
			active = this.find('.step.active.feedbacking');
			if (active) {
				active.removeClass('feedbacking');
				active.find('.step-content').find('.wait-feedback').remove();
			}
			return true;
		};

		$.fn.resetStepper = function(step) {
			if (!step) step = 1;
			form = $(this).closest('form'); // Change if not using FORM elements
			$(form)[0].reset();
			Materialize.updateTextFields();
			return $(this).openStep(step);
		};

		$.fn.submitStepper = function(step) {
			form = this.closest('form'); // Change if not using FORM elements
			if (form.isValid()) {
				form.submit();
			}
		};

		$.fn.nextStep = function(ignorefb) {
			stepper = this;
			form = this.closest('form');
			active = this.find('.step.active');
			next = $(this.children('.step:visible')).index($(active)) + 2;
			feedback = $(active.find('.step-content').find('.step-actions').find('.next-step')).data("feedback");
			if (form.isValid()) {
				if (feedback && ignorefb) {
					stepper.activateFeedback();
					return window[feedback].call();
				}
				active.removeClass('wrong').addClass('done');
				this.openStep(next);
				return this.trigger('nextstep');
			} else {
				return active.removeClass('done').addClass('wrong');
			}
		};

		$.fn.prevStep = function() {
			active = this.find('.step.active');
			prev = $(this.children('.step:visible')).index($(active));
			active.removeClass('wrong');
			this.openStep(prev);
			return this.trigger('prevstep');
		};

		$.fn.openStep = function(step, callback) {
			$this = this;
			step_num = step - 1;
			step = this.find('.step:visible:eq(' + step_num + ')');
			if (step.hasClass('active')) return;
			active = this.find('.step.active');
			prev_active = next = $(this.children('.step:visible')).index($(active));
			order = step_num > prev_active ? 1 : 0;
			if (active.hasClass('feedbacking')) $this.destroyFeedback();
			active.closeAction(order);
			step.openAction(order, function() {
				$this.trigger('stepchange').trigger('step' + (step_num + 1));
				if (step.data('event')) $this.trigger(step.data('event'));
				if (callback) callback();
			});
		};

		$.fn.closeAction = function(order, callback) {
			closable = this.removeClass('active').find('.step-content');
			if (!this.closest('ul').hasClass('horizontal')) {
				closable.stop().slideUp(300, "easeOutQuad", callback);
			} else {
				if (order == 1) {
					closable.animate({
						left: '-100%'
					}, function() {
						closable.css({
							display: 'none',
							left: '0%'
						}, callback);
					});
				} else {
					closable.animate({
						left: '100%'
					}, function() {
						closable.css({
							display: 'none',
							left: '0%'
						}, callback);
					});
				}
			}
		};

		$.fn.openAction = function(order, callback) {
			openable = this.removeClass('done').addClass('active').find('.step-content');
			if (!this.closest('ul').hasClass('horizontal')) {
				openable.slideDown(300, "easeOutQuad", callback);
			} else {
				if (order == 1) {
					openable.css({
						left: '100%',
						display: 'block'
					}).animate({
						left: '0%'
					}, callback);
				} else {
					openable.css({
						left: '-100%',
						display: 'block'
					}).animate({
						left: '0%'
					}, callback);
				}
			}
		};

		$.fn.activateStepper = function() {
			$(this).each(function() {
				var $stepper = $(this);
				if (!$stepper.parents("form").length) {
					method = $stepper.data('method');
					action = $stepper.data('action');
					method = (method ? method : "GET");
					action = (action ? action : "?");
					$stepper.wrap('<form action="' + action + '" method="' + method + '"></div>');
				}
				$stepper.find('li.step.active').openAction(1);

				$stepper.on("click", '.step:not(.active)', function() {
					object = $($stepper.children('.step:visible')).index($(this));
					if (!$stepper.hasClass('linear')) {
						$stepper.openStep(object + 1);
					} else {
						active = $stepper.find('.step.active');
						if ($($stepper.children('.step:visible')).index($(active)) + 1 == object) {
							$stepper.nextStep(true);
						} else if ($($stepper.children('.step:visible')).index($(active)) - 1 == object) {
							$stepper.prevStep();
						}
					}
				}).on("click", '.next-step', function(e) {
					e.preventDefault();
					$stepper.nextStep(true);
				}).on("click", '.previous-step', function(e) {
					e.preventDefault();
					$stepper.prevStep();
					// May want to ammend to 'a' tag for R purposes or more than likely use an ID selector
					// for shiny observer purposes... so for R if the action button for submissions was
					// `input$form_step_submit`:
					//}).on("click", "#form_step_submit", function(e) {
				}).on("click", "button:submit:not(.next-step, .previous-step)", function(e) {
					e.preventDefault();
					form = $stepper.closest('form');
					if (form.isValid()) {
						form.submit();
					}
				});
			});
		};

		function someFunction() {
			setTimeout(function() {
				$('#feedbacker').nextStep();
			}, 200);
		}

		$('ul.tabs').tabs()
		$('.rt-select').material_select();
		//Init for stepper
		$('.stepper').activateStepper();
		//$(selector).nextStep();

	});


	</script>

</body>
</html>
