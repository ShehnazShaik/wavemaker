$(document).ready(function(){
    $('.texttodisplay').hide();
var plan_id = sessionStorage.getItem('create_plan_id');
var user_id = sessionStorage.getItem('userid');
// var campaign_id = sessionStorage.getItem('campaign_id');
onLoad();
var campaign_id;
var version;
    function onLoad(){
        sendObj ={}
        sendObj.planid = plan_id;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url":"http://192.168.0.125:6767/version_for_plan",
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
        })
    }
    var file_name_;
    var main_output;
    fileobj = {};
    (function ($) {
        // $('#upl-btn').attr('disabled', 'false');
        // $("#upl-btn").click(function () {
        //   $('#load-file').click();
        // })
        $('#load-file').on('change', function () {
            debugger
            main_output = ''
            var file = $('#load-file')[0].files[0];
            // file_name_ = file.name;
            file_name_ = "Accelerator_output"+campaign_id+"_.xlsx";
            var fileReader = new FileReader();
            fileReader.onloadend = function (e) {
                blob___ = e.target.result;

                fileobj.filename = "Accelerator_output_"+campaign_id+"_"+version+"_.xlsx";
                fileobj.blob = blob___;
                fileobj.plan_id = plan_id;
                fileobj.user_id = user_id;
                console.log(fileobj);
                file_name_ = file_name_;

                // var form = new FormData();
                // form.append("file", JSON.stringify(fileobj));
                // var settings11 = {
                //   "async": true,
                //   "crossDomain": true,
                //   "url":"http://192.168.0.117:6767/download_excel",
                //   "method": "POST",
                //   "processData": false,
                //   "contentType": false,
                //   "mimeType": "multipart/form-data",
                //   "data": form
                // };
                // $.ajax(settings11).done(function (msg) {
                //   console.log(msg);
                //
                // });
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
            $('.texttodisplay').show();
            $('.texttodisplay').append('<h5>'+file_name_+' is successfully uploaded</h5>')
        });
    })


})
