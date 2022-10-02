<?php 
include 'adminscontroldb.php';
include '../connectdb/dbconnection.php';
#controls the admin statement

    $conn = connect();
    $userN = $_POST['username']; 
    $userP = $_POST['password'];

    
    $verified = adminVerify($conn,$userN,$userP);

    

    if ($verified == TRUE){

      // Interesting note whne include is used
      // The html file is sent to this dir
      // So I had to change up the href for the style sheet
      include('css/adminpanel.html');
      // echo "You are an admin";
      // echo $userN ; 
      // echo $userP ;
      
    }
    else{
      echo "You are not an admin";
    }
?>
