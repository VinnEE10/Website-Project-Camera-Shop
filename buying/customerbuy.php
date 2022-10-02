<?php

$item = $_GET['item'];
echo $item;


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Purchase</title>
  </head>
  <body>
    

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-3">
          <div class="col"></div>
          <div class="col">
            <!--Main card for request-->

            
            
              
                <form action="purchasecomplet.php" method="post"> 
                    <input type="hidden" name="item" value="<?echo $item?>">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email@Email.com"> 
                    
                  </div>
                  <div class="">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" name="firstName" placeholder="First Name">
                  </div>
                  <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" name="lastName" placeholder="Last Name">
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Shipping Address</label>
                    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" name="address" placeholder="1 place road, town, state">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" place>Card Number</label>
                    <input type="text" class="form-control" id="cardnumber" aria-describedby="emailHelp" name="cardNumber" type= "number" pattern="[0-9]*" inputmode="numeric" placeholder="00000000...">
                  </div>
                  <div class="mb-3">

                  <label class="form-label">Expiration (mm/yy)</label>
                  <input id="expdate" class="form-control" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="0000">
                  <label  class="form-label" >Security Code</label>
                  <input id="code"  class="form-control" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="000">
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>   
              
            



          </div>
          <div class="col"></div>
        </div>

          
          
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


    