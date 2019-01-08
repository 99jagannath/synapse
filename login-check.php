<?php
include('db.php');
$email = $_POST['email'];
$password = $_POST['password'];
$q1 = "SELECT * FROM nu WHERE email = '$email'";
$query1 = mysqli_query($con,$q1);
if(mysqli_num_rows($query1))
{
  
	$data1 = mysqli_fetch_array($query1);

	if($data1['password'] == $password)
	{
		echo "1";
	}
	else
	{
		echo "2";
	}
	
   
	
	

}
else
{
	echo "3";
}


?>