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
	<script src="assets/js/buyingbasket.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<style>
input[type='radio']:after {
	width: 15px;
	height: 15px;
	border-radius: 15px;
	top: -4px;
	left: -1px;
	position: relative;
	background-color: #d1d3d1;
	content: '';
	display: inline-block;
	visibility: visible;
	border: 2px solid white;
}

input[type='radio']:checked:after {
	width: 15px;
	height: 15px;
	border-radius: 15px;
	top: -6px;
	left: -1px;
	position: relative;
	background-color: #000000;
	content: '';
	display: inline-block;
	visibility: visible;
	border: 2px solid #f1f1f1;

}
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
#logoutbtnid{
	background-color: #ffffff2e !important;
	border: none;
	border-radius: 5px;
	padding: 2px 15px;
	color: white;
}

.submit_ {
	/* color: #333;
	background: #15961bbf;
	border: 1px solid var(--border-color);
	padding: 11px 33px; */
}
.remove{
	width: 20px;
	display: inline;
	position: relative;
	top: -28px;
	cursor: pointer;
	right: -101%;}
	.hide_{
		display: none;
	}
	.close_{
		width: 100%;
		padding: 0px 50px;
	}
	.cprp_div{
		display: none;
	}
	.row {
		margin-right: 0px;
		margin-left: 0px;}
		.radio_class{
			width: 100%;
			padding: 0px 50px;
			font-size: 17px;
			font-weight: 600;
		}
		.changediv{
			width: 100%;
		}
		.spillovertexttodisplay{
			margin: auto;
			background: #d1d8e0;
			color: #000 !important;
			padding: 30px;
		}
		.texttodisplayspill{
			margin: auto;
			background: #d1d8e0;
			padding: 30px;
			width: 600px;
			margin-top: 30px;
		}
		.channelbeing{
			margin: auto;
			/* background: #f3713c; */
			padding: 30px;
			width: 600px;
		}
		/* .spillover{
		display: none !important;
		} */

		.common_main{
			margin-left: 40px;
		}
		.remove_new{
			display: inline;
			position: relative;
			top: -28px;
			cursor: pointer;
			right: -101%;
		}
		.sub_div_new {
	    margin-top: 16px;}
		.content{
			background-image: url('./assets/images/wmflow.png');

		}
		.common_main{
			margin-right: 10px;
		}
		.acceleratorfiletext{
			margin: auto;
			background: #d1d8e0;
			color: #000 !important;
			padding: 30px;
		}
		</style>

		<!-- <script type="text/javascript">
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
</script> -->
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
					<div class="card col-xl-12" style="height:100%">
						<div class="common_class" style="height:100%">
							<div style="margin-top:6px;float:right;" class="col-sm-2 camp_id_">

							</div>
							<div style="width: 100%;padding:50px;" class="buying_basket">
								<div class="form-group row">
									<h6 class="font-weight-semibold bb_txt" style="width:100%">Upload Buying Basket:</h6>
									<br>
									<div class="card fadeInDown texttodisplay" style="background: #d1d8e0;">

									</div>
									<div class="col-lg-10 bb_files">
										<input type="file" class="file-input-ajax" id="load-file" accept=".csv, xlsm, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="multiple" data-fouc>

										<span class="red_color">Accepts only Excel files</span>
									</div>
									<div class="col-lg-12 submit_btn">
										<button type="submit" class="btn btn-primary" style="background: #4caf50;" id="upl-btn">Upload <i class="icon-upload ml-2"></i></button>
									</div>
								</div>

							</div>
							<div class="radio_class">
								<input type="radio" name="gender" value="Genre Level Budget Allocation"  key='1' class="common_main cprp_main"><span>Genre Level Budget Allocation</span>
								<input type="radio" name="gender" value="Channel Level Budget Allocation" key='2' class="common_main budget_main"><span>Channel Level Budget Allocation</span><br>
							</div>
							<div class="cprp_div close_" >
								<hr>
								<h6 class="font-weight-semibold">Weightage</h6>
								<div class="row">
									<div class="col-md-6">



										<h6 class="font-weight-semibold">CPRP <span class="appendcprp"></span></h6>
										<input class="form-control touchspin-no-mousewheel input cprp_val" id="a" type="number" name="number"  min="1" max="99"  placeholder="Select the range till 100">
									</div>
									<div class="col-md-6">
										<h6 class="font-weight-semibold">Reach <span class="appendreach"></span></h6>
										<input class="form-control touchspin-no-mousewheel input reach_val" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
									</div>
								</div>
								<div class="row" style="margin-top: 20px;">
									<div class="col-md-6">
										<h6 class="font-weight-semibold">CPRP Channels - Spots/day <span class="appendcprpchannels"></span></h6>
										<input class="form-control touchspin-no-mousewheel input cprp_channel_val"  type="number" name="number"  min="1" max="50"  onKeyUp="if(this.value>50){this.value='50';}else if(this.value<0){this.value='0';}" placeholder="Select the range till 50">
									</div>
									<div class="col-md-6">
										<h6 class="font-weight-semibold">Frequency Channels - Spots/day <span class="appendfreqchannels"></span></h6>
										<input class="form-control touchspin-no-mousewheel input frequency_channel"  type="number" name="number" min="0" max="50" onKeyUp="if(this.value>50){this.value='50';}else if(this.value<0){this.value='0';}" placeholder="Select the range till 50">
									</div>
								</div>
								<h6 class="font-weight-semibold" style="margin-top:20px">Campaign Duration (in Days) <span class="appendcampaignduration"></span></h6>
								<div class="row">
									<div class="col-md-6">
										<input class="form-control campaign_days" type="number" min="0" max="365"  onKeyUp="if(this.value>365){this.value='365';}else if(this.value<0){this.value='0';}" placeholder="Campaign Duration (in Days)">

									</div>
								</div>
								<!-- <button data-remodal-action="close" type="button" class="remodal-close" aria-label="Close"></button> -->
								<div class="row">
									<div class="col-lg-6">
										<h6 class="font-weight-semibold" style="margin-top:20px">Average Commercial Duration <span class="appendaveragecommer"></span></h6>
									</div>
									<div class="col-lg-6">
										<h6 class="font-weight-semibold" style="margin-top:20px">Dispersion <span class="appenddispers"></span></h6>
									</div>
								</div>
								<div class="row main" style="margin-top:-40px;">
									<div class="sub_div" style="width:100%">
										<div class="row keyword" style="width:100%">
											<div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
												<input type="text" class="form-control mods_inputs name name_Class 0" placeholder="Enter the duration in seconds">
												<!-- <input type="number" name="number"  class="mods_inputs name_Class 0 form-control" required="" placeholder="Please enter a value less than or equal to 10"> -->
											</div>

											<div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
												<input type="text" class="form-control mods_inputs path path_Class 0" placeholder="Enter dispersion in percentage">
												<!-- <input type="number" name="maximum_number" class="mods_inputs path_Class 0 form-control" required="" placeholder="Please enter a value less than or equal to 10"> -->

												<!-- <span><img src="assets/images/delete.svg" style="width:20px;" class="remove hide_"></span> -->
											</div>

										</div>
									</div>

								</div>

								<div class="mr-t-10" style="margin-top: 20px; text-align: right;">
									<button class="btn btn-primary remodal-add add_more">Add more</button>
									<button class="submit_ btn btn-primary" data-toggle="modal" data-target="#myModal_">Submit</button>
								</div>


							</div>
							<div class="budget_div_ close_" >
								<hr>
								<h6 class="font-weight-semibold" style="margin-top:20px">Campaign Duration (in Days)<span class="appendcampaigndays"></span></h6>
								<div class="row">
									<div class="col-md-6">
										<input class="form-control campaign_days_new" type="number" min="0" max="365"  onKeyUp="if(this.value>365){this.value='365';}else if(this.value<0){this.value='0';}" placeholder="Campaign Duration (in Days)">

									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<h6 class="font-weight-semibold" style="margin-top:20px">ACD<span class="appedacd"></span></h6>
									</div>
									<div class="col-lg-6">
										<h6 class="font-weight-semibold" style="margin-top:20px">Dispersion<span class="appenddispersion"></span></h6>
									</div>
								</div>
								<div class="row main_new">
									<div class="sub_div_new" style="width:100%;margin-top:0px;">
										<div class="row keyword_new" style="width:100%">
											<div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
												<input type="text" class="form-control mods_inputs name_new name_Class_new 0" placeholder="Enter ACD">
											</div>

											<div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
												<input type="text" class="form-control mods_inputs path_new path_Class_new 0" placeholder="Enter Dispersion">
											</div>

										</div>
									</div>
								</div>
								<div class="mr-t-10" style="margin-top: 20px; text-align: right;">
									<button class="btn btn-primary remodal-add add_more_new">Add more</button>
									<button class="submit_new btn btn-primary">Submit</button>
								</div>


							</div>
							<div class="channelbeing" style="margin-top:50px;background-color:#d1d8e0;">
								<h5 style="color:#000">Spillover Sheet being created. Once complete you will receive it in your inbox.</h5>
							</div>

							<div style="width: 100%;padding:50px;" class="spillover">
								<hr>
								<div class="form-group row">
									<div class="changediv">

									</div>
									<br>
									<div class="card fadeInDown spillovertexttodisplay">
										<h5 class="spillll">Spillover Sheet being created. Once complete you will receive it in your inbox.</h5>
									</div>
									<div class="col-lg-12 ss_files">
										<input type="file" class="file-input-ajax" id="load-file1" accept=".csv, .xlsm, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="multiple" data-fouc>

										<span class="red_color">Accepts only Excel files</span>
									</div>
									<div class="col-lg-12 submit_btn1">
										<button type="submit" class="btn btn-primary" style="background: #4caf50;float:right" id="upl-btn1">Upload <i class="icon-upload ml-2"></i></button>
									</div>
								</div>

							</div>

							<div class="card fadeInDown texttodisplayspill">
								<!-- <h5>Spillover Sheet being created. Once complete you will receive it in your inbox.
							</h5> -->
						</div>
						<div class="row">
							<div class="card acceleratorfiletext" style="padding: 50px;"></div>

						</div>
					<div class="mr-t-10" style="margin-top: 20px;">
						<!-- <button class="btn btn-primary backclass" style="float:left;">Previous</button> -->
						<button type="submit" class="btn btn-primary fadeInDown backclass" title="Next" tooltip="Next"style="color: #fff;border:none;float: left;background-color: transparent !Important;"><img src="assets/images/left.svg" style="width:30px;"><span>Previous </span></button>
						<button type="submit" class="btn btn-primary fadeInDown next_" title="Next" tooltip="Next"style="color: #fff;border:none;float: right;background-color: transparent !Important;"><span>Next </span><img src="assets/images/right.svg" style="width:30px;"></button>

					</div>


				</div>


				<!-- keywords -->



				<!-- SubmitChannel -->

				<!-- /traffic sources -->
				<div class="loading">
					<img src="assets/images/loader.gif" alt="">
				</div>
			</div>
		</div>
		<!-- /main charts -->
	</div>


</div>
<!-- /main content -->

</div>


</body>
<script>
$(document).ready(function () {
	var alltooltips =  JSON.parse(localStorage.getItem("tool_tips"))
	var appendcprp= alltooltips.BuyingBasket_GenreLevelBudgetAllocation_CPRP;
	var appendreach = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_Reach;
	var appendcprpchannels = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_CPRPChannel_Spots_days;
	var appendfreqchannels = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_FrequencyChannel_Spots_days;
	var appendcampaignduration = alltooltips.BuyingBasket_ChannelLevelBudgetAllocation_CampaignDuration;
	var appendaveragecommer = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_AverageCommercialDuration;
	var appenddispers = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_Dispersion;
	var appendcampaigndays = alltooltips.BuyingBasket_GenreLevelBudgetAllocation_CampaignDuration;
	var appedacd = alltooltips.BuyingBasket_ChannelLevelBudgetAllocation_AverageCommercialDuration;
	var appenddispersion = alltooltips.BuyingBasket_ChannelLevelBudgetAllocation_Dispersion;

		$('.appendcprp').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendcprp+'" src="assets/images/informicon.svg"/>')
		$('.appendreach').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendreach+'" src="assets/images/informicon.svg"/>')
		$('.appendcprpchannels').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendcprpchannels+'" src="assets/images/informicon.svg"/>')
		// $('.appendlocation').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+location+'" src="assets/images/informicon.svg"/>')
		$('.appendfreqchannels').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendfreqchannels+'" src="assets/images/informicon.svg"/>')
		$('.appendcampaignduration').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendcampaignduration+'" src="assets/images/informicon.svg"/>')
		// $('.appendlocation').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+location+'" src="assets/images/informicon.svg"/>')
		$('.appendaveragecommer').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendaveragecommer+'" src="assets/images/informicon.svg"/>')

		$('.appenddispers').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appenddispers+'" src="assets/images/informicon.svg"/>')
		$('.appendcampaigndays').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appendcampaigndays+'" src="assets/images/informicon.svg"/>')
		$('.appedacd').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appedacd+'" src="assets/images/informicon.svg"/>')
		$('.appenddispersion').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+appenddispersion+'" src="assets/images/informicon.svg"/>')


		// <img style="width:17px;height:17px;margin-left:10px;" src="assets/images/informicon.svg"/>

})
</script>


</html>
