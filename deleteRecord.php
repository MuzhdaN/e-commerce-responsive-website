<?php 

$dbserver="localhost"; 
$dbuser="root";
$dbpass="";
$dbname="dbshopping";

$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");
if (isset($_POST['deletedata'])) {
	
	$id = $_POST['delete_id'];

	$query= "DELETE FROM register WHERE ID= '$id'";
	$query_run=mysqli_query($connect,$query);
	if($query_run)
	{
		
		header("Location:admin.php");
		echo "<script> alert('Data deleted'); </script>";
	}
	else{
		echo "<script> alert('Data not deleted'); </script>";
	}
}





 ?>