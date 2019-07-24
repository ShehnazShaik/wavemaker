<?php
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
    <script src="global_assets/js/demo_pages/dashboard.js"></script>

    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
    <script src="assets/js/user_dashboard.js"></script>
    <script src="assets/js/sidenavjscode.js"></script>
    <script src="assets\js\sessiontimeoutjs.js"></script>
    <script src="assets/js/exportExcel.js" charset="utf-8"></script>
    <script src="assets/js/FileSaver.min.js" charset="utf-8"></script>
    <script src="assets/js/xlsx.full.min.js" charset="utf-8"></script>
    <script src="global_assets/js/demo_pages/form_checkboxes_radios.js"></script>

</head>
<style media="screen">
.same_Class{
    padding: 0px 16px;
    font-size: 22px;
    color: green;
}
#DataTables_Table_0_filter{
    display: none !important;
}
#DataTables_Table_1_filter{
    display: none !important;
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
            <div class="page-header page-header-light">

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index-2.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row" style="height:100%">
                    <div class="col-xl-12" style="height:100%">
                        <div class="card" style="height:100%">

                            <!-- Order direction sequence control -->
                            <div class="card">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div style="margin-top:12px;margin-right:12px;padding:12px;">Start Date:
                                            <input class="form-control startdateclass"  placeholder="start date" type="date"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div style="margin-top:12px;margin-right:12px;padding:12px;">End Date:
                                            <input  class="form-control enddateclass" placeholder="end date" type="date"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                        <div style="margin-top: 32px;margin-right: 12px;padding: 12px;">
                                            <button style="background-color:green;color:white;width:55px;" class="form-control gobtn">GO</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="same_Class">
                                    On-going Plans
                                </div>
                                <table class="table datatable-multi-sorting ">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th>Campaign ID</th>
                                            <th>Campaign Name</th>
                                            <th>Client</th>
                                            <th>Brand</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="displayincompletedplans">
                                        <!-- <tr>
                                        <td><a href="#">Campaign 1232322</a></td>
                                        <td>Enright</td>
                                        <td>Traffic Court Referee</td>
                                        <td>22 Jun 1972</td>
                                        <td>Active</td>
                                        <td><button>complete</button></td>

                                    </tr> -->

                                </tbody>
                            </table>
                            <div class="same_Class">
                                Completed Plans
                            </div>
                            <table class="table datatable-multi-sorting">
                                <thead>
                                    <tr>
                                        <th>Campaign ID</th>
                                        <th>Campaign Name</th>
                                        <th>Client</th>
                                        <th>Brand</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="displaycompletedplans">
                                    <!-- <tr>
                                    <td><a href="#">Campaign 1232322</a></td>
                                    <td>Enright</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td>Active</td>
                                    <td><button>complete</button></td>

                                </tr> -->

                            </tbody>
                        </table>
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
<div id="replanmodall" class="modal fade" tabindex="-1"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="margin-top: 255px;">
            <div class="modal-header">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <button type="button" class="close closeModal closeClass" data-dismiss="modal">&times;</button>
            </div>
            <!-- Form -->
            <div class="modal-body" style="padding-top: 0px;">
                <div class="row">
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
</div>
<!-- /page content -->

</body>
