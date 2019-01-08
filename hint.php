<?php
include 'db.php';
$id =$_POST['id'];
if($id<5)
{
	$level = 1;
}
else if ($id>=5 && $id<10 ) {
	$level = 2;
}
else
{
	$level = 3;
}
$q = "SELECT * FROM hint WHERE level = '$level'";
$output = '';
$query = mysqli_query($con,$q);
if(mysqli_num_rows($query))
{
	$data = mysqli_fetch_array($query);
	$output .=$data['hint'];
}
else
{
	$output .= 'No hint this time';
}

echo $output;


?>





