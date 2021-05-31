<?php 


session_start();
if(!isset($_SESSION['username'])){
  header('location:register.html');
}




 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
  <link rel="stylesheet" href="css/style.css" />

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
               padding-top: 18%; text-align: center; height: 140px; width: 200px; margin: 20px 20px 20px 20px;" href="women.php">women</a></li>
              
              <li ><a style="background-image: url('images/erkek.jpg');  border: 3px solid #ff5700;   font-weight: bolder;
                padding-top: 17%; text-align: center; height: 140px; width: 200px; margin: 20px 40px 20px 20px;"href=" ">men</a></li>
              <li class="newC"><a href=""></a></li>
            </ul>
        </li>
        <li><a href="index.html">Home</a></li>
        <li>
          <a href="women.php" class="desktop-item">women <!-- <span><i class="fas fa-chevron-down"></i></span> --></a>
          <input type="checkbox" id="showMega" />
          <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
    <!--       <div class="mega-box">
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
          </div> -->
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
            <li><a href="logout.php">Log out</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
        </li>
        <!-- icons -->
        <li class="icons">
         

<!--             
            <small class="count d-flex cart-item">0</small>     -->
     
          <span><img src="images/search.svg" alt="" /></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

<!-- navbar finished -->

<br>
<br>

<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">HIGH <br> STREET</div>
  <img src="image/img15.jpg" style="width:60%;height: 600px;">
  <div class="content" style="background-color: #FDF2E9; width: 40%;height: 600px"><h5 style="margin-left: 30px;color: #ABB2B9;">LATEST COLLECTIONS OF</h5>
<h1 style="margin-left: 30px;">Summer<img class="summerImage"  src="image/img5.png" style="width: 100px;"></h1>
<p class="p_horizontal">FACEBOOK</p>
<p class="p_horizontal">INSTAGRAM</p>
<p class="p_horizontal">TWITTER</p>
<div class="div_desc" style="margin-left: 30px;">
  <h7><b>BEAUTIFUL RED AGHANI DRESS</b></h7>
  <p>This summer season we introduce this<br>
  100% cotton Afghani dress</p>
  <p class="price">1000af  <i class="fas fa-shopping-cart" style="font-size: 15px"></i></p>

</div>

  </div>
  <div class="text" id="firstImage"><h5>LET'S CREATE YOUR OWN</h5>
    <h3><b>FASION STATEMENT</b></h3>

  </div>
</div>

<div class="mySlides">
  <div class="numbertext">HIGH <br> STREET</div>
  <img src="image/img2.jpg" style="width:60%;height: 600px;">
    <div class="content" style="background-color: #FDF2E9; width: 40%;height: 600px"><h5 style="margin-left: 30px;color: #ABB2B9;">LATEST COLLECTIONS OF</h5>
<h1 style="margin-left: 30px;">Summer <img class="summerImage"  src="image/img5.png" style="width: 100px;"></h1>
<p class="p_horizontal">FACEBOOK</p>
<p class="p_horizontal">INSTAGRAM</p>
<p class="p_horizontal">TWITTER</p>
<div class="div_desc" style="margin-left: 30px;">
  <h7><b>NEUTRAL COLOR SCARVES</b></h7>
  <p>This summer season we introduce this<br>
  100% cotton scarves
<p class="price">1000af  <i class="fas fa-shopping-cart" style="font-size: 15px"></i></p></p>
  

</div>

  </div>
  <div class="text" id="firstImage"><h5>LIFE  IS  TOO SHORT</h5>
    <h3><b>TO  WEAR  BORING  CLOTHES</b></h3>

  </div>
</div>

<div class="mySlides">
  <div class="numbertext">HIGH <br> STREET</div>
  <img src="image/woman.png" style="width:60%;height: 600px;">
    <div class="content" style="background-color: #FDF2E9; width: 40%;height: 600px"><h5 style="margin-left: 30px;color: #ABB2B9;">LATEST COLLECTIONS OF</h5>
<h1 style="margin-left: 30px;">Summer <img class="summerImage"  src="image/img5.png" style="width: 100px;"></h1>
<p class="p_horizontal">FACEBOOK</p>
<p class="p_horizontal">INSTAGRAM</p>
<p class="p_horizontal">TWITTER</p>
<div class="div_desc" style="margin-left: 30px;">
  <h7><b>TRADITIONAL ELEGAND ACCESSORIES</b></h7>
  <p>This summer season we introduce this<br>
  100% gold head bands</p>
  <p class="price">1000af  <i class="fas fa-shopping-cart" style="font-size: 15px"></i></p>

</div>

  </div>
  <div class="text" id="firstImage"><h5>SIMPLE CHOICE</h5>
    <h3><strong>BUT        </strong><b>ELEGANT CHOICE</b></h3>

  </div></div>

 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a> 




</div>
<br>

<!-- about me -->
<div class="container" style="background-color: #E59866;">

  <div class="row" style="padding-top: 70px;padding-bottom: 80px;">
    <div class="col-sm-4" >
     <img src="image/img16.jpg" style="width: 100%;height: 400px; border-radius: 0px 0px 0px 50px;border:solid 5px white">
    </div>
    <div class="col-sm-3">
      <img src="image/img6.jpg" style="width: 100%;height: 400px; border-radius: 0px 50px 0px 0px;border:solid 5px white">
    </div>
    <div class="col-sm-5" style="color: white;height: 400px;padding: 20px">
      <p>Somthing you don't know</p>
      <h1><b>GET TO <br>KNOW US</b></h1>
      <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      <br>
      <br>
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <button style="background-color: #943126; color: white;padding: 20px;border-radius: 50px" onclick="location.href='women.php';">SHOP NOW</button>
    </div>

  </div>
</div>
<br>
<!-- women gallary -->
<div class="container" id="womenGallary">
    <h1 style="text-align: center;">WOMEN</h1>
    <p style="text-align: center;"> Clothes aren't going to change the world<br> the Women who wears them will</p>

  <div class="row" style="width: 80%; margin-left: 10%; margin-right: 5%;">
    <div class="col-sm-4" id="w_1" onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/woman.png" style="width: 100%;height:350px;">
       <img src="image/img15.jpg" style="width: 100%;height:350px;" class="img-front" href="register.html"> 
          </div>
    <div class="col-sm-4" id="w_1"  onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/img9.jpg" style="width: 100%;height: 350px;">
        <img src="image/woman.jpg" style="width: 100%;height:350px;" class="img-front">

    </div>
      <div class="col-sm-4" id="w_1"  onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/a.png" style="width: 100%;height: 350px;">
       <img src="image/img13.jpg" style="width: 100%;height:350px;" class="img-front">
         </div>
          </div>
         <br>
         <div class="row" style="width: 80%; margin-left: 10%;">
               <div class="col-sm-4" id="w_1"  onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/t-shirt.jpg" style="width: 100%;height: 350px;">
       <img src="image/sweater.jpg" style="width: 100%;height:350px;" class="img-front">
          </div>
    <div class="col-sm-4" id="w_1"  onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/img11.jpg" style="width: 100%;height: 350px;">
       <img src="image/img12.jpg" style="width: 100%;height:350px;" class="img-front">
    </div>
      <div class="col-sm-4" id="w_1"  onclick="location.href='women.php';" style="cursor:pointer;">
       <img src="image/img10.jpg" style="width: 100%;height: 350px;">
       <img src="image/jacket.jpg" style="width: 100%;height:350px;" class="img-front">
    </div>

         </div>

  
 

 
</div>
  <br>
  
  <br>
<!-- kids gallary -->
<div class="container">
    <h1 style="text-align: center;">KIDS</h1>
    <p style="text-align: center;"> The  perfect style for your kids <br> Everything a kid needs</p>
  <div class="row">
  

  </div>
  <div class="row" style="width: 80%; margin-left: 10%; margin-right: 5%;">
    <div class="col-sm-4" id="w_1">
       <img src="image/k1.jpg" style="width: 100%;height:350px;">
        <img src="image/k2.jpg" style="width: 100%;height:350px;" class="img-front">
          </div>
    <div class="col-sm-4" id="w_1">
       <img src="image/k3.jpg" style="width: 100%;height: 350px;">
        <img src="image/k5.jpg" style="width: 100%;height:350px;" class="img-front">

    </div>
      <div class="col-sm-4" id="w_1">
       <img src="image/k4.jpg" style="width: 100%;height: 350px;">
       <img src="image/k7.jpg" style="width: 100%;height:350px;" class="img-front">
         </div>
          </div>
         <br>
         <div class="row" style="width: 80%; margin-left: 10%;">
               <div class="col-sm-4" id="w_1">
       <img src="image/k8.jpg" style="width: 100%;height: 350px;">
       <img src="image/k6.jpg" style="width: 100%;height:350px;" class="img-front">
          </div>
    <div class="col-sm-4" id="w_1">
       <img src="image/k9.jpg" style="width: 100%;height: 350px;">
       <img src="image/k10.jpg" style="width: 100%;height:350px;" class="img-front">
    </div>
      <div class="col-sm-4" id="w_1">
       <img src="image/product1.jpg" style="width: 100%;height: 350px;">
       <img src="image/socks.jpg" style="width: 100%;height:350px;" class="img-front">
    </div>

         </div>

 
</div>
<br>
<br>
<div class="container">
    <h1 style="text-align: center;">New Arrival</h1>
    <p style="text-align: center;"> Check out our latest collections</p>
  <div class="row" style="margin-left: 10%; margin-right: 5%;">
  <div class="col-sm-4" ><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/N1.jpeg" alt="Avatar" style="width:100%;height:300px;">
    </div>
    <div class="flip-card-back">
      <h3>Blue Pants</h3> 
      <p class="pDesc">This summer season we introduce this<br>
  stylish pants with stickers</p>
 <p class="addToCart" style="border:solid 2px white; width:60%;margin-left: 60px;padding: 10px;border-radius: 20px"  onclick="location.href='women.php';" style="cursor:pointer;">Add to Cart <i class="fas fa-shopping-cart" style="font-size: 15px"></i></p>
    </div>
  </div>
</div></div>
  <div class="col-sm-4"><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/N2.jpg" alt="Avatar" style="width:100%;height:300px;">
    </div>
    <div class="flip-card-back">
     <h3>Black Dress</h3> 
      <p class="pDesc">This summer season we introduce this<br>
  beautiful cotton black dress</p>
  <p class="addToCart" style="border:solid 2px white; width:60%;margin-left: 60px;padding: 10px;border-radius: 20px"  onclick="location.href='women.php';" style="cursor:pointer;">Add to Cart <i class="fas fa-shopping-cart" style="font-size: 15px" ></i></p>
    </div>
  </div>
</div></div>
  <div class="col-sm-4"><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/N3.jpg" alt="Avatar" style="width:100%;height:300px;">
    </div>
    <div class="flip-card-back">
      <h3>Long Shirt</h3> 
      <p class="pDesc">This summer season we introduce this<br>
  100% cotton long shirt</p>
 <p class="addToCart" style="border:solid 2px white; width:60%;margin-left: 60px;padding: 10px;border-radius: 20px"  onclick="location.href='women.php';" style="cursor:pointer;">Add to Cart <i class="fas fa-shopping-cart" style="font-size: 15px"></i></p>
    </div>
  </div>
</div></div>

  </div>
</div>
<br>
<br>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Custom Scripts -->
<script src="js/product.js"></script>
<script src="js/slider.js"></script>
<script src="js/index.js"></script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  

}
</script>
</body>
</html>