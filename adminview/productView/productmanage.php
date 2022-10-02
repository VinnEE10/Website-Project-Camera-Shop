<?php
    include '../../connectdb/dbconnection.php';
    include '../adminscontroldb.php';
    
    $conn = connect();
    
    //gather data from camerabodies table
    $sqlCamera = "SELECT * FROM `camerabodies`;";

    $executionCamera = $conn -> prepare($sqlCamera);
    $executionCamera ->execute();
    $camera = $executionCamera -> fetchAll();
    $executionCamera -> closeCursor();
    

    //gather data from camerabodies table
    $sqlLens = "SELECT * FROM `cameralenses`;";

    $executionLens = $conn -> prepare($sqlLens);
    $executionLens ->execute();
    $lens = $executionLens -> fetchAll();
    $executionLens -> closeCursor();
    
    
   


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product Management</title>
  </head>
  <style>
    table{
      background-color: rgb(220,199,161);
    }
  </style>
  <body style="background-color: wheat;">
    
    <div class="container text-center">
    <h1>Camera Bodies</h1>
     
        <table class="table  table-hover">
      <thead>
        <tr>
          <th scope="col">Camera Body</th>
          <th scope="col">Camera Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($camera as $camera) :?>
        <tr>
          <!--Camera Body Colum-->
          <th scope="row"><?php echo $camera['cameraBody'] ?></th>
          <td><?php echo '$'.$camera['cameraPrice'] ?></td>
          <td>
          <form action="productDelet.php" method="post">
          <button type="submit" class="btn btn-danger" value="<?php echo $camera['cameraID'] ?>" name="camerabody">Remove
          </button>
          </form>
          
          </td>
        </tr>
        <?php endforeach?>
        
      </tbody>
    </table>
    
    </div>


    

    <div class="container text-center">
      <h1>Camera Lenses</h1>
        <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Camera Body</th>
          <th scope="col">Camera Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($lens as $lens) :?>
        <tr>
          <!--Camera Body Colum-->
          <th scope="row"><?php echo $lens['cameraLens'] ?></th>
          <td><?php echo '$'.$lens['cameraLensPrice'] ?></td>
          <td>
          <form action="productDelet.php" method="post">
          <button type="submit" class="btn btn-danger" value="<?php echo $lens['cameraLensID'] ?>" name="cameralens">Remove
          </button>
          </form>
          
          </td>
        </tr>
        <?php endforeach?>
        
      </tbody>
    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>