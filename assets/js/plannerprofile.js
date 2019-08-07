$(document).ready(function () {
    debugger
    $('.loading').show();
    //
    // $('.planner_div').hide();
    // $('.client_div').hide();
    var isnewuser = '';
    var useremail ='';
    var plan_id='';
    var role = sessionStorage.getItem('role');
    var userid = sessionStorage.getItem('userid')
    // if (role=='Planner') {
    //     $('.planner_div').show();
    // }
    // else {
    //     $('.client_div').show();
    // }
    $(".CLemId").show();
    useremail = sessionStorage.getItem('useremail')
    $('.email').append('<input type="email" name="email" value='+useremail+' readonly class="bg form-control" id="email" required placeholder="Enter a valid email address">')

    var freezeClientEmail, freezeLoc, freezeClientLead, freezeClient;
    $(".update_btn").hide();
    $('.locationClass').attr("required", "true");
    isnewuser = sessionStorage.getItem('isnewuser');
    console.log(isnewuser);
    // simple();
    // err_count = 1;
    // if (err_count == 1) {
    //     isNewuser = true;
    // }
    // else {
    //     isNewuser = false;
    // }
    // function simple(){
    //
    //     isNewuser = true;
    // }
    // get_freezeDetails();

    if(!(plan_id=='')){
        get_freezeDetails();
    }

    if (isnewuser == "false") {
        if (role=="ClientLead") {
            freezeforclientlead()
        }
        else {
            get_freezeDetails();
        }
    }
    else {
        onpageloadhit(isnewuser);
    }
    // // isnewuser = true;
    // // editUserProfile = false;
    // if (isNewuser == true) {
    //     onpageloadhit();
    // }
    // else if(isNewuser == false){
    //     if (editUserProfile == true) {
    //         onpageloadhit();
    //         freezeforclientlead();
    //         // $(".freezeLoc").hide();
    //         // $(".freezeclient").hide();
    //         // $(".freezeClientLead").hide();
    //         // $(".create_plan").attr("disabled", false);
    //         // $(".select2").removeClass('hide');
    //         // $(".clientleadClass").show();
    //         // $("clientleadClass").removeClass('hide');
    //     }
    //     else {
    //         get_freezeDetails();
    //     }
    // get_freezeDetails();

    $("body").on("click", ".edit_createprofile", function(){
        $(".freezeLoc").hide();
        $(".freezeclient").hide();
        $(".freezeClientLead").hide();
        $(".create_plan").attr("disabled", false);
        $(".select2").removeClass('hide');
        $(".clientleadClass").show();
        $("clientleadClass").removeClass('hide');
        $(".getClass").removeClass('bg')
        onpageloadhit();

    })

    // $("body").on("change", ".locationClass", function(){
    //     debugger
    //     $(".freezeLoc").hide();
    // })
    function get_freezeDetails(){
        $('.CLemId').hide();
        sendObj = {};
        sendObj.user_id = userid;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/Create_Profile_freeze',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            $('.loading').hide();
            console.log(msg);

            $(".bg").css("background-color", "#d6d6d6");
            $(".getClass").addClass('bg')
            $(".create_plan").attr("disabled", true);
            $(".create_plan").prop("disabled", true);
            $(".select2").addClass('hide');
            $(".text-muted").removeClass('d-block');
            $(".text-muted").addClass('hide');
            $(".clientleadClass").hide();
            $("clientleadClass").addClass('hide');
            console.log(msg);
            freezeClientEmail = msg.Email_ID;
            freezeLoc = msg.Location;
            freezeClient = msg.Client;
            freezeClientLead = msg.Client_Lead;
            $(".freezeLoc").append('<input key='+freezeLoc+' value='+freezeLoc+' class="getClass form-control" readonly style="background-color:#d6d6d6;margin-top:10px;">')

            $(".freezeclient").append('<input key='+freezeClient+' value='+freezeClient+' class="getClass form-control" readonly style="background-color:#d6d6d6;margin-top:10px;">')
            for (var i = 0; i < freezeClientLead.length; i++) {
                $(".freezeClientLead").append('<textarea key='+freezeClientLead[i]+' value='+freezeClientLead[i]+' class="getClass form-control" readonly style="background-color:#d6d6d6;margin-top:10px;">'+freezeClientLead[i]+'</textarea>')
            }

        })
        // onpageloadhit();
    }

    function freezeforclientlead(){
        $('.CLemId').hide();
        $(".update_btn").show();
        $(".create_btn").hide();
        $(".select2").removeClass('hide');
        $(".clientleadClass").show();
        $("clientleadClass").removeClass('hide');
        $(".create_plan").attr("disabled", false);
        sendObj = {};
        sendObj.user_id = userid;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/Create_Profile_freeze',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            $('.loading').hide();
            console.log(msg);
            freezeClientEmail = msg.Email_ID;
            freezeLoc = msg.Location;
            freezeClient = msg.Client;
            freezeClientLead = msg.Client_Lead;

            onpageloadhit()
            // $(".freezeLoc").append('<input key='+freezeLoc+' value='+freezeLoc+' class="freezeLoc getClass form-control"  style="background-color:#d6d6d6;margin-top:10px" readonly>')
            $(".freezeclient").append('<input key='+freezeClient+' value='+freezeClient+' class="getClass form-control"  style="background-color:#d6d6d6;margin-top:10px" readonly>')
            for (var i = 0; i < freezeClientLead.length; i++) {
                $(".freezeClientLead").append('<textarea key='+freezeClientLead[i]+' value='+freezeClientLead[i]+' class="getClass form-control"  style="background-color:#d6d6d6;margin-top:10px" readonly>'+freezeClientLead[i]+'</textarea>')
            }
        })
    }


    var location_key, client_key, get_userclientId;
    count = 0;
    // console.log(get_userclientId);
    function onpageloadhit(isnew) {
        sendObj = {};
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/Location_Data_Request',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);

            $(".loading").hide();
            if (role=='ClientLead') {
                for(key in msg){
                    sel = ''
                    if (freezeLoc == msg[key]) {
                        sel='selected="selected"'
                        console.log(msg[key], key);
                    }
                    count++
                    $(".locationClass").append('<option '+sel+' key='+key+' value='+msg[key]+' class="getClass get_location-'+count+'">'+msg[key]+'</option>')
                }
            }
            else {
                for( key in msg){
                    console.log(msg[key], key);
                    $(".locationClass").append('<option key='+key+' value='+msg[key]+' class="getClass get_location-'+count+'">'+msg[key]+'</option>')
                    count++

                }
            }
            // else {
            //     for( key in msg){
            //         console.log(msg[key], key);
            //         $(".multilocclass").append('<option key='+key+' value='+msg[key]+' class="getClass get_location-'+count+'">'+msg[key]+'</option>')
            //         count++
            //     }
            // }

        })
    }



    location_array = []
    $("body").on("change", ".multilocclass", function(){
        debugger
        $(".clientClass").empty();
        $(".clientleadClass").empty();
        // location_key = $(this).find("option:selected").attr('key');
        location_key = $(this).val();
        console.log(location_key);
        // location_array.push(location_key)
        // alert(location_key)
        $('.loading').show();
        // alert(location_array)
        location_array.push(location_key);
        obj = {};
        obj.location_name = location_key;
        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/Client_Data_Request',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            setInterval(function(){
                $('.loading').hide(); }, 1000);

                console.log(msg);

                // for (var i = 0; i < msg.length; i++) {
                //     $(".clientClass").append('<option key='+key+' value='+msg[i]+' class="getClass get_client-'+count+'">'+msg[i]+'</option>')
                //     count++
                // }

                if (role=='ClientLead') {
                    debugger
                    for(key in msg){
                        sel = ''
                        if (freezeClient == msg[key]) {
                            sel='selected="selected"'
                            console.log(msg[key], key);
                        }
                        console.log(msg[key], key);
                        $(".clientClass").append('<option '+selc+'key='+key+' value='+msg[key]+' class="getClass get_client-'+count+'">'+msg[key]+'</option>')
                        count++
                    }
                }
                else {
                    for(key in msg){
                        console.log(msg[key], key);
                        $(".clientClass").append('<option key='+key+' value='+msg[key]+' class="getClass get_client-'+count+'">'+msg[key]+'</option>')
                        count++
                    }
                }
                $(".CLemId").show();
            })
        })

        $("body").on("change", ".locationClass", function(){
            location_array = [];
            $(".clientClass").empty();
            $(".clientleadClass").empty();
            // location_key = $(this).find("option:selected").attr('key');
            location_key = $(this).val();

            location_array.push(location_key);
            $('.loading').show();
            // alert(location_key)
            obj = {};
            obj.location_name = location_array;
            var form = new FormData();
            form.append("file", JSON.stringify(obj));
            var settings11 = {
                "async": true,
                "crossDomain": true,
                "url": 'http://192.168.0.101:6767/Client_Data_Request',
                "method": "POST",
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            };
            $.ajax(settings11).done(function (msg) {
                msg = JSON.parse(msg);
                setInterval(function(){
                    $('.loading').hide(); }, 1000);

                    console.log(msg);
                    //
                    // if (role=='ClientLead') {
                    //     debugger
                    //     for(key in msg){
                    //         sel = ''
                    //         if (freezeClient == msg[key]) {
                    //             sel='selected="selected"'
                    //             console.log(msg[key], key);
                    //         }
                    //         console.log(msg[key], key);
                    //         $(".clientClass").append('<option '+selc+'key='+key+' value='+msg[key]+' class="getClass get_client-'+count+'">'+msg[key]+'</option>')
                    //         count++
                    //     }
                    //     }
                    //     else {
                    //         for(key in msg){
                    //             console.log(msg[key], key);
                    //             $(".clientClass").append('<option key='+key+' value='+msg[key]+' class="getClass get_client-'+count+'">'+msg[key]+'</option>')
                    //             count++
                    //         }
                    //
                    //     }
                    for( key in msg){
                        console.log(msg[key], key);
                        $(".clientClass").append('<option key='+key+' value='+msg[key]+' class="getClass get_client-'+count+'">'+msg[key]+'</option>')
                        count++
                    }
                    $(".CLemId").show();
                })
            })

            $(".clientClass").empty();
            $("body").on("change", ".clientClass", function(){
                debugger

                $('.loading').show();
                client_key = $(this).find("option:selected").attr('key');
                client__ = $('.clientClass').val();
                obj = {};
                obj.clientNames = client__;
                var form = new FormData();
                form.append("file", JSON.stringify(obj));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url": 'http://192.168.0.101:6767/Planner_Profile_Client_Lead',
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };
                $.ajax(settings11).done(function (msg) {
                    msg = JSON.parse(msg);
                    console.log(msg);
                    setInterval(function(){
                        $('.loading').hide(); }, 1000);
                        $(".clientleadClass").empty();
                        for(key in msg){
                            console.log(msg[key], key);
                            // msg[key] = msg[key].replace(/,/g , '');
                            console.log(msg[key]);
                            $(".clientleadClass").append('<textarea class="form-control" key='+key+' value='+msg[key]+' class="getClass get_clientlead-'+count+'">'+msg[key]+'</textarea>')
                            count++
                        }
                        // $(".clientleadClass").empty();
                        // $(".multiclient").empty();
                        $(".CLemId").hide();
                        //
                        // for (var i = 0; i < msg.length; i++) {
                        //     $(".clientleadClass").append('<input type="text" key='+i+' value='+msg[i]+' class="multiclient form-control getClass get_clientlead-'+i+' get_clientlead-'+count+'">')
                        //     count++
                        // }
                    })
                })

                $("body").on("click", ".create_plan", function(){
                    debugger
                    //  $(this).prop('disabled', true);
                    //  $(this).find('.card-body');
                    //  $(this).find('.locationClass').attr("required", "true");
                    //  if ($('.locationClass').val() == "") {
                    //      $('.locationClass').addClass('border_red')
                    //  }
                    // else {
                    // $(".select2-hidden-accessible").prop('disabled', true);
                    // $(".clientleadClass").prop('disabled', true);
                    // $('.multiclient').prop('disabled', true);
                    var val = $('.clientClass').val();

                    // array_location = [];

                    // if (role==Planner) {
                    //
                    //     var loc = $(".locationClass").val();
                    //     array_location.push(loc)
                    // }
                    // else {
                    //     var loc = $(".multilocclass").val();
                    //     array_location.push(loc)
                    // }
                    if (location_key == '' || val == '') {
                        swal("All fields are required");
                    }
                    else {

                        sendObj = {};
                        sendObj.CreatedBy = userid;
                        sendObj.location_key = location_key;
                        sendObj.UserClientId = userid;
                        sendObj.ClientId = val;
                        console.log(sendObj);

                        var form = new FormData();
                        form.append("file", JSON.stringify(sendObj));
                        var settings11 = {
                            "async": true,
                            "crossDomain": true,
                            "url": 'http://192.168.0.101:6767/Create_Profile',
                            "method": "POST",
                            "processData": false,
                            "contentType": false,
                            "mimeType": "multipart/form-data",
                            "data": form
                        };
                        $.ajax(settings11).done(function (msg) {
                            debugger
                            msg = JSON.parse(msg);
                            console.log(msg);

                            setInterval(function(){
                                $('.loading').hide(); }, 1000);
                                // e.preventDefault();
                                // alert("successfully c/reated")
                                // err_count = 0;
                                swal("successfully created");

                                sessionStorage.setItem('isnewuser', false);
                                // if (role=='Planner') {
                                $('input[type=email]').prop('readonly', true);
                                $("#email").prop('readonly', true);
                                $("#email").css('background', '#ccc');
                                $('.select2').prop('disabled', true);
                                $(".select2-selection--multiple").css('background', '#ccc');
                                $(".select2-selection--multiple").prop('disabled', true);
                                $('.select2-selection').prop('readonly', true);
                                $('.select2-selection').css('background', '#ccc');
                                $('.select2-hidden-accessible').prop('disabaled', true);
                                $('#select2-select2-bj-container').prop('readonly', true);
                                $('input[type=text]').prop('readonly', true);
                                $('.clientleadClass').css('background', '#ccc');
                                $('.clientleadClass').prop('readonly', true);
                                // $('.create_plan').prop('readonly', true);
                                $('select').prop('disabled', true);
                                $(".create_plan").prop("disabled", true);

                                // }
                                // else {
                                //
                                // }
                                // get_userclientId = msg;
                                // localStorage.setItem("get_userclientId", JSON.stringify(get_userclientId));
                                // get_userclientId = JSON.parse(localStorage.getItem("get_userclientId"));
                                // console.log(typeof get_userclientId);
                                // console.log(get_userclientId);
                                // if (get_userclientId = '') {
                                //     alert("error")
                                // }
                                // else {
                                //     window.location.href="planner_createnewplan.php";
                                // }
                            })
                        }
                        // }


                    })

                })
