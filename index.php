<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fujistore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">  
</head>
<body>
<?php
include ('navbar/navbar.html');
?>
    <!--main content-->
    <form action="productGallery.php" method="post">

      <div class="d-felx justify-content-center mt-4">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 gx-4 gy-3">
            <div class="col">
              <!--card1-->
              <div class="card bg-secondary" id="cards">
                <img src="img/cameraBody/X-T20.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">camera Bodies</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button type="submit" class='btn btn btn-outline-light mb-2 mt-2' name='button' value = 'body'>Camera Bodies</button>
                  
                </div>
              </div>
              <!--card2-->
            </div>
            <div class="col">
               <!--card1-->
               <div class="card bg-secondary" style="width: 100%;" id="cards">
                <img src="img/gallery/gal (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gallery</h5>
                  <p class="card-text">
                    Cant decide on your next purchase?
                    Check out our staff and customer pictures
                    that will surely let you choose your next lens or body
                  </p>
                  <a href="imageGallery.php" class="btn btn btn-outline-light mb-2 mt-2">Gallery</a>
                </div>
              </div>
              <a href="request/request.html" id="request"> Request Your Image</a>

              
              <!--card2-->
            </div>
            <div class="col">
              
               <!--card3-->
               <div class="card bg-secondary" style="width: 100%;" id="cards">
                <img src="img/cameraLens/fuji35.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">camera Lenses</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                  <button type='submit' class='btn btn btn-outline-light mb-2 mt-2' name='button' value = 'lens'>Camera Lenses</button>
                </div>
              </div>
              <!--card3-->

            </div>
          </div>
        </div>
      </div>

    </form>
      

    <footer>   
      <a href="adminview/adminlogin.php" id="adminpanel">Admin Pannel</a>
    
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>