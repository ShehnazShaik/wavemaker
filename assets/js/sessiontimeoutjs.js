
var session_TimeOut = 900; //seconds
var _idleSecondsTimer = null;
var secountsCounter = 0;

document.onclick = function () {
 secountsCounter = 0;
};

document.onmousemove = function () {
  secountsCounter = 0;
};

document.onkeypress = function () {
  secountsCounter = 0;
};

var data = window.setInterval(checkSessionTime, 1000);
var currentdate = new Date().toLocaleString();
var sessionidddd = sessionStorage.getItem("sessionidd");

function checkSessionTime() {
  secountsCounter++;
  // console.log(secountsCounter);
  if(secountsCounter==15){
    obj = {}
    obj.sessionid = sessionidddd
    obj.loggedoutdatetime = currentdate
    obj.issessiontimedout = "true"
    // console.log(obj);
    var form = new FormData();
    form.append("file", JSON.stringify(obj));
    var settings11 = {
      "async": true,
      "crossDomain": true,
      "url": 'http://192.168.0.101:6767/logout_button',
      "method": "POST",
      "processData": false,
      "contentType": false,
      "mimeType": "multipart/form-data",
      "data": form
    };
    $.ajax(settings11).done(function (msg) {
      msg = JSON.parse(msg);
      console.log(msg);
// if (msg == "logoutsuccess") {
// window.location.href="index.php";
// }

  })

  }
  if (secountsCounter >= session_TimeOut) {
    window.clearInterval(secountsCounter);
    var dat = new Date();
    // var sessionidddd = sessionStorage.getItem("sessionidd");
    // var currentdate = new Date().toLocaleString();
//

// sendObj = {};
// sendObj.session = "true";
// sendObj.datetime = dat;
//
//
//
//
// console.log(dat)
  alert("Your session is expired!");

  window.location.href = "index.php";

  secountsCounter = 0;
  }
}
