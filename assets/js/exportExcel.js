// var global_path;
// $("body").on("click", ".file_download", function(){
//   $('#myModal').modal();
// debugger
//   sendObj = {};
//   sendObj.plan_id = plan_id;
//   console.log(sendObj);
//   var form = new FormData();
//   form.append("file", JSON.stringify(sendObj));
//   var settings11 = {
//       "async": true,
//       "crossDomain": true,
//       "url": ' http://192.168.0.125:6767/get_file_names',
//       "method": "POST",
//       "processData": false,
//       "contentType": false,
//       "mimeType": "multipart/form-data",
//       "data": form
//   };
//   $.ajax(settings11).done(function (msg) {
//       msg = JSON.parse(msg);
//       console.log(msg);
//       for(key in msg ){
//           $('.modal-body').append('<h5 class="sendpath" title="'+msg[key]+'"><a href="#">'+key+'</a></5>');
//       }
//   })
// })
//
// $("body").on("click", ".sendpath", function(){
// var send_path = $(this).attr('title')
//   sendObj = {};
//   sendObj.file_path = send_path;
//   console.log(sendObj);
//   var form = new FormData();
//   form.append("file", JSON.stringify(sendObj));
//   var settings11 = {
//       "async": true,
//       "crossDomain": true,
//       "url": ' http://192.168.0.125:6767/download_file',
//       "method": "POST",
//       "processData": false,
//       "contentType": false,
//       "mimeType": "multipart/form-data",
//       "data": form
//   };
//   $.ajax(settings11).done(function (msg) {
//       // msg = JSON.parse(msg);
//       console.log(msg);
//
//            console.log(JSON.parse(msg))
//            msg_obj = msg
//            var blob = new Blob([s2ab(atob(encodeURI(msg_obj.blob)))], {
//                type: ''
//            });
//
//            href = URL.createObjectURL(blob);
//            var a = document.createElement("a");
//            a.href = href;
//            a.download = msg_obj.file_name;
//            document.body.appendChild(a);
//            a.click();
//
//
//   })
// })










function exportExcel(msg) {
  console.log(msg);
  exportTableName = [];
  exportTable = [];
  allkeysArr = [];
  tr = '';
  allkeys = '';

  for (var i = 0; i < msg.length; i++) {
    exportData = msg[i][6];
    allkeysArr.push('File Name');
    allvals = '<td>'+msg[i][0]+'</td>';
    $.each(exportData, function (k, v) {
      if (k != 'Table' && k != 'highlight') {
        // allkeys = allkeys + '<td>' + k + '</td>';
        allkeysArr.push(k);
        // allvals = allvals + '<td>' + v + '</td>';
      }
    })
    th = '';
    $.unique(allkeysArr);
    for (var j = 0; j < allkeysArr.length; j++) {
      th = th + '<td>'+allkeysArr[j]+'</td>';
      if (nullCheck(exportData[allkeysArr[j+1]])) {
        if(exportData[allkeysArr[j+1]] != 'None'){
          allvals = allvals + '<td>' + exportData[allkeysArr[j+1]] + '</td>';
        }
        else {
          allvals = allvals + '<td></td>';
        }
      }
      else {
        allvals = allvals + '<td></td>';
      }

    }
    tr = tr + '<tr>'+allvals+'</tr>';
  }
  console.log(allkeysArr, tr);
  file_name_excel = 'Result';
  exportTableName.push(file_name_excel);
  $(".ExportTableMain").append('<table class="newtable-'+i+'"><tr>'+th+'</tr>'+tr+'</table>');
  exportTable.push('newtable-'+i)
  $('.sendpath').attr("tables", JSON.stringify(exportTable))
  $('.sendpath').attr("tablenames", JSON.stringify(exportTableName))
  $('.sendpath').attr("file","Report");
}

// $("body").on("click", "#btnExport_", function () {
//   SheetNames = JSON.parse($(this).attr("tablenames"));
//   Sheets = JSON.parse($(this).attr("tables"));
//   filenameMain = $('#btnExport_').attr("file");
//   var blob, wb = {SheetNames:[], Sheets:{}};
//   for (var i = 0; i < SheetNames.length; i++) {
//     wb.SheetNames.push(SheetNames[i]);
//     table=$('.'+Sheets[i]).html();
//     console.log(table);
//     finalTable = '<html><table>'+table.replace(/<br>/g, " ")+'</table></html>'
//     console.log(finalTable);
//     var ws1 = XLSX.read(finalTable, {type:"binary"}).Sheets.Sheet1;
//     wb.Sheets[SheetNames[i]] = ws1;
//   }
//
//   blob = new Blob([s2ab(XLSX.write(wb, {bookType:'xlsx', type:'binary'}))], {
//       type: "application/octet-stream"
//   });
//
//   saveAs(blob, "D:\\123.xlsx");
// });
//
// function s2ab(s) {
//   var buf = new ArrayBuffer(s.length);
//   var view = new Uint8Array(buf);
//   for (var i=0; i!=s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
//   return buf;
// }


// $("body").on("click", "#btnExport_", function () {
//
//   sendObj = {};
//   var form = new FormData();
//   form.append("file", JSON.stringify(sendObj));
//   var settings11 = {
//     "async": true,
//     "crossDomain": true,
//     "url": aws_url+"get_excel",
//     "method": "POST",
//     "processData": false,
//     "contentType": false,
//     "mimeType": "multipart/form-data",
//     "data": form
//   };
//
//  $.ajax(settings11).done(function (msg) {
//    console.log(msg);
//    console.log(JSON.parse(msg))
//    msg_obj = JSON.parse(msg)
//    var blob = new Blob([s2ab(atob(encodeURI(msg_obj.blob)))], {
//        type: ''
//    });
//
//    href = URL.createObjectURL(blob);
//    var a = document.createElement("a");
//    a.href = href;
//    a.download = msg_obj.file_name;
//    document.body.appendChild(a);
//    a.click();
//  });
// });
//
//
// function s2ab(s) {
//  var buf = new ArrayBuffer(s.length);
//  var view = new Uint8Array(buf);
//  for (var i=0; i!=s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
//  return buf;
// }
