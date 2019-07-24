$(document).ready(function(){
    $('.texttodisplay').hide();
    var plan_id = sessionStorage.getItem('create_plan_id');
    var user_id = sessionStorage.getItem('userid');
    $('.camp_id').append('<input class="form-control" value="'+plan_id+'" type="text"/ readonly>')
    // $('#upl-btn').attr('disabled', 'true');
    $('#locationuploadbtn').prop('disabled', true);
    $('#channelgenrebtn').prop('disabled', true);
    var file_name_;
    var main_output;
    fileobj = {};
    (function ($) {
        // $('#upl-btn').attr('disabled', 'false');
        // $("#upl-btn").click(function () {
        //   $('#load-file').click();
        // })
        $('#locationclass').on('change', function () {
            debugger
            main_output = ''
            var file = $('#locationclass')[0].files[0];
            filename = file.name;
            var fileReader = new FileReader();
            fileReader.onloadend = function (e) {
                blob___ = e.target.result;

                fileobj.filename = filename;
                fileobj.blob = blob___;
                // fileobj.plan_id = plan_id;
                fileobj.user_id = user_id;
                fileobj.category = "masterdata"
                console.log(fileobj);
                file_name_ = filename;
                $('#locationuploadbtn').prop('disabled', false)
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

    $("body").on("click", "#locationuploadbtn", function(){
        debugger
        console.log(fileobj);
        var form = new FormData();
        form.append("file", JSON.stringify(fileobj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url":"http://192.168.0.125:6767/master_data_settings",
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            console.log(msg);
            swal("Uploaded successfully");
            $('#locationuploadbtn').prop('disabled', true);
            $('.masterdata_').hide();
            $('.masterdata_new').show();
            $('.masterdata_new').append('<h5>'+file_name_+'</h5>');
        });
    })



    var file_name_new;
    var main_output_new;
    fileobj_new = {};
    (function ($) {
        // $('#upl-btn').attr('disabled', 'false');
        // $("#upl-btn").click(function () {
        //   $('#load-file').click();
        // })
        $('#channelgenre').on('change', function () {
            debugger
            main_output_new = ''
            var file = $('#locationclass')[0].files[0];
            filename_new = file.name;
            var fileReader = new FileReader();
            fileReader.onloadend = function (e) {
                blob___ = e.target.result;

                fileobj_new.filename = filename_new;
                fileobj_new.blob = blob___;
                // fileobj_new.plan_id = plan_id;
                fileobj_new.user_id = user_id;
                fileobj_new.category = "ChannelGenreMappingSheet"
                console.log(fileobj_new);
                file_name_ = filename_new;
                $('#channelgenrebtn').prop('disabled', true)
                // var form = new FormData();
                // form.append("file", JSON.stringify(fileobj_new));
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

    $("body").on("click", "#channelgenrebtn", function(){
        debugger
        console.log(fileobj_new);
        var form = new FormData();
        form.append("file", JSON.stringify(fileobj_new));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url":"http://192.168.0.125:6767/master_data_settings",
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            console.log(msg);
            swal("Uploaded successfullys");
            $('#channelgenrebtn').prop('disabled', true);
            $('#channelgenre').hide();
            $('.channel_').append('<h5>'+file_name_+'</h5>')
        });
    })



})
