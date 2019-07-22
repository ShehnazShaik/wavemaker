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

.submit_ {
    color: #333;
    background: #15961bbf;
    border: 1px solid var(--border-color);
    padding: 11px 33px;
}
.remove{width: 20px;
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
    .row {
        margin-right: 0px;
        margin-left: 0px;}
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




        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row" style="height:100%">
                    <div class="card col-xl-12" style="height:100%">
                        <div class="common_class" style="height:100%">
                            <div style="margin-top:6px;float:right;" class="col-sm-2">
                                <input class="form-control" placeholder="Campaign ID" type="text"/>
                            </div>
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
                            <div class="radio_class">
                                <input type="radio" name="gender" value="Optimize CPRP vs Reach" class="cprp_main"> Optimize CPRP vs Reach
                                <input type="radio" name="gender" value="Budget Allocation" class="budget_main"> Budget Allocation<br>
                            </div>
                            <div class="cprp_div close_" >
                                <h6 class="font-weight-semibold">Weightage</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="font-weight-semibold">CPRP</h6>
                                        <input class="form-control touchspin-no-mousewheel input cprp_val" id="a" type="number" name="number"  min="1" max="99"  placeholder="Select the range till 100">
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="font-weight-semibold">Reach</h6>
                                        <input class="form-control touchspin-no-mousewheel input reach_val" id="b" type="number" name="number" min="0" max="100" placeholder="Select the range till 100">
                                    </div>
                                </div>

                                <h6 class="font-weight-semibold" style="margin-top:20px">Campaign Duration (in Days)</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control touchspin-no-mousewheel campaign_days" type="number" name="number" min="0" max="365" placeholder="Campaign Duration (in Days)">

                                    </div>
                                </div>
                                <!-- <button data-remodal-action="close" type="button" class="remodal-close" aria-label="Close"></button> -->
                                <div class="">

                                </div>
                                <div class="row main">
                                    <div class="mr-b-5 sub_div" style="width:100%">
                                        <div class="row keyword" style="width:100%">
                                            <div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
                                                <input type="text" class="form-control mods_inputs name name_Class 0" placeholder="Enter the keyword">
                                                <!-- <input type="number" name="number"  class="mods_inputs name_Class 0 form-control" required="" placeholder="Please enter a value less than or equal to 10"> -->
                                            </div>

                                            <div class="col-md-6 mr-b-10 pd-l-10 pd-r-10">
                                                <input type="text" class="form-control mods_inputs path path_Class 0" placeholder="Enter negative keyword">
                                                <!-- <input type="number" name="maximum_number" class="mods_inputs path_Class 0 form-control" required="" placeholder="Please enter a value less than or equal to 10"> -->

                                                <!-- <span><img src="assets/images/delete.svg" style="width:20px;" class="remove hide_"></span> -->
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="mr-t-10">
                                    <button class="btn btn-primary remodal-add add_more">Add more</button>
                                    <button class="submit_ btn btn-primary" data-toggle="modal" data-target="#myModal_">Create</button>
                                </div>
                            </div>


                        </div>


                        <!-- keywords -->



                        <!-- SubmitChannel -->

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

        $(".cprp_val").bind("mousewheel", function() {
            return false;
        });
        $(".reach_val").bind("mousewheel", function() {
            return false;
        });
        $('.cprp_div').hide();
        $('body').on('click','.cprp_main', function(){
            $('.cprp_div').show();
        })

        function nullCheck(value) {
            if (value != "" && value != null && value != undefined) {
                return true;
            }
            else {
                return false;
            }
        }
        var i; var c; var p; var s;
        $("body").on("click", ".add_more", function(){



            thiss = $(this)
            val = $(this).html();
            // console.log(val);
            pathClass = $(".path_Class");

            nameClass = $(".name_Class");

            var len = pathClass.length;


            tlt = 0;
            empty_check = 0;
            for (var i = 0; i < len; i++) {
                tlt += Number($(".path_Class")[i].value);

                if ($(".path_Class")[i].value == "" || $(".name_Class")[i].value == "") {
                    empty_check = 1;

                }



            }
            remaining = 100 - tlt;
            if (empty_check == 1) {
                alert("field should not be empty");
            }
            else {
                if (remaining >0) {

                    $(".main").append('<div class="mr-b-5 sub_div" style="width:100%"><div class="row keyword" style="width:100%"><div class="col-md-6 mr-b-10 pd-l-10 pd-r-10"><input type="text" class="form-control mods_inputs name name_Class ' + i + '"  id="txtNilai" placeholder="Enter the keyword"></div><div class="col-md-6 mr-b-10 pd-l-10 pd-r-10"><input type="text" class="form-control mods_inputs  path path_Class ' +i + '" id="b" type="number" name="number" value="'+remaining+'" min="0" max="'+remaining+'" placeholder="Select the range till 100"></div></div></div>')

                }


                else {
                    alert("sum exceeded so reduce the previous value")
                    $(".main").append('<div class="mr-b-5 sub_div" style="width:100%"><div class="row keyword" style="width:100%"><div class="col-md-6 mr-b-10 pd-l-10 pd-r-10"><input type="text" class="form-control mods_inputs name name_Class ' + i + '"  id="txtNilai" placeholder="Enter the keyword"></div><div class="col-md-6 mr-b-10 pd-l-10 pd-r-10"><input type="text" class="form-control mods_inputs  path path_Class ' +i + '" id="b" type="number" name="number" value="'+remaining+'" min="0" max="'+remaining+'" placeholder="Select the range till 100"></div></div></div>')


                }
            }





        });

        $("body").on("click", ".remove", function(){
            $(this).closest('.sub_div').remove();
            $('.hide_').hide();
        })


        var arr = [];
        var optn;
        var existing_keys ;
        var cprp_text;
        var budget_text;
        var div_weitage;

        $("body").on("click", ".submit_", function(){
            debugger;
            // console.log(keyword_check);

            cprp_text = $(this).closest('.common_class').find('.cprp_main').val();
            budget_text = $(this).closest('.common_class').find('.budget_main').val();
            div_weitage = $(this).closest('.common_class').find('.cprp_div');
            var cprp_weitage = div_weitage.find('.cprp_val').val();
            var reach_weitage = div_weitage.find('.reach_val').val();
            var campaign_days = div_weitage.find('.campaign_days').val();
            var err=0;
            var arr_check = [];
            children = $(".sub_div").children();
            console.log(children);
            obj = {}
            sendObj = {}
            sendObj2 = {}
            sendObj[cprp_weitage] = reach_weitage;
            sendObj2.cprp_text = cprp_text;
            // sendObj.weitage[reach_weitage] = cprp_weitage;
            sendObj2.campaign_days = campaign_days;
            var val_check =0 ;
            var unique_name_val;
            var oldArray;
            var val;
            val_check_this = 0;
            val_check_this_ = 0;
            empty = 0 ;
            if (children.length == 1) {
                unique_name_val = $(children[0]).find(".name_Class").val()
                if (nullCheck(unique_name_val)) {
                    unique_name_val = unique_name_val.trim();
                    unique_name_val = unique_name_val.toLowerCase();
                    // if (unique_name_val in keyword_check) {
                    err =1;
                    //   }
                    // else {

                    val = $(children[0]).find(".path_Class").val()
                    val = val.trim();
                    val = val.toLowerCase();
                    vl__ = val.split(',');
                    obj[unique_name_val] = vl__.filter(function(v){
                        return $.trim(v)!==''});
                        if (unique_name_val.length == 0 || !nullCheck(unique_name_val)) {
                            val_check_this = 1;
                        }
                        if ((!(/^[a-zA-Z ]*$/.test(unique_name_val))) || (!(/^[a-zA-Z, ]*$/.test(vl__)))) {
                            val_check_this_ = 2;
                        }
                        console.log(obj[unique_name_val]);
                        if (nullCheck(obj[unique_name_val])) {
                            unique_name_val
                        }
                        var set_value = new Set(obj[unique_name_val]);
                        obj[unique_name_val] = Array.from(set_value);
                        console.log(obj[unique_name_val]);
                        console.log(obj);
                        sendObj2.acd_dispersion = obj;
                        sendObj2.weitage = sendObj;
                        console.log(sendObj2);
                        var form = new FormData();
                        form.append("file", JSON.stringify(obj));
                        var settings11 = {
                            "async": true,
                            "crossDomain": true,
                            "url": 'http://192.168.0.125:6767/BARC_Evaluation',
                            "method": "POST",
                            "processData": false,
                            "contentType": false,
                            "mimeType": "multipart/form-data",
                            "data": form
                        };
                        $.ajax(settings11).done(function (msg) {
                            msg = JSON.parse(msg);
                            console.log(msg);
                        })
                        // }
                    }
                    else {
                        // alert("empty");
                        val_check_this = 1;
                    }
                }
                else {
                    for(i=0;i<children.length;i++){
                        child = children[i]
                        console.log(child)
                        unique_name_val = $(child).find(".name_Class").val()
                        if (nullCheck(unique_name_val)) {
                            unique_name_val = unique_name_val.trim();
                            unique_name_val = unique_name_val.toLowerCase();
                            // if (unique_name_val in keyword_check) {
                            //   err =1;
                            //   break;
                            // }
                            // else {
                            val =$(child).find(".path_Class").val()
                            val = val.trim();
                            val = val.toLowerCase();
                            vl__ = val.split(',');
                            console.log(vl__);
                            obj[unique_name_val] = vl__.filter(function(v){
                                return $.trim(v)!==''}
                            );
                            if (unique_name_val.length == 0 || !nullCheck(unique_name_val)) {
                                val_check_this = 1;
                            }
                            if (!(/^[a-zA-Z ]*$/.test(unique_name_val))) {
                                val_check_this_ = 2;
                            }
                            console.log(obj[unique_name_val]);
                            var set_value = new Set(obj[unique_name_val]);
                            obj[unique_name_val] = Array.from(set_value);
                            // console.log(obj[unique_name_val]);
                            console.log(obj);
                            // sendObj.weitage = sendObj2;
                            sendObj2.acd_dispersion = obj;
                            sendObj2.weitage = sendObj;
                            console.log(sendObj2);
                            var form = new FormData();
                            form.append("file", JSON.stringify(obj));
                            var settings11 = {
                                "async": true,
                                "crossDomain": true,
                                "url": 'http://192.168.0.125/BARC_Evaluation',
                                "method": "POST",
                                "processData": false,
                                "contentType": false,
                                "mimeType": "multipart/form-data",
                                "data": form
                            };
                            $.ajax(settings11).done(function (msg) {
                                msg = JSON.parse(msg);
                                console.log(msg);
                            })
                            // }
                        }
                    }

                    // console.log(obj);
                }
                if (val_check_this==1) {
                    alert('Keyword should not be empty')
                }
                // else if (val_check_this_==2) {
                //   alert('Please Remove Special Characters')
                // }
                // else {
                //   if (err==1) {
                //     alert(unique_name_val+' Keyword exist')
                //   }
                //   else {
                //     console.log("in form");
                //     var form = new FormData();
                //     form.append("file", JSON.stringify(obj));
                //     var settings11 = {
                //       "async": true,
                //       "crossDomain": true,
                //       "url": aws_url+"add_keywords",
                //       "method": "POST",
                //       "processData": false,
                //       "contentType": false,
                //       "mimeType": "multipart/form-data",
                //       "data": form
                //     };
                //     $.ajax(settings11).done(function (msg) {
                //       msg = JSON.parse(msg);
                //       console.log(msg);
                //       rw = '';
                //       for(j=0;j<msg.length; j++) {
                //         rw = '<div class="col-sm-3"><div key="'+j+'" class="header_select btn_cls" vl="'+msg[j]+'">'+msg[j]+'</div></div>'
                //         $(".keyword_display").append(rw);
                //       }
                //
                //       success_notify("( " + msg.length +" ) Keyword Added Successfully")
                //       setTimeout(function(){
                //         window.location.href="keywords.php"
                //       }, 1000);
                //
                //     }).fail(function () {
                //       error_notify("Something went wrong");
                //     });
                //   }
                //   }
            })











            $(".budget").hide();
            $("body").on("click", ".cprp_r", function(){
                $(".cprp").show();
                $(".budget").hide();
            })
            // $("body").on("click", ".budget_r", function(){
            // debugger
            // $(".budget").show();
            // $(".cprp").hide();
            // $("#cprp_upload").hide();
            // $(".complete_cprp").hide();
            // })
            $("#cprp_upload").hide();
            $(".complete_cprp").hide();
            $(".complete_budget").hide();
            $("#budget_upload").hide();
            // $("body").on("click", ".cprp_submit", function(){
            // // $(this).hide();
            // $("#cprp_upload").show();
            // $(".cprp").hide();
            // $(".complete_cprp").show();
            // $(".budget_r").attr('disabled', 'disabled');
            // $(".uniform-choice span").addClass("disable_border")
            // $(".cprp_r").attr('disabled', 'disabled');
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
