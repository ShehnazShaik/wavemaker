<?php
  $data = $_POST['userarray'];
  $userrole = $_POST['userrole'];



  // foreach ($data as $obj) {
  //    echo $obj->property;
  // }
  //



  session_start();
  $_SESSION['userprofile'] = $data[0];
  $_SESSION['createnewplan'] = $data[1];
  $_SESSION['ongoingpage'] = $data[2];
  $_SESSION['completedplans'] = $data[3];
  $_SESSION['adddeletepage'] = $data[4];
  $_SESSION['adminpage'] = $data[5];
  $_SESSION['userrole'] = $userrole;

  // $_SESSION['viewcompletedplans'] = $data[6];
  // $_SESSION['editcompletedplans'] = $data[7];
  // $_SESSION['prioritize'] = $data[8];
  // $_SESSION['viewdashboardpage'] = $data[9];


  echo "user_dashboard.php";
  //
  // if ($_SESSION['UserRole'] ==  "kavya") {
  //     echo "planner_dashboard.php";
  // } elseif ($_SESSION['UserRole'] == "nazz") {
  //     echo "client_dashboard.php";
  // } else {
  //     echo "admin_master.php";
  // }



?>
