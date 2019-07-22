$(document).ready(function () {
    $('.loading').show();
    var edit_flag = false;
    var base_tg_;
    var campaignId_; var campaignMarkets; var endWeekId_; var primaryTGTd_;
    var plan_id= sessionStorage.getItem('create_plan_id');
    var userid= sessionStorage.getItem('userid');
    var count = 0;
    barcData();
    $('.select2').hide();
    function barcData() {
        plan_id = sessionStorage.getItem('create_plan_id');
        sendObj = {};
        sendObj.planId = plan_id;
        console.log(sendObj);
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/Barc_Plan_Freeze',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            $('.loading').hide();
            $(".select2").addClass('hide');
            base_tg_ =  msg.BaseTGId;
            campaignId_ = msg.CampaignId;
            campaignMarkets = msg.CampaignMarketId;
            console.log(campaignMarkets);
            endWeekId_ = msg.EndWeek;
            primaryTGTd_ = msg.PrimaryTGTd;
            for (var i = 0; i < campaignMarkets.length; i++) {
                    $(".select_markets").append('<p class="multiclient form-control getClass" value='+campaignMarkets[i]+' readonly style="background-color:#d6d6d6;">'+campaignMarkets[i]+'</p>')


            }
            $(".primary_freeze").append('<p type="text" value='+primaryTGTd_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+primaryTGTd_+'</p>')

            $(".camp_id").append('<p type="text" value='+campaignId_+' class="multiclient form-control" readonly style="background-color:#d6d6d6;">'+campaignId_+'</p>')

            $(".base_freeze").append('<p type="text" value='+base_tg_+' class="form-control" readonly style="background-color:#d6d6d6;">'+base_tg_+'</p>')

            $('.endfreeze').append('<p type="text" value='+endWeekId_+' class="form-control" readonly style="background-color:#d6d6d6;">'+endWeekId_+'</p>')

        })
    }
    // $('.confirm_barc').prop('disabled', false);
    $('body').on('click', '.edit_barc', function(){
        $('.confirm_barc').prop('disabled', false);
        edit_flag = true;
        sendObj = {};
        var form = new FormData();
        form.append("file", JSON.stringify(sendObj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/BARC_Evalution_edit_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            console.log(msg);
            $('.select2').show();
            var Base_Tg_dt = msg.Base_Tg_dt;
            var Campaign_Market_dt = msg.Campaign_Market_dt;
            var End_Week_dt = msg.End_Week_dt;
            var Primary_Tg_dt= msg.Primary_Tg_dt;

            for(key in Base_Tg_dt){
                console.log();
                $(".base_tg").append('<option value='+Base_Tg_dt[key]+' class="get_Base_Tg_dt-'+count+'" key='+key+'>'+Base_Tg_dt[key]+'</option>');
                count++
            }
            for(key in Campaign_Market_dt){
                $(".campaign_markets").append('<option value='+Campaign_Market_dt[key]+' class="get_Campaign_Market_dt-'+count+'" key='+key+'>'+Campaign_Market_dt[key]+'</option>');
                count++
            }

            for(key in Primary_Tg_dt){
                $(".Primary_Tg_dt").append('<option value='+Primary_Tg_dt[key]+' class="get_Primary_Tg_dt-'+count+'" key='+key+'>'+Primary_Tg_dt[key]+'</option>');
                count++
            }

            for(key in End_Week_dt){
                $(".End_Week_dt").append('<option value='+End_Week_dt[key]+' class="get_End_Week_dt-'+count+'" key='+key+'>'+End_Week_dt[key]+'</option>');
                count++
            }

        })

    })

    $('body').on('click', '.confirm_barc', function(){
        $(this).prop("disbaled", true)
        debugger
        $('.loading').show();
        obj = {}
        camp_markets = []
        selectedValues = $(".campaign_markets").select2('data');
        for (var i = 0; i < selectedValues.length; i++) {
            camp_markets.push(selectedValues[i].text);
        }
        var key_primary_tg = $(".Primary_Tg_dt").find("option:selected").attr('key');
        var key_base_tg = $(".base_tg").find("option:selected").attr('key');
        var key_end_week = $(".End_Week_dt").find("option:selected").attr('key');
        obj.edit = edit_flag;
        obj.PlanId = plan_id;
        obj.UserId = userid;
        obj.PrimaryTGTd = key_primary_tg;
        obj.BaseTGId = key_base_tg;
        obj.EndWeekId = key_end_week;
        obj.CampaignMarketId = $.unique(camp_markets);
        console.log(obj);
         swal("Modified successfully");
         $('.select2').css('background', '#ccc');
         $('.campaign_markets').css('background', '#ccc');
         $('.select2-selection--multiple').prop('readonly', true);

         $('.select2').css('background', '#ccc');

        var form = new FormData();
        form.append("file", JSON.stringify(obj));
        var settings11 = {
            "async": true,
            "crossDomain": true,
            "url": ' http://192.168.0.125:6767/BARC_confirm_button',
            "method": "POST",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings11).done(function (msg) {
            msg = JSON.parse(msg);
            $('.loading').hide();
            swal("Modified successfully");
            console.log(msg);
            // e.preventDefault();
            // setTimeout(function(){
            //     barcData();
            //
            // },2000)
        })
    })
    $('body').on('click', '.backclass', function(){
        sessionStorage.setItem('backclicked', true);
        window.location.href="buyingbasket.php";
    })

})
