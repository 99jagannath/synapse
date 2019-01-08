<?php
include('db.php');
$id = $_POST['id'];
$reply = $_POST['reply'];
$output = '';
$user_id = 1;
$q = "SELECT * FROM question WHERE question_id = '$id'";
$query = mysqli_query($con,$q);
$data1 = mysqli_fetch_array($query);
if($query)
{
	$q1 = "SELECT * FROM response WHERE user_id='$user_id'";
		$query1 = mysqli_query($con,$q1);
		$data = mysqli_fetch_array($query1);
             $response = $data['response']+1;
             $current_question =$data['response']+1; 
	if($id==$current_question)
	{ 
		
          if($reply ==$data1['answer'])
          {
          			if(!mysqli_num_rows($query1))
		                {
		                  $q2 = "INSERT INTO response (user_id,response) VALUES('$user_id',1)";	
		                  $q3 = "INSERT INTO level (user_id,level,q,t1,t2,t3) VALUES('$user_id',1,1,0,0,0)";

		                 }
		             else
		                 {
		                 	if($response==5)
		                 	{
		                 		$level = 1;
		                 		$time = time('h-m-s A');
		                 		$q3 = "UPDATE level SET level = 1,q=5,t1='$time' WHERE user_id='$user_id' ";
		                 	}
		                 	if($response==10)
		                 	{
		                 		$level = 2;
		                 		$time = time('h-m-s A');
		                 		$q3 = "UPDATE level SET level = 2,q=10,t2='$time' WHERE user_id='$user_id' ";	
		                 	}
		                 	if($response==15)
		                 	{
		                 		$level = 3;
		                 		$time = time('h-m-s A');
		                 		$q3 = "UPDATE level SET level = 3,q=15,t3='$time' WHERE user_id='$user_id' ";	
		                 	}
		                 	if($data['response']!=5 && $data['response']!=10 && $data['response']!=15)
		                 	{
		                 	  $q3 = "UPDATE level SET q='$response' WHERE user_id='$user_id' ";	
		                 	}
			
			               $q2 = "UPDATE response SET response='$response' WHERE user_id='$user_id'";
		                 }
             
         $query3 = mysqli_query($con,$q3);   
		 $query2 = mysqli_query($con,$q2);
		 if($query2)
		 {
		 	$output .= '<script type="text/javascript">alert("success"); </script>';
		 }
		 else
		 {
		 	$output .= '<script type="text/javascript">alert("fail1");</script>';
		 }
       }
       else
       {
       	$output .= '<script type="text/javascript">alert("fail2"); alert('.$reply.'); </script>';
       }
         
	}
	else
	{
		 $output .= '<script type="text/javascript">alert("fail3");</script>';
	}


}
else
{
	 $output .= '<script type="text/javascript">alert("no question");</script>';
}
echo $output;



?>