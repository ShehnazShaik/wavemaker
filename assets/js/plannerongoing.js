$(document).ready(function(){

    $('.texttodisplay').hide();
    // var plan_id = sessionStorage.getItem('create_plan_id');
    // var user_id = sessionStorage.getItem('userid');
    // $('.camp_id').append('<input class="form-control" value="'+plan_id+'" type="text"/ readonly>')
    // $('.radio_class').hide();
    // // $('#upl-btn').attr('disabled', 'true');
    // var file_name_;
    // var main_output;
    // fileobj = {};
    // (function ($) {
    //     $('#load-file').on('change', function () {
    //         debugger
    //         main_output = ''
    //         var file = $('#load-file')[0].files[0];
    //         filename = file.name;
    //         filename = "BuyingBasket_"+newcampaign_id+"_"+filename"_"+version.xls
    //         var fileReader = new FileReader();
    //         fileReader.onloadend = function (e) {
    //             blob___ = e.target.result;
    //
    //             fileobj.filename = filename;
    //
    //             fileobj.blob = blob___;
    //             fileobj.plan_id = plan_id;
    //             fileobj.user_id = user_id;
    //             console.log(fileobj);
    //             file_name_ = filename;
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
    //     $('.texttodisplay').append('<h5>'+file_name_+' is successfully uploaded</h5>')
    //     // $('.bb_txt').show();
    //     $('.file-input').hide();
    //     $('.red_color').hide();
    //     $('.texttodisplay').show();
    //     fileobj.category = "buyingbasket";
    //     console.log(file_name_);
    //
    //     var form = new FormData();
    //     form.append("file", JSON.stringify(fileobj));
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
    //         $('.cprp_div').show();
    //     });
    // })


    $("body").on("click", "#bb_upload", function(){
        debugger
        var file = $(".excel_bb")[0].files[0];
        alert(file);
        console.log(file);
    })

    var msg ={"Campaign_ids": [{"Id": 2, "Name": "India"}, {"Id": 3, "Name": "India - Urban"}, {"Id": 4, "Name": "HSM"}, {"Id": 5, "Name": "HSM - Urban"}, {"Id": 6, "Name": "HSM Excl East - Urban"}, {"Id": 8, "Name": "Mum/Del/Pune/Che/Hyd/Ahm/Blr/Kol"}, {"Id": 9, "Name": "Metros"}, {"Id": 10, "Name": "AP / Telangana"}, {"Id": 11, "Name": "AP / Telangana - Urban"}, {"Id": 12, "Name": "AP / Telangana - Rural"}, {"Id": 13, "Name": "Karnataka - Urban"}, {"Id": 14, "Name": "Karnataka - Urban"}, {"Id": 15, "Name": "Kerala - Urban"}, {"Id": 16, "Name": "Mah / Goa - Urban"}, {"Id": 17, "Name": "Pun/Cha - Urban"}, {"Id": 18, "Name": "TN - Rural"}]}
    // console.log(msg.Campaign_ids);

    var cp = msg.Campaign_ids;
    console.log(cp);
    $.each(cp, function(key, val){

        // console.log(key);
        // console.log(val);
        $("#campaign_market_id").append('<option>'+val.Name+'</option>');
    })
    var array_list, s;
    $("body").on("change", "#campaign_market_id", function(){
        array_list = $(this).val();
        console.log(array_list);
    })
    $("body").on("click", "#submit_campaign", function(){
        debugger
        var s = array_list;
        $("#campaign_market_id").addClass('hide');

        $('#campaign_market_text').append('<p>'+s+'</p>')
    })





    $("body").on("click", ".cprp_submit", function(){
        debugger
        var name_new = []
        var select_path = $('.cprp_r').val()
        var cprp = $('.cprp_val').val();
        var reach = $('.reach_val').val();
        var camp_dur =  $('.campaign').val();
        var name_ = $('.subdivname_0').val();
        var path_ = $('.subdivpath_0').val();

        name_new = $('.subdivname_'+counting).val();
        path_new = $('.subdivpath_'+counting).val();
        // console.log(x);
    })
    $("body").on("click", ".next_btn", function(){
        window.location='barc.php';
    })





})
