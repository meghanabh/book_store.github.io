<?php
session_start();
/* User login process, checks if user exists and password is correct */
include 'db.php';
$email =$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM users WHERE email='$email'  and  password='$password'";
$result = mysqli_query($mysqli, $sql);
$user = mysqli_fetch_assoc($result);
//echo ($user['password']);
if ( $_POST['email']==$user['email'] &&  $_POST['password'] ==$user['password']) {

	$_SESSION["username"]=$user['first_name'];
	$_SESSION["last_name"]=$user['last_name'];
	//echo ($_SESSION['last_name']);
		
	header("location: index.php");
	   //nitishbarik724@gmial.com
}
else{
	echo"user not registered";
}

?>