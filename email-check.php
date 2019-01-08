<?php

include('db.php');

$email = $_POST['email'];

$q = "SELECT * FROM nu WHERE email='$email'";
$query = mysqli_query($con,$q);
if(mysqli_num_rows($query))
{
	echo "1";
}
else
{
	echo "2";
}

?>