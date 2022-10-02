<?php
/* 
This functions takes in a data base connections and queries all of the contents 
after it echos html code that creates cards.
the cards are then used on of the templates created for the viewmodels
*/

 function displayCamera($conn){
    $sqlCamera = "SELECT * FROM `camerabodies`;";

    $executionCamera = $conn -> prepare($sqlCamera);
    $executionCamera ->execute();
    $camera = $executionCamera -> fetchAll();
    $executionCamera -> closeCursor();

    foreach($camera as $camera){
        $cameraBody = $camera['cameraBody'];#here it says print out this collum called cameraBody
            $camera['cameraPrice']."<br>";
            $imageDir = $camera['imageDir'];
            $description = $camera['description'];
            $camera['cameraSpecs']."<br>";
           
            $message = "
            
            <div class='col text-light text-center'>
            <div class='container-fluid bg-secondary' id='productcard'>
                <img src='$imageDir ' class='img-fluid mt-4 mb-1' alt=''...'>
                <div id='productdescription'>
                <p class='text-center mb-0'>$description</p>
                </div>
                <form action='productpage.php' = 'get'>
                <input type='hidden' name='type' value='body'>
                  <button type='submit' class='btn btn btn-outline-light mb-2 mt-2' name='body' value = '$cameraBody'>$cameraBody</button>
                </form>
            </div>
            </div>
            ";

            echo $message;
        
    }

 }

 function displayLenses($conn){
    $sqlLens = "SELECT * FROM `cameralenses`;";
    $executionLens = $conn -> prepare($sqlLens);
    $executionLens ->execute();
    $lens = $executionLens -> fetchAll();
    $executionLens -> closeCursor();


    foreach($lens as $lens){
        $cameraLens = $lens['cameraLens'];#here it says print out this collum called cameraBody
            $lens['cameraLensPrice']."<br>";
            $imageDir = $lens['imageDir'];
            $description = $lens['description'];
            $lens['cameraLensSpecs']."<br>";
           
            $message = "
            
            <div class='col text-light text-center'>
            <div class='container-fluid bg-secondary' id='productcard'>
                <img src=' $imageDir ' class='img-fluid mt-4 mb-1' alt=''...'>
                <div id='productdescription'>
                <p class='text-center mb-0'>$description</p>
                </div>
                <form action='productpage.php' = 'get'>
                    <input type='hidden' name='type' value='lens'>
                  <button type='submit' class='btn btn btn-outline-light mb-2 mt-2' name='lens' value = '$cameraLens'>$cameraLens</button>
                </form>
            </div>
            </div>
            ";

            echo $message;
        
    }
 }



 function displayCardsImages($conn){

 //gather data from customerimage
 $sqlImages = "SELECT * FROM `customerimage`;";
 $executionImages = $conn -> prepare($sqlImages);
 $executionImages -> execute();
 $images = $executionImages -> fetchAll();
//  $executionImages -> closeCursor();

 
 
 

 foreach($images as $images){
    

    /*-----Get The lens used text--*/ 
    $lensUsed =  $images['lensUsed'];
    
    //gather data from cameraLens table
    $sqlLens = "SELECT * FROM `cameralenses` WHERE `cameraLensID` = $lensUsed;";

    $executionLens = $conn -> prepare($sqlLens);
    $executionLens ->execute();
    $lens = $executionLens -> fetch();
    $lensUsed = $lens['cameraLens'];
    $executionLens -> closeCursor();
    
    

    /*----------------------------*/ 

    /*---Get The camera used text--*/  
    $cameraUsed = $images['cameraUsed'];
    
    //gather data from camerabodies table
    $sqlCamera = "SELECT * FROM `camerabodies` WHERE `cameraID` = $cameraUsed";

    $executionCamera = $conn -> prepare($sqlCamera);
    $executionCamera ->execute();
    $camera = $executionCamera -> fetch();
    $cameraUsed =$camera['cameraBody'];
    $executionCamera -> closeCursor();
    
    


    /*----------------------------*/ 

    $author = $images['customerName'];
    $imageDir = $images['imageDir'];
    $customerOpinion = $images['customerOpinion'];
    echo"<br>";

    $message = "
                <div class='col text-light text-center'>
                        <div class='container-fluid bg-secondary'>
                            <img src='$imageDir' class='img-fluid mt-4 mb-1 rounded' alt='...'>
                            <p class='text-center mb-0'>
                            '$author $cameraUsed $lensUsed' <br>
                            '$customerOpinion'
                            </p>
                        </div>
                    </div>
                    
                ";    

                echo $message;
 }

 

 



 }
    
 
 

?>