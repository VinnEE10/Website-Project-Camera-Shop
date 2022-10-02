<?php

require './adminscontroldb.php';
require '../connectdb/dbconnection.php';
$conn = connect();

$userN = $_POST['username'];
$userP = $_POST['password'];
$ownerPass = $_POST['ownerPassword'];

$passed=ownerVerify($conn,$ownerPass);
if ($passed != 1) {
  echo"<h1>You are not the the shop owner get out! <h1>";
}
if ($passed == 1) {
  if(!isset($userN) || !isset($userP)){
    echo "Error: you forgot to fill in either one of the fields";
  } else {
    adminAdder($conn,$userN,$userP);
    echo "Admin sucsessfully Registered \n";
    echo "<a href="."adminlogin.php".">Return to Login page</a>";
  }
}




?>
