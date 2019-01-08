<?php

include('db.php');
$q1 = "SELECT * FROM level WHERE level =1";
$q2 = "SELECT * FROM level WHERE level =2";
$q3 = "SELECT * FROM level WHERE level =3";
$query1 = mysqli_query($con,$q1);
$query2 = mysqli_query($con,$q2);
$query3 = mysqli_query($con,$q3);

?>