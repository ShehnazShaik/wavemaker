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
<script>
$(document).ready(function () {
		var alltooltips =  JSON.parse(localStorage.getItem("tool_tips"))
		var emaill= alltooltips.CreateProfile_EmailId;
		var location = alltooltips.CreateProfile_Location;
			var Client = alltooltips.CreateProfile_Client;
				var ClientLeadEmailId = alltooltips.CreateProfile_ClientLeadEmailId;
	$('.appendmail').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+emaill+'" src="assets/images/informicon.svg"/>')
		$('.appendlocation').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+location+'" src="assets/images/informicon.svg"/>')
		$('.appendclient').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+Client+'" src="assets/images/informicon.svg"/>')
		// $('.appendlocation').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+location+'" src="assets/images/informicon.svg"/>')
		$('.appendClientLeadEmailId').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+ClientLeadEmailId+'" src="assets/images/informicon.svg"/>')

		// <img style="width:17px;height:17px;margin-left:10px;" src="assets/images/informicon.svg"/>

})
</script>
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
	/* background-color: #393e3e; */
	background-image: url('assets/images/wmflow.png');
	background-repeat: no-repeat;
	  background-color: #2a2f39;
}
/* .select_ .select{
	display: none;
	visibility: hideen;
} */
</style>

<body>
	<?php include 'header.php';?>
	<!-- Main navbar -->

	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content" style="background-color: #393e3e">
		<?php	include 'assets/includes/side_navbar.php';?>
		<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-light">

					<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline" style="background-color: #2a2f39;color: white;">
							<div class="d-flex">
									<div class="breadcrumb">
											<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<span class="breadcrumb-item active">User Profile</span>
									</div>

									<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
							</div>
					</div>
				</div>



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

			<!-- <form class="form-validate-jquery textcolor" action="#"> -->
				<fieldset class="mb-3">
					<!-- <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend> -->
					<div class="text-center mb-3">
						<!-- <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i> -->
						<h5 class="mb-0">Create Profile</h5>
						<span class="d-block text-muted">All fields are required</span>
						<!-- <button type="button" name="button" class="edit_createprofile">Edit</button> -->
					</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-3">Email Id <span class="text-danger">*</span> <span class="appendmail"></span></label>
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
	<label class="col-form-label col-lg-3">Location <span class="text-danger">*</span><span class="appendlocation"></span></label>
	<div class="col-lg-9">
		<select name="select2" data-placeholder="Select Location" class="form-control locationClass form-control-select2" required data-fouc>
			<option></option>
		</select>
		<div data-placeholder="" class="freezeLoc" data-fouc>

		</div>
	</div>
</div>

<div class="form-group row">
	<label class="col-form-label col-lg-3">Client<span class="text-danger">*</span><span class="appendclient"></span></label>
	<div class="col-lg-9 select_">

	<select data-placeholder="Select Client" required class="form-control select clientClass" style="display:none" multiple  data-fouc>
		<option value=""></option>
	</select>


	<div data-placeholder="" class="freezeclient" data-fouc>

	</div>
</div>
</div>
<div class="form-group row">
	<label class="col-form-label col-lg-3">Client Lead Email Id's<span class="text-danger">*</span><span class="appendClientLeadEmailId"></span></label>
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


<div class="d-flex justify-content-end align-items-center">
	<!-- <button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button> -->
	<button type="submit" style="background: #4b6584 !important; color: #fff;" class="form-control btn create_btn create_plan">Create <i class="icon-paperplane ml-2"></i></button>
</div>
<!-- </form> -->
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
