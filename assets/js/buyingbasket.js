
$( document ).ready(function() {
    $('.loading').show();
    $('.budget_div_').hide();
    $('.cprp_div').hide();
    $('.spillover').hide();
    $('.texttodisplayspill').hide();
    $('.next_').prop('disabled', true);
    $('.radio_class').hide();
    $('.changediv').hide();
    var planid = sessionStorage.getItem('create_plan_id');
    var userid = sessionStorage.getItem('userid');
    $('.spillovertexttodisplay').hide()
    $('.channelbeing').hide()
    getData();
    var newcampaign_id;
    var buyingbasket_filename;
    var path_selection;
    var campaign_days;
    var acd_dispersion;
    var weightage;
    var spilloversheet_filename;
    var budgetallocation_filename;
    var PlanProcessed;
    var isFilePrepCompleted;
    var version = 1;
    var replan = false;
    var backclicked = "false";
    var markascompleted;

    var i;
    $("#a").keyup(function(){
        var a = parseInt($('#a').val());
        var b = 100-a;
        var b = parseInt($('#b').val(b));
    })
    $("#a").mousewheel(function(){
        var a = parseInt($('#a').val());
        var b = 100-a;
        var b = parseInt($('#b').val(b));
    })
    $("#b").mousewheel(function(){
        var a = parseInt($('#b').val());
        var b = 100-a;
        var b = parseInt($('#a').val(b));
    })
    $("#b").keyup(function(){
        var a = parseInt($('#b').val());
        var b = 100-a;
        var b = parseInt($('#a').val(b));
    })
    var t = false
    $('.input').focus(function () {
        var $this = $(this)
        t = setInterval(
            function () {
                if (($this.val() < 0 || $this.val() > 100) && $this.val().length != 0) {
                    if ($this.val() < 0) {
                        $this.val(0)
                    }

                    if ($this.val() > 100) {
                        $this.val(100)
                    }
                }
            }, )
        })
        var t = false
        $('.campaign').focus(function () {
            var $this = $(this)
            t = setInterval(
                function () {
                    if (($this.val() < 0 || $this.val() > 100) && $this.val().length != 0) {
                        if ($this.val() < 0) {
                            $this.val(0)
                        }

                        if ($this.val() > 365) {
                            $this.val(365)
                        }
                    }
                }, )
            })


            function getData(){
                debugger
                sendObj = {}
                sendObj.planid = planid;
                console.log(sendObj);
                var form = new FormData();
                form.append("file", JSON.stringify(sendObj));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url": 'http://192.168.0.125:6767/buying_basket_freeze',
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };
                $.ajax(settings11).done(function (msg) {
                    debugger
                    msg =JSON.parse(msg)
                    console.log(msg);
                    $('.loading').hide();
                    if (msg.data == true) {
                        newcampaign_id = msg.CampaignId;
                        buyingbasket_filename = msg.BuyingBasketFilePath;
                        path_selection = msg.PathSelection;
                        campaign_days = msg.CampaignDuration;
                        acd_dispersion = msg.acd_dispersion;
                        weightage = msg.CPRPWeightage;
                        spilloversheet_filename= msg.SpillOverSheetFilePath;
                        budgetallocation_filename = msg.BudgetAllocationFilePath;
                        markascompleted = msg.IsMarkAsComplete;
                        version = msg.Version;
                        backclicked = sessionStorage.getItem('backclicked');
                        if (backclicked == null && markascompleted == "true") {
                            window.location.href="barc.php";
                        }
                        if (version > 1) {
                            replan = true;
                            $('.bb_files').show();
                            $('.bb_txt').show();
                            $('#upl-btn').show();

                        }
                        PlanProcessed = msg.planProcessed;
                        isFilePrepCompleted = msg.isFilePrepCompleted;

                        if (PlanProcessed==3){
                            // $('.texttodisplayspill').show();
                            $('.next_').prop('disabled', false)
                            if (isFilePrepCompleted=="true") {
                                $('.next_').prop('disabled', false)
                            }

                        }

                        $('cprp_div').show();
                        if(path_selection == 1) {
                            // $('.cprp_main').prop('disabled', true);
                            $('.changediv').html('<h6 class="font-weight-semibold textforchange">Upload spillover sheet</h6>')
                        }
                        else {
                            // $('.budget_main').prop('disabled', true);
                            $('.changediv').html('<h6 class="font-weight-semibold textforchange">Upload Budget File</h6>')
                        }
                        // if (isFilePrepCompleted == "false") {
                        //     debugger
                        //     $(".next_").prop('disabled', false);
                        //     $('.spillover').hide();
                        //     $('.changediv').show();
                        //     $('.texttodisplayspill').show();
                        //     // if (PlanProcessed == 3) {
                        //     //     $('.ss_files').hide();
                        //     //     $('#upl-btn1').hide();
                        //     //     $('.spillovertexttodisplay').show()
                        //     //     $('.spillovertexttodisplay').append('<h5>'+spilloversheet_filename+' is successfully uploaded</h5>')
                        //     //     $(".next_").prop('disabled', false);
                        //     // }
                        // }
                        // else {
                        //     $('.changediv').hide();
                        //     $('.spillover').show();
                        //     // $('.texttodisplayspill').show();
                        //     $('.spillovertexttodisplay').show();
                        //     $('.spillovertexttodisplay').append('<h5>'+spilloversheet_filename+'</h5>')
                        //     if (markascompleted=="true") {
                        //         $(".next_").prop('disabled', false);
                        //     }
                        //     else {
                        //         $(".next_").prop('disabled', true);
                        //     }
                        // }
                        if (PlanProcessed == 1) {
                            $(".next_").prop('disabled', true);
                            unfreezebuyinginfo();
                            // $('.channelbeing').show();
                        }
                        else if (PlanProcessed == 2) {
                            debugger
                            $(".next_").prop('disabled', true);
                            freezebuyinginfo();
                            $('.add_more').prop('disabled', true);
                            $('.submit_').prop('disabled', true);
                            $('.cprp_main').prop('disabled', true);
                            $('.budget_main').prop('disabled', true);
                            // $('.spillover').show();
                            if (isFilePrepCompleted == "false") {
                                debugger
                                $(".next_").prop('disabled', false);
                                $('.spillover').hide();
                                $('.changediv').show();
                                // $('.texttodisplayspill').show();
                                // $('.channelbeing').show();
                                $(".next_").prop('disabled', true);
                                // if (PlanProcessed == 3) {
                                //     $('.ss_files').hide();
                                //     $('#upl-btn1').hide();
                                //     $('.spillovertexttodisplay').show()
                                //     $('.spillovertexttodisplay').append('<h5>'+spilloversheet_filename+' is successfully uploaded</h5>')
                                //     $(".next_").prop('disabled', false);
                                // }
                            }
                            else {
                                // $('.changediv').hide();
                                // $('.spillover').show();
                                // $('.texttodisplayspill').show();
                                // $('.spillovertexttodisplay').hide();
                                if (spilloversheet_filename == '' || spilloversheet_filename == null ) {
                                    $('.spillover').show();
                                    $('.changediv').hide();
                                }
                                else {
                                    $('.spillll').hide();
                                    $('.spillovertexttodisplay').show();
                                    $('.spillovertexttodisplay').append('<h5>'+spilloversheet_filename+'</h5>')
                                    $(".next_").prop('disabled', true);
                                }
                                if (markascompleted=="true") {
                                    $(".next_").prop('disabled', false);
                                }
                                else {
                                    $(".next_").prop('disabled', true);
                                }
                            }

                        }
                        else {
                            // $(".next_").prop('disabled', true);
                            freezebuyinginfo();
                            $('.spillover').show();
                            $('.changediv').show();
                            $('.ss_files').hide();
                            $('.submit_btn1').hide();
                            $('.spillovertexttodisplay').show();
                            $('.spillll').hide();
                            $('.spillovertexttodisplay').append('<h5>'+spilloversheet_filename+'</h5>')

                            // window.location.href="barc.php";
                        }
                    }
                    else {
                        console.log(msg.BuyingBasketFilePath);
                        if (msg.BuyingBasketFilePath=='' || msg.BuyingBasketFilePath== null) {
                            // $('.buying_basket').show();
                            $('.bb_files').show();
                            $('.bb_txt').show();
                            $('#upl-btn').show();
                            $('.next_').prop('disabled', true)
                            $('.cprp_div').hide();
                            $('.radio_class').hide();
                        }
                        else {
                            $('.bb_files').hide();
                            $('#upl-btn').hide();
                            $('.texttodisplay').show()

                            $('.texttodisplay').append('<h5>'+msg.BuyingBasketFilePath+' is successfully uploaded</h5>')
                            // $('.cprp_div').show();
                            $('.radio_class').show();
                            $('.next_').prop('disabled', true)
                        }
                        newcampaign_id = msg.CampaignId;
                        $(".camp_id_").append('<input class="form-control" placeholder="Campaign ID" type="text" value="'+newcampaign_id+'" readonly style="background:#ccc"/>')
                        // $('.radio_class').show();
                        // $('.cprp_div').show();
                    }
                })
            }

            function freezebuyinginfo() {
                $('.channelbeing').show();
                $('.radio_class').show()
                $('.cprp_div').show()
                $(".camp_id_").append('<input class="form-control" placeholder="Campaign ID" type="text" value="'+newcampaign_id+'" readonly style="background:#ccc"/>')
                if (buyingbasket_filename=='' || buyingbasket_filename== "NULL") {
                    // $('.buying_basket').show();
                    $('.bb_files').show();
                    $('.bb_txt').show();
                    $('#upl-btn').show();

                }
                else {
                    $('.bb_files').hide();
                    // $('.bb_txt').hide();
                    $('#upl-btn').hide();
                    $('.texttodisplay').show()
                    $('.texttodisplay').append('<h5 style="color:#000">'+buyingbasket_filename+' is successfully uploaded</h5>')
                }


                if(path_selection==2){
                    $('.add_more_new').prop('disabled', true);
                    $('.submit_new').prop('disabled', true);
                    $('.radio_class').show();
                    $('.cprp_div').hide();
                    $('.budget_div_').show()
                    $(".cprp_main").prop("checked", false);
                    $(".budget_main").prop("checked", true);
                    $('input[type="number"]').prop('readonly', true);
                    $('input[type="text"]').prop('readonly', true);
                    $('input[type="number"]').css('background', '#ccc');
                    $('input[type="text"]').css('background', '#ccc');
                    $('.campaign_days_new').val(campaign_days);
                    console.log(acd_dispersion);
                    acd_data = []
                    acd_value = []
                    $.each(acd_dispersion, function(key, value){
                        console.log(key);
                        acd_data.push(key)
                        acd_value.push(value)
                    })
                    $('.name_Class_new').val(acd_data.join(","))
                    $('.path_Class_new').val(acd_value.join(","))


                }
                else if(path_selection == 1){

                    $(".cprp_main").prop("checked", true);
                    $(".budget_main").prop("checked", false);
                    $('.campaign_days').val(campaign_days);
                    $('input[type="number"]').prop('readonly', true);
                    $('input[type="text"]').prop('readonly', true);
                    $('input[type="number"]').css('background', '#ccc');
                    $('input[type="text"]').css('background', '#ccc');
                    for(key in weightage){
                        $(".cprp_val").val(key);
                        $(".reach_val").val(weightage[key])
                    }

                    console.log(acd_dispersion);
                    acd_data = []
                    acd_value = []
                    $.each(acd_dispersion, function(key, value){
                        console.log(key);
                        acd_data.push(key)
                        acd_value.push(value)
                    })
                    $('.name_Class').val(acd_data.join(","))
                    $('.path_Class').val(acd_value.join(","))
                }
                else {
                    $(".cprp_main").prop("checked", true);
                    $(".budget_main").prop("checked", false);
                }
                $('.add_more').prop('disabled', true);
                $('.submit_').prop('disabled', true);

                $.each(weightage ,function(key,value){
                    $('.cprp_val').val(key)
                    $('.reach_val').val(weightage[key])
                })
            }






            function unfreezebuyinginfo() {

                // $('.budget_div_').hide();
                $('.radio_class').show()
                $('.cprp_div').show()
                // $('.budget_div_').show()
                $(".camp_id_").append('<input class="form-control" placeholder="Campaign ID" type="text" value="'+newcampaign_id+'" readonly style="background:#ccc"/>')
                $('.texttodisplayspill').hide();
                if (buyingbasket_filename=='' || buyingbasket_filename== "NULL") {
                    // $('.buying_basket').show();
                    $('.bb_files').show();
                    $('.bb_txt').show();
                    $('#upl-btn').show();
                }
                else {
                    if (replan==false) {
                        $('.bb_files').hide();
                        // $('.bb_txt').hide();
                        $('#upl-btn').hide();
                        $('.texttodisplay').show()
                        $('.texttodisplay').append('<h5 style="color:#000">'+buyingbasket_filename+' is successfully uploaded</h5>')
                    }
                }


                if(path_selection==2){
                    $('.radio_class').show();
                    $('.cprp_div').show();
                    $('.budget_div_').show()
                    // $(".cprp_main").prop("checked", false);
                    $(".budget_main").prop("checked", true);
                    console.log(campaign_days);
                    $('.campaign_days_new').val(campaign_days);
                    obj_keys = Object.keys(acd_dispersion);
                    $(".main_new .sub_div_new").remove()
                    for (var i = 0; i < obj_keys.length; i++) {
                        ok = '<div class="sub_div_new" style="width:100%">'
                        ok += '<div class="row keyword_new">'
                        ok += '<div class="col-md-6">'
                        ok += '<input type="number" class="form-control mods_inputs name_Class_new ' + i + '" value="'+obj_keys[i]+'" placeholder="Enter keyword">'
                        ok += '</div>'
                        ok += '<div class="col-lg-6">'
                        ok += '<input type="number" class="form-control mods_inputs path_Class path_Class_new ' + i + '" value="'+acd_dispersion[obj_keys[i]]+'" placeholder="Enter negative keyword">'
                        ok += '<span>'
                        ok += '<img src="assets/images/delete.svg" style="width:20px;" class="remove_new">'
                        ok += '</span>'
                        ok += '</div>'
                        ok += '</div>'
                        ok += '</div>'
                        $(".main").append(ok)
                    }
                    $('.submit_new').prop('disabled', false);
                    $('.add_more_new').prop('disabled', false);
                }

                else if(path_selection == 1){
                    $(".cprp_main").prop("checked", true);
                    // $(".budget_main").prop("checked", false);
                    $('.campaign_days').val(campaign_days);
                    // $('input[type="number"]').prop('readonly', true);
                    // $('input[type="text"]').prop('readonly', true);
                    // $('input[type="number"]').css('background', '#ccc');
                    // $('input[type="text"]').css('background', '#ccc');
                    for(key in weightage){
                        $(".cprp_val").val(key);
                        $(".reach_val").val(weightage[key])
                    }
                    // console.log(acd_dispersion);
                    //
                    // console.log(Object.keys(acd_dispersion).length);
                    // var ad_len = Object.keys(acd_dispersion).length;
                    // acd_data = []
                    // acd_value = []
                    // var acd_key;
                    // var disp_value;
                    // // $.each(acd_dispersion, function(key, value){
                    // //     debugger
                    // //     console.log(key);
                    // //
                    // //     acd_key+= key;
                    // //     disp_value+= value;
                    // //     acd_data.push(key)
                    // //     acd_value.push(value)
                    // // })
                    //
                    // for (var i = 0; i < ad_len.length; i++) {
                    //     console.log(acd_dispersion[ad_len(i)]);
                    //     $(".main").append('<div class="sub_div" style="width:100%"><div class="row keyword"><div class="col-md-6"><input type="number" class="form-control mods_inputs name_Class ' + i + '" value="'+acd+'" placeholder="Enter keyword"></div><div class="col-lg-6"><input type="number" class="form-control mods_inputs path_Class path_Class ' + i + '" value="'+disp_value+'" placeholder="Enter negative keyword"><span><img src="assets/images/delete.svg" style="width:20px;" class="remove"></span></div></div></div>')
                    // }

                    obj_keys = Object.keys(acd_dispersion);
                    $(".main .sub_div").remove()
                    for (var i = 0; i < obj_keys.length; i++) {
                        ok = '<div class="sub_div" style="width:100%">'
                        ok += '<div class="row keyword">'
                        ok += '<div class="col-md-6">'
                        ok += '<input type="number" class="form-control mods_inputs name_Class ' + i + '" value="'+obj_keys[i]+'" placeholder="Enter keyword">'
                        ok += '</div>'
                        ok += '<div class="col-lg-6">'
                        ok += '<input type="number" class="form-control mods_inputs path_Class path_Class ' + i + '" value="'+acd_dispersion[obj_keys[i]]+'" placeholder="Enter negative keyword">'
                        ok += '<span>'
                        ok += '<img src="assets/images/delete.svg" style="width:20px;" class="remove">'
                        ok += '</span>'
                        ok += '</div>'
                        ok += '</div>'
                        ok += '</div>'
                        $(".main").append(ok)
                    }



                    // $('.name_Class').val(acd_data.join(","))
                    // $('.path_Class').val(acd_value.join(","))

                    $('.submit_').prop('disabled', false);
                    $('.add_more').prop('disabled', false);

                }
                else {
                    $(".cprp_main").prop("checked", true);
                    $(".budget_main").prop("checked", false);
                }
                // $('.add_more').prop('disabled', true);
                // $('.submit_').prop('disabled', true);

                $.each(weightage ,function(key,value){
                    $('.cprp_val').val(key)
                    $('.reach_val').val(weightage[key])
                })
            }


            $('body').on('click', '.cprp_main', function(){
                $('.cprp_div').show();
                $('.budget_div_').hide();
            })


            $('body').on('click', '.budget_main', function(){
                $('.cprp_div').hide();
                $('.budget_div_').show();
            })

            // $('.cprp_div').show();
            $('.budget_div').hide();
            var msg;
            //
            // $('input[type=text]').bind("mousewheel", function() {
            // 	return false;
            // });
            $('input[type=number]').bind("mousewheel", function() {
                return false;
            });

            // $('body').on('click','.cprp_main', function(){
            // 	$('.cprp_div').show();
            // 	$('.budget_div').hide();
            // })
            $('body').on('click','.budget_main', function(){
                // $('.cprp_div').hide();
                // $('.budget_div').show();
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

                debugger
                var x=0;

                thiss = $(this)
                val = $(this).html();
                // i = $(".sub_div").length;
                children = $(".sub_div").children();

                var name_cls = $(children[0]).find(".name_Class").val()
                // var name_cls = $(".name_Class"+(i-1)).val();
                // if (name_cls=="" && /^[a-zA-Z-0-9-, ]*$/.test(name_cls)) {
                for (var i = 0; i < children.length; i++) {
                    var path_cls =  $(children[0]).find('.path_Class').val();
                    x = 0+parseInt(path_cls);
                }
                if (x>100) {
                    alert("error")
                }
                if (name_cls=="" && /^[a-zA-Z-, ]*$/.test(name_cls)) {
                    // $.confirm({
                    //   title: 'Alert',
                    //   content: 'Keyword should not be empty',
                    //   animation: 'scale',
                    //   closeAnimation: 'scale',
                    //   opacity: 0.5,
                    //   buttons: {
                    //     okay: {
                    //       text: 'Okay',
                    //       btnClass: 'btn-primary'
                    //     }
                    //   }
                    // });
                    swal("Acd and Dispersion should not be empty");
                }


                else {

                    console.log(i);
                    // for (var i = 0; i < cnt.length; i++) {
                    $(".main").append('<div class="sub_div" style="width:100%"><div class="row keyword"><div class="col-md-6"><input type="number" class="form-control mods_inputs name_Class ' + i + '" placeholder="Enter keyword"></div><div class="col-lg-6"><input type="number" class="form-control mods_inputs path_Class path_Class ' + i + '" placeholder="Enter negative keyword"><span><img src="assets/images/delete.svg" style="width:20px;" class="remove"></span></div></div></div>')
                    $(".hide_").show();
                    // }
                }
            })



            $("body").on("click", ".add_more_new", function(){

                debugger
                var x=0;

                thiss = $(this)
                val = $(this).html();
                // i = $(".sub_div").length;
                children = $(".sub_div_new").children();

                var name_cls = $(children[0]).find(".name_Class_new").val()
                // var name_cls = $(".name_Class"+(i-1)).val();
                // if (name_cls=="" && /^[a-zA-Z-0-9-, ]*$/.test(name_cls)) {
                for (var i = 0; i < children.length; i++) {
                    var path_cls =  $(children[0]).find('.path_Class_new').val();
                    x = 0+parseInt(path_cls);
                }
                if (x>100) {
                    alert("error")
                }
                if (name_cls=="" && /^[a-zA-Z-, ]*$/.test(name_cls)) {
                    // $.confirm({
                    //   title: 'Alert',
                    //   content: 'Keyword should not be empty',
                    //   animation: 'scale',
                    //   closeAnimation: 'scale',
                    //   opacity: 0.5,
                    //   buttons: {
                    //     okay: {
                    //       text: 'Okay',
                    //       btnClass: 'btn-primary'
                    //     }
                    //   }
                    // });
                    swal("Acd and Dispersion should not be empty");
                }


                else {

                    console.log(i);
                    // for (var i = 0; i < cnt.length; i++) {
                    $(".main_new").append('<div class="sub_div_new" style="width:100%"><div class="row keyword_new"><div class="col-md-6"><input type="number" class="form-control mods_inputs name_Class_new ' + i + '" placeholder="Enter keyword"></div><div class="col-lg-6"><input type="number" class="form-control mods_inputs path_Class_new path_Class_new ' + i + '" placeholder="Enter negative keyword"><span><img src="assets/images/delete.svg" style="width:20px;" class="remove_new"></span></div></div></div>')
                    $(".hide_").show();
                    // }
                }
            })



            $("body").on("click", ".remove_new", function(){
                $(this).closest('.sub_div_new').remove();
                $('.hide_').hide();
            })

            $("body").on("click", ".remove", function(){
                $(this).closest('.sub_div').remove();
                $('.hide_').hide();
            })
            var arr = [];
            var optn;
            var existing_keys ;
            var path_selection ='';
            var budget_text;
            var div_weitage;

            // 	$("body").on("click", ".cprp_main", function(){
            // 	if ($(this).is(":checked")) {
            // 		$(this).addClass('selected');
            // 		$('.budget_main').reoveClass('selected');
            // 	}
            // })
            // $('body').on('click', '.budget_main' function(){
            // 		if ($(this).is(":checked")) {
            // 	$(this).addClass('selected');
            // 	$('.cprp_main').reoveClass('selected');
            // }
            // })
            // if($('.cprp_main').is(':checked')){
            //
            //     $('.changediv').html('<h6 class="font-weight-semibold textforchange">Upload spillover sheet</h6>')
            // }
            // else {
            //
            //     $('.changediv').html('<h6 class="font-weight-semibold textforchange">Upload Budget File</h6>')
            // }
            // $('body').on('click', '.cprp_main', function(){
            // })
            // $('body').on('click', '.budget_main', function(){
            //     debugger
            // })




            $("body").on("click", ".submit_new", function(){
                debugger;

                // console.log(keyword_check);
                // path_selection=$(this).closest('.common_class').find('.common_main').attr('key');

                // $('.next_').prop('disabled', true);
                // $('.ss_files').show();

                // $('.channelbeing').append('<h5>Spillover Sheet being created. Once complete you will receive it in your inbox.</h5>')
                path_selection_ = $(this).closest('.common_class').find('.budget_main').attr('key');
                // path_selection = $(this).closest('.budget_main').find('.cprp_main').attr('key');
                // div_weitage = $(this).closest('.common_class').find('.cprp_div');
                // var cprp_weitage = div_weitage.find('.cprp_val').val();
                // var reach_weitage = div_weitage.find('.reach_val').val();
                var campaign_days = $('.campaign_days_new').val();
                var userid = sessionStorage.getItem('userid');
                var plan_id = sessionStorage.getItem('create_plan_id');
                var err=0;
                var arr_check = [];
                children = $(".sub_div_new").children();
                console.log(children);
                obj = {}
                sendObj = {}
                sendObj2 = {}
                // sendObj[cprp_weitage] = reach_weitage;
                sendObj2.path_selection = path_selection_;
                sendObj2.user_id = userid;
                sendObj2.plan_id = plan_id;
                // sendObj.weitage[reach_weitage] = cprp_weitage;
                sendObj2.campaign_days = campaign_days;
                var val_check =0 ;
                var unique_name_val;
                var oldArray;
                var val;
                val_check_this = 0;
                val_check_this_ = 0;
                empty = 0 ;

                subDivs = $(".sub_div_new");

                obj_subdivs = {}
                for (var sd = 0; sd < subDivs.length; sd++) {

                    kw = subDivs[sd].children[0].children[0].children[0].value
                    vl = subDivs[sd].children[0].children[1].children[0].value


                    obj_subdivs[kw] = vl;
                    // obj_subdivs[kw+'-'+sd] = vl;
                }
                console.log(obj_subdivs);
                array_val = []
                $.each(obj_subdivs, function(key, value){
                    array_val.push(value);
                })

                console.log(array_val);
                sum = 0;
                $.each(array_val,function(){
                    sum+=parseFloat(this) || 0;
                });
                console.log(sum);

                if (campaign_days == '') {
                    swal("Fields should not be empty")
                }
                else if (sum!==100 || sum>100) {
                    swal("dispersion should be 100")
                }
                else {
                    $('.loading').show();
                    $('.add_more_new').prop('disabled', true);
                    $(this).prop('disabled', true);
                    $('.remove_new').hide();
                    $('.spillover').hide();
                    $('.channelbeing').show();
                    $('#upl-btn1').hide();
                    sendObj2.acd_dispersion = obj_subdivs;
                    // sendObj2.weightage = sendObj;
                    console.log(sendObj2);
                    console.log(JSON.stringify(sendObj2));
                    $('input[type=text]').css("background", "#ccc");
                    $('input[type=number]').css("background", "#ccc");
                    $('input[type=text]').prop('readonly', true);
                    $('input[type=number]').prop('readonly', true);
                    swal("Created successfully"	);
                    $('.add_more').prop('disbale', true);
                    $('.submit_').prop('disbale', true);
                    var form = new FormData();
                    form.append("file", JSON.stringify(sendObj2));
                    var settings11 = {
                        "async": true,
                        "crossDomain": true,
                        "url": 'http://192.168.0.125:6767/plan_selection_button',
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
                        sessionStorage.getItem('create_plan_id', 0);
                        // $('.spillover').show();

                    })
                }

            })



            $("body").on("click", ".submit_", function(){

                debugger;

                // console.log(keyword_check);
                // path_selection=$(this).closest('.common_class').find('.common_main').attr('key');

                // $('.next_').prop('disabled', true);
                // $('.ss_files').show();


                // $('.channelbeing').append('<h5>Spillover Sheet being created. Once complete you will receive it in your inbox.</h5>')
                // path_selection = $(this).closest('.common_class').find('.budget_main').attr('key');
                path_selection = $(this).closest('.common_class').find('.cprp_main').attr('key');
                div_weitage = $(this).closest('.common_class').find('.cprp_div');
                var cprp_weitage = div_weitage.find('.cprp_val').val();
                var reach_weitage = div_weitage.find('.reach_val').val();
                var campaign_days = div_weitage.find('.campaign_days').val();
                var userid = sessionStorage.getItem('userid');
                var plan_id = sessionStorage.getItem('create_plan_id');
                var err=0;
                var arr_check = [];
                children = $(".sub_div").children();
                console.log(children);
                obj = {}
                sendObj = {}
                sendObj2 = {}
                sendObj[cprp_weitage] = reach_weitage;
                sendObj2.path_selection = path_selection;
                sendObj2.user_id = userid;
                sendObj2.plan_id = plan_id;
                // sendObj.weitage[reach_weitage] = cprp_weitage;
                sendObj2.campaign_days = campaign_days;
                var val_check =0 ;
                var unique_name_val;
                var oldArray;
                var val;
                val_check_this = 0;
                val_check_this_ = 0;
                empty = 0 ;

                subDivs = $(".sub_div");

                obj_subdivs = {}
                for (var sd = 0; sd < subDivs.length; sd++) {

                    kw = subDivs[sd].children[0].children[0].children[0].value
                    vl = subDivs[sd].children[0].children[1].children[0].value


                    obj_subdivs[kw] = vl;


                }
                array_val = []
                console.log(obj_subdivs);
                $.each(obj_subdivs, function(key, value){
                    array_val.push(value);
                })

                console.log(array_val);
                sum = 0;
                $.each(array_val,function(){
                    sum+=parseFloat(this) || 0;
                });
                console.log(sum);

                if (campaign_days == '' || cprp_weitage == '' || reach_weitage == '') {
                    swal("Fields should not be empty")
                }
                else if (sum!==100 || sum>100) {
                    swal("dispersion should be 100")
                }
                else {
                    $('.loading').show();
                    $('.add_more').prop('disabled', true);
                    $(this).prop('disabled', true);
                    $('.remove').hide();
                    $('.spillover').hide();
                    $('.channelbeing').show();
                    $('#upl-btn1').hide();
                    sendObj2.acd_dispersion = obj_subdivs;
                    sendObj2.weightage = sendObj;
                    console.log(sendObj2);

                    console.log(JSON.stringify(sendObj2));
                    $('input[type=text]').css("background", "#ccc");
                    $('input[type=number]').css("background", "#ccc");
                    $('input[type=text]').prop('readonly', true);
                    $('input[type=number]').prop('readonly', true);
                    swal("Created successfully"	);
                    $('.add_more').prop('disbale', true);
                    $('.submit_').prop('disbale', true);
                    var form = new FormData();
                    form.append("file", JSON.stringify(sendObj2));
                    var settings11 = {
                        "async": true,
                        "crossDomain": true,
                        "url": 'http://192.168.0.125:6767/plan_selection_button',
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
                        sessionStorage.getItem('create_plan_id', 0);
                        $('.channelbeing').show();
                        // $('.spillover').show();

                    })
                }

            })

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

            $("body").on("click", ".backclass", function(){
                window.location.href = "planner_createnewplan.php"
            })


            $("body").on("click", ".next_", function(){
                window.location.href = "barc.php"
            })

            //budget upload file //

            var plan_id = sessionStorage.getItem('create_plan_id');
            var user_id = sessionStorage.getItem('userid');
            $('.camp_id').append('<input class="form-control" value="'+plan_id+'" type="text"/ readonly>')
            $('.radio_class').hide();
            var file_name_new;
            var main_output_new;
            fileobj_new = {};
            (function ($) {
                $('#load-file').on('change', function () {
                    debugger
                    main_output = ''
                    var file = $('#load-file')[0].files[0];
                    file_name_new = file.name;
                    file_name_new = "BuyingBasket_"+newcampaign_id+"_"+version+".xls"
                    var fileReader = new FileReader();
                    fileReader.onloadend = function (e) {
                        blob___ = e.target.result;

                        fileobj_new.filename = file_name_new;

                        fileobj_new.blob = blob___;
                        fileobj_new.plan_id = plan_id;
                        fileobj_new.user_id = user_id;
                        console.log(fileobj_new);
                        // file_name_new = filename;
                    };

                    fileReader.readAsDataURL(file);
                });
            })(jQuery);


            var counting = 0;
            function exceltoblob(file) {
                pagesArr = [];
                window.PDFJS = window.pdfjsLib;
                PDFJS.disableWorker = true;
                PDFJS.getDocument(file).then(function getPdfHelloWorld(pdf) {
                    const go = async function(){
                        let h = 0;
                        for(var pageN = 1; pageN <= pdf.numPages; pageN++){
                            const page = await pdf.getPage(pageN);
                            var scale = 2;
                            var viewport = page.getViewport(scale);
                            //
                            // Prepare canvas using PDF page dimensions
                            //
                            var canvas = document.createElement('canvas');
                            //document.body.appendChild(canvas);
                            var context = canvas.getContext('2d');
                            canvas.height += viewport.height;
                            canvas.width = viewport.width;
                            //
                            // Render PDF page into canvas context
                            //
                            var task = page.render({ canvasContext: context, viewport: viewport })
                            await task.promise;
                            pages = canvas.toDataURL('image/jpeg');
                            pagesArr.push(pages)
                            if (pageN == pdf.numPages) {
                                displayImagesMain(pagesArr)
                            }
                        }
                    };
                    go();
                }, function(error){
                    //console.log(error);
                });
            }



            $("body").on("click", "#upl-btn", function(){
                debugger
                $('.texttodisplay').show();
                $(this).hide();
                $(".loading").show();
                $('.texttodisplay').append('<h5 style="color:#000">'+file_name_new+' is successfully uploaded</h5>')
                // $('.bb_txt').show();
                $('.file-input').hide();
                $('.red_color').hide();
                $('.texttodisplay').show();
                fileobj_new.category = "buyingbasket";
                console.log(file_name_new);

                var form = new FormData();
                form.append("file", JSON.stringify(fileobj_new));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url":"http://192.168.0.125:6767/Buying_basket",
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };
                $.ajax(settings11).done(function (msg) {
                    console.log(msg);
                    $('.loading').hide();
                    $('.radio_class').show();
                    // $('.cprp_div').show();
                });
            })


            //spillover upload file//

            var file_name_;
            var main_output;
            fileobj = {};
            (function ($) {
                $('#load-file1').on('change', function () {
                    debugger
                    main_output = ''
                    var file = $('#load-file1')[0].files[0];
                    filename = file.name;
                    filename ="GenreLevelBudgetAllocation_"+newcampaign_id+"_"+version+".xls"
                    var fileReader = new FileReader();
                    fileReader.onloadend = function (e) {
                        blob___ = e.target.result;

                        fileobj.filename = filename;
                        fileobj.blob = blob___;
                        fileobj.plan_id = planid;
                        fileobj.user_id = userid;
                        fileobj.category = "spilloversheet";
                        console.log(fileobj);
                        file_name_ = filename;
                    };

                    fileReader.readAsDataURL(file);
                });
            })(jQuery);


            var counting = 0;
            function exceltoblob(file) {
                pagesArr = [];
                window.PDFJS = window.pdfjsLib;
                PDFJS.disableWorker = true;
                PDFJS.getDocument(file).then(function getPdfHelloWorld(pdf) {
                    const go = async function(){
                        let h = 0;
                        for(var pageN = 1; pageN <= pdf.numPages; pageN++){
                            const page = await pdf.getPage(pageN);
                            var scale = 2;
                            var viewport = page.getViewport(scale);
                            //
                            // Prepare canvas using PDF page dimensions
                            //
                            var canvas = document.createElement('canvas');
                            //document.body.appendChild(canvas);
                            var context = canvas.getContext('2d');
                            canvas.height += viewport.height;
                            canvas.width = viewport.width;
                            //
                            // Render PDF page into canvas context
                            //
                            var task = page.render({ canvasContext: context, viewport: viewport })
                            await task.promise;
                            pages = canvas.toDataURL('image/jpeg');
                            pagesArr.push(pages)
                            if (pageN == pdf.numPages) {
                                displayImagesMain(pagesArr)
                            }
                        }
                    };
                    go();
                }, function(error){
                    //console.log(error);
                });
            }

            $("body").on("click", "#upl-btn1", function(){
                debugger
                $('.texttodisplay').show();
                $('.texttodisplayspill').show();
                $(this).hide();
                $(".loading").show();
                $('.texttodisplayspill').append('<h5 style="color:#000">'+file_name_+' is successfully uploaded</h5>')
                $('.bb_txt').hide();
                $('.file-input').hide();
                $('.red_color').hide();
                // $('.texttodisplayspill').show();
                console.log(file_name_);
                var form = new FormData();
                form.append("file", JSON.stringify(fileobj));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url":"http://192.168.0.125:6767/Buying_basket",
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };
                $.ajax(settings11).done(function (msg) {
                    console.log(msg);
                    $(".loading").hide();
                    $('.next_').prop('disabled', false)
                    version = 0;
                    // for(key in msg){
                    //     $('.modal-body').append('<h5>')
                    // }
                });
            })



            $("body").on("change", ".name_Class", function () {
                tlt = 0
                if ($(this).hasClass('0')) {
                    tlt = 100;
                }
                else {
                    vll = $(".path_Class");
                    x = 0;
                    for (var pc = 0; pc < vll.length; pc++) {
                        x += Number(vll[pc].value);
                    }
                    y = 100-x;
                    if (y < 0) {
                        tlt = 0;
                    }
                    else {
                        tlt = y
                    }
                }
                $(this).closest('.keyword').find('.path_Class').val(tlt);
            })

            $("body").on("change", ".name_Class_new", function () {
                tlt = 0
                if ($(this).hasClass('0')) {
                    tlt = 100;
                }
                else {
                    vll = $(".path_Class_new");
                    x = 0;
                    for (var pc = 0; pc < vll.length; pc++) {
                        x += Number(vll[pc].value);
                    }
                    y = 100-x;
                    if (y < 0) {
                        tlt = 0;
                    }
                    else {
                        tlt = y
                    }
                }
                $(this).closest('.keyword_new').find('.path_Class_new').val(tlt);
            })
            $('body').on('click', '.backclass', function(){
                sessionStorage.setItem('backclicked', true);
            })


        })
