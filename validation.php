<?php 
session_start();

$dbserver="localhost"; 
$dbuser="root";
$dbpass="";
$dbname="dbshopping";

$connect=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("unable to connect");

$name= $_POST['usernameLog'];
$pass=$_POST['passwordLog'];


$s= "SELECT * FROM `register` WHERE Name= '$name' && Password= '$pass'";

$result= mysqli_query($connect,$s);

$num= mysqli_num_rows($result);

if($num== 1){
	$_SESSION['username']= $name;
	header('location:userPage.php');
}
else if($name =='Admin' && $pass == 'Admin'){
$_SESSION['username']= $name;	
header('location:admin.php');

}
else{

		header('location:register.html');
}











 ?>