<?php
include "api.php";
include "../../config/DBClass.php";

session_start();
/*
OAuth Authentication TODO
*/

//Is user authenticated? Yes, then proceed to verify app authorization
  //Is app authorized? Yes, then proceed to make request to API
  //set $_SESSION['app_scope'] to assigned scope for app
  
  //No, then prompt user to validate authorization

    //Does user validate authorization? Yes, then continue to API call
    $scope; //set to assigned scope for app
    //No, then send user to app callback URI

//No, prompt user to authenticate and return to beginning
  //Once authenticated, set user id to $_SESSION
  
function callAPI($scope){
  $db = new DBClass();
  $method = $_SERVER['REQUEST_METHOD'];
  $currentUser = $_SESSION['current_user'];
  $scope = $_SESSION['app_scope'];
  switch($method){
    case 'GET':
      
      break;
    case 'POST':
      break;
    case 'PUT':
      break;
    case 'DELETE':
      break;
  }
}
?>
