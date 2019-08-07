$(document).ready(function () {
  $(".loading").show();
  var useridd = sessionStorage.getItem("userid");
  var userrole = sessionStorage.getItem("role");
  var dataTable___;
  if (userrole!= 'Planner') {
    debugger
    $('#hidepri').show()
  }
  else {
    $('#hidepri').hide()
  }


  $(".displaytoptextboxes").slideToggle('hidden');
  $(".btn3").click(function(){
           $(".displaytoptextboxes").slideToggle('slow');
     });


  pageonloadhit()
  function pageonloadhit() {
    obj = {}
    startdate = $('.startdateclass').val();
    enddate = $('.enddateclass').val();
    clientclass = $('.clientclass').val();
    brandclass = $('.brandclass').val();
    Campaignid  = $('.Campaignidclass').val();
    // obj.user_id = useridd
    obj.IsDefault = true
    obj.startdate = startdate
    obj.enddate = enddate
    obj.user_id = useridd
    obj.clientclass = clientclass
    obj.brandclass = brandclass
    obj.Campaignid = Campaignid
    console.log(obj);
    var form = new FormData();
    form.append("file", JSON.stringify(obj));
    var settings11 = {
      "async": true,
      "crossDomain": true,
      "url": 'http://192.168.0.101:6767/ongoing_client_request',
      "method": "POST",
      "processData": false,
      "contentType": false,
      "mimeType": "multipart/form-data",
      "data": form
    };
    $.ajax(settings11).done(function (msg) {
      msg = JSON.parse(msg);
        console.log(msg);

        data = msg.Client
        recordss = msg.records
        // console.log(data);
        console.log(recordss);
          displaytable(recordss);

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

    $("body").on("click", ".gobtn", function(){
    objj = {}
    startdate = $('.startdateclass').val();
    enddate = $('.enddateclass').val();
    clientclass = $('.clientclass').val();
    brandclass = $('.brandclass').val();
    Campaignid  = $('.Campaignidclass').val();
    objj.startdate =startdate;
    objj.enddate =enddate;
    objj.clientclass = clientclass
    objj.brandclass = brandclass
    objj.Campaignid = Campaignid
    objj.IsDefault = false
    if (startdate!='' || enddate!='' || clientclass!='' || brandclass!='' || Campaignid!='') {
        if(startdate <= enddate){
        console.log(objj);
          var form = new FormData();
          form.append("file", JSON.stringify(objj));
          var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.101:6767/ongoing_gobutton',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
          };
          $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
              console.log(msg);
              // $(".loading").hide();
                displaytable(msg);
                // dataTableMultiSort()
              //       $.each(msg ,function(key,v){
              //         ap1 = ''
              //     // for (var i = 0; i < v.msg; i++) {
              //     for (var i = 0; i < msg.length; i++) {
              //       msg[i]
              //         ap1 += '<tr>'
              //          ap1 += '<td  style="text-align:center;"><a  plainidattr="'+v[i]['PlanId']+'" id="camp_idhyperlink">'+v[i]['CampaignId']+'</a></td>'
              //          ap1 += '<td  style="text-align:center;">'+msg[i]['CampaignName']+ '</td>'
              //          ap1 += '<td  style="text-align:center;">'+v[i]['ClientName']+'</td>'
              //          ap1 += '<td  style="text-align:center;">'+v[i]['BrandName']+'</td>'
              //          ap1 += '<td  style="text-align:center;">'+v[i]['CreatedDate']+'</td>'
              //           ap1 += '<td> <button  plainidattr="'+v[i]['PlanId']+'" style="color: white;background: green;padding: 1px;font-size: 9px;" class="form-control completebtn">Mark As Complete</button> </td>'
              //         ap1 += '</tr>'
              //     // }
              //
              //
              //   }
              // })
            })

  }
        else {
        swal("Please enter valid Dates")
      }
    }
    else {
      swal("please select anyone value for search")
    }


    })




    function displaytable(msg) {
      if (dataTable___ != undefined) {
          dataTable___.clear();
          dataTable___.destroy()
      }
      debugger
         row = ''
         $(".loading").hide();
        for (var i = 0; i < msg.length; i++) {
                block = msg[i];
                  row += '<tr>';
                  row += '<td class="nr"><a key="'+i+'" style="text-decoration:underline; cursor:pointer;" plainidattr="'+block.PlanId+'" id="camp_idhyperlink_"</a>'+block.CampaignId+'</td>';
                  row += '<td>'+block.BrandName+' </td>';
                  row += '<td>'+block.ClientName+'</td>';
                  row += '<td>'+block.CampaignName+'</td>';
                  row += '<td>'+format_date(block.StartDate)+'</td>';
                if (userrole!= 'Planner') {
                  if (block.IsPrioritized == false) {
                      row += '<td><button  style="" plainidattr="'+block.PlanId+'"  class="Prioritizebtn">Prioritize</button></td>';

                  }
                  else {
                      row += '<td  style="color:#2ed573;font-weight:600" plainidattr="'+block.PlanId+'">Prioritized</td>';
                  }
                }
                  row += '<td style="text-align:center"><div class="downloadbtn pointer"  plainidattr="'+block.PlanId+'" style=""><img src="assets/images/download.svg" style="width:27px;"></button></td>';
                // row += '<td> '+format_date(block.DateValidated)+' </td>';
                // row += '<td> '+block.CheckPointValidated+' </td>';

                row += '</tr>';
            }
            $(".displaytabledata").html(row)
            dataTableMultiSort()



    }




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


    $("body").on("click", "#camp_idhyperlink_", function(){
          plainiddd =  $(this).attr('plainidattr');
          sessionStorage.setItem('create_plan_id', plainiddd);
          // alert(plainiddd)
           window.location.href = 'planner_createnewplan.php';
       });


    $("body").on("click",".Prioritizebtn",function() {
        plainiddd =  $(this).attr('plainidattr');
        swal({
            title: "Are you sure you want  to Prioritize?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
              objjj = {}
              objjj.user_id = useridd
              objjj.plainid = plainiddd
              objjj.startdate =$('.startdateclass').val();
              objjj.enddate = $('.enddateclass').val();
              objjj.clientclass =$('.clientclass').val();
              objjj.brandclass =$('.brandclass').val();
              objjj.Campaignid = $('.Campaignidclass').val();
              console.log(objjj)
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
                           swal("Success", "Updated succesfully!", "success");
                            displaytable(msg);
                          })
            }
        });
      })
      $("body").on("click", ".downloadbtn", function(){
          debugger
        plainiddd =  $(this).attr('plainidattr');
              $('#replanmodall').modal()
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
                  console.log(msg.length);
                  keys = Object.keys(filesData);
                  $('.row_body').html('')
                  for (var i = 0; i < keys.length; i++) {
                      $('.row_body').append('<div class="col-sm-3"><div class="fileClick pointer" title="'+keys[i]+'"><span>'+keys[i]+'</span></div></div>');
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
