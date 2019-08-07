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
    <!-- <link rel="assets/css/common.css" href="/css/master.css"> -->
    <link href="assets/css/common.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
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
    <!-- Core JS files -->

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
/* .replanmodal{
background-color: #ff3838;
border: none;
color: #000;
padding: 5px 22px;
border-radius: 4px;

} */

.datatable-header{
    display: none !important;
}

/* .DataTables_Table_0_wrapper{

} */
/* #DataTables_Table_0_wrapper{
margin-top: 45px;
} */
.content {
    /* background-color: red /* background-image: url(../images/wmflow.png) no-repeat; */
    /* background-image: url('asserts/images/wmflow.png') */
    background-image: url("assets/images/wmflow.png");
    background-repeat: no-repeat, repeat;
    background-color: #2a2f39;
}
</style>
<body>

    <!-- Main navbar -->

    <!-- /main navbar -->
    <?php	include 'header.php';?>

    <!-- Page content -->
    <div class="page-content">

        <?php	include 'assets/includes/side_navbar.php';?>

        <div class="loading">
            <img src="assets/images/loader.gif" alt="">
        </div>


        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline" style="background-color: #2a2f39;color: white;">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Completed Plans</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>


            <!-- Main content -->
            <!-- <div class="content-wrapper"> -->

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
<div class="content" style="">

    <!-- Main charts -->
    <div class="row" style="height:100%">
        <div class="col-xl-12" style="height:100%">
            <div class="card" style="height:100%;background-color: #222c31;">
                <div class="card" style="background-color: #222c31;color: white;">

                    <!-- <button class="btn3">More filters+</button> -->
                    <div style="padding:12px;"><span style="font-size:16px;color: #d63031;
                    font-weight: 600;
                    text-decoration: none;">More Filters </span>
                    <img class="btn3" style="width:20px;height:20px;cursor:pointer !important;"src="assets/images/filter-icon.svg">
                </div>
                <div class="row displaytoptextboxes">
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
                        <button style="background-color:#00b894;border:none;color:#fff;border:none;" class="form-control gobtn">GO</button>
                    </div>
                </div>
                <table class="table datatable-multi-sorting" style="color:white;margin-top:30px">

                    <thead style="text-align:center;">
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
                    </table>
                </div>


            </div>
            <!-- /traffic sources -->

        </div>
    </div>
    <!-- /main charts -->
</div>

</div>

<!-- /main content -->

</div>


<div id="downloadicon" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-top: 255px;">
            <div class="modal-header">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <button type="button" class="close closeModal closeClass" data-dismiss="modal">&times;</button>
            </div>
            <!-- Form -->
            <div class="modal-body" style="padding-top: 0px;">
                <div class="row" style="display:block">
                    <div class="row_header">
                        <button type="button" class="selectAll">Select All</button>
                        <button type="button" class="downloadAll">Download </button>
                    </div>
                    <div class="row row_body">

                    </div>
                </div>
            </div>



        </div>
        <!-- /form -->

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
