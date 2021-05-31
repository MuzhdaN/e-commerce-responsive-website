<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/style2.css" />
  <title>Ecommerce Website</title>
</head>

<body>
  
    
  <!-- Navigation -->
  
    <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
    <div class="wrapper container collapse navbar-collapse">
      <div class="logo"><a href=""><img src="images/logo.png" style="height: 40px; width: auto;"></a></div>
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
               padding-top: 18%; text-align: center; height: 140px; width: 200px; margin: 20px 20px 20px 20px;" href="">women</a></li>
              
              <li ><a style="background-image: url('images/erkek.jpg');  border: 3px solid #ff5700;   font-weight: bolder;
                padding-top: 17%; text-align: center; height: 140px; width: 200px; margin: 20px 40px 20px 20px;" href=" ">men</a></li>
              <li class="newC"><a href=""></a></li>
            </ul>
        </li>
        <li><a href="userPage.php">Home</a></li>
        <li>
          <a href="" class="desktop-item">women <span><i class="fas fa-chevron-down"></i></span></a>
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
         
            <!-- <img src="images/shoppingBag.svg"  /> -->
<a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></span></a>
<!--             
            <small class="count d-flex cart-item">0</small>     -->
     
          <span><img src="images/search.svg" alt="" /></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <!-- PRODUCTS -->

  <section class="section products">
    <div class="products-layout container" style="margin-top: -5.5rem;">
      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h3>Category</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Shoes</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Bags</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Clothings</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>

        <div>
          <div class="block-title">
            <h3>Brands</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Gucci</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Burberry</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Valentino</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Dolce & Gabbana</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Hogan</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Moreschi</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Givenchy</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-3-of-4">
        <form action="">
          <div class="item">
            <label for="sort-by">Sort By</label>
            <select name="sort-by" id="sort-by">
              <option value="title" selected="selected">Name</option>
              <option value="number">Price</option>
              <option value="search_api_relevance">Relevance</option>
              <option value="created">Newness</option>
            </select>
          </div>
          <div class="item">
            <label for="order-by">Order</label>
            <select name="order-by" id="sort-by">
              <option value="ASC" selected="selected">ASC</option>
              <option value="DESC">DESC</option>
            </select>
          </div>
          <a href="">Apply</a>
        </form>



<!-- image 1 -->
     
  <!-- Displaying Products Start -->
  <div class="container">
  <div id="message"></div>
  <div class="row  mt-2 pb-3">
  <?php
  include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
	?>
    <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="product">
            <div class="img-container">
              <img src="<?php echo $row["image"]; ?>" style="height:200px; width: 200px;" />

              <div class="addCart">
               <form action="" class="form-submit" >
             
               <input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
                <input type="hidden" class="pname" value="<?php echo $row['name']; ?>">
                <input type="hidden" class="pprice" value="<?php echo $row["price"];?>">
                <input type="hidden" class="pimage" value="<?php echo $row["image"]; ?>">
                <input type="hidden" class="pcode" value="<?php echo $row["code"]; ?>">
                <i class="fas fa-shopping-cart  addItemBtn"></i>
               </form> 
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
              </ul>
            </div>
            <div class="bottom">
            <input type='hidden' name='code' value="<?php echo $row["code"]; ?>" />
              <a href=""><?php echo $row["name"]; ?></a>
              <div class="price">
                <span>$&nbsp;<?php echo $row["price"];?></span>
              </div>
            </div>
          </div> 
    </div>
    <?php } mysqli_close($conn); ?>	
</div>
</div>

         <!-- PAGINATION  -->
        <ul class="pagination">
          <span>1</span>
          <span>2</span>
          <span class="icon">››</span>
          <span class="last">Last »</span>
        </ul>
      </div> 
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div class="payment-methods">
            <img src="images/payment.png" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->


<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Displaying Products End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script src="js/product.js"></script>
<script src="js/slider.js"></script>
<script src="js/index.js"></script>

  

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

    //  var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
        //  pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

  //  Load total no.of items added in the cart and display in the navbar
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