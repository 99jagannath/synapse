<?php
include('db.php');
$id = $_POST['id'];
$output = '';
$user_id = 1;
$q = "SELECT * FROM question WHERE question_id = '$id'";
$query = mysqli_query($con,$q);
$data = mysqli_fetch_array($query);
$q1 = "SELECT * FROM response WHERE user_id = '$user_id'";
$query1 = mysqli_query($con,$q1);
$data1 = mysqli_fetch_array($query1);
if($query)
{
 $output .= '<div id="question-body">
			<div class="qtitle">question'.$data['question_id'].'</div>
                <div class="question">'
                   
                .$data['question'].	
                '</div>';
   if($data1['response']>=$id)
   {
     $output .= '<div class="rtitle">Already submited</div>'; 
   } 
   else{
          $output .=' <div class="reply">
                    <div class="rtitle">Answer</div>
                    <div class="reply-box">
                        <input class="input" type="text" name="reply" id="response">
                        
                     <div class="cbutton"> <i class="material-icons" id="reply" data-id="'.$data['question_id'].'" style="font-size:48px;color:red; background-color: transparent; border-radius: 100%;border-color: #ff5722;
                          border-style: solid;border-width: 5px;">check</i>
                      </div>  
                    </div>
                </div>
            </div>';
   }        
 
        

}
else
{
	$output .= 'sorry no question this time';
}
echo $output;



?>