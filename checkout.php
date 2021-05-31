<?php
	require 'db.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  
  <!-- css -->
  <link rel="stylesheet" href="css/style2.css" />
</head>

<body>

<!-- navigation -->
<nav class="nav navbar navbar-expand-lg navbar-light bg-light">
    <div class="wrapper container collapse navbar-collapse">
      <div class="logo"><a href=""><img src="images/logo.png" style="height: 50px; width: auto;"></a></div>
      <ul class="nav-list">
        <div class="top">
          <label class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        
        <li>
            <a href="" class="desktop-item">new arrivals <span><i class="fas fa-chevron-down"></i></span></a>
            <input type="checkbox" id="showdrop1" />
            <label for="showdrop1" class="mobile-item">products <span><i class="fas fa-chevron-down"></i></span></label>
            <ul id="container1" class="drop-menu1" style="display: flex; align-content: space-between;">
              
              <li ><a style=" background-image: url('images/kadin-small-1.jpg');  border: 3px solid rgba(255, 218, 10, 0.863); font-weight: bolder;
               padding-top: 18%; text-align: center; height: 140px; width: 200px; margin: 20px 20px 20px 20px;" href="women.php">women</a></li>
              
              <li ><a style="background-image: url('images/erkek.jpg');  border: 3px solid #ff5700;   font-weight: bolder;
                padding-top: 17%; text-align: center; height: 140px; width: 200px; margin: 20px 40px 20px 20px;"" href=" ">men</a></li>
              <li class="newC"><a href=""></a></li>
            </ul>
        </li>
        <li><a href="userPage.php">Home</a></li>
        <li>
          <a href="women.php" class="desktop-item">women <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showMega" />
          <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="images/woman.png" alt="" />
              </div>
              <div class="row">
                <header>Dresses</header>
                <ul class="mega-links">
                  <li><a href="#">Mini Dresses</a></li>
                  <li><a href="#">Maxi Dresses</a></li>
                  <li><a href="#">Party Dresses</a></li>
                  <li><a href="#">Shop Icon Categories</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Acessories</header>
                <ul class="mega-links">
                  <li><a href="#">Handbags & Purses</a></li>
                  <li><a href="#">Scarves</a></li>
                  <li><a href="#">Face Coverings</a></li>
                  <li><a href="#">Jewellery</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Collections</header>
                <ul class="mega-links">
                  <li><a href="#">Wedding dresses</a></li>
                  <li><a href="#">Afghani cloths</a></li>
                  <li><a href="#">Aseel Hijabs</a></li>
                  <li><a href="#">Jumpser/Sweaters/</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="">Men</a></li>
        <li>
          <a href="" class="desktop-item">products <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">products <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu1">
            <li><a href="">kids</a></li>
            <li><a href="">shoes</a></li>
          </ul>
        </li>

        <li>
          <a href="" ><i class="fas fa-user-alt"></i></a>
          <input type="checkbox" id="showdrop2" />
          <label for="showdrop2" class="mobile-item">Account <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
        </li>
        <!-- icons -->
        <li class="icons">
         
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
<!-- end of navagation -->


<!-- start of order form -->
  <div class="container">
    <div class="row justify-content-center" style="margin-Top:3rem;">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2" >Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= $grand_total ?>$</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead" style="color:rgba(218, 185, 4, 0.863); font-weight:bold;">Select your preferred payment method:</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Payment Method-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Electronic bank transfers</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>