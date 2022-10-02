<?php
include '../../connectdb/dbconnection.php';

$conn = connect();

function deletProductBodies($conn, $productID){

    $sql = "DELETE FROM `camerabodies` 
    WHERE `camerabodies`.`cameraID` = $productID;
    ";
    $execution = $conn ->prepare($sql);
    $deletion = $execution->execute();
    $execution -> closeCursor();
    
  }
  function deletProductLenses($conn, $productID){

    $sql = "DELETE FROM `cameralenses` 
    WHERE `cameraLensID` = $productID;
    ";
    $execution = $conn ->prepare($sql);
    $deletion = $execution->execute();
    $execution -> closeCursor();
    
  }


  $body = $_POST['camerabody'];
  $lens = $_POST['cameralens'];


  if(array_key_exists('camerabody', $_POST)) {
    deletProductBodies($conn,$body);
}
  if(array_key_exists('cameralens', $_POST)) {
    deletProductLenses($conn,$lens);
}



  //$selected = $_POST['camerabody'];
  //deletProductBodies($conn,$selected);



header("Location: productmanage.php");


?>