<?php 



session_start();
if(!isset($_SESSION['username'])){
  header('location:register.html');
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />


  
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.3-web/css/all.css">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/style2.css" />

 	<title>admin Page</title>
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
               padding-top: 18%; text-align: center; height: 140px; width: 200px; margin: 20px 20px 20px 20px;" href="<?php echo("women.php") ?>">women</a></li>
              
              <li ><a style="background-image: url('images/erkek.jpg');  border: 3px solid #ff5700;   font-weight: bolder;
                padding-top: 17%; text-align: center; height: 140px; width: 200px; margin: 20px 40px 20px 20px;" href=" ">men</a></li>
              <li class="newC"><a href=""></a></li>
            </ul>
        </li>
        <li><a href="userPage.php">Home</a></li>
        <li>
          <a href="<?php echo("women.php") ?>" class="desktop-item">women <span><i class="fas fa-chevron-down"></i></span></a>
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

<!--             
            <small class="count d-flex cart-item">0</small>     -->
     
          <span><img src="images/search.svg" alt="" /></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>




<div class="container" style="border-bottom: 10px solid #FDF2E9;border-top:10px solid #FDF2E9 ">
	<div class="row">
		<img src="image/admin.jpg" style=" height: 600px;" class="col-sm-12">


	</div>
	



</div>
<br>
<br>

 	<div class="container">
 		<h1>Customr's Account Information</h1>
 		<!-- Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deleting a Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deleteRecord.php" method="post">
      	  <div class="modal-body">
      	<input type="hidden" name="delete_id" id="delete_id">
     <p>Are you sure? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, close</button>
        <button type="submit" class="btn btn-primary" name="deletedata">Yes, delete</button>
      </div>




      </form>

    </div>
  </div>
</div>

<div class="card">
	<div class="card-body">
					<?php 
						$dbserver="localhost"; 
						$dbuser="root";
						$dbpass="";
						$dbname="dbshopping";

						$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");
						$query="SELECT * FROM register";
						$query_run=mysqli_query($connect,$query);
					?>
		
					<table class="table  table-striped">
					  <thead>
					    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">Costumer Name</th>
						      <th scope="col">Email</th>
						      <th scope="col">Password</th>
						      <th scope="col">Delete</th>
					    </tr>
					  </thead>

<?php 
if($query_run){
		foreach($query_run as $row)
		{
?>	

					  <tbody>
					    <tr>
						      <td><?php echo $row['ID'];  ?></td>
						      <td><?php echo $row['Name']; ?></td>
						      <td><?php echo $row['Email']; ?></td>
						      <td><?php echo $row['Password']; ?></td>
						      <td>
						      		<button type="button" class="btn btn-danger deleteBtn"  data-toggle="modal" data-target="#deleteModel">Delete</button>
						      </td>
					    </tr>
					
					  </tbody>

<?php 

		}

}
else{

	echo "No Record Found";
}
 ?>

					</table>


	</div>

</div>



 	</div>
 	<br>
<br>
<!-- shoppin lists -->
 <?php 

$dbserver="localhost"; 
$dbuser="root";
$dbpass="";
$dbname="dbshopping";

$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");

if(isset($_POST['add']))

{
	

				$ID= $_POST['ProductID'];

				$name= $_POST['ProductName'];
				$filename = $_FILES["image"]["name"];
				$tempname = $_FILES["image"]["tmp_name"];	
				$folder = "image/".$filename;
				$file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$code=$_POST['catagory'];
				$price=$_POST['ProductPrice'];

				$reg="INSERT INTO `products`VALUES ('$ID','$name','$code','$price','image/$filename')";
				mysqli_query($connect,$reg);

				
}


else if(isset($_POST['delete']))
{
$ID= $_POST['ProductID'];

	$reg="DELETE FROM `products` WHERE `products`.`id` =$ID";
				mysqli_query($connect,$reg);


}
else if (isset($_POST['update'])) {

				$ID= $_POST['ProductID'];
				$price=$_POST['ProductPrice'];
				$reg="UPDATE products SET price= $price WHERE id=$ID";
				mysqli_query($connect,$reg);
}









 ?>

<div class="container" id="showProduct">
	
	<h1>Show Product</h1>
	<div class="row">
		<div class="col-sm-12">
			
<form action="admin.php#showProduct" method="post" enctype="multipart/form-data">
  <div class="form-row align-items-center">
  	  <div class="col-sm-1 my-1">
      
      <input type="text" class="form-control" id="ProductID" name="ProductID" placeholder="ID" style="padding: 20px;font-size: 15px;">
    </div>
    <div class="col-sm-2 my-1">
      
      <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="Enter the Name" style="padding: 20px;font-size: 15px;"> 
    </div>
    <div class="col-sm-3 my-1">
      
  
    <input type="file" class="image" id="image" name="image">
 
     
    </div>
    
     <div class="col-sm-2 my-1">
    
      <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" placeholder="Enter the Price" style="padding: 20px;font-size: 15px;">
     
    </div>
      <div class="col-sm-1 my-1">
    
		 <input type="text" class="form-control" id="catagory" name="catagory" placeholder="Code" style="padding: 20px;font-size: 15px;">
     
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary" name="add" id="add" style="padding: 10px;font-size: 15px;">Add</button>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-danger" name="delete" id="delete" style="padding: 10px;font-size: 15px;">Delete</button>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success" name="update" id="update" style="padding: 10px;font-size: 15px;">Update</button>
    </div>
  </div>
</form>



		</div>

	</div>
<div class="card">
	<div class="card-body">
		<?php 
						$dbserver="localhost"; 
						$dbuser="root";
						$dbpass="";
						$dbname="dbshopping";

						$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");
						$query="SELECT * FROM products";
						$query_run=mysqli_query($connect,$query);
					?>
		
					<table class="table  table-striped">
					  <thead>
					    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">Product Name</th>
						      <th scope="col">Code</th>
						      <th scope="col">Price</th>
						      <th scope="col">Product Image</th>
					    </tr>
					  </thead>

<?php 
if($query_run){
		foreach($query_run as $row)
		{
?>	

					  <tbody>
					    <tr>
						      <td><?php echo $row['id'];  ?></td>
						      <td><?php echo $row['name']; ?></td>
						      <td><?php echo $row['code']; ?></td>
						      <td><?php echo $row['price']; ?></td>
						      <td>  <img src="<?php echo $row["image"]; ?>" style="height:100px; width: 100px;" /></td>
						   
					    </tr>
					
					  </tbody>

<?php 

		}

}
else{

	echo "No Record Found";
}
 ?>

					</table>



</div>
</div>
</div>
<br>
<br>

<div class="container">
	<h1>Customer's Orders</h1>

<div class="card" id="showOrder">
	<div class="card-body">
		<?php 
						$dbserver="localhost"; 
						$dbuser="root";
						$dbpass="";
						$dbname="dbshopping";

						$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");
						$query="SELECT * FROM orders";
						$query_run=mysqli_query($connect,$query);
					?>
		
					<table class="table  table-striped">
					  <thead>
					    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">Customer Name</th>
						      <th scope="col">Customer Email</th>
						      <th scope="col">Phone</th>
						      <th scope="col">Address</th>
						      <th scope="col">Payment Mode</th>
						      <th scope="col">Products Name</th>
						      <th scope="col">Amount_Pay</th>
                   
					    </tr>
					  </thead>

<?php 
if($query_run){
		foreach($query_run as $row)
		{
?>	

					  <tbody>
					    <tr>
						      <td><?php echo $row['id'];  ?></td>
						      <td><?php echo $row['name']; ?></td>
						      <td><?php echo $row['email']; ?></td>
						      <td><?php echo $row['phone']; ?></td>
						      <td> <?php echo $row['address']; ?></td>
						   	<td> <?php echo $row['pmode']; ?></td>
						   	<td> <?php echo $row['products']; ?></td>
						   	<td> <?php echo $row['amount_paid']; ?></td>
                
					    </tr>
					
					  </tbody>

<?php 

		}

}
else{

	echo "No Record Found";
}
 ?>

					</table>



</div>
</div>



</div>


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
 		$(document).ready(function(){
 			$('.deleteBtn').on('click', function(){
 				$('#deleteModel').modal('show');

 					$tr= $(this).closest('tr');
 					var data= $tr.children('td').map(function(){
 						return $(this).text();
 					}).get();

 					console.log(data);

 					$('#delete_id').val(data[0]);

 			});



 		});



 	</script>
 
 </body>
 </html>