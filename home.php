<html>
<head>
	
	<title>Ostella </title>
	
	<style type="text/css">
	body{
		background-color: #012e0b;
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

	.circle_300_300{
		width: 300px;
		height: 300px;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;
		background-color: #012e0b;
		opacity: 0;
		/*box-shadow: 0 0 6px #4c9051;*/
	}

	.circle_250_250{
		width: 250px;
		height: 250px;
		border-radius: 50%;
		border-width: 8px;
		/*border: 10px dashed #4c9051;*/
		border-style: dashed;
		border-color: #4c9051;	
		background-color: #012e0b;	
		opacity: 0;
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_200_200{
		width: 200px;
		height: 200px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_150_150{
		width: 150px;
		height: 150px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 4px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_100_100{
		width: 100px;
		height: 100px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_40_40{
		width: 40px;
		height: 40px;
		background-color: #4c9051;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;		
		box-shadow: 0 0 15px #4c9051;
		opacity: 0;
	}

	.center{
		position: absolute;
		top:0;
		bottom: 0;
		left: 0%;
		right: 25%;
		margin: auto;
	}

	.rotateLinear{
	-webkit-animation-name: rotateA; 
    -webkit-animation-duration: 4s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 4s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;	
	}

	.rotateEaseIn{
	-webkit-animation-name: rotate; 
    -webkit-animation-duration: 4s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 4s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in;	
	}

	.rotateEaseOut{
		
	-webkit-animation-name: rotate; 
    -webkit-animation-duration: 10s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function:ease-in-out;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 10s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in-out;	
	}


@-webkit-keyframes rotate {
    from {-webkit-transform: rotate(0deg);}
    to {-webkit-transform: rotate(360deg);}
}

@-moz-keyframes rotate {
    from {-moz-transform: rotate(0deg);}
    to {-moz-transform: rotate(360deg);}
}


@-webkit-keyframes rotateA {
    from {-webkit-transform: rotate(360deg);}
    to {-webkit-transform: rotate(0deg);}
}

@-moz-keyframes rotateA {
    from {-moz-transform: rotate(360deg);}
    to {-moz-transform: rotate(0deg);}
}
.title{
	color:#4c9051;
	font-size: 50px;
	margin-top: 1%;
	text-align: center;
	text-shadow: 0 0 15px #4c9051;
	position: absolute;
	top:5%;
	left:0;
	right: 25%;
}
fieldset{
	border-color: #4c9051;
	box-shadow: 0 0 5px #4c9051;
	color:#4c9051;
	font-size: 20px;
	border-radius: 10px;
	border-style: solid;
	border-width: 2px;
}

legend{
	box-shadow: 0 0 5px #4c9051;
	text-shadow: 0 0 5px #4c9051;
	border-radius: 25px;
	border-style: solid;
	border-width: 2px;
	padding: 3px 20px 3px;
	color: #4c9051;
	background-color: #012e0b; 
}
.auth{
	width: 33%;
	float: right;
	position: absolute;
	top:8%;
	opacity: 0;
	right: -3%;
	color: #4c9051;
	background-color: #012e0b;
}

.authform {
	color: #4c9051;
	width: 50%;
}

.authform_forgot {
	color: #4c9051;
	text-shadow: 0 0 5px #4c9051;
}


input{
	background-color: #4c9051;
	color: white;
	border: none;
	height: 30px;
	padding:10px;
	border-radius: 10px;
}

input:focus{
	outline: none;
	font-family:'courier new';
}

.button{
	width: 50%;
	color:#4c9051;
	border-radius: 25px;
	box-shadow: 0 0 5px #4c9051;
	padding:5px;
	text-align: center;
	float: right;
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
	box-shadow: 0 0 5px #4c9051;
	padding:15px 15px 15px 35px;
	margin-top: 10%;
	text-align: center;
	background-color: #012e0b;
	transition: all .2s ease-in-out;
	opacity: 0;
}

.sidebar:hover{
	background-color: #4c9051;
	color:#012e0b;
    -moz-box-shadow: inset 0 0 10px #012e0b;
	-webkit-box-shadow: inset 0 0 10px #012e0b;
	box-shadow: inset 0 0 10px #012e0b;
    cursor: hand;

}

.sideDisp{
	text-align: justify;
}

#home-show{
	font-size: 13px;
}
</style>

<script src="js/particles.js"></script>

</head>
<body>
	<div id="particles-js"></div>
	<div class="soundCont"></div>
    <div class="soundCont1"></div>
	<div class="">
		<div class="title">[ Title ]</div>
		<div class="center rotateEaseIn circle_300_300"></div>
		<div class="center rotateEaseout circle_250_250"></div>
		<div class="center rotateEaseIn circle_200_200"></div>
		<div class="center rotateLinear circle_150_150"></div>
		<div class="center rotateLinear circle_100_100"></div>
		<div class="center rotateEaseOut circle_40_40"></div>
	</div>

	<div class="auth">
		<fieldset id="display-board">
			<legend id="display-tit">
				Authentication
			</legend>

			<div id="home-show" class="sideDisp">
				<b>This is home Divison.</b><br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec ex vel augue porta vehicula ac eu nisi. Proin eu felis id eros faucibus imperdiet. Donec dapibus eros nisl, vitae euismod nulla tempor viverra. Quisque at ante ultricies, finibus orci in, dictum orci. Etiam ultricies semper elit, sit amet euismod purus varius congue. Curabitur pharetra dolor nec mauris imperdiet, consectetur pretium dolor interdum. Suspendisse potenti. Aliquam ultricies congue nisl, vitae tincidunt tellus lobortis eget. Aliquam erat volutpat. Nullam ultricies lectus rhoncus, consequat velit mattis, pretium massa. Donec turpis metus, congue<br><br>

Integer blandit ligula nisl, et volutpat sapien efficitur sed. <i> Quisque vel sollicitudin dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis justo quis lectus</i> imperdiet suscipit egestas mattis massa. Ut bibendum pretium purus in hendrerit. Curabitur non bibendum dui. Sed id magna bibendum, posuere nunc convallis, consequat arcu.<br>
<br>
Aenean facilisis accumsan erat eu dapibus. Fusce luctus felis nisl, sit amet pretium nisl gravida sit amet. Suspendisse interdum ex pulvinar mauris luctus, non lobortis eros finibus. Fusce eleifend, leo nec porttitor condimentum, dui lacus vehicula ipsum.
			</div>

			<div id="about-show" class="sideDisp">
				<b>About Div</b><br>
				From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance s
			</div>

			

				<div id="contact-show" class="sideDisp">
					 <br> [ Street ] ,<br>	[ City ] ,<br> [ State ], <br> [ Country ] , <br> [ Pincode ] .
				</div>

				

			</fieldset>
		</div>

			
		</fieldset>
	</div>

	<div class="menu">
		<li class="sidebar" id="home"><b>Home</b></li>
		<li class="sidebar" id="about"><b>About Us</b></li>
		<li class="sidebar" id="contact"><b>Contact Us</b></li>
		<li class="sidebar" id="play"><a href="play.php">Play</a></li>
		<li class="sidebar" id="refer"><b>Refer</b></li>
	</div>
<script src="js/app.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/transit.min.js"></script>

</body>
</html>
<script type="text/javascript">
	

    $(document).ready(function(){


       $("#home-show").animate({display:"block"});
       $("#about-show").hide();
       $("#contact-show").hide();
       function talkBack(message){
	var voices = window.speechSynthesis.getVoices();
	var msg = new SpeechSynthesisUtterance();
	msg.voice = voices[10];
	msg.voiceURI = 'native';
	msg.volume = 1; // 0 to 1
	msg.rate = .8; // 0.1 to 10
	msg.pitch = 0; //0 to 2
	msg.text = message;
	msg.lang = 'en-US';	
	speechSynthesis.speak(msg);
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


				playEventSound('sounds/robot_movement_6.mp3',$(".soundCont"));


				setTimeout(function(){
				playEventSound('sounds/slanesh__bip.mp3',$(".soundCont1"));

					$('.circle_40_40').animate({opacity:1});
					$('.circle_150_150').animate({opacity:1});
					$('.circle_200_200').animate({opacity:1});
					console.log('second');
				},2000);

				setTimeout(function(){
					$('.circle_300_300').animate({opacity:1});
					$('.circle_250_250').animate({opacity:1});
					console.log('third');
				},4000);
                 
				$(".auth").animate({right:'-3%', opacity:0},200,function(){
					playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
					$(".auth").animate({right:'3%',opacity:'1'},100,function(){});
					console.log('fourth');		
				});
			
 
                 console.log('eight');
			},730*5.5);

	    });

       $("#home-show").animate({opacity:1});

       $('#display-tit').html('Home');

       var count =0;
       setInterval(function(){

       	 if(count%5 == 0){
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 5px #4c9051');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 15px #4c9051');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 15px #4c9051');
       	 	$('#display-tit').css('box-shadow', '0px 0px 15px #4c9051');
       	 }else{
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 45px #4c9051');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 35px #4c9051');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 35px #4c9051');
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }

       	 if(count%2 == 0){
       	 	$('#display-tit').css('box-shadow', '0px 0px 15px #4c9051');
       	 }else{
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }


       	 count++;
        console.log('fifth');
         
       },300);

		var playEventSound = function(soundfile,elem){
			elem.html("");
			elem.html("<embed src='"+soundfile+"' hidden='true' />");
		}

     
        	
        
   
       $('#home').click(function(){
       		playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		$('#display-tit').html('Home');
        	$("#home-show").slideDown();
       });

        $('#about').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		$('#display-tit').html('About Us');
        	$("#about-show").slideDown();
       });

        $('#contact').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
        	$('#display-tit').html('Contact');
        	$("#contact-show").slideDown();
        });
        $('#play').click(function(){
        	
        });

        

        $(".sidebar").hover(function(){
        			playEventSound('sounds/multimedia_rollover_046.mp3',$(".soundCont"));

        });
                setTimeout(function(){
        	talkBack("sir please read the rules carefuly");
        	console.log('sixth');
        },12000);
           

      
    });
</script>
