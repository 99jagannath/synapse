<?php
include 'db.php';
$user_id =1;
$q = "SELECT * FROM response WHERE user_id = '$user_id'";
$output = '';
$query = mysqli_query($con,$q);
if(mysqli_num_rows($query))
{
	$data = mysqli_fetch_array($query);
	$output .=$data['response'];
}
else
{
	$output .= '0';
}

echo $output;


?>





