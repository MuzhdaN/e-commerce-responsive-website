<?php 
session_start();

$dbserver="localhost"; 
$dbuser="root";
$dbpass="";
$dbname="dbshopping";

$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");

$name= $_POST['usernameRegis'];
$email=$_POST['emailRegis'];
$pass=$_POST['passwordRegis'];


$s= "SELECT * FROM `register` WHERE Name= '$name'";

$result= mysqli_query($connect,$s);

$num= mysqli_num_rows($result);

if($num== 1){
	echo "User Name already taken";
}
else{

	$reg="INSERT INTO `register`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$pass')";
	mysqli_query($connect,$reg);
	echo "Registeration successful";
}











 ?>