$(document).ready(function () {

    $(".loading").show();
  var useridd = sessionStorage.getItem("userid");
var dataTable___;
// $('.displaytoptextboxes').('')
// $('.displaytoptextboxes').empty()
$(".displaytoptextboxes").slideToggle('hidden');
$(".btn3").click(function(){
         $(".displaytoptextboxes").slideToggle('slow');
   });


  pageonloadhit()
  function pageonloadhit() {
    obj = {}
    obj.user_id = useridd

    obj.IsDefault = true
    console.log(obj);
    var form = new FormData();
    form.append("file", JSON.stringify(obj));
    var settings11 = {
      "async": true,
      "crossDomain": true,
      "url": 'http://192.168.0.101:6767/completed_client_request',
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
        msg1 = msg.records
        displaytable(msg1);

        data = msg.Client
        console.log(data);

        $.each(data ,function(key,i){
            $('#clientt').append('<option value='+key+'>'+key+'</option>')
        })
       var $dropdown = $('#clientt');
         console.log($dropdown);
         $dropdown.on('change', function() {
             console.log($dropdown);
             $('#brandd').empty();
             var a=data[$dropdown.val()];
             $.each(a,function(j){
                 console.log(a[j]);
                 $('#brandd').append('<option value='+a[j]+'>'+a[j]+'</option>')
             })
         });
      $dropdown.trigger('change');

      })
    }



    $("body").on("click", "#camp_idhyperlink_", function(){
          plainiddd =  $(this).attr('plainidattr');
          // alert()
          sessionStorage.setItem('create_plan_id', plainiddd);
           window.location.href = 'planner_createnewplan.php';
       });


    $("body").on("click", ".gobtn", function(){
      startdate = $('.startdateclass').val();
      enddate = $('.enddateclass').val();
      clientclass = $('.clientclass').val();
      brandclass = $('.brandclass').val();
      Campaignid = $('.Campaignidclass').val();

      objj = {}
      objj.startdate = startdate
      objj.enddate = enddate
      objj.clientclass = clientclass
      objj.brandclass = brandclass
      objj.Campaignid = Campaignid
      objj.IsDefault = false
        if (startdate!='' || enddate!='' || clientclass!='' || brandclass!='' || Campaignid!='') {

               if (startdate <= enddate) {
                    console.log(objj);
                    var form = new FormData();
                    form.append("file", JSON.stringify(objj));
                    var settings11 = {
                      "async": true,
                      "crossDomain": true,
                      "url": 'http://192.168.0.101:6767/completed_gobutton',
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
               else {
                    swal("Startdate should not be greater than Enddate")
                }
           }
           else {
             swal("please select anyone value for search!!..")
           }
    })


    function displaytable(msg) {
      if (dataTable___ != undefined) {
          dataTable___.clear();
          dataTable___.destroy()
      }
         row = ''
        for (var i = 0; i < msg.length; i++) {
                block = msg[i];
                  row += '<tr>';
                  row += '<td class="nr"><a key="'+i+'" style="text-decoration:underline; cursor:pointer;" id="camp_idhyperlink_"</a>'+block.CampaignId+'</td>';
                  row += '<td>'+block.BrandName+' </td>';
                  row += '<td>'+block.ClientName+'</td>';
                  row += '<td>'+block.CampaignName+'</td>';
                  row += '<td>'+format_date(block.StartDate)+'</td>';
                  row += '<td style="width:172px">'+format_date(block.EndDate)+'</td>';
                  // if (block.IsPrioritized == false) {
                  row += '<td><button class="replanmodal" Campaignid='+block.CampaignId+' plainidattr='+block.PlanId+'  style="background-color: #a5b1c2;color: #000;border: none;padding: 4PX;width: 68px;border-radius: 5px;">Re-Plan</button></td>';
                  row += '<td style="text-align:center"><div class="downloadbtn pointer"  plainidattr="'+block.PlanId+'" style=""><img src="assets/images/download.svg" style="width:27px;"></div></td>';


                // row += '<td> '+format_date(block.DateValidated)+' </td>';
                // row += '<td> '+block.CheckPointValidated+' </td>';
                row += '</tr>';
            }
            $(".displaytabledata").html(row)
                dataTableMultiSort();

    }

    var attr__
    $("body").on("click", ".replanmodal", function(){
      attr__ = $(this).attr('Campaignid')
      $('.buyingbasketbtn').attr('title', attr__);
        $('.acceleratorbtn').attr('title', attr__);
      $('#replanmodall').modal();
    })


    function dataTableMultiSort() {

        setTimeout(function () {
            dataTable___ = $('.datatable-multi-sorting').DataTable({
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
              // alert(updatedplanid)
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





    $("body").on("click", ".Prioritizebtn", function(){
      plainiddd =  $(this).attr('plainidattr');
      objjj = {}
      objjj.user_id = useridd
      objjj.plainid = plainiddd
      console.log(objjj);

      var form = new FormData();
      form.append("file", JSON.stringify(objjj));
      var settings11 = {
        "async": true,
        "crossDomain": true,
        "url": 'http://192.168.0.101:6767/ongoing_prioritize_button1',
        "method": "POST",
        "processData": false,
        "contentType": false,
        "mimeType": "multipart/form-data",
        "data": form
      };
      $.ajax(settings11).done(function (msg) {
        msg = JSON.parse(msg);
          console.log(msg);
            // displaytable(msg);
          })



    })


    function format_date(date_string) {
            date = new Date(date_string)
            months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
            weeks_ = ["Mon", "Tue", "Wed", "Thr", "Fri", "Sat", "Sun"];
            hours_mian = ["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11"];
            hrs = date.getHours().toString().length < 2 ? '0'+date.getHours() : date.getHours()
            mins = date.getMinutes().toString().length < 2 ? '0'+date.getMinutes() : date.getMinutes()
            return date.getDate()+'-'+months[date.getMonth()]+'-'+date.getFullYear()+' &nbsp&nbsp'+hrs+':'+mins;
        }

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
                    msg = JSON.parse(msg);
                    console.log(msg);
                    $('.pathslinks').empty()
                    for(key in msg ){
                        $('.pathslinks').append('<h5 class="sendpath" title="'+msg[key]+'"  file_name="'+key+'"><a href="#"  style="cursor:pointer">'+key+'</a></5>');
                    }
                })


        })


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



  })
