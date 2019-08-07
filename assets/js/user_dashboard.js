$(document).ready(function () {
    $(".loading").show();
    var startdate;
    var filesData;
    var selectedFiles = [];
    var enddate;
    var useridd = sessionStorage.getItem("userid");
    var useridd = sessionStorage.getItem("userid");
    var data_table_;
    var dataTable___;
    var dataTable___1;
    pageonloadhit()


    $(".displaytoptextboxes").slideToggle('hidden');
    $(".btn3").click(function(){
             $(".displaytoptextboxes").slideToggle('slow');
       });


    function pageonloadhit() {
        obj = {}
        brandclass = $('.brandclass').val();
        obj.user_id = useridd
        obj.IsDefault = true

        console.log(obj);
        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/Dashboard_screen_load',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);

            displaytable(msg);
              // dataTableMultiSort()

        })
    }


    $("body").on("click", ".gobtn", function(){
        startdate =   $('.startdateclass').val();
        enddate =   $('.enddateclass').val();
        if (startdate!='' || enddate!='') {
            if(startdate <= enddate){
                objj = {}
                objj.startdate = startdate
                objj.enddate =  enddate
                objj.user_id =  useridd
                console.log(objj);
                var form = new FormData();
                form.append("file", JSON.stringify(objj));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url": ' http://192.168.0.101:6767/Dashboard_Table_One',
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };

                $.ajax(settings11).done(function (msg) {
                    msg = JSON.parse(msg);
                    console.log(msg);
                    displaytable(msg);
                      // dataTableMultiSort()
                    // planid = msg[Id];
                    // console.log(planid);

                })
            }
            else {
                swal("Invalid dates");
            }
        }
        else {
            swal("Invalid Dates")
        }
    })



    function displaytable(msg) {
        $(".loading").hide();
      if (dataTable___ != undefined) {
          dataTable___.clear();
          dataTable___.destroy()
      }
        $.each(msg ,function(key,v){
            console.log(key , v);
            if (key == 'Incompleted') {
                ap1 = ''
                for (var i = 0; i < v.length; i++) {
                    ap1 += '<tr>'
                    ap1 += '<td  style="text-align:center;"><a  style="text-decoration:underline;cursor:pointer;" plainidattr="'+v[i]['PlanId']+'" id="camp_idhyperlink">'+v[i]['CampaignId']+'</a></td>'
                    ap1 += '<td  style="text-align:center;">'+v[i]['CampaignName']+ '</td>'
                    ap1 += '<td  style="text-align:center;">'+v[i]['ClientName']+'</td>'
                    ap1 += '<td  style="text-align:center;">'+v[i]['BrandName']+'</td>'
                    ap1 += '<td  style="text-align:center;">'+format_date(v[i]['StartDate'])+'</td>'
                    ap1 += '<td> <button  plainidattr="'+v[i]['PlanId']+'" style="color: white;border:none;background: #0984e3;padding: 1px;font-size: 9px;width: 94px;  width: 94px;" class="form-control completebtn">Mark As Complete</button> </td>'
                    ap1 += '<td style="text-align:center;"><div class="downloadbtn pointer"  plainidattr="'+v[i]['PlanId']+'" style=""><img src="assets/images/download.svg" style="width:27px;"></div></td>';
                    ap1 += '</tr>'
                }
                $(".displayincompletedplans").html(ap1);

                    dataTableMultiSort()

            }
            else {

                ap = ''
                if (dataTable___1 != undefined) {
                    dataTable___1.clear();
                    dataTable___1.destroy()
                }

                for (var i = 0; i < v.length; i++) {
                    ap += '<tr>'
                    ap += '<td  style="text-align:center;"><a  style="text-decoration:underline;cursor:pointer;" plainidattr="'+v[i]['PlanId']+'" id="camp_idhyperlink_">'+v[i]['CampaignId']+'</a></td>'
                    ap += '<td  style="text-align:center;">'+v[i]['CampaignName']+'</td>'
                    ap += '<td  style="text-align:center;">'+v[i]['ClientName']+'</td>'
                    ap += '<td  style="text-align:center;">'+v[i]['BrandName']+'</td>'
                    // ap += '<td  style="text-align:center;">'+format_date(v[i]['StartDate'])+'</td>'
                    ap += '<td> <button class="replanmodal" Campaignid='+v[i]['CampaignId']+' plainidattr='+v[i]['PlanId']+'  style="color:#fff !important;background-color: #636e72;color: #000;border: none;padding: 4PX;width: 68px;border-radius: 5px;">Re-Plan</button></td>';
                    // ap += '<td  style="text-align:center;"><button class="replanmodal" campaign_id='+v[i]['CampaignId']+'  plainidattr="'+v[i]['PlanId']+'" style="background-color: #a5b1c2;color: #000;border: none;padding: 4PX;width: 68px;border-radius: 5px;">Re-Plan</button></td>'
                    ap += '<td  style="text-align:center;width:152px;">'+format_date(v[i]['EndDate'])+'</td>'
                    ap += '<td style="text-align:center;"><div class="downloadbtn pointer"  plainidattr="'+v[i]['PlanId']+'" style=""><img src="assets/images/download.svg" style="width:27px;"></div></td>'
                    ap += '</tr>'
                }
                $(".displaycompletedplans").html(ap);
                  dataTableMultiSortt()

            }
        })

    }


    function dataTableMultiSort() {

        setTimeout(function () {
            dataTable___ = $('.datatable-multi-sortingg').DataTable({

                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [4],
                    orderData: [4, 0]
                }, {
                    orderable: false,
                    width: '100px',
                    targets: [5]
                }]
            });
        }, 0);
    }




    function dataTableMultiSortt() {

        setTimeout(function () {
            dataTable___1 = $('.datatable-multi-sorting').DataTable({

                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [4],
                    orderData: [4, 0]
                }, {
                    orderable: false,
                    width: '100px',
                    targets: [5]
                }]
            });
        }, 0);
    }

    var attr__
    $("body").on("click", ".replanmodal", function(){
        attr__ = $(this).attr('Campaignid')
        $('.buyingbasketbtn').attr('title', attr__);
        $('.acceleratorbtn').attr('title', attr__);
        $('#replanmodal').modal();
    })


    $("body").on("click", ".buyingbasketbtn", function(){
        campid = $(this).attr('title');
        objj = {}
        objj.CampaignId = campid
        objj.user_id = useridd
        objj.RePlanCategory = 1
        console.log(objj);

        var form = new FormData();
        form.append("file", JSON.stringify(objj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/re_plan_campaign',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            updatedplanid = msg.planid
            sessionStorage.setItem("create_plan_id",updatedplanid)
            window.location.href = 'buyingbasket.php';

        })

    })


    $("body").on("click", ".acceleratorbtn", function(){
        campid = $(this).attr('title');
        sessionStorage.setItem('campaign_id', campid);
        // alert(campid)
        objj = {}
        objj.CampaignId = campid
        objj.user_id = useridd
        objj.RePlanCategory = 2
        console.log(objj);
        var form = new FormData();
        form.append("file", JSON.stringify(objj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/re_plan_campaign',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            updatedplanid = msg.planid
            sessionStorage.setItem("create_plan_id",updatedplanid)
            // alert(updatedplanid)
            // window.location.href = 'buyingbasket.php';

            window.location.href = 'planner_accelerator.php';

        })

    })

    $("body").on("click", ".downloadbtn", function(){
        plainiddd =  $(this).attr('plainidattr');
        $('#downloadicon').modal()
        sendObj = {};
        sendObj.plan_id = plainiddd;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.101:6767/get_file_names',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            filesData = JSON.parse(msg);
            console.log(jQuery.isEmptyObject(filesData));

            if (jQuery.isEmptyObject(filesData)) {
                $('.row_body').empty()
                $('.row_body').append('<h5 class="sendpath" ><p>No files to Download</p></5>');
            }
            else {
                $('.pathslinks').empty()
                keys = Object.keys(filesData);
                $('.row_body').html('')
                for (var i = 0; i < keys.length; i++) {
                    $('.row_body').append('<div class="col-sm-3"><div class="fileClick pointer" title="'+keys[i]+'"><span>'+keys[i]+'</span></div></div>');
                }
            }
        })

    })

    $("body").on("click", ".fileClick", function () {
        key = $(this).attr('title');
        path = filesData[key];
        idx = selectedFiles.indexOf(path);
        $(".unSelectAll").addClass('selectAll')
        $(".unSelectAll").html('Select All')
        $(".selectAll").removeClass('unSelectAll')
        if (idx > -1) {
            selectedFiles.splice(idx, 1)
            $(this).removeClass('active')
        }
        else {
            $(this).addClass('active')
            selectedFiles.push(path);
        }
        console.log(selectedFiles);
    })
    //-----------------SelectALl-------------//
    $('body').on('click', '.selectAll', function(){
        selectedFiles = Object.values(filesData);
        $(this).addClass('unSelectAll')
        $(this).html('Unselect All')
        $(this).removeClass('selectAll');
        $(".fileClick").addClass('active')
        console.log(selectedFiles);

    })

    $('body').on('click', '.unSelectAll', function(){
        resetSelect()
    })

    $('body').on('click', '.downloadAll', function(){
        sendObj={};
        sendObj.file_path = selectedFiles;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.101:6767/download_file',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            console.log(msg);

            // file_name = msg.file_name;
            var bin = atob(msg);
            var ab = s2ab(bin); // from example above
            var blob = new Blob([ab], { type: 'octet/stream' });

            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = "results.zip";
            // link.download = 'file_name';

            document.body.appendChild(link);

            link.click();

            resetSelect()

            document.body.removeChild(link);
        });
    });
    $('body').on('click', '.closeClass', function(){
        resetSelect();
    })
    function resetSelect() {
        selectedFiles = []
        $(".unSelectAll").addClass('selectAll')
        $(".selectAll").html('Select All')
        $(".selectAll").removeClass('unSelectAll')
        $(".fileClick").removeClass('active')
    }


    // =================================
    $("body").on("click", ".sendpath", function(){

        file_Name = $(this).attr('file_name');
        var send_path = $(this).attr('title')
        sendObj = {};
        sendObj.file_path = send_path;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.101:6767/download_file',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            // msg = JSON.parse(msg);
            console.log(msg);

            // console.log(JSON.parse(msg))
            msg_obj = msg;
            // file_name = msg.file_name;
            var bin = atob(msg_obj);
            var ab = s2ab(bin); // from example above
            var blob = new Blob([ab], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;' });

            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = file_Name;
            // link.download = 'file_name';

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);

            swal('downloaded successfully');

            setTimeout(function(){
                location.reload();
            }, 3000)

        })
    })


    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i=0; i!=s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
        return buf;
    }


    // =====================
    $("body").on("click", "#camp_idhyperlink_", function(){
        plainiddd =  $(this).attr('plainidattr');
        // alert(plainiddd)
        sessionStorage.setItem('create_plan_id', plainiddd);
        window.location.href = 'planner_createnewplan.php';
    });

    $("body").on("click", "#camp_idhyperlink", function(){
        plainiddd =  $(this).attr('plainidattr');
        // alert(plainiddd)
        sessionStorage.setItem('create_plan_id', plainiddd);
        window.location.href = 'planner_createnewplan.php';
        // plainiddd =  $(this).attr('plainidattr');
        // plainid_array = []
        // plainid_array.push(plainiddd);
        //
        //
        // data__ = {};
        // data__.plan_id = plainid_array;
        //
        //
        //   console.log(data__);
        //   $.ajax({
        //     url: 'assets/backgrounds/session_create.php',
        //     method: 'POST',
        //     data: data__,
        //   success: function (msg) {
        //       // msg = JSON.parse(msg);
        //       // console.log(msg);
        //     }
    })
    // plan_id = $urlPram('plainiddd');
    // window.location.href = 'user_profile.php?'+plainiddd






    $(".displayincompletedplans").html();
    $(".displayincompletedplans").empty();
    $(".displaycompletedplans").html();
    $(".displaycompletedplans").empty();

    $("body").on("click", ".completebtn", function(){
        plainid = $(this).attr('plainidattr')
        Id = plainid
        startdate =   $('.startdateclass').val();
        enddate =   $('.enddateclass').val();
        swal({
            title: "Are you sure to mark as complete?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })

        .then((willDelete) => {
            if (willDelete) {
                objj = {}
                objj.startdate = startdate
                objj.enddate =  enddate
                objj.user_id =  useridd
                objj.Id =  Id
                console.log(objj);
                var form = new FormData();
                form.append("file", JSON.stringify(objj));
                var settings11 = {
                    "async": true,
                    "crossDomain": true,
                    "url": ' http://192.168.0.101:6767/Dashboard_Complete_Button',
                    "method": "POST",
                    "processData": false,
                    "contentType": false,
                    "mimeType": "multipart/form-data",
                    "data": form
                };
                $.ajax(settings11).done(function (msg) {
                    msg = JSON.parse(msg);
                    console.log(msg);
                    displaytable(msg);

                })
            }
        });

    })







    // $("body").on("click",".Prioritizebtn",function() {
    //     plainiddd =  $(this).attr('plainidattr');
    //     swal({
    //         title: "Are you sure you want  to update?",
    //         icon: "warning",
    //         buttons: true,
    //         dangerMode: true,
    //     })
    //     .then((willDelete) => {
    //         if (willDelete) {
    //           objjj = {}
    //           objjj.user_id = useridd
    //           objjj.plainid = plainiddd
    //           objjj.startdate =$('.startdateclass').val();
    //           objjj.enddate = $('.enddateclass').val();
    //           objjj.clientclass =$('.clientclass').val();
    //           objjj.brandclass =$('.brandclass').val();
    //           objjj.Campaignid = $('.Campaignidclass').val();
    //           console.log(objjj)
    //           var form = new FormData();
    //                   form.append("file", JSON.stringify(objjj));
    //                   var settings11 = {
    //                     "async": true,
    //                     "crossDomain": true,
    //                     "url": 'http://192.168.0.101:6767/ongoing_prioritize_button1',
    //                     "method": "POST",
    //                     "processData": false,
    //                     "contentType": false,
    //                     "mimeType": "multipart/form-data",
    //                     "data": form
    //                   };
    //                   $.ajax(settings11).done(function (msg) {
    //                     msg = JSON.parse(msg);
    //                       console.log(msg);
    //                        swal("Success", "Updated succesfully!", "success");
    //                         displaytable(msg);
    //                       })
    //         }
    //     });
    //   })


    function format_date(date_string) {
        date = new Date(date_string)
        months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        weeks_ = ["Mon", "Tue", "Wed", "Thr", "Fri", "Sat", "Sun"];
        hours_mian = ["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11"];
        hrs = date.getHours().toString().length < 2 ? '0'+date.getHours() : date.getHours()
        mins = date.getMinutes().toString().length < 2 ? '0'+date.getMinutes() : date.getMinutes()
        return date.getDate()+'/'+months[date.getMonth()]+'/'+date.getFullYear()+' &nbsp&nbsp'+hrs+':'+mins;
    }

})
