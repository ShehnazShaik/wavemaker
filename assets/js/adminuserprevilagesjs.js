$(document).ready(function () {
  var useridd = sessionStorage.getItem("userid");
  $(".submitbtn").hide();
  // $(".editdropdown").hide();


  pageonloadhit()
  function pageonloadhit() {
          msg =
              {
                "planner": [
                  {
                    "Privilege_Name": "assignPlannerToClient",
                    "Privilage_Id": 18,
                    "Privilage_Value": "No",
                    "Privilage_Description": " edits privileges"
                  },
                  {
                    "Privilege_Name": "createuserprofile",
                    "Privilage_Id": 1,
                    "Privilage_Value": "No",
                    "Privilage_Description": "can access only userpages"
                  },
                  {
                    "Privilege_Name": "editCreatePlan",
                    "Privilage_Id": 6,
                    "Privilage_Value": "No",
                    "Privilage_Description": "prioritylist"
                  },
                  {
                    "Privilege_Name": "editDashboard",
                    "Privilage_Id": 9,
                    "Privilage_Value": "No",
                    "Privilage_Description": "mastersdata"
                  },
                  {
                    "Privilege_Name": "editMasterData",
                    "Privilage_Id": 15,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": " views created the plan"
                  },
                  {
                    "Privilege_Name": "editPrivileges",
                    "Privilage_Id": 17,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": " edits dashboard"
                  },
                  {
                    "Privilege_Name": "editUserProfile",
                    "Privilage_Id": 4,
                    "Privilage_Value": "No",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "prioritizePlan",
                    "Privilage_Id": 19,
                    "Privilage_Value": "No",
                    "Privilage_Description": "viewsprivileges"
                  },
                  {
                    "Privilege_Name": "viewCompletedPlans",
                    "Privilage_Id": 13,
                    "Privilage_Value": "No",
                    "Privilage_Description": "edits thepages"
                  },
                  {
                    "Privilege_Name": "viewCreatePlan",
                    "Privilage_Id": 5,
                    "Privilage_Value": "No",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "viewDashboard",
                    "Privilage_Id": 7,
                    "Privilage_Value": "No",
                    "Privilage_Description": "assignsplanner"
                  },
                  {
                    "Privilege_Name": "viewMasterData",
                    "Privilage_Id": 14,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "creates the plan"
                  },
                  {
                    "Privilege_Name": "viewOngoingPlans",
                    "Privilage_Id": 10,
                    "Privilage_Value": "No",
                    "Privilage_Description": "editmastersdata"
                  },
                  {
                    "Privilege_Name": "viewPrivileges",
                    "Privilage_Id": 16,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": " views dashboard"
                  }
                ],
                "clientlead": [
                  {
                    "Privilege_Name": "assignPlannerToClient",
                    "Privilage_Id": 18,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": " edits privileges"
                  },
                  {
                    "Privilege_Name": "createuserprofile",
                    "Privilage_Id": 1,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "can access only userpages"
                  },
                  {
                    "Privilege_Name": "editCreatePlan",
                    "Privilage_Id": 6,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "prioritylist"
                  },
                  {
                    "Privilege_Name": "editDashboard",
                    "Privilage_Id": 9,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "mastersdata"
                  },
                  {
                    "Privilege_Name": "editMasterData",
                    "Privilage_Id": 15,
                    "Privilage_Value": "No",
                    "Privilage_Description": " views created the plan"
                  },
                  {
                    "Privilege_Name": "editPrivileges",
                    "Privilage_Id": 17,
                    "Privilage_Value": "No",
                    "Privilage_Description": " edits dashboard"
                  },
                  {
                    "Privilege_Name": "editUserProfile",
                    "Privilage_Id": 4,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "prioritizePlan",
                    "Privilage_Id": 19,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "viewsprivileges"
                  },
                  {
                    "Privilege_Name": "viewCompletedPlans",
                    "Privilage_Id": 13,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "edits thepages"
                  },
                  {
                    "Privilege_Name": "viewCreatePlan",
                    "Privilage_Id": 5,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "viewDashboard",
                    "Privilage_Id": 7,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "assignsplanner"
                  },
                  {
                    "Privilege_Name": "viewMasterData",
                    "Privilage_Id": 14,
                    "Privilage_Value": "No",
                    "Privilage_Description": "creates the plan"
                  },
                  {
                    "Privilege_Name": "viewOngoingPlans",
                    "Privilage_Id": 10,
                    "Privilage_Value": "Yes",
                    "Privilage_Description": "editmastersdata"
                  },
                  {
                    "Privilege_Name": "viewPrivileges",
                    "Privilage_Id": 16,
                    "Privilage_Value": "No",
                    "Privilage_Description": " views dashboard"
                  }
                ],
                "admin": [
                  {
                    "Privilege_Name": "assignPlannerToClient",
                    "Privilage_Id": 18,
                    "Privilage_Value": "No",
                    "Privilage_Description": " edits privileges"
                  },
                  {
                    "Privilege_Name": "createuserprofile",
                    "Privilage_Id": 1,
                    "Privilage_Value": "No",
                    "Privilage_Description": "can access only userpages"
                  },
                  {
                    "Privilege_Name": "editCreatePlan",
                    "Privilage_Id": 6,
                    "Privilage_Value": "No",
                    "Privilage_Description": "prioritylist"
                  },
                  {
                    "Privilege_Name": "editDashboard",
                    "Privilage_Id": 9,
                    "Privilage_Value": "No",
                    "Privilage_Description": "mastersdata"
                  },
                  {
                    "Privilege_Name": "editMasterData",
                    "Privilage_Id": 15,
                    "Privilage_Value": "No",
                    "Privilage_Description": " views created the plan"
                  },
                  {
                    "Privilege_Name": "editPrivileges",
                    "Privilage_Id": 17,
                    "Privilage_Value": "No",
                    "Privilage_Description": " edits dashboard"
                  },
                  {
                    "Privilege_Name": "editUserProfile",
                    "Privilage_Id": 4,
                    "Privilage_Value": "No",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "prioritizePlan",
                    "Privilage_Id": 19,
                    "Privilage_Value": "No",
                    "Privilage_Description": "viewsprivileges"
                  },
                  {
                    "Privilege_Name": "viewCompletedPlans",
                    "Privilage_Id": 13,
                    "Privilage_Value": "No",
                    "Privilage_Description": "edits thepages"
                  },
                  {
                    "Privilege_Name": "viewCreatePlan",
                    "Privilage_Id": 5,
                    "Privilage_Value": "No",
                    "Privilage_Description": "getslist"
                  },
                  {
                    "Privilege_Name": "viewDashboard",
                    "Privilage_Id": 7,
                    "Privilage_Value": "No",
                    "Privilage_Description": "assignsplanner"
                  },
                  {
                    "Privilege_Name": "viewMasterData",
                    "Privilage_Id": 14,
                    "Privilage_Value": "No",
                    "Privilage_Description": "creates the plan"
                  },
                  {
                    "Privilege_Name": "viewOngoingPlans",
                    "Privilage_Id": 10,
                    "Privilage_Value": "No",
                    "Privilage_Description": "editmastersdata"
                  },
                  {
                    "Privilege_Name": "viewPrivileges",
                    "Privilage_Id": 16,
                    "Privilage_Value": "No",
                    "Privilage_Description": " views dashboard"
                  }
                ]
              }
    //   msg = JSON.parse(msg);
        console.log(msg);


        $.each(msg ,function(key,i){
          // console.log(key);
            $('#usergrp').append('<option value='+key+'>'+key+'</option>')
            // console.log(i);
        })


        // $.each(data ,function(key,i){
        //     $('#clientt').append('<option value='+key+'>'+key+'</option>')
        // })
        $('.displayhere').empty()
        // count =0
        var $dropdown = $('#usergrp');
         console.log($dropdown);
         $dropdown.on('change', function() {
             console.log($dropdown);
             $('.displayhere').empty();
             var a=msg[$dropdown.val()];
             $.each(a,function(j){
               // count++
                 console.log(a[j].Privilage_Description);
                 $('.displayhere').append('<tr><td>'+a[j].Privilage_Description+'</td><td class="beforeedit">'+a[j].Privilage_Value+'</td><td class="editdropdown"><select class="form-control select" data-placeholder="Select a State..."><option value="Yes">Yes</option><option value="No">No</option></select></td></tr>')
             })
             // count++
         });
        $dropdown.trigger('change');


      }

   $("body").on("click", ".editclass", function(){
       $(".submitbtn").show();
         $('.editdropdown').css('display','block');
         $('.beforeedit').css('display','none');

   })


    $("body").on("click", ".submitbtn", function(){
      objj = {}
      objj.UserId = useridd

    })


  })
