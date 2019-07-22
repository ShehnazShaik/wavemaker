$(document).ready(function () {
  var startdate;
  var enddate;
    var useridd = sessionStorage.getItem("userid");
    pageonloadhit()

    function pageonloadhit() {
      obj = {}

      brandclass = $('.brandclass').val();
      obj.userid = useridd
      obj.IsDefault = true

      console.log(obj);
      var form = new FormData();
      form.append("file", JSON.stringify(obj));
      var settings11 = {
        "async": true,
        "crossDomain": true,
        "url": 'http://192.168.0.125:6767/Dashboard_screen_load',
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

    //
    // function format_dateee(date_string) {
    //              date = new Date(date_string)
    //              months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
    //              weeks_ = ["Mon", "Tue", "Wed", "Thr", "Fri", "Sat", "Sun"];
    //              hours_mian = ["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11"];
    //              hrs = date.getHours().toString().length < 2 ? '0'+date.getHours() : date.getHours()
    //              mins = date.getMinutes().toString().length < 2 ? '0'+date.getMinutes() : date.getMinutes()
    //              return date.getFullYear()+'-'+months[date.getMonth()]+'-'+date.getDate()
    //          }
    //
    //
    //
    //          var weekstart = format_dateee(new Date())
    //          console.log(weekstart);
    //          $('.startdateclass').val(weekstart)
    //
    //          function addDays(theDate, days) {
    //              return new Date(theDate.getTime() + days*24*60*60*1000);
    //          }
    //
    //          var endweek = format_dateee(addDays(new Date(), 7));
    //          $('.enddateclass').val(endweek)
    //
    //         // alert(startingweek);
    //         // alert(endingweek);
    //
    //
    //
    //         pageonloadhit()
    //         function pageonloadhit() {
    //           obj = {}
    //           obj.startdate = $('.startdateclass').val()
    //           obj.enddate = $('.enddateclass').val()
    //           obj.userid =  useridd
    //           console.log(obj);
    //           var form = new FormData();
    //           form.append("file", JSON.stringify(obj));
    //           var settings11 = {
    //             "async": true,
    //             "crossDomain": true,
    //             "url": 'http://192.168.0.125:6767/Dashboard_screen_load',
    //             "method": "POST",
    //             "processData": false,
    //             "contentType": false,
    //             "mimeType": "multipart/form-data",
    //             "data": form
    //           };
    //           $.ajax(settings11).done(function (msg) {
    //             msg = JSON.parse(msg);
    //               console.log(msg);
    //                 displaytable(msg)
    //           })
    //           }

    $("body").on("click", ".gobtn", function(){
      startdate =   $('.startdateclass').val();
      enddate =   $('.enddateclass').val();
      if (startdate!='' || enddate!='') {
          if(startdate <= enddate){
              objj = {}
              objj.startdate = startdate
              objj.enddate =  enddate
              objj.userid =  useridd
              console.log(objj);
                var form = new FormData();
                form.append("file", JSON.stringify(objj));
                var settings11 = {
                  "async": true,
                  "crossDomain": true,
                  "url": ' http://192.168.0.125:6767/Dashboard_Table_One',
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
      $.each(msg ,function(key,v){
         console.log(key , v);
         if (key == 'Incompleted') {
            ap1 = ''
            for (var i = 0; i < v.length; i++) {
                ap1 += '<tr>'
                 ap1 += '<td  style="text-align:center;"><a  style="text-decoration:underline; color:#440cd1;cursor:pointer;" plainidattr="'+v[i]['PlanId']+'" id="camp_idhyperlink">'+v[i]['CampaignId']+'</a></td>'
                 ap1 += '<td  style="text-align:center;">'+v[i]['CampaignName']+ '</td>'
                 ap1 += '<td  style="text-align:center;">'+v[i]['ClientName']+'</td>'
                 ap1 += '<td  style="text-align:center;">'+v[i]['BrandName']+'</td>'
                 ap1 += '<td  style="text-align:center;">'+format_date(v[i]['StartDate'])+'</td>'
                  ap1 += '<td> <button  plainidattr="'+v[i]['PlanId']+'" style="color: white;background: green;padding: 1px;font-size: 9px;width: 94px;  width: 94px;" class="form-control completebtn">Mark As Complete</button> </td>'
                    ap1 += '<td><button class="downloadbtn"  plainidattr="'+v[i]['PlanId']+'" style="color: white;background-color: back;background-color: #dc4d4d;border: none;">Download</button></td>';
                ap1 += '</tr>'
            }
           $(".displayincompletedplans").html(ap1);

         }
         else {
           ap = ''

           for (var i = 0; i < v.length; i++) {
               ap += '<tr>'
                ap += '<td  style="text-align:center;"><a  style="text-decoration:underline; color:#440cd1;cursor:pointer;" plainidattr="'+v[i]['PlanId']+'" id="camp_idhyperlink_">'+v[i]['CampaignId']+'</a></td>'
                ap += '<td  style="text-align:center;">'+v[i]['CampaignName']+'</td>'
                ap += '<td  style="text-align:center;">'+v[i]['ClientName']+'</td>'
                ap += '<td  style="text-align:center;">'+v[i]['BrandName']+'</td>'
                ap += '<td  style="text-align:center;">'+format_date(v[i]['StartDate'])+'</td>'
                ap += '<td  style="text-align:center;">'+format_date(v[i]['EndDate'])+'</td>'
                    ap += '<td><button class="downloadbtn" plainidattr="'+v[i]['PlanId']+'" style="color: white;background-color: back;background-color: #dc4d4d;border: none;">Download</button></td>'

               ap += '</tr>'
           }
          $(".displaycompletedplans").html(ap);
         }
      })

    }


      $("body").on("click", ".downloadbtn", function(){
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
                  "url": ' http://192.168.0.125:6767/get_file_names',
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
              "url": ' http://192.168.0.125:6767/download_file',
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
              sessionStorage.setItem('backclicked', false);
                plainiddd =  $(this).attr('plainidattr');
                // alert(plainiddd)
                sessionStorage.setItem('create_plan_id', plainiddd);
                 window.location.href = 'planner_createnewplan.php';
             });

      $("body").on("click", "#camp_idhyperlink", function(){
          sessionStorage.setItem('backclicked', false);
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
                  objj.userid =  useridd
                  objj.Id =  Id
                  console.log(objj);
                    var form = new FormData();
                    form.append("file", JSON.stringify(objj));
                    var settings11 = {
                      "async": true,
                      "crossDomain": true,
                      "url": ' http://192.168.0.125:6767/Dashboard_Complete_Button',
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
     //           objjj.userid = useridd
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
     //                     "url": 'http://192.168.0.125:6767/ongoing_prioritize_button1',
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
