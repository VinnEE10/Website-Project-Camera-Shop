<?php
include 'connectdb/dbconnection.php';
include 'connectdb/displayContents.php';

$conn = connect();
?>
<!doctype html>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fujistore</title>
    <link rel="stylesheet" href="ImageGallery.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  <body id="body" style="background-color: wheat;">
    <?php 
    include 'navbar/navbar.html';
    ?>
  
  
    <div class="container mt-4 mb-4">
        <div class="d-flex justify-content-center">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 gx-4 gy-3">
                
                <?php 
                
                    
                    displayCardsImages($conn);

                ?>



            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
