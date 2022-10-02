<?php 

include 'connectdb/dbconnection.php';

$conn = connect();

$type = $_GET['type'];
if ($type == 'lens'){
    
    $lensModel = $_GET['lens'];
    

    
    $sql = "SELECT * FROM `cameralenses` WHERE cameraLens = '$lensModel';";
    
    
    $execution = $conn -> prepare($sql);
    $execution ->execute();
    $item = $execution -> fetch();
    $execution -> closeCursor();

    $model = $item['cameraLens'];
    $price  = $item['cameraLensPrice'];
    $description = $item ['description'];
    $image = $item['imageDir'];
    $specs = $item['cameraLensSpecs'];
}
if ($type == 'body'){
    

    $bodyModel = $_GET['body'];
    

    // SELECT * FROM `cameralenses` WHERE cameraLens = 'var';
    $sql = "SELECT * FROM `camerabodies` WHERE cameraBody = '$bodyModel';";
    // "SELECT * FROM `cameralenses` WHERE cameraLens = $lensModel;";
    
    $execution = $conn -> prepare($sql);
    $execution ->execute();
    $item = $execution -> fetch();
    $execution -> closeCursor();

    $model = $item['cameraBody'];
    $price  = $item['cameraPrice'];
    $description = $item ['description'];
    $image = $item['imageDir'];
    $specs = $item['cameraSpecs'];
    
}



?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="productpage.css">  
    <title><?php echo $model;?></title>
  </head>


  <body>
    <?php 
    include 'navbar/navbar.html';
    ?>

    <div class="container-fluid mt-4">
        <div class="d-flex flex-row mb-3 justify-content-center flex-wrap">


            <div class="p-2 bd-highlight bg-secondary text-center" id="productcard"> 

                        <div class="container-flex" >
                        <img src="<?php echo $image;?>" class="img-fluid" alt="...">
                        </div>
            </div>
            <div class="p-2 bd-highlight">
              <div class="container">

                  <div class="container">
                    <h1 class="display-6"> $<?php echo $price;?> </h1>
                  </div>
                           
                  <div class="contianer" style="width: 18rem;">
                  <?php echo $description;?>
                  </div>

                  <div class="container">
                  <h1 class="display-6">Specs</h1>
                  </div>

                  <div class="contianer" style="width: 18rem;">
                  <?php echo $specs?>
                  </div>  

              
              </div>

              
                
               
                


            </div>


          </div>
    </div>
    <div class="container-fluid text-center">
    <form action="buying/customerbuy.php" method="get">
    <input type="hidden" name="item" value="<?php echo $model;?>">
    <button type="submit" class="btn btn-success">Buy</button>
    </form>
    


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>