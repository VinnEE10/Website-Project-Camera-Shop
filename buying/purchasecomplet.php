<?php
$item = $_POST['item'];
$Email = $_POST['email'];
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$address = $_POST['address'];
$card = $_POST['cardNumber'];
echo $item;
?>
<!DOCTYPE>
<html lang="en">
    <head>
        <title>Purchase confirmation</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col"></div>
                <div class="col">
                    <p> Thank you <?php echo $firstname, "&nbsp", $lastname  ?> for your purchase</p> <br>
                    <p> Your email: <?php echo $Email ?></p> <br>
                    <p> your Card Number <?php echo $card?> </p>
                    <p> Your purchase will arrive at your address: <?php echo $address ?>, within 2-3 businessdays</p> <br>

                </div>
                <div class="col"></div>
            </div>
        </div>
    </body>
</html>