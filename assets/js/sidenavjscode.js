$(document).ready(function () {

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
