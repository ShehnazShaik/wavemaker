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
    <script src="global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="global_assets/js/demo_pages/form_select2.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switch.min.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="assets/js/app.js"></script>
    <!-- <script src="assets/js/plannerprofile.js"></script> -->
    <script src="global_assets/js/demo_pages/form_validation.js"></script>
    <!-- <script src="assets/js/barc.js"></script> -->
	<script src="assets/js/sidenavjscode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
.navbar-nav-link{
    display: none !important;
}
.loading{
    position: fixed;
    background: rgba(177, 172, 172, 0.4);
    width: 81vw;
    height: 100vh;
    top: 62px;
    z-index: 999999999999999999999999999999;
    text-align: center;
    padding-top:37vh;
    left: 20%;
}
.loading img{
    width: 70px;
}
#logoutbtnid{
    background-color: #ffffff2e !important;
    border: none;
    border-radius: 5px;
    padding: 2px 15px;
    color: white;
}

#admin{
    display: none !important;
}
#select2-error{
    display: none !important;
}
.validation-invalid-label{
    display: none !important;
}
.select2{
    width: 100% !important;
}
</style>
<body>
    <?php include 'header.php';?>
    <!-- Main navbar -->

    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">
        <?php	include 'assets/includes/side_navbar.php';?>



        <!-- Main content -->
        <div class="content-wrapper">




            <!-- Content area -->
            <div class="content">

                <!-- Form validation -->
                <div class="card">

                    <div class="card-body">

                        <div>
                            <fieldset class="mb-3">

                                <div class="text-center mb-3">

                                    <h5 class="mb-0">BARC Evaluation</h5>
                                    <span class="d-block text-muted">All fields are required</span>

                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Campaign Markets <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select multiple="multiple" class="form-control select-fixed-multiple campaign_markets" required data-fouc data-placeholder="Select Campaign Markets">
                                            <option value=""></option>
                                        </select>
                                        <div data-placeholder="" class="freezeLoc select_markets" data-fouc>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Selected Primary TG <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="select2" data-placeholder="Selected Primary TG" class="form-control form-control-select2 Primary_Tg_dt" required data-fouc>
                                            <option></option>
                                        </select>
                                        <div data-placeholder="" class="freezeLoc primary_freeze" data-fouc>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Selected Base TG <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="select2" data-placeholder="Selected Base TG" class="form-control form-control-select2 base_tg" required data-fouc>
                                            <option></option>
                                        </select>
                                        <div data-placeholder="" class="freezeLoc base_freeze" data-fouc>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Selected End Week<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="select2" data-placeholder="Selected End Week" class="form-control form-control-select2 End_Week_dt" required data-fouc>
                                            <option></option>
                                        </select>
                                        <div data-placeholder="" class="freezeLoc endfreeze" data-fouc>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">

                                        <select data-placeholder="Client" required class="form-control select clientClass" multiple  data-fouc>
                                            <option value=""></option>
                                        </select>


                                        <div data-placeholder="" class="freezeclient" data-fouc>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">CLient lead <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" name="text" class="form-control CLemId" readonly placeholder="Enter a valid email address">
                                        <div data-placeholder="Client Lead" class="clientleadClass" data-fouc>

                                        </div>
                                        <div class="freezeClientLead">

                                        </div>
                                    </div>
                                </div> -->


                            </fieldset>
                            <hr>
                            <div class="mb-4" style="float:right">
                                <button type="submit" class="btn btn-primary cprp_submit confirm_barc" style="background: #4caf50;">Confirm <i class="icon-paperplane ml-2"></i></button>
                                <button type="submit" class="btn btn-primary cprp_submit edit_barc" style="background: #4caf50;">Edit <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>
                        <div class="mr-t-10" style="margin-top: 20px;">
                            <button class="btn btn-primary backclass" style="float:left;">Back</button>
                            <!-- <button class="btn btn-primary next_"  style="float:right;">Next</button> -->
                        </div>
                    </div>
                </div>
                <!-- /form validation -->

            </div>
            <!-- /content area -->


            <div class="loading">
                <img src="assets/images/loader.gif" alt="">
            </div>

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>


<script>
$(document).ready(function () {
    $('.loading').show();
    var edit_flag = false;
    var base_tg_;
    var campaignId_; var campaignMarkets; var endWeekId_; var primaryTGTd_;
    var plan_id= sessionStorage.getItem('create_plan_id');
    var userid= sessionStorage.getItem('userid');
    var count = 0;
    barcData();
    $('.select2').hide();
    function barcData() {
        plan_id = sessionStorage.getItem('create_plan_id');
        sendObj = {};
        sendObj.planId = plan_id;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/Barc_Plan_Freeze',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            $('.loading').hide();
            $(".select2").addClass('hide');
            base_tg_ =  msg.BaseTGId;
            campaignId_ = msg.CampaignId;
            campaignMarkets = msg.CampaignMarketId;
            console.log(campaignMarkets);
            endWeekId_ = msg.EndWeek;
            primaryTGTd_ = msg.PrimaryTGTd;
            for (var i = 0; i < campaignMarkets.length; i++) {
                    $(".select_markets").append('<p class="multiclient form-control getClass" value='+campaignMarkets[i]+' readonly style="background-color:#d6d6d6;">'+campaignMarkets[i]+'</p>')


            }
            $(".primary_freeze").append('<p type="text" value='+primaryTGTd_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+primaryTGTd_+'</p>')

            $(".camp_id").append('<p type="text" value='+campaignId_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+campaignId_+'</p>')

            $(".base_freeze").append('<p type="text" value='+base_tg_+' class="form-control" readonly style="background-color:#d6d6d6;">'+base_tg_+'</p>')

            $('.endfreeze').append('<p type="text" value='+endWeekId_+' class="form-control" readonly style="background-color:#d6d6d6;">'+endWeekId_+'</p>')

        })
    }
    // $('.confirm_barc').prop('disabled', false);
    $('body').on('click', '.edit_barc', function(){

        edit_flag = true;
        sendObj = {};
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/BARC_Evalution_edit_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            $('.select2').show();
            var Base_Tg_dt = msg.Base_Tg_dt;
            var Campaign_Market_dt = msg.Campaign_Market_dt;
            var End_Week_dt = msg.End_Week_dt;
            var Primary_Tg_dt= msg.Primary_Tg_dt;

            for(key in Base_Tg_dt){
                console.log();
                $(".base_tg").append('<option value='+Base_Tg_dt[key]+' class="get_Base_Tg_dt-'+count+'" key='+key+'>'+Base_Tg_dt[key]+'</option>');
                count++
            }
            for(key in Campaign_Market_dt){
                $(".campaign_markets").append('<option value='+Campaign_Market_dt[key]+' class="get_Campaign_Market_dt-'+count+'" key='+key+'>'+Campaign_Market_dt[key]+'</option>');
                count++
            }

            for(key in Primary_Tg_dt){
                $(".Primary_Tg_dt").append('<option value='+Primary_Tg_dt[key]+' class="get_Primary_Tg_dt-'+count+'" key='+key+'>'+Primary_Tg_dt[key]+'</option>');
                count++
            }

            for(key in End_Week_dt){
                $(".End_Week_dt").append('<option value='+End_Week_dt[key]+' class="get_End_Week_dt-'+count+'" key='+key+'>'+End_Week_dt[key]+'</option>');
                count++
            }

        })



    })

    $('body').on('click', '.confirm_barc', function(){
        $(this).prop("disbaled", true)
        debugger
        $('.loading').show();
        obj = {}
        camp_markets = []
        selectedValues = $(".campaign_markets").select2('data');
        for (var i = 0; i < selectedValues.length; i++) {
            camp_markets.push(selectedValues[i].text);
        }
        var key_primary_tg = $(".Primary_Tg_dt").find("option:selected").attr('key');
        var key_base_tg = $(".base_tg").find("option:selected").attr('key');
        var key_end_week = $(".End_Week_dt").find("option:selected").attr('key');
        obj.edit = edit_flag;
        obj.PlanId = plan_id;
        obj.user_id = userid;
        obj.PrimaryTGTd = key_primary_tg;
        obj.BaseTGId = key_base_tg;
        obj.EndWeekId = key_end_week;
        obj.CampaignMarketId = $.unique(camp_markets);
        console.log(obj);
         swal("Modified successfully");
         $('.select2').css('background', '#ccc');
         $('.campaign_markets').css('background', '#ccc');
         $('.select2-selection--multiple').prop('readonly', true);

         $('.select2').css('background', '#ccc');

        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/BARC_confirm_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            $('.loading').hide();
            $('.confirm_barc').prop('disabled', true);
            $('.edit_barc').prop('disabled', true);
            swal("Modified successfully");
            console.log(msg);
            // e.preventDefault();
            // setTimeout(function(){
            //     barcData();
            //
            // },2000)
        })
    })
    $('body').on('click', '.backclass', function(){
        sessionStorage.setItem('backclicked', true);
        window.location.href="buyingbasket.php";
    })

})

</script>
</html>
