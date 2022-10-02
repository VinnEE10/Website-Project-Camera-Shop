
<?php 
#This file is the back end for adding and verifying our admins


function adminAdder($connection,$userName, $password){

    #First lets connect ot the db
    $conn = $connection;

    #hasing the password

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    #once we recieve the form lets insert it to the right tables
    $sql = "
    INSERT INTO `admins`(`adminUserName`, `adminPassword`) VALUES ('$userName','$hashed');
    ";
    #lets bind the statement and sql into our DB
    $execution = $conn->prepare($sql);
    $execution->execute();
    $execution->closeCursor();
}

function ownerVerify($connection,$password){
    $sql = "
    SELECT `adminPassword` FROM `admins` WHERE adminUserName = 'adminVincent';
    ";
    $execution = $connection->prepare($sql);
    $execution->execute();
    $ownerPass = $execution->fetch();
    $hashed = $ownerPass['adminPassword'];
    $execution->closeCursor();
    
    return password_verify($password,$hashed);

}

function adminVerify($connection,$userName,$password){
    #set up connection
    $conn = $connection;
    $sql = "
    SELECT `adminPassword` FROM `admins` WHERE adminUserName = '$userName';
    ";

    $execution = $conn->prepare($sql);
    $execution->execute();
    $row = $execution->fetch();
    $hashed = $row['adminPassword'];
    $execution->closeCursor();
    
    return password_verify($password,$hashed);



}




?>