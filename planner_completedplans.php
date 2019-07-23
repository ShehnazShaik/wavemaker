<?php
// session_start();
// if (!$_SESSION['userrole']) {
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="global_assets/js/demo_pages/form_select2.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

    <script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
    <script src="assets/js/sidenavjscode.js"></script>
    <script src="assets/js/completedplansjs.js"></script>
    <script src="assets\js\sessiontimeoutjs.js"></script>
    <!-- <script src="assets\js\sessiontimeoutjs.js"></script> -->




    <!-- /theme JS files -->

    <!-- /theme JS files -->

</head>
<style media="screen">
#logoutbtnid{
    background-color: #ffffff2e !important;
    border: none;
    border-radius: 5px;
    padding: 2px 15px;
    color: white;
}

.dataTables_filter{
display: none;
}
.hidden{
    display: none;
}
</style>
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
        <div class="col-xl-12" style="height:100%">
            <div class="card" style="height:100%">
                <div class="card">
                    <div class="row">
                        <div style="margin-top:6px;margin-right:14px;margin-left:12px;" class="col-sm-2">
                            <input type="text" style="padding:5px;" placeholder="search for Campaign ID" class="form-control Campaignidclass"/>
                        </div>
                        <div style="margin-top:6px;" class="col-sm-2">
                            <input class="form-control startdateclass"  placeholder="start date" type="date"/>
                        </div>
                        <div style="margin-top:6px;" class="col-sm-2">
                            <input class="form-control enddateclass"  placeholder="end date" type="date"/>
                        </div>
                        <div style="margin-top:6px;" class="col-sm-2">
                            <select data-placeholder="Client Name" class="form-control select clientclass" id="clientt" data-fouc>
                                <option value=""></option>
                            </select>
                        </div>
                        <div style="margin-top:6px;" class="col-sm-2">
                            <select data-placeholder="Brand Name" class="form-control select brandclass" id="brandd" data-fouc>
                                <option value=""></option>
                            </select>
                        </div>
                        <div style="margin-top:6px;" class="col-sm-1">
                            <button style="background-color:green;color:white;" class="form-control gobtn">GO</button>
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
                                <th>End Date</th>
                                <th>Replan</th>
                                <th>Donwload</th>
                            </tr>
                        </thead>
                        <tbody class="displaytabledata">
                            <!-- <tr>
                            <td><a href="#"></a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->

                    </tbody>
                </table>
            </div>

            <!-- Order direction sequence control -->
            <!-- <div class="card">
            <div class="row">
            <div style="margin-top:6px;margin-right:12px;" class="col-sm-2">
            <select data-placeholder="Client Lead" class="form-control select clientleadClass" data-fouc>
            <option value=""></option>
        </select>
    </div>
    <div style="margin-top:6px;" class="col-sm-2">
    <input class="form-control startdateclass"  placeholder="start date" type="date"/>
</select>
</div>
<div style="margin-top:6px;" class="col-sm-2">
<input class="form-control enddateclass"  placeholder="end date" type="date"/>
</select>
</div>
<div style="margin-top:6px;" class="col-sm-2">
<select data-placeholder="Client Name" class="form-control select" data-fouc>
<option value=""></option>
</select>
</div>
<div style="margin-top:6px;" class="col-sm-2">
<select data-placeholder="BrandName" class="form-control select" data-fouc>
<option value=""></option>
</select>
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
<th>End Date</th>
<th>Re-plan</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="#"></a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

</tbody>
</table>
</div> -->
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



<div id="replanmodall" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="margin-top: 255px;">

            <!-- Form -->
            <div class="modal-body">
                <div class="text-center mb-3">
                    <!-- <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Password recovery</h5>
                    <span class="d-block text-muted">We'll send you instructions in email</span> -->
                    <button class="form-control buyingbasketbtn" style="background-color: #192124;color: white;" style="color:#fff">Replan from Buying Basket Upload </button>

                </div>

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <button class="form-control acceleratorbtn"style="background-color: #192124;color: white;" style="color:#fff">Replan by Uploading Revised Accelerator Plan</button>
                </div>

                <!-- <button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button> -->
            </div>
            <!-- /form -->

        </div>
    </div>
</div>
<!-- /page content -->

<div id="replanmodall" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="margin-top: 255px;">

            <!-- Form -->
            <div class="modal-body">
                <div class="text-center mb-3">
                    <!-- <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Password recovery</h5>
                    <span class="d-block text-muted">We'll send you instructions in email</span> -->
                    <button class="form-control buyingbasketbtn" style="background-color: #192124;color: white;" style="color:#fff">Replan from Buying Basket Upload </button>

                </div>

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <button class="form-control acceleratorbtn"style="background-color: #192124;color: white;" style="color:#fff">Replan by Uploading Revised Accelerator Plan</button>
                </div>

                <!-- <button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button> -->
            </div>
            <!-- /form -->

        </div>
    </div>
</div>
</body>

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:41:06 GMT -->
</html>
