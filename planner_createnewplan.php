<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/uploader_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:48:40 GMT -->
<head>
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
	<!-- <link href="assets/css/common.css" rel="stylesheet" type="text/css"> -->
	<link href="assets/css/common.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="assets/js/create.js"></script>
	<script src="global_assets/js/demo_pages/uploader_bootstrap.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="global_assets/js/demo_pages/form_select2.js"></script>
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="global_assets/js/demo_pages/form_validation.js"></script>
	<link href="global_assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<script src="global_assets/js/demo_pages/animations_css3.js"></script>
	<script src="assets/js/sidenavjscode.js"></script>
	<script src="assets/js/exportExcel.js" charset="utf-8"></script>
	<script src="assets/js/FileSaver.min.js" charset="utf-8"></script>
	<script src="assets/js/xlsx.full.min.js" charset="utf-8"></script>
	<!-- /global stylesheets -->

	<!-- /theme JS files -->

</head>
<script>
$(document).ready(function () {
		var alltooltips =  JSON.parse(localStorage.getItem("tool_tips"))
		var client=alltooltips.CreateNewPlan_Client;
		var brand = alltooltips.CreateNewPlan_Brand;
			var campaignname = alltooltips.CreateNewPlan_CampaignNames;
				var campaignid = alltooltips.CreateNewPlan_Campaignid;
				var primarytg=alltooltips.CreateNewPlan_PrimaryTGId;
				var basetg = alltooltips.CreateNewPlan_BaseTGId;
					var endweek = alltooltips.CreateNewPlan_EndWeek;
						var campaignmarket = alltooltips.CreateNewPlan_CampaignMarkets;
	$('.appendclient').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+client+'" src="assets/images/informicon.svg"/>')
		$('.appendbrand').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+brand+'" src="assets/images/informicon.svg"/>')
		$('.appendcampaignname').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+campaignname+'" src="assets/images/informicon.svg"/>')
		$('.appendcampaignid').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+campaignid+'" src="assets/images/informicon.svg"/>')
		$('.appendprimarytg').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+primarytg+'" src="assets/images/informicon.svg"/>')
		$('.appendbasetg').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+basetg+'" src="assets/images/informicon.svg"/>')
		$('.appendendweek').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+endweek+'" src="assets/images/informicon.svg"/>')
		$('.appendcampaignmarket').append('<img style="width:17px;height:17px;margin-left:10px;" title="'+campaignmarket+'" src="assets/images/informicon.svg"/>')

		// <img style="width:17px;height:17px;margin-left:10px;" src="assets/images/informicon.svg"/>

})
</script>
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
.next_btn a{
	color: white;
}
.file_download{
	float: right;
}
#logoutbtnid{
	background-color: #ffffff2e !important;
	border: none;
	border-radius: 5px;
	padding: 2px 15px;
	color: white;
}
.hidden{
	display: none;
}
.sendpath h5{
	cursor: pointer;
}
.select2-selection{
	width: 400px;
}
.campign_name{
	width: 400px;
}
.campign_id{
	width: 400px;
}
/* added */
.cprp{
	 background-color: #222c31;
}
.content{
	 color: white;
}
.page-content{
    background-color: #393e3e;
}
.datatable-header{
    display: none !important;
}
.content {
    background-image: url("assets/images/wmflow.png");
    background-repeat: no-repeat, repeat;
    background-color: #2a2f39;
		background-size: cover;
  }
	.texttodisplay {
    margin: auto;
    background: #f3713c;
    padding: 30px;
    margin-top: 47px;
}
</style>

<!-- <script>
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
});
</script> -->
<body>

	<!-- Main navbar -->

	<!-- /main navbar -->

	<?php include 'header.php';?>
	<!-- Page content -->
	<div class="page-content">

		<?php include 'assets/includes/side_navbar.php';?>
		<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-light">

					<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline" style="background-color: #2a2f39;color: white;">
							<div class="d-flex">
									<div class="breadcrumb">
											<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<span class="breadcrumb-item active">Create New Plan</span>
									</div>

									<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
							</div>
					</div>
				</div>

		<!-- Main content -->
		<!-- <div class="content-wrapper"> -->




			<!-- Content area -->
			<div class="content">

				<!-- Bootstrap file input -->
				<div class="">
					<div class="">

						<div class="total_div">
							<div class="cprp card new_plan">
								<h5 class="font-weight-bold">CREATE NEW PLAN</h5>
								<hr>
								<div class="parent">
									<div class="mb-4">
										<div class="row">
											<div class="col-md-3">
												<h6 class="font-weight-semibold">Client<span class="text-danger">*</span><span class="appendclient"></span></h6>
											</div>
											<div class="col-md-4">
												<select class="form-control select client" required id="select" data-fouc data-placeholder="Select Client">
													<option value=""></option>
												</select>
												<div data-placeholder="" class="mm client_freezeclass" data-fouc>

												</div>
											</div>
										</div>
									</div>
									<div class="mb-4">
										<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
										<div class="row">
											<div class="col-md-3">
												<h6 class="font-weight-semibold">Brand<span class="text-danger">*</span><span class="appendbrand"></span>
												</h6>
											</div>
											<div class="col-md-4">
												<select class="form-control select" required id="select0" data-fouc data-placeholder="Select Brand">
													<option value=""></option>
												</select>
												<div data-placeholder="" class="freezebrand mm" data-fouc>

												</div>
											</div>
										</div>
									</div>
									<div class="mb-4">
										<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
										<div class="row">
											<div class="col-md-3">
												<h6 class="font-weight-semibold">Campaign Name<span class="text-danger">*</span><span class="appendcampaignname"></span>
												</h6>
											</div>
											<div class="col-md-4 capm_name_class">
												<input class="form-control campign_name" required  data-fouc placeholder="Type the Campaign Name">
											</div>
										</div>
									</div>
									<div class="mb-4">
										<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
										<div class="row">
											<div class="col-md-3">
												<h6 class="font-weight-semibold">Campaign Id<span class="text-danger">*</span><span class="appendcampaignid"></span></h6>
											</div>
											<div class="col-md-4 camp_id">
												<!-- <option value=""></option>
											</select> -->
										</div>
									</div>
								</div>
								<div class="mb-4">
									<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
									<div class="row">
										<div class="col-md-3">
											<h6 class="font-weight-semibold">Primary TG<span class="text-danger">*</span><span class="appendprimarytg"></span></h6>
										</div>
										<div class="col-md-4">
											<select data-placeholder="Primary TG" required class="form-control select primary_tg" data-fouc>
												<option value=""></option>
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
										<div class="col-md-3">
											<h6 class="font-weight-semibold">Base TG<span class="text-danger">*</span><span class="appendbasetg"></span></h6>
										</div>
										<div class="col-md-4">
											<select data-placeholder="Base Tg" required class="form-control select base_tg" data-fouc>
												<option value=""></option>
											</select>
											<div class="base_freeze">
												<!-- <input class="form-control" required  data-fouc placeholder="Type the Campaign Name"> -->
											</div>
										</div>
									</div>
								</div>
								<div class="mb-4">
									<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
									<div class="row">
										<div class="col-md-3">
											<h6 class="font-weight-semibold">End Week<span class="text-danger">*</span><span class="appendendweek"></span></h6>
										</div>
										<div class="col-md-4">
											<select data-placeholder="End week" required class="form-control select end_week" data-fouc>
												<option value=""></option>
											</select>
											<div class="endfreeze">

											</div>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<!-- <p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p> -->
									<div class="row">
										<div class="col-md-3">
											<h6 class="font-weight-semibold">Campaign Markets<span class="text-danger">*</span><span class="appendcampaignmarket"></span></h6>
										</div>
										<div class="col-md-4">
											<select multiple="multiple" class="form-control select-fixed-multiple campign_markets" required data-fouc data-placeholder="Select Campaign Markets">
												<option value=""></option>
											</select>
											<div class="select_markets">

											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">

									</div>
									<div class="col-md-6" style="margin-bottom: 35px;">

										<button type="button" name="button" class="btn btn-primary file_download" data-toggle="modal" data-target="#myModal">File Download</button>
									</div>
								</div>
								<div class="mb-12">

									<button type="submit" class="btn form-control cprp_submit create_plan" style="background: #4b6584 !important;color: #fff;">Create <i class="icon-paperplane ml-2"></i></button>
								</div>
							</div>
							<div class="card fadeInDown texttodisplay" style="background: #d1d8e0;">
								<h5 style="color:#000;">Channel Selection Sheet being created. Once complete you will receive it in your inbox.
								</h5>
							</div>
						</div>


					</div>
				</div>

				<div class="row btns" style="margin-left: 15px;margin-right: 15px;">
					<div class="col-md-6"></div>
					<div class="col-md-6">

						<button type="submit" class="btn btn-primary fadeInDown next_btn" title="Next" tooltip="Next"style="color: #fff;border:none;float: right;background-color: transparent !Important;"><span>Next </span><img src="assets/images/right.svg" style="width:30px;"></button>

					</div>
				</div>
				<div class="loading">
					<img src="assets/images/loader.gif" alt="">
				</div>
				<div class="" style="height:30px;">

				</div>
			</div>
			<!-- /page content -->

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog" style="margin-top: 211px;">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<!-- <h4 class="modal-title">Modal Header</h4> -->
						</div>
						<div class="modal-body">

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal" style="background: #f1efefbd;
							border: 1px solid #ccc;
							border-radius: 5px;">Close</button>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="ExportTableMain hidden">

		</div>

		<!-- Core JS files -->

		<!-- <script src="assets/js/sample.js" charset="utf-8"></script> -->
	</body>


	<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/uploader_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:48:45 GMT -->
	</html>
