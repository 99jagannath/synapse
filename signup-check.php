<?php

include 'db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phoneno = $_POST['phoneno'];
$institute = $_POST['institute'];
$password = $_POST['password'];
$q = "INSERT INTO nu (username,password,email,address,phoneno,institute) VALUES('$username','$password','$email','$address','$phoneno','$institute')";
$query = mysqli_query($con,$q);
if($query)
{
	echo "1";
}
else
{
	echo "2";
}

?>