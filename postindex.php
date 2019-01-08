<html>
<head>
	
	<title>Ostella </title>
	
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
		border-color: white;
		border-style: solid;
		border-width: 1px;
		margin: 2%;
		padding: 2%;
		color: white;
		box-shadow: 0 0 10px white;
	}

	.circle_300_300{
		width: 300px;
		height: 300px;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: white;
		background-color: #500b06;
		/*box-shadow: 0 0 6px white;*/
	}

	.circle_250_250{
		width: 250px;
		height: 250px;
		border-radius: 50%;
		border-width: 8px;
		/*border: 10px dashed white;*/
		border-style: dashed;
		border-color: white;		
		/*box-shadow: 0 0 6px white;*/
		
	}

	.circle_200_200{
		width: 200px;
		height: 200px;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: white;		
		/*box-shadow: 0 0 6px white;*/
		
	}

	.circle_150_150{
		width: 150px;
		height: 150px;
		border-radius: 50%;
		border-width: 4px;
		border-style: dashed;
		border-color: white;		
		/*box-shadow: 0 0 6px white;*/
		
	}

	.circle_100_100{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: white;		
		/*box-shadow: 0 0 6px white;*/
		
	}

	.circle_40_40{
		width: 40px;
		height: 40px;
		background-color: white;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: white;		
		box-shadow: 0 0 15px white;
		
	}

	.center{
		position: absolute;
		top:0;
		bottom: 0;
		left: 0%;
		right: 0%;
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
	color:white;
	font-size: 60px;
	margin-top: 1%;
	text-align: center;
	text-shadow: 0 0 15px white;
	position: absolute;
	top:8%;
	left:0;
	right: 0%;
}
fieldset{
	border-color: white;
	box-shadow: 0 0 5px white;
	color:white;
	font-size: 20px;
	border-radius: 10px;
	border-style: solid;
	border-width: 2px;
}

legend{
	box-shadow: 0 0 5px white;
	text-shadow: 0 0 5px white;
	border-radius: 25px;
	border-style: solid;
	border-width: 2px;
	padding: 3px 20px 3px;
	color: white;
	background-color: #012e0b; 
}
.auth{
	width: 33%;
	float: right;
	position: absolute;
	top:8%;
	right: 3%;
	color: white;
	background-color: #012e0b;
}

.authform {
	color: white;
	width: 50%;
}

.authform_forgot {
	color: white;
	text-shadow: 0 0 5px white;
}


input{
	background-color: white;
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
	color:white;
	border-radius: 25px;
	box-shadow: 0 0 5px white;
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
	color:white;
	border-radius: 0 25px 0;
	box-shadow: 0 0 5px white;
	padding:15px 15px 15px 35px;
	margin-top: 10%;
	text-align: center;
	background-color: #012e0b;
	transition: all .2s ease-in-out;
}

.sidebar:hover{
	background-color: white;
	color:#012e0b;
	 -webkit-transition: width 1s ease-in-out;
    -moz-transition: width 1s ease-in-out;
    -o-transition: width 1s ease-in-out;
    transition: width 1s ease-in-out;
    width:90%;
    cursor: hand;
    transform: scale(1.1);

}

.sideDisp{
	text-align: justify;
}

#home-show{
	font-size: 13px;
}
.fauxBody,.fauxBody1,.fauxBody2{
	width:1366px;
	height:768px;
	position:absolute;
	z-index:-50;
}
</style>

<script src="js/particles.js"></script>

</head>
<body>
	<div class="title">[ <span class="passkey" id="1_value"> J </span> 
						 <span class="passkey" id="2_value"> A </span>
						 <span class="passkey" id="3_value"> R </span> 
						 <span class="passkey" id="4_value"> V </span>
						 <span class="passkey" id="5_value"> I </span> 
						 <span class="passkey" id="6_value"> S </span> ]</div>
	<div id="particles-js"></div>
	<div class="soundCont"></div>
    <div class="soundCont1"></div>
    <div class="soundCont2"></div>
    <div class="fauxBody"></div>
    <div class="fauxBody1"></div>
    <div class="fauxBody2"></div>

	<div class="circles">
		<div class="center rotateEaseIn circle_300_300"></div>
		<div class="center rotateEaseout circle_250_250"></div>
		<div class="center rotateEaseIn circle_200_200"></div>
		<div class="center rotateLinear circle_150_150"></div>
		<div class="center rotateLinear circle_100_100"></div>
		<div class="center rotateEaseOut circle_40_40"></div>
	</div>

	</div>

	
<script src="js/preapp.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/transit.min.js"></script>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
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
    	setTimeout(function(){
    	talkBack("hello sir i am jarvis you are wellcome to synapse");
    	talkBack("press enter to start the game");	
    	console.log('jaga');
    	},100);
    	
				

      

       var bgArr = [
			'url(images/fauxBG.png)',
			'url(images/fauxBG1.png)',
			'url(images/fauxBG2.png)',
			'url(images/fauxBG3.png)',
			'url(images/fauxBG4.png)',
			'url(images/fauxBG5.png)'	
		];

       var animateRings = function(elem, time, deg){
			var resetDeg = (deg=='-360deg')?'360deg':'-360deg';
			elem.css({ rotate: resetDeg });
			elem.transition({ rotate: deg }, time, 'linear', function(){});
		}

	function rotObj(){
		this.animator = animateRings;
	}

       $('#display-tit').html('Home');

       var count =0;
       setInterval(function(){

       	 if(count%5 == 0){
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 5px white');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 15px white');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 15px white');
       	 	$('#display-tit').css('box-shadow', '0px 0px 15px white');
       	 }else{
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 45px white');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 35px white');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 35px white');
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px white');
       	 }

       	 if(count%2 == 0){
       	 	$('#display-tit').css('box-shadow', '0px 0px 15px white');
       	 }else{
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px white');
       	 }


       	 count++;


       },300);

		var playEventSound = function(soundfile,elem){
			elem.html("");
			elem.html("<embed src='"+soundfile+"' hidden='true' />");
		}


var stopEventSound =function (elem){
	elem.html("");	
}

function soundHandler(){
	this.play = playEventSound;
	this.stopMusic = stopEventSound;
	
}



     

        setInterval(function(){
        	$('body').css('background-color',"black");
        },1000);

        var keycount = 0;
        var key = '';

        $( document ).keypress(function(e) {

        	keycount++;

		    var ch = String.fromCharCode(e.charCode);



				$(".circle_40_40").css('background-color','#012e0b');

				playEventSound('sounds/servo_motor.mp3',$(".soundCont"));

				setTimeout(function(){
				$(".circle_250_250").animate({width:"180px",height:"180px"});
				$(".circle_250_250").css('background-color','#012e0b');

				},750);	

				setTimeout(function(){
					playEventSound('sounds/servo_motor.mp3',$(".soundCont1"));
					$(".circle_150_150").animate({width:"110px",height:"110px"});	
					$(".circle_300_300").css('background-color','#012e0b');
				},1000);

				setTimeout(function(){
					$(".circle_300_300").animate({width:"110px",height:"110px"});

					$(".circle_250_250").transition({ rotate: '360deg' }, 220, 'linear', function(){});	
					
					setTimeout(function(){
					$("#particles-js").hide();
					$('.title').animate({opacity:0});
					$('.circles').animate({opacity:0});
				},200);

					var count1 = count2 = count3 = 0;
	var fauxBody1 = setInterval(function(){
		if(count1 == 6){
			count1 = 0;
		}
		$(".fauxBody").css({'background-image':bgArr[count1]});
		var soundEv = new soundHandler();
		soundEv.play('sounds/simple_beep_nav.mp3',$(".soundCont"));
		count1++;
	},10);
	var fauxBody2 = setInterval(function(){
		if(count2 == 6){
			count2 = 0;
		}
		$(".fauxBody1").css({'background-image':bgArr[count2]});
		var soundEv1 = new soundHandler();
		soundEv1.play('sounds/simple_beep_nav.mp3',$(".soundCont1"));
		
		count2++;
	},300);
	var fauxBody3 = setInterval(function(){
		if(count3 == 6){
			count3 = 0;
		}
		$(".fauxBody2").css({'background-image':bgArr[count3]});
		var soundEv2 = new soundHandler();
		soundEv2.play('sounds/simple_beep_nav.mp3',$(".soundCont2"));		
		count3++;
	},600);
	setTimeout(function(){
		clearInterval(fauxBody1);
		clearInterval(fauxBody2);
		clearInterval(fauxBody3);
		$(".fauxBody").css({'background-image':bgArr[0]});
		$(".fauxBody1").remove();
		$(".fauxBody2").remove();
		window.location="http://localhost/nu3/home.php";
	},6000);	
},1850);	
				
					
				



		});


    });
</script>
