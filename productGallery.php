<?php 
#This template/viewmodel is mainly used to shows the gallery view of the items both in the camera body and lenses category

include 'connectdb/dbconnection.php';
include 'connectdb/displayContents.php';
include ('navbar/navbar.html');
$conn = connect();


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="productgallery.css">  
    <title>Product page</title>
  </head>

  <body>

  <!--Header-->
  
  
    <div class="container mt-4">
        

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 gx-4 gy-3">
                
                <?php
                #if the button says this is camera bodies then display camera bodies
                #if it is the camera lenses button display camera lenses
                
               $toDisplay = $_POST['button'];
                
                if ($toDisplay == 'lens'){
                  // displayCardsLenses($conn);
                  displayLenses($conn);
                }
                if ($toDisplay == 'body'){
                  // displayCardsCamera($conn);
                  displayCamera($conn);

                }
                ?>


            </div>
            
            
        
  
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
<?

?>