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
header('location:admin.php');













 ?>