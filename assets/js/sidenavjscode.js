$(document).ready(function () {
$('body .nav-sidebar').find('li').removeClass('activee')
var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);
if (filename == 'userprofile.php') {
  $('#userprofileid').addClass('activee');

}
if (filename == 'planner_createnewplan.php') {
  $('#createplan').addClass('activee');
}
if (filename == 'planner_ongoing_dashboard.php') {
  $('#myplans').addClass('activee');
}
if (filename == 'planner_dashboard.php') {
  $('#ongoingdashboard').addClass('activee');
}
if (filename == 'add_delete.php') {
  $('#add_deleteid').addClass('activee');
}
if (filename == 'planner_completedplans.php') {
  $('#comple').addClass('activee');
}

if (filename == 'adminindex.php') {
  $('#admin').addClass('activee');
}






var prev =  JSON.parse(localStorage.getItem("allprevialges"))
var userpro='';
var crepro='';
var myplans='';
var ongoi='';
var adddelt='';

var comple='';
var admin='';

  if(prev.hasOwnProperty('createuserprofile')){
    var userpro=prev.createuserprofile;
  if(userpro!=''&&userpro){
    $('body #userprofileid').removeClass('hidden')}
  }

  if(prev.hasOwnProperty('viewCreatePlan')){
    var crepro=prev.viewCreatePlan;
  if(crepro!=''&&crepro){
    $('body #createplan').removeClass('hidden')}
  }


  if(prev.hasOwnProperty('viewDashboard')){
    var myplans=prev.viewDashboard;
  if(myplans!=''&&myplans){
    $('body #myplans').removeClass('hidden')}
  }


  if(prev.hasOwnProperty('viewOngoingPlans')){
    var ongoi=prev.viewOngoingPlans;
  if(ongoi!=''&&ongoi){
    $('body #ongoingdashboard').removeClass('hidden')}
  }


  if(prev.hasOwnProperty('viewCompletedPlans')){
    var comple=prev.viewCompletedPlans;
  if(comple!=''&&comple){
    $('body #comple').removeClass('hidden')}
  }

  if(prev.hasOwnProperty('assignPlannerToClient')){
    var adddelt=prev.assignPlannerToClient;
  if(adddelt!=''&&adddelt){
    $('body #add_deleteid').removeClass('hidden')}
  }


  if(prev.hasOwnProperty('viewMasterData') || prev.hasOwnProperty('viewPrivileges') ){
    var admin=prev.viewMasterData;
  if(admin!=''&&admin){
    $('body #admin').removeClass('hidden')}
  }


})





  // if(prev.hasOwnProperty('completedplans')){
  //   var dp=prev.completedplans;
  // if(dp!=''&&dp){
  //   $('#userprofileid').removeClass('hidden')}
  // }
  //
  //
  // if(prev.hasOwnProperty('adddeletepage')){
  //   var dp=prev.adddeletepage;
  // if(dp!=''&&dp){
  //   $('#admin').removeClass('hidden')}
  // }
