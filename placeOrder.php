<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <div class="aa-cartbox">
              <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <a href="cart.php"><span class="aa-cart-title">SHOPPING CART </span></a>
                
                 
                </a>
                
              </div>
               
                <br>
                <?php
                
                ?>
                <form action="purchase.php" method="POST">
                <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control" required>
                </div><br>
                <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phone_no" class="form-control" required>
                </div><br>
                <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
                </div><br>
                <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Category</label>
                <input type="text" name="Category" class="form-control" required>
                </div><br>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Cash On Delivery
               </label>
               </div><br>
                    <button class="btn btn-primary btn-block" name="purchase">Place Order</button>
                </form>
                <?php
                
                ?>
                </div>
            </div>
</body>
</html>
