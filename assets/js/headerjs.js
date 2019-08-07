$(document).ready(function () {
$("body").on("click", ".logoutbtn", function () {
          var sessionidddd = sessionStorage.getItem("sessionidd");
        var currentdate = new Date().toLocaleString();
        //
        obj = {}
        obj.sessionid = sessionidddd
        obj.loggedoutdatetime = currentdate
        obj.issessiontimedout = "false"
        console.log(obj);
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
            if (msg == "logoutsuccess") {
               window.location.href="index.php";
               sessionStorage.clear();
               localStorage.clear();
            }

          })

})
})
