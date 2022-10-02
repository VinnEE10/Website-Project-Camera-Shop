<?php 
include '../connectdb/dbconnection.php';

$conn = connect();

#prefix 'c' signifies customer
$cEmail =  $_POST['email'];
$cFirstName = $_POST['firstName'];
$cLastName = $_POST['lastName'];
$cCustomerRequest = $_POST['customersMsg'];

$sql  = "INSERT INTO `customerequest` (`id`, `firstName`, `lastName`, `email`, `request`) 

VALUES (NULL, '$cFirstName', '$cLastName', '$cEmail', '$cCustomerRequest')";

$execution = $conn->prepare($sql);
$execution->execute();
$execution->closeCursor();


echo"Thank you for your submission";
echo "<a href="."../index.php".">Return to Home page</a>";
?>

