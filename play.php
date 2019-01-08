
<?php
  include('db.php');
                 if(isset($_POST['id']))
                 {
                  $id = $_POST['id'];
                 }
                 else
                 {
                  $id = 1;
                 }
                 $fid=$id+1;
                 $bid=$id-1;
                 $user_id = 1;
                 $q = "SELECT * FROM response WHERE user_id='$user_id'";
                 $query = mysqli_query($con,$q);
                 $data = mysqli_fetch_array($query);
?>
<html>
<head>
	
	<title>Ostella </title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
	body{
		background-color: black;
		font-family:'courier new';
		/*background-image: url('1.jpg') ;*/
		background-size: cover;
		background-position: center;

	}
::-webkit-scrollbar{
	display: none;
}
	.mainBorder{
		width: 92%;
		height: 83%;
		border-radius: 5px;
		border-color: #4c9051;
		border-style: solid;
		border-width: 1px;
		margin: 2%;
		padding: 2%;
		color: #4c9051;
		box-shadow: 0 0 10px #4c9051;
	}


.qtitle{
	color:#ff5722;
	font-size: 50px;
	margin-top: 1%;
	text-align: center;
	text-shadow: 0 0 25px #ff5722;
	position: absolute;
	top:3%;
	left:0;
	right: 20%;
	text-decoration: underline;
}
.rtitle{
	color:#ff5722;
	font-size: 50px;
	margin-top: 1%;
	text-align: center;
	text-shadow: 0 0 25px #ff5722;
	position: absolute;
	top:60%;
	left:0;
	right: 20%;
	text-decoration: underline;
}
.message{
   	color:#ff5722;
	font-size: 30px;
	margin-top: 1%;
	text-align: left;
	text-shadow: 0 0 25px #ff5722;
	position: absolute;
	top:30%;
	left:4%;
	right: 10%;	
}
.question{
   	color:#ff5722;
	font-size: 30px;
	margin-top: 1%;
	text-align: left;
	text-shadow: 0 0 25px #ff5722;
	position: absolute;
	top:17%;
	left:4%;
	right: 10%;
}

.input{
	background-color: transparent;
	color: #ff5722;
	font-size: 30px;
	border: none;
	height: 50px;
	width: 100%;
	padding:10px;
	border-radius: 10px;
			border-color: #ff5722;
		border-style: solid;
		border-width: 1px;
		box-shadow: 0 0 10px #4c9051;
	
}
textarea{
		background-color: transparent;
	color: #ff5722;
	font-size: 30px;
	border: none;
	
	width: 100%;
	padding:10px;
	border-radius: 10px;
			border-color: #ff5722;
		border-style: solid;
		border-width: 1px;
		box-shadow: 0 0 10px #4c9051;
}

.input:focus{
	outline: none;
	font-family:'courier new';
}
.reply-box{
		color:#ff5722;
	font-size: 50px;
	margin-top: 1%;
	
	text-shadow: 0 0 25px #ff5722;
	position: absolute;
	top:75%;
	left:5%;
	right: 15%;
	
}
#display-mark ,#display-rank{
	border-color: #ff5722;
	box-shadow: 0 0 5px #ff5722;
	color:white;
	font-size: 20px;
	border-radius: 10px;
	border-style: solid;
	border-width: 2px;
}
 #display-discussion{
   	border-color: #ff5722;
	box-shadow: 0 0 5px #ff5722;
	color:white;
	font-size: 20px;
	border-radius: 10px;
	border-style: solid;
	border-width: 2px;
	height: 70%;	
 }

legend{
	box-shadow: 0 0 15px #ff5722;
	text-shadow: 0 0 5px #ff5722;
	border-radius: 25px;
	border-style: solid;
	border-width: 2px;
	padding: 3px 20px 3px;
	color: white;
	background-color: #ff5722; 
}
.auth{
	max-width: 12%;
	float: right;
	position: absolute;
	top:18%;
	right: 1%;
	color: #4c9051;
}






.cbutton{
		
	font-size: 50px;
	margin-top: 3%;
	
	
	position: absolute;
	background-color: transparent;

	left:35%;
	right: 15%;

}

.menu{
	position: absolute;
	top: 12%;
	left: 0%
	transform-origin: left;
	transform: translate(-25px,0);
}

.sidebar{
	color:#4c9051;
	width: 180px;
	font-size: 20px;
	border-radius: 0 25px 0;
	box-shadow: 0 0 5px #ff5722;
	padding:15px 15px 15px 35px;
	margin-top: 10%;
	text-align: center;
	background-color: #ff5722;
	transition: all .2s ease-in-out;
	opacity: 0;
}

.sidebar:hover{
	background-color: #ff5722;
	color:#012e0b;
    -moz-box-shadow: inset 0 0 10px #ff5722;
	-webkit-box-shadow: inset 0 0 10px #ff5722;
	box-shadow: inset 0 0 10px #012e0b;
    cursor: hand;

}

.sideDisp{
	text-align: justify;
}

#home-show{
	font-size: 13px;
}

.square{
	width: 80%;
	height: 80%;
	position: absolute;
	top: 0;
	left: 0;
	right: 8%;
	bottom: 0;
	margin: auto;
	box-shadow: 0 0 15px #ff5722;
}

.squarebox{
	width: 67.33333%;
	height: 2.3333%;
	font-size: 60px;
	
	padding: 20px 0;
	color: #012e0b;
}

.squarebox img{
	width: 40px;
	height: 40px;
}

.right{
	float: right;
	bottom:0;
}
.left{
		float: left;
	bottom:0;
}
</style>

<script src="js/particles.js"></script>

</head>
<body>
	<div id="particles-js">
			<div class="right-arrow right">
				<?php if($id!=17 && $id<=$data['response']) { ?>
		        <i class="material-icons" id="right" style="font-size:48px;color:red; background-color: transparent; border-radius: 100%;border-color: #ff5722;
		                  border-style: solid;border-width: 5px;text-shadow: 0 0 25px #ff5722;">arrow_forward</i>
		              <?php } ?>
	       </div>
				<div class="left-arrow left">
					<?php if($id!=1){ ?>
		   <i class="material-icons" id="left" style="font-size:48px;color:red; background-color: transparent; border-radius: 100%;border-color: #ff5722;
		                  border-style: solid;border-width: 5px;text-shadow: 0 0 25px #ff5722;">arrow_back</i>
		              <?php } ?>
	           </div>
	</div>
	<div class="soundCont"></div>
    <div class="soundCont1"></div>
	<div class="squarebox">
		  
			<div class="square">
				<b>


			<div id="rule-show" class="sideDisp">
				<div class="qtitle"><b>Rules</b><br></div>
                <div class="question">
                   
                From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance svnkjxhvjfxjvhffbhfbdfhjhjk<br/>bgfjd	
                </div>
				
				
			</div>

			

				<div id="message-show" class="sideDisp">
			
                <div class="reply">
                	<div class="qtitle">Type your message here</div>
                	<div class="message"><textarea cols="50" rows="5" type="text" name="message"> </textarea>
                        
                     <div class="cbutton"> <i class="material-icons" id="submit-message" style="font-size:48px;color:red; background-color: transparent; border-radius: 100%;border-color: #ff5722;
		                  border-style: solid;border-width: 5px;">check</i></div>  
                	</div>
                </div>
				</div>

				

			
			<div id="question-show" class="sideDisp">
				<div id="question-body">
                     <input type="hidden" id="qid" name="qid" value="<?=$id?>">
                     <form action="play.php"  id="form">
                     	<input type="text" type="hidden" name="id" value="2">
                     </form>
					

            </div>
			</div>


					
				</b>
			</div>
	</div>

	<div class="auth">
		<fieldset id="display-mark">
			<legend id="display-tit">
				Score
			</legend>

			score:<span class="Lcount"> </span><br>

		</fieldset>
		<br/>
		<fieldset id="display-rank">
			<legend id="display-tit1">
				Rank
			</legend>

			Ranks:<span class="Rcount"> </span><br>

		</fieldset>
		<br/>
		<fieldset id="display-discussion">
			<legend id="display-tit2">
				Hints
			</legend>

			<span class="Rcount"> 
                  <div class="discussion-question">
                  	<span class="hint"> </span>
                  	
                  </div>

			</span><br>
              
		</fieldset>
	</div>

			
	
	<div class="menu">
		<li class="sidebar" id="home"><a href="index.php"><b>Home</b></a></li>
		<li class="sidebar" id="rule"><b>Rlues</b></li>
		<li class="sidebar" id="message"><b>Message</b></li>
		<li class="sidebar" id="question"><b>Question</b></li>
		<li class="sidebar" id="exit"><b>exit</b></li>
		
	</div>

<div id="reaction"></div>
<script src="js/carapp.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/transit.min.js"></script>
<script type="text/javascript" src="js/jquery.redirect.js"></script>
</body>
</html>

<script type="text/javascript">
	
    function fetchdata()
    {
    	var id = $('#qid').val();
    	
       $.ajax({
         	url:'fetch.php',
         	method:'POST',
         	data:{id:id},
         	success:function(data){
              $('#question-body').html(data);
         	}
         });	
    }
    function checkdata(id,reply)
    {
     $.ajax({
     	url:'check.php',
     	method:'POST',
     	data:{id:id,reply:reply},
     	success:function(data)
     	{
          $('#reaction').html(data);
          location.reload(true);
     	}
     });
    	
    }
    function fetchscore()
    {
     $.ajax({
     	url:'score.php',  	
     	success:function(data)
     	{
          $('.Lcount').html(data);
     	}
     });
    }
   function fetchhint()
    {
    var id = $('#qid').val();
     $.ajax({
     	url:'hint.php',
     	method:'POST',
     	data:{id:id},  	
     	success:function(data)
     	{
          $('.hint').html(data);
     	}
     });
    }
 
 
    $(document).ready(function(){
    	fetchdata();
         fetchscore();
         fetchhint();
    $("#question-show").animate({display:"block"});
       $("#rule-show").hide();
       $("#message-show").hide();
           
      var id = $('#qid').val();
             $(document).on('click','#reply',function(){
            	
                        var id = $('#reply').data('id');
    	                var reply = $('#response').val();
    	                if(id!='' && reply!='')
    	                 {
    		               if(confirm('are you want to check'))
    		                 {
    			              checkdata(id,reply);
    		                 }
    		
    	                 } 
    	                else 
    	                 {
    		               alert('fill the answer');
    	                 }   
    	 
                 });
             $('#left').click(function(){
             	var bid = Number(id)-1;
             	alert(bid);
             	$.redirect("play.php",{id:bid},"POST");
             });
             $('#right').click(function(){
             	var cid = Number(id)+1;
             	alert(cid);
             	$.redirect("play.php",{id:cid},"POST");
             	
             	
             });
 
              
    	 var playEventSound = function(soundfile,elem){
			elem.html("");
			elem.html("<embed src='"+soundfile+"' hidden='true' />");
		   }

    	 function showLeftMenu(){
			$(".menu").stop(true,true);
			$(".menu").animate({'left':'-0px'},400,function(){});
		    }

		function hideLeftMenu(){
			$(".menu").stop(true,true);
			$(".menu").animate({'left':'-160px'},1000,function(){});
		    }

		$(".menu").unbind('mouseleave').bind('mouseleave',function(){
			hideLeftMenu();
		});
		
		$(".menu").unbind('mouseenter').bind('mouseenter',function(){
				showLeftMenu();			
		});

       $(".sidebar").css({'display':'block'});

       		$(".sidebar").each(function(i,e) {
			var that = this;
			setTimeout(function(){

				$(that).transition({ opacity : 1},750,function(){});
				playEventSound('sounds/multimedia_rollover_048.mp3',$(".soundCont"));
				console.log('first');
			},750*i);
			setTimeout(function(){
               hideLeftMenu();
			},4000);
		      });
        $(".sidebar").hover(function(){
        playEventSound('sounds/multimedia_rollover_046.mp3',$(".soundCont"));

           });
               $('#question').click(function(){
       		playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		
        	$("#question-show").slideDown();
       });

        $('#rule').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		
        	$("#rule-show").slideDown();
       });

        $('#message').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
        	
        	$("#message-show").slideDown();
        });


    	

    });
</script>
