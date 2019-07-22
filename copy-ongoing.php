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
	<link rel="stylesheet" href="assets/css/common.css">
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
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
	<link rel="stylesheet" href="https://www.samclarke.com/assets/migrating-to-hugo/monokai.css" />
	<!--NVD3-->
	<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> -->
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
.bootstrap-touchspin-down{
	display: none !important;

}
.bootstrap-touchspin-up{
	display: none !important;
}
.fileinput-upload{
	display: none !important;
}
.sub_div{
	    margin-top: 40px;
}
.texttodisplay{
	display: none;
}
/*
stepper */
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
							<div>
						<div style="margin-top:6px;float:right;" class="col-sm-2"><input class="form-control" placeholder="Campaign ID" type="text"/></div></div>
							<div style="width: 100%;padding:50px;">
								<div class="form-group row">
									<h6 class="font-weight-semibold bb_txt">Uploading Buying Basket:</h6>
									<div class="card fadeInDown texttodisplay">

									</div>
									<div class="col-lg-10">
										<input type="file" class="file-input-ajax" id="load-file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="multiple" data-fouc>

										<span class="red_color">Accepts only Excel files</span>
									</div>
									<div class="col-lg-12 submit_btn">
										<button type="submit" class="btn btn-primary" style="background: #4caf50;" id="upl-btn">Upload <i class="icon-upload ml-2"></i></button>
									</div>
								</div>
							</div>

							<!-- choosing path -->
							<div class="selection_div" style="padding: 0px 50px;">
								<div class="form-group mb-3 mb-md-2 path_selec">
									<label class="d-block font-weight-semibold">Choose Path</label>
									<div class="form-check form-check-inline cursor_pointer">
										<label class="form-check-label cursor_pointer">
											<input type="radio" class="form-check-input-styled cursor_pointer cprp_r" name="radio" checked data-fouc>
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
								<div class="col-lg-12 cprp">
									<!-- <div class="mb-4 path_selec">
										<input type="radio" class="form-check-input-styled cursor_pointer cprp_r" name="radio" checked data-fouc>
										<h6 class="font-weight-semibold">Optimize CPRP vs Reach</h6>
										<input type="radio" class="form-check-input-styled cursor_pointer budget_r" name="radio-inline-left" data-fouc>
										<h6 class="font-weight-semibold">Budget Allocation</h6>
									</div> -->
									<div class="mb-4 weightage">
										<h6 class="font-weight-semibold">Weightage</h6>
										<div class="row">
											<div class="col-md-6">
												<h6 class="font-weight-semibold">CPRP</h6>
												<input class="form-control touchspin-no-mousewheel input cprp_val" id="a" type="number" name="number"  min="1" max="100"  placeholder="Select the range till 100">
											</div>
											<div class="col-md-6">
												<h6 class="font-weight-semibold">Reach</h6>
												<input class="form-control touchspin-no-mousewheel input reach_val" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
											</div>
										</div>
									</div>
									<div class="mb-4 days">
										<h6 class="font-weight-semibold">Campaign Duration (in Days)</h6>
										<div class="row">
											<div class="col-md-6">
												<input class="form-control touchspin-no-mousewheel campaign" type="number" name="number" max="365" placeholder="Campaign Duration (in Days)">

											</div>
										</div>
									</div>

									<div class="mb-4 acd_d">
										<div class="main">
											<div class="sub_div">
												<div class="row keyword">
													<div class="col-md-4">
														<h6 class="font-weight-semibold">ACD</h6>
														<input type="text" class="form-control  name_Class 0 subdivname_0" id="txtNilai" onkeypress="CheckNumeric(event);">

													</div>
													<div class="col-md-4">
														<h6 class="font-weight-semibold">Dispresion</h6>
														<input class="form-control touchspin-no-mousewheel path_Class 0 subdivpath_0" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
													</div>
													<div class="col-md-4">
														<p style="margin-top: 30px;"></p>
														<button type="submit" class="btn btn-primary btn_ plus_btn" attr="">Add more</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mb-4">
										<button type="submit" class="btn btn-primary cprp_submit submit" style="background: #4caf50;">Submit </button>
									</div>
								</div>

							</div>


							<div class="col s12">
								<div class="">
									<div class="card-content">


											<div class="step-content">
												<div class="row">


													<hr>
													<div class="row total_div">
														<hr>
														<div class="col-lg-12 choose_path">

														</div>


											<!-- browse files -->

											<!-- <div class="card" id="cprp_upload">
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
											</div> -->

											<!-- budget -->
											<!-- <div class="budget">
												<div class="mb-4">
													<h6 class="font-weight-semibold">Campaign Duration (in Dayss)</h6>
													<div class="row">
														<div class="col-md-6">
															<input type="text" value="10" class="form-control touchspin-no-mousewheel">

														</div>
													</div>
												</div>

												<div class="mb-4">
													<h6 class="font-weight-semibold">ACD</h6>
													<div class="row">
														<div class="col-md-6">
															<input type="text" value="10" class="form-control touchspin-no-mousewheel">

														</div>
													</div>
												</div>
												<div class="mb-4">
													<h6 class="font-weight-semibold">Dispresion</h6>
													<div class="row">
														<div class="col-md-6">

															<input type="text" value="10" class="form-control touchspin-no-mousewheel">

														</div>
													</div>
												</div>
												<div class="mb-4">
													<button type="submit" class="btn btn-primary submit_budget" style="background: #4caf50;">Submit <i class="icon-paperplane ml-2"></i></button>
												</div>


											</div> -->
											<!-- /main content -->
											<!-- browse files -->

												<!-- <div class="card" id="budget_upload">
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
												</div> -->
										</div>

									</div>

								</div>



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
	// $("body").on("click", ".budget_r", function(){
	// 	debugger
	// 	$(".budget").show();
	// 	$(".cprp").hide();
	// 	$("#cprp_upload").hide();
	// 	$(".complete_cprp").hide();
	// })
	$("#cprp_upload").hide();
	$(".complete_cprp").hide();
	$(".complete_budget").hide();
	$("#budget_upload").hide();
	// $("body").on("click", ".cprp_submit", function(){
	// 	// $(this).hide();
	// 	$("#cprp_upload").show();
	// 	$(".cprp").hide();
	// 	$(".complete_cprp").show();
	// 	$(".budget_r").attr('disabled', 'disabled');
	// 	$(".uniform-choice span").addClass("disable_border")
	// 	$(".cprp_r").attr('disabled', 'disabled');
	// })
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

})

	</script>

	</body>
	</html>
