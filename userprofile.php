<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:42:08 GMT -->
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
	<link href="assets/css/common.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<!-- <script src="global_assets/js/plugins/forms/validation/validate.min.js"></script> -->
	<script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="global_assets/js/demo_pages/form_select2.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="assets/js/plannerprofile.js"></script>
	<script src="global_assets/js/demo_pages/form_validation.js"></script>
	<script src="assets/js/sidenavjscode.js"></script>
	<script src="assets/css/style.css"></script>

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
.loading{
	position: fixed;
	background: rgba(177, 172, 172, 0.4);
	width: 81vw;
	height: 100vh;
	top: 83px;
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
.hidden{
	display:none;
}
#logoutbtnid{
	background-color: #ffffff2e !important;
	border: none;
	border-radius: 5px;
	padding: 2px 15px;
	color: white;
}
/* Added */
.bodyy{
	background-color: #222c31;
}
.textcolor{
	color:white;
}
.content{
	background-color: #393e3e;
}

</style>

<body>
	<?php include 'header.php';?>
	<!-- Main navbar -->

	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content" style="background-color: #393e3e">
		<?php	include 'assets/includes/side_navbar.php';?>



		<!-- Main content -->
		<div class="content-wrapper">




			<!-- Content area -->
			<div class="content">

				<!-- Form validation -->
				<div class="card">
					<!-- <div class="card-header header-elements-inline">
					<h5 class="card-title">Form validation</h5>
					<div class="header-elements">
					<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload"></a>
					<a class="list-icons-item" data-action="remove"></a>
				</div>
			</div>
		</div> -->

		<div class="card-body bodyy">
			<!-- <p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p> -->

			<form class="form-validate-jquery textcolor" action="#">
				<fieldset class="mb-3">
					<!-- <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend> -->
					<div class="text-center mb-3">
						<!-- <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i> -->
						<h5 class="mb-0">Create Profile</h5>
						<span class="d-block text-muted">All fields are required</span>
						<!-- <button type="button" name="button" class="edit_createprofile">Edit</button> -->
					</div>
					<!-- Basic text input -->
					<!-- <div class="form-group row">
					<label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
					<div class="col-lg-9">
					<input type="text" name="basic" class="form-control" required placeholder="Text input validation">
				</div>
			</div> -->
			<!-- /basic text input -->


			<!-- Input with icons -->
			<!-- <div class="form-group row">
			<label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
			<div class="col-lg-9">
			<div class="form-group-feedback form-group-feedback-right">
			<input type="text" name="with_icon" class="form-control" required placeholder="Text input with icon validation">
			<div class="form-control-feedback">
			<i class="icon-droplets"></i>
		</div>
	</div>
</div>
</div> -->
<!-- /input with icons -->


<!-- Input group -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
<div class="col-lg-9">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-mention"></i></span>
</div>
<input type="text" name="input_group" class="form-control" required placeholder="Input group validation">
</div>
</div>
</div> -->
<!-- /input group -->


<!-- Password field -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 5 characters allowed">
</div>
</div> -->
<!-- /password field -->


<!-- Repeat password -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
</div>
</div> -->
<!-- /repeat password -->


<!-- Email field -->
<div class="form-group row">
	<label class="col-form-label col-lg-3">Email Id <span class="text-danger">*</span></label>
	<div class="col-lg-9 email">
		<!-- <input type="email" name="email" class="form-control" id="email" required placeholder="Enter a valid email address"> -->
	</div>
</div>
<!-- /email field -->


<!-- Repeat email -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="email" name="repeat_email" class="form-control" required placeholder="Enter a valid email address">
</div>
</div> -->
<!-- /repeat email -->


<!-- Minimum characters -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="minimum_characters" class="form-control" required placeholder="Enter at least 10 characters">
</div>
</div> -->
<!-- /minimum characters -->


<!-- Maximum characters -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="maximum_characters" class="form-control" required placeholder="Enter 10 characters maximum">
</div>
</div> -->
<!-- /maximum characters -->


<!-- Minimum number -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="minimum_number" class="form-control" required placeholder="Enter a value greater than or equal to 10">
</div>
</div> -->
<!-- /minimum number -->


<!-- Maximum number -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="maximum_number" class="form-control" required placeholder="Please enter a value less than or equal to 10">
</div>
</div> -->
<!-- /maximum number -->


<!-- Basic textarea -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
<div class="col-lg-9">
<textarea rows="5" cols="5" name="textarea" class="form-control" required placeholder="Default textarea"></textarea>
</div>
</div> -->
<!-- /basic textarea -->
<div class="form-group row planner_div">
	<label class="col-form-label col-lg-3">Location <span class="text-danger">*</span></label>
	<div class="col-lg-9">
		<select name="select2" data-placeholder="Select Location" class="form-control locationClass form-control-select2" required data-fouc>
			<option></option>
		</select>
		<div data-placeholder="" class="freezeLoc" data-fouc>

		</div>
	</div>
</div>

<!-- <div class="form-group row client_div">
<label class="col-form-label col-lg-3">Location<span class="text-danger">*</span></label>
<div class="col-lg-9">
<select data-placeholder="Select Client" required class="form-control select multilocclass" multiple  data-fouc>
<option value=""></option>
</select>
<div data-placeholder="" class="multiloc" data-fouc>

</div>
</div>
</div> -->


<div class="form-group row">
	<label class="col-form-label col-lg-3">Client<span class="text-danger">*</span></label>
	<div class="col-lg-9">

	<select data-placeholder="Select Client" required class="form-control select clientClass" multiple  data-fouc>
		<option value=""></option>
	</select>


	<div data-placeholder="" class="freezeclient" data-fouc>

	</div>
</div>
</div>
<div class="form-group row">
	<label class="col-form-label col-lg-3">Client Lead Email Id's<span class="text-danger">*</span></label>
	<div class="col-lg-9">
		<input type="text" name="" value="" required placeholder="Client Email Id's" readonly class="form-control CLemId">
		<!-- <input type="text" name="text" class="form-control CLemId" readonly placeholder="Enter a valid email address"> -->
		<div data-placeholder="Client Lead" class="clientleadClass" data-fouc>

		</div>
		<div class="freezeClientLead">

		</div>
	</div>
</div>


</fieldset>

<!-- <fieldset class="mb-3"> -->
<!-- <legend class="text-uppercase font-size-sm font-weight-bold">Advanced inputs</legend> -->

<!-- Number range -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="number_range" class="form-control" required placeholder="Enter a value between 10 and 20">
</div>
</div> -->
<!-- /number range -->


<!-- Touchspin spinners -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="touchspin" value="" required class="form-control touchspin-postfix" placeholder="Not valid if empty">
</div>
</div> -->
<!-- /touchspin spinners -->


<!-- Custom message -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="custom" class="form-control" required placeholder="Custom error message">
</div>
</div> -->
<!-- /custom message -->


<!-- URL validation -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="url" class="form-control" required placeholder="Enter a valid URL address">
</div>
</div> -->
<!-- /url validation -->


<!-- Date validation -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="date" class="form-control" required placeholder="April, 2014 or any other date format">
</div>
</div> -->
<!-- /date validation -->


<!-- ISO date validation -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="date_iso" class="form-control" required placeholder="YYYY/MM/DD or any other ISO date format">
</div>
</div> -->
<!-- /iso date validation -->


<!-- Numbers only -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="numbers" class="form-control" required placeholder="Enter decimal number only">
</div>
</div> -->
<!-- /numbers only -->


<!-- Digits only -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="digits" class="form-control" required placeholder="Enter digits only">
</div>
</div> -->
<!-- /digits only -->


<!-- Credit card validation -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="text" name="card" class="form-control" required placeholder="Enter credit card number. Try 446-667-651">
</div>
</div> -->
<!-- /credit card validation -->


<!-- Basic file uploader -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="file" name="unstyled_file" class="form-control" required>
</div>
</div> -->
<!-- /basic file uploader -->


<!-- Styled file uploader -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
<div class="col-lg-9">
<input type="file" name="styled_file" class="form-input-styled" required data-fouc>
</div>
</div> -->
<!-- /styled file uploader -->


<!-- Basic select -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Basic select <span class="text-danger">*</span></label>
<div class="col-lg-9">
<select name="default_select" class="form-control" required>
<option value="">Choose an option</option>
<optgroup label="Alaskan/Hawaiian Time Zone">
<option value="AK">Alaska</option>
<option value="HI">Hawaii</option>
<option value="CA">California</option>
</optgroup>
<optgroup label="Mountain Time Zone">
<option value="AZ">Arizona</option>
<option value="CO">Colorado</option>
<option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="KY">Kentucky</option>
</optgroup>
</select>
</div>
</div> -->
<!-- /basic select -->


<!-- Styled select -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Styled select <span class="text-danger">*</span></label>
<div class="col-lg-9">
<select name="styled_select" class="form-control form-input-styled" required data-fouc>
<option value="">Choose an option</option>
<optgroup label="Alaskan/Hawaiian Time Zone">
<option value="AK">Alaska</option>
<option value="HI">Hawaii</option>
<option value="CA">California</option>
</optgroup>
<optgroup label="Mountain Time Zone">
<option value="AZ">Arizona</option>
<option value="CO">Colorado</option>
<option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="KY">Kentucky</option>
</optgroup>
</select>
</div>
</div> -->
<!-- /styled asic select -->


<!-- Select2 select -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
<div class="col-lg-9">
<select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2" required data-fouc>
<option></option>
<optgroup label="Alaskan/Hawaiian Time Zone">
<option value="AK">Alaska</option>
<option value="HI">Hawaii</option>
</optgroup>
<optgroup label="Pacific Time Zone">
<option value="CA">California</option>
<option value="NV">Nevada</option>
<option value="OR">Oregon</option>
<option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
<option value="AZ">Arizona</option>
<option value="CO">Colorado</option>
<option value="ID">Idaho</option>
<option value="WY">Wyoming</option>
</optgroup>
</select>
</div>
</div> -->
<!-- /select2 select -->


<!-- Multiple select -->
<!-- <div class="form-group row">
<label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
<div class="col-lg-9">
<select name="default_multiple_select" class="form-control" multiple required>
<optgroup label="Alaskan/Hawaiian Time Zone">
<option value="AK">Alaska</option>
<option value="HI">Hawaii</option>
<option value="CA">California</option>
<option value="NV">Nevada</option>
<option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
<option value="AZ">Arizona</option>
<option value="CO">Colorado</option>
<option value="ID">Idaho</option>
<option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="IL">Illinois</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
</optgroup>
</select>
</div>
</div> -->
<!-- /multiple select -->

<!-- </fieldset> -->



<!-- <hr> -->




<div class="d-flex justify-content-end align-items-center">
	<!-- <button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button> -->
	<button type="submit" style="background: #4b6584 !important; color: #fff;" class="form-control btn create_btn create_plan">Create <i class="icon-paperplane ml-2"></i></button>
</div>
</form>
</div>
</div>
<!-- /form validation -->

</div>
<!-- /content area -->


<!-- Footer -->

<!-- /footer -->
<div class="loading">
	<img src="assets/images/loader.gif" alt="">
</div>
</div>
<!-- /main content -->

</div>
<!-- /page content -->

</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:42:09 GMT -->
</html>
