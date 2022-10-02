<?php
    include '../../connectdb/dbconnection.php';
    include '../adminscontroldb.php';
    
    $conn = connect();
    
    //gather data from customerrequest table
    $sql = "SELECT * FROM `customerequest`;";

    $execution = $conn -> prepare($sql);
    $execution ->execute();
    $request = $execution -> fetchAll();
    $execution -> closeCursor();
    

   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cusomer Request</title>
  </head>
  <style>
    table{
      background-color: rgb(220,199,161);
    }
  </style>
  <body style="background-color: wheat;">
    
    <div class="container text-center" style="max-width: 50rem;">
    <h1>Cusomer Request</h1>
     
        <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Customer Name</th>
          <th scope="col">Customer Request Price</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($request as $request) :?>
        <tr>
          <!--Camera Body Colum-->
          <th scope="row"><?php echo $request['firstName']; echo ' '. $request['lastName'] ?></th>
          <td><?php echo $request['request'] ?></td>
          <td> <?php echo $request['email'] ?> </td>
        </tr>
        <?php endforeach?>
        
      </tbody>
    </table>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>