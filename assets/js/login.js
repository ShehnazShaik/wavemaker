$(document).ready(function () {
  // var today = new Date();
  // var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  // var time = today.getHours() + ":" + today.getMinutes();
  // var dateTime = date+' '+time;

$("body").on("click", ".login_btn", function () {
 currentdate = new Date().toLocaleString();
  username = $('.useridclass').val();
  password = $('.passwordclass').val();

  console.log(username+"...."+password);
  login(username, password, currentdate)
})


$('.login_input').keypress(function(event){
  currentdate = new Date().toLocaleString();
   username = $('.useridclass').val();
   password = $('.passwordclass').val();
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
      username = $('.useridclass').val();
      password = $('.passwordclass').val();
      login(username, password, currentdate)
    }
  });



function login(username, password, currentdate) {
  sendObj = {};
  sendObj.useremail = username;
  sendObj.password = password;
  sendObj.currentdate = currentdate;
  console.log(sendObj);
    localStorage.clear()
    var form = new FormData();
    form.append("file", JSON.stringify(sendObj));
    var settings11 = {
      "async": true,
      "crossDomain": true,
      "url": 'http://192.168.0.101:6767/Login_page',
      "method": "POST",
      "processData": false,
      "contentType": false,
      "mimeType": "multipart/form-data",
      "data": form
    };
    $.ajax(settings11).done(function (msg) {
      msg = JSON.parse(msg);
        console.log(msg);
        if (msg.validlogin == "true") {
          localStorage.setItem("allprevialges",JSON.stringify(msg.privilegers))
              localStorage.setItem("tool_tips",JSON.stringify(msg.tool_tips))
            // localStorage.setItem("allprevialges",JSON.stringify(msg.isnewuser))
            //   localStorage.setItem("allprevialges",JSON.stringify(msg.privilegers))
          console.log(localStorage);
                    sessionStorage.setItem("isnewuser",msg.isnewuser)
                    sessionStorage.setItem("role",msg.role)
                    sessionStorage.setItem("useremail",msg.useremail)
                    sessionStorage.setItem("userid",msg.user_id)
                    sessionStorage.setItem("sessionidd",msg.sessionid)
                    sessionStorage.setItem("usernamee",msg.username)


           // roleee =JSON.parse(sessionStorage.getItem("role"))
           // console.log(roleee);
           if(msg.role == "Admin"){
                window.location.href="adminindex.php";
           }
           else {
               if (msg.isnewuser == "true") {
                   window.location.href="userprofile.php";
               }
               else {
                   window.location.href="planner_ongoing_dashboard.php";
               }
           }
        }
        else {
          swal("invalid username/password")
        }

})
}




})
