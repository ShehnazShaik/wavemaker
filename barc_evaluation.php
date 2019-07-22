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
	<script src="assets/js/barc.js"></script>
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
<div><div style="margin-top:6px;float:right;" class="col-sm-2"><input class="form-control" placeholder="Campaign ID" type="text"/></div></div>
							<div style="width: 100%;padding:50px;">
								<div class="form-group row">


                                            <div class="input-field col s12">

                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-weight-semibold">Campaign Markets</h6>
                                                                <!-- <div class="" id="campaign_market_text">

                                                                </div> -->
                                                                <select class="form-control select" multiple="multiple" data-fouc data-placeholder="Campaign Markets" id="campaign_market_id">
                                                                    <!-- <option value="AZ"></option> -->
                                                                </select>
                                                                <div class="select_markets">

                        										</div>
                                                                <!-- <span id="submit_campaign"><i class="icon-checkmark-circle ml-2" ></i></span> -->
                                                            </div>
                                                            <div class="col-md-4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-weight-semibold">Selected Primary TG</h6>
                                                                <select class="form-control select-multiple-tokenization camp_id" multiple="multiple" data-fouc data-placeholder="Select Primary TG">
                                                                    <option value="AZ"></option>

                                                                </select>
                                                                <div class="primary_freeze">
                        											<!-- <input class="form-control" required  data-fouc placeholder="Type the Campaign Name"> -->
                        										</div>
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

                                                                    <option value="AZ"></option>
                                                                </select>
                                                                <div class="base_freeze">
                                                                    <!-- <input class="form-control" required  data-fouc placeholder="Type the Campaign Name"> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-weight-semibold">Selected End Week</h6>
                                                                <!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
                                                                <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc data-placeholder="Select End Week">
                                                                    <option value="AZ"></option>
                                                                </select>
                                                                <div class="endfreeze">

                        										</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
														<button type="submit" class="btn btn-primary cprp_submit" style="background: #4caf50;">Confirm <i class="icon-paperplane ml-2"></i></button>
                                                        <button type="submit" class="btn btn-primary cprp_submit edit" style="background: #4caf50;">Edit <i class="icon-paperplane ml-2"></i></button>
                                                    </div>

                                            </div>



								</div>
							</div>

							<!-- choosing path -->


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
