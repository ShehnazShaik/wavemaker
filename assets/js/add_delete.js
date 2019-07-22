$(document).ready(function () {
    var useridd = sessionStorage.getItem("userid");
    addpageonloadhit()
    function addpageonloadhit() {
        obj = {}
        obj.userid = useridd
        console.log(obj);
        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.125:6767/add_planner_onload',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            allemails = msg.emails
            allclients = msg.clients
            $(".allemailsvalues").html('')
                      $(".allemailsvalues").append("<option value='0'>Select Project</option>")

            for (var i = 0; i < allemails.length; i++) {
                $('.allemailsvalues').append('<option value='+allemails[i]+'>'+allemails[i]+'</option>')
            }
            $(".allclientnames").html('')
                      $(".allclientnames").append("<option value='0'>---Select Project--</option>")

            $.each(allclients ,function(key,val){
                $('.allclientnames').append('<option class="clientoptionclass" keyy='+key+' value='+val+'>'+val+'</option>')
            })



        })
    }
    $("body").on("click", ".addsavebtn", function(){
        email = $('.emailvalue').val()
        clientname = $('.clientoptionclass').attr("keyy")
        objj = {}
        objj.email = email
        objj.clientid = clientname
        objj.userid = useridd
        console.log(objj);
        var form = new FormData();
        form.append("file", JSON.stringify(objj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.125:6767/add_save_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            if (msg = "updated") {
                swal('updated succesfully!!....');
                setInterval(function(){  location.reload(); }, 1500);
            }

        })

    })

    $("body").on("click", ".deleteheaderbtn", function(){
        deletepageonloadhit()
    })

    function deletepageonloadhit() {
        obj = {}
        obj.userid = useridd
        console.log(obj);
        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.125:6767/delete_planner_onload',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);

            data = msg
            console.log(data);
            $(".clientdelete").html('')
                      $(".clientdelete").append("<option value='0'>--Select Project---</option>")

            $.each(data ,function(key,i){
                console.log(key);
                $('.clientdelete').append('<option value='+key+'>'+key+'</option>')
            })

            var $dropdown = $('.clientdelete');
            console.log($dropdown);
            $dropdown.on('change', function() {
                console.log($dropdown);
                $('.deletemails').empty();
                var a=data[$dropdown.val()];

                $(".deletemails").html('')
                          $(".deletemails").append("<option value='0'>---Select Project---</option>")

                $.each(a,function(j){
                    console.log(a[j]);
                    $('.deletemails').append('<option value='+a[j]+'>'+a[j]+'</option>')
                })
            });
            $dropdown.trigger('change');


        })
    }

    $("body").on("click", ".deletesavebtn", function(){
        email = $('.deletemails').val()
        clientdelete = $('.clientdelete').val()
        objjj = {}
        objjj.email = email
        objjj.clientname = clientdelete
        objjj.userid = useridd
        console.log(objjj);
        var form = new FormData();
        form.append("file", JSON.stringify(objjj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": 'http://192.168.0.125:6767/delete_save_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            swal("Removed succesfully!!..")
            setInterval(function(){  location.reload(); }, 1500);

        })

    })

})
