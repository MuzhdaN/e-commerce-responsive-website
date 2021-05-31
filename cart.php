<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Muzhda, Manizha">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
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
                padding-top: 17%; text-align: center; height: 140px; width: 200px; margin: 20px 40px 20px 20px;" href=" ">men</a></li>
              <li class="newC"><a href=""></a></li>
            </ul>
        </li>
        <li><a href="main.php">Home</a></li>
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
            <li><a href="">Login</a></li>
            <li><a href="">Signup</a></li>
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

<!-- cart section -->
  <div class="container mt-xl-5 " >
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else { echo 'none'; } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
              <td colspan="7">
                <h4 class="text-center text-info m-3" style="font-weight:bold;">Shopping Cart</h4>
              </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php  
                require 'db.php';
                $stmt = $conn->prepare("SELECT * FROM cart");
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?php echo $row['id'] ?>">
                <td><img src="<?= $row['image'] ?>" width="50"></td>
                <td><?= $row['name'] ?></td>
                <td>
                  <i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?= (float)$row['price']; ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?= (float)$row['total_price']; ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total +=$row['total_price']; ?>
            <?php endwhile; ?>
            <tr>
              <td colspan="3">
              <!-- in here add the main page -->
                <a href="women.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
              </td>
              <td colspan="2"><b>Total</b></td>
              <td><b><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?= $grand_total; ?></b></td>
              <td>
              <!-- it will disable the checkout button if the amount is less than 1 -->
                <a href="checkout.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled"; ?>" style="background: rgba(218, 185, 4, 0.863); color:#000; border:none; hv"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
 
      $(".itemQty").on('change', function(){
        var $el = $(this).closest('tr');
 
        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        location.reload(true);
        $.ajax({
          url: 'action.php',
          method: 'post',
          cache:  false,
          data: {qty:qty,pid:pid,pprice:pprice},
          success: function(response){
            console.log(response);
          }
        });
      });
 
      load_cart_item_number();
 
      function load_cart_item_number(){
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {cartItem:"cart_item"},
          success:function(response){
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
</body>

</html>