$(document).ready(function () {
    debugger
    $('.loading').show();
     $('select').prop('disabled', false);
     $('.edit_barc').prop('disabled', true);
     $('.confirm_barc').prop('disabled', true);
     $('.submit_barc').prop('disabled', true);

     $('.acce_div').hide()

     var plan_id = sessionStorage.getItem('create_plan_id');
     var user_id = sessionStorage.getItem('userid');
     $('.texttodisplay').hide();
     // var campaign_id = sessionStorage.getItem('campaign_id');
     onLoad();
     var campaign_id;
     var pathSelection;
     var version;
     var campaignName;
         function onLoad(){
             sendObj ={}
             sendObj.planid = plan_id;
             console.log(sendObj);
             var form = new FormData();
             form.append("file", JSON.stringify(sendObj));
             var settings11 = {
                 "async": true,
                 "crossDomain": true,
                 "url":"http://192.168.0.101:6767/version_for_plan",
                 "method": "POST",
                 "processData": false,
                 "contentType": false,
                 "mimeType": "multipart/form-data",
                 "data": form
             };
             $.ajax(settings11).done(function (msg) {
                 msg = JSON.parse(msg);
                 console.log(msg);
                 campaign_id = msg.CampaignId;
                 version = msg.Version;
                 campaignName = msg.CampaignName;
             })
         }
         var file_name_;
         var main_output;
         fileobj = {};
         (function ($) {
             $('#load-file').on('change', function () {
                 debugger
                 main_output = ''
                 var file = $('#load-file')[0].files[0];
                 file_name_ = "Accelerator_output"+campaign_id+"_"+version+"_.xlsx";
                 var fileReader = new FileReader();
                 fileReader.onloadend = function (e) {
                     blob___ = e.target.result;

                     fileobj.filename = "Accelerator_output_"+campaign_id+"_"+version+"_.xlsx";
                     fileobj.blob = blob___;
                     fileobj.plan_id = plan_id;
                     fileobj.user_id = user_id;
                     console.log(fileobj);
                     file_name_ = file_name_;
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

             $(this).hide();
             $(".loading").show();

             // $('.bb_txt').show();
             $('.file-input').hide();
             $('.red_color').hide();
             fileobj.category = "acceleratedfile";
             console.log(file_name_);

             var form = new FormData();
             form.append("file", JSON.stringify(fileobj));
             var settings11 = {
                 "async": true,
                 "crossDomain": true,
                 "url":"http://192.168.0.101:6767/Buying_basket",
                 "method": "POST",
                 "processData": false,
                 "contentType": false,
                 "mimeType": "multipart/form-data",
                 "data": form
             };
             $.ajax(settings11).done(function (msg) {
                 console.log(msg);
                 $('.loading').hide();
                 $('.texttodisplay').show();
                 $('.texttodisplay').append('<h5>'+file_name_+' is successfully uploaded</h5>')
                 $('.edit_barc').prop('disabled', false);
                 $('.confirm_barc').prop('disabled', false);
                 $('.submit_barc').prop('disabled', false);
             });
         })


    var edit_flag = false;
    var base_tg_;
    var campaignId_; var campaignMarkets; var endWeekId_; var primaryTGTd_;
    var plan_id= sessionStorage.getItem('create_plan_id');
    var userid= sessionStorage.getItem('userid');
    var count = 0;
    var version
    // $('option:not(:selected)').prop('disabled', true);
    $('.campaign_markets').attr("style", "pointer-events: none;");
    barcData();
    editData();
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
            "url": ' http://192.168.0.101:6767/Barc_Plan_Freeze',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            setTimeout(function(){
                $('.loading').hide();

            }, 3000)
            $(".select2").addClass('hide');
            base_tg_ =  msg.BaseTGId;
            campaignId_ = msg.CampaignId;
            campaignMarkets = msg.CampaignMarketId;
            console.log(campaignMarkets);
            endWeekId_ = msg.EndWeek;
            primaryTGTd_ = msg.PrimaryTGTd;
            pathSelection = msg.PathSelection;
            if (pathSelection == 1) {
                $('.acce_div').show()
            }
            else {
                $('.acce_div').hide()

            }
            // for (var i = 0; i < campaignMarkets.length; i++) {
            //         $(".select_markets").append('<p class="multiclient form-control getClass" value='+campaignMarkets[i]+' readonly style="background-color:#d6d6d6;">'+campaignMarkets[i]+'</p>')
            //
            // }
            // $(".primary_freeze").append('<p type="text" value='+primaryTGTd_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+primaryTGTd_+'</p>')
            //
            // $(".camp_id").append('<p type="text" value='+campaignId_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+campaignId_+'</p>')
            //
            // $(".base_freeze").append('<p type="text" value='+base_tg_+' class="form-control" readonly style="background-color:#d6d6d6;">'+base_tg_+'</p>')
            //
            // $('.endfreeze').append('<p type="text" value='+endWeekId_+' class="form-control" readonly style="background-color:#d6d6d6;">'+endWeekId_+'</p>')

        })
    }

    $('body').on('click', '.edit_barc', function(){
        $('.confirm_barc').prop('disabled', false);
        $('select').prop('disabled', false)
    })
function editData(){
    $('select').prop('disabled', false);
    // $('.confirm_barc').prop('disabled', false);
        edit_flag = true;
        sendObj = {};
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.101:6767/BARC_Evalution_edit_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            setTimeout(function(){
                $('.loading').hide();

            }, 3000)
            console.log(msg);
            $('.select2').show();
            var Base_Tg_dt = msg.Base_Tg_dt;
            var Campaign_Market_dt = msg.Campaign_Market_dt;
            var End_Week_dt = msg.End_Week_dt;
            var Primary_Tg_dt= msg.Primary_Tg_dt;

            for(key in Base_Tg_dt){
                console.log();
                sel = ''
                if (base_tg_ == Base_Tg_dt[key] ) {
                    sel='selected="selected"'
                }
                $(".base_tg").append('<option '+sel+' value='+Base_Tg_dt[key]+' class="get_Base_Tg_dt-'+count+'" key='+key+'>'+Base_Tg_dt[key]+'</option>');
                count++
            }
            for(key in Campaign_Market_dt){
                sel = ''
                if (campaignMarkets.indexOf(Campaign_Market_dt[key]) > -1) {
                    sel='selected="selected"'
                }
                $(".campaign_markets").append('<option '+sel+' value='+Campaign_Market_dt[key]+' class="get_Campaign_Market_dt-'+count+'" key='+key+'>'+Campaign_Market_dt[key]+'</option>');
                count++
            }

            for(key in Primary_Tg_dt){
                sel = ''
                if (primaryTGTd_ == Primary_Tg_dt[key] ) {
                    sel='selected="selected"'
                }
                $(".Primary_Tg_dt").append('<option '+sel+' value='+Primary_Tg_dt[key]+' class="get_Primary_Tg_dt-'+count+'" key='+key+'>'+Primary_Tg_dt[key]+'</option>');
                count++
            }

            for(key in End_Week_dt){
                sel = ''
                if (endWeekId_ == End_Week_dt[key] ) {
                    sel='selected="selected"'
                }
                $(".End_Week_dt").append('<option '+sel+' value='+End_Week_dt[key]+' class="get_End_Week_dt-'+count+'" key='+key+'>'+End_Week_dt[key]+'</option>');
                count++
            }

        })
}
// })

    $('body').on('click', '.confirm_barc', function(){
        $(this).prop("disbaled", true);

        debugger
        // $('.loading').show();
        // obj = {}
        // camp_markets = []
        // selectedValues = $(".campaign_markets").select2('data');
        // for (var i = 0; i < selectedValues.length; i++) {
        //     camp_markets.push(selectedValues[i].text);
        // }
        // var key_primary_tg = $(".Primary_Tg_dt").find("option:selected").attr('key');
        // var key_base_tg = $(".base_tg").find("option:selected").attr('key');
        // var key_end_week = $(".End_Week_dt").find("option:selected").attr('key');
        // obj.edit = edit_flag;
        // obj.PlanId = plan_id;
        // obj.user_id = userid;
        // obj.PrimaryTGTd = key_primary_tg;
        // obj.BaseTGId = key_base_tg;
        // obj.EndWeekId = key_end_week;
        // obj.CampaignMarketId = $.unique(camp_markets);
        // console.log(obj);
         swal("Modified successfully");
         //
         // $('.select2').css('background', '#ccc');
         // $('.campaign_markets').css('background', '#ccc');
         // $('.select2-selection--multiple').prop('readonly', true);
         //
         // $('.select2').css('background', '#ccc');

        // var form = new FormData();
        // form.append("file", JSON.stringify(obj));
        // var settings11 = {
        //     "async": true,
        //     "crossDomain": true,
        //     "url": ' http://192.168.0.101:6767/BARC_confirm_button',
        //     "method": "POST",
        //     "processData": false,
        //     "contentType": false,
        //     "mimeType": "multipart/form-data",
        //     "data": form
        // };
        // $.ajax(settings11).done(function (msg) {
        //     // msg = JSON.parse(msg);
        //     $('.loading').hide();
            $('select').prop('disabled', true);
        //     $('.confirm_barc').prop('disabled', true);
        //     $('.edit_barc').prop('disabled', false);
        //     swal("Modified successfully");
        //     console.log(msg);
        //     // e.preventDefault();
            // setTimeout(function(){
            //     $('.loading').hide()
            // },2000);
        // })
    })



    $('body').on('click', '.submit_barc', function(){
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
         // swal("Modified successfully");
         //
         // $('.select2').css('background', '#ccc');
         // $('.campaign_markets').css('background', '#ccc');
         // $('.select2-selection--multiple').prop('readonly', true);
         //
         // $('.select2').css('background', '#ccc');

        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.101:6767/BARC_confirm_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            // msg = JSON.parse(msg);
            $('.loading').hide();
            $('select').prop('disabled', true);
            $('.submit_barc').prop('disabled', true);

            $('.confirm_barc').prop('disabled', true);
            $('.edit_barc').prop('disabled', true);
            swal("Submitted successfully");
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



    // var file_name_new;
    // var main_output_new;
    // fileobj_new = {};
    // (function ($) {
    //     $('#load-file').on('change', function () {
    //         debugger
    //         main_output = ''
    //         var file = $('#load-file')[0].files[0];
    //         file_name_new = file.name;
    //         file_name_new = "BuyingBasket_"+campaignId_+"_"+version+".xls"
    //         var fileReader = new FileReader();
    //         fileReader.onloadend = function (e) {
    //             blob___ = e.target.result;
    //
    //             fileobj_new.filename = file_name_new;
    //
    //             fileobj_new.blob = blob___;
    //             fileobj_new.plan_id = plan_id;
    //             fileobj_new.user_id = user_id;
    //             console.log(fileobj_new);
    //             // file_name_new = filename;
    //         };
    //
    //         fileReader.readAsDataURL(file);
    //     });
    // })(jQuery);
    //
    //
    // var counting = 0;
    // function exceltoblob(file) {
    //     pagesArr = [];
    //     window.PDFJS = window.pdfjsLib;
    //     PDFJS.disableWorker = true;
    //     PDFJS.getDocument(file).then(function getPdfHelloWorld(pdf) {
    //         const go = async function(){
    //             let h = 0;
    //             for(var pageN = 1; pageN <= pdf.numPages; pageN++){
    //                 const page = await pdf.getPage(pageN);
    //                 var scale = 2;
    //                 var viewport = page.getViewport(scale);
    //                 //
    //                 // Prepare canvas using PDF page dimensions
    //                 //
    //                 var canvas = document.createElement('canvas');
    //                 //document.body.appendChild(canvas);
    //                 var context = canvas.getContext('2d');
    //                 canvas.height += viewport.height;
    //                 canvas.width = viewport.width;
    //                 //
    //                 // Render PDF page into canvas context
    //                 //
    //                 var task = page.render({ canvasContext: context, viewport: viewport })
    //                 await task.promise;
    //                 pages = canvas.toDataURL('image/jpeg');
    //                 pagesArr.push(pages)
    //                 if (pageN == pdf.numPages) {
    //                     displayImagesMain(pagesArr)
    //                 }
    //             }
    //         };
    //         go();
    //     }, function(error){
    //         //console.log(error);
    //     });
    // }



    // $("body").on("click", "#upl-btn", function(){
    //     debugger
    //     $('.texttodisplay').show();
    //     $(this).hide();
    //     $(".loading").show();
    //     $('.texttodisplay').append('<h5 style="color:#000">'+file_name_new+' is successfully uploaded</h5>')
    //     // $('.bb_txt').show();
    //     $('.file-input').hide();
    //     $('.red_color').hide();
    //     $('.texttodisplay').show();
    //     fileobj_new.category = "buyingbasket";
    //     console.log(file_name_new);
    //
    //     var form = new FormData();
    //     form.append("file", JSON.stringify(fileobj_new));
    //     var settings11 = {
    //         "async": true,
    //         "crossDomain": true,
    //         "url":"http://192.168.0.101:6767/Buying_basket",
    //         "method": "POST",
    //         "processData": false,
    //         "contentType": false,
    //         "mimeType": "multipart/form-data",
    //         "data": form
    //     };
    //     $.ajax(settings11).done(function (msg) {
    //         console.log(msg);
    //         $('.loading').hide();
    //         $('.radio_class').show();
    //         // $('.cprp_div').show();
    //     });
    // })


})
