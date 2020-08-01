<!DOCTYPE html>
<html lang="en" >
<head>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
html,body {
	margin: 0;
	height: 100%;
	overflow-x:hidden;
	text-align: center;
	font-family: 'Ubuntu';
}
.frame{
	width: 600px;
	height: 350px;
	margin: 80px auto 0px;
	position: relative;
	background: #435d77;
	border-radius:0 0 40px 40px; 
}
#_open_envelope{
	width: 177px;
height: 45px;
	position: absolute;
	z-index: 311;
	top: 250px;
	left: 208px;
	border-radius: 10px;
	color: #fff;
	font-size: 26px;
	
	border: 2px solid #fff;
	transition:.3s;
}
#_open_envelope:hover{
	background: #FFf;
	color: #2b67cb;
	transform:scale(1.1);
	transition:background .25s, transform .5s,ease-in;
	cursor: pointer;
}
.message{
	position: relative;
	width: 580px;
	min-height:300px;
	height: auto;
	background: #fff;
	margin: 0 auto;
	top: 30px;
	box-shadow: 0 0 5px 2px #333;
	transition:2s ease-in-out;
	transition-delay:1.5s;
	z-index: 300;
}
.left,.right,.top{width: 0;	height: 0;position:absolute;top:0;z-index: 310;}
.left{	
	border-left: 300px solid #a00721;;
	border-top: 160px solid transparent;
	border-bottom: 160px solid transparent;
}
.right{	
	border-right: 300px solid #a00721;;
	border-top: 160px solid transparent;
	border-bottom: 160px solid transparent;;
	left:300px;
}
.top{	
	border-right: 300px solid transparent;
	border-top: 200px solid black;
	border-left: 300px solid transparent;
	transition:transform 1s,border 1s, ease-in-out;
	transform-origin:top;
	transform:rotateX(0deg);
	z-index: 500;
}
.bottom{
	width: 600px;
	height: 190px;
	position: absolute;
	background: #b50d29;
	top: 160px;
	border-radius:0 0 30px 30px;
	z-index: 310; 
}

.open{
	transform-origin:top;
	transform:rotateX(180deg);
	transition:transform .7s,border .7s,z-index .7s ease-in-out;
	border-top: 200px solid #2c3e50;
	z-index: 200;
}
.pull{
	-webkit-animation:message_animation 2s 1 ease-in-out;
	animation:message_animation 2s 1 ease-in-out;
	-webkit-animation-delay:.9s;
	animation-delay:.45s;
	transition:1.5s;
	transition-delay:1s;
	z-index: 350;
}
#name,#email,#phone,#messarea,#send,#subject{
	margin: 0;
	padding: 0 0 0 10px;
	width: 570px;
	height:40px;
	float: left;
	display: block;
	font-size: 18px;
	color: #b50d29;
	border:none;
	border-bottom:1px solid #bdbdbd;
	letter-spacing: normal;
}
#messarea{
	height: 117px;
	width: 560px;
	overflow: auto;
	border:none;
	padding: 10px;
}
#send{ 
	width:   580px;
	padding: 0;	
	border:  none;
	cursor:  pointer;
	background: #2c3e50;
	color: #fff;
	transition:.35s;
	letter-spacing: 1px;
}
#send:hover{background:#b50d29;transition:.35s;}

::-moz-placeholder{color: #b50d29;font-family: 'Ubuntu';font-size: 20px;opacity: 1;} 
::-webkit-input-placeholder {color: #b50d29; font-family: 'Ubuntu';font-size: 20px;}
*:focus {outline: none;}
input:focus:invalid,textarea:focus:invalid {
 /* when a field is considered invalid by the browser */
    background: #fff url(awareness/images/invalid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #d45252;
    border:1px solid #b03535;
}
input:required:valid,textarea:required:valid { 
	/* when a field is considered valid by the browser */
    background: #fff url(awareness/images/valid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #5cd053;
    border-color: #28921f;
}


@-webkit-keyframes message_animation {
	0%{
		transform:translatey(0px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	50%{
		transform:translatey(-340px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	51%{
		transform:translatey(-340px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
	100%{
		transform:translatey(0px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
}
@keyframes message_animation {
	0%{
		transform:translatey(0px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	50%{
		transform:translatey(-340px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	51%{
		transform:translatey(-340px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
	100%{
		transform:translatey(0px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
}
  </style>

</head>
<body>
<?php
@include ('header.php')
?>
<div class="frame">
	    <div id="_open_envelope">
	     <span style="margin: 18%;"> Email Us</span>
	    </div>
	    <div class="message">
	      <form method="post" action="contact"> <!--action chnged -->
	        <input type="text" name="name" id="name" placeholder=" Name" required>

	        <input type="email" name="email" id="email" placeholder=" Email" required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">

	        <input type="text" name="phone" id="phone" placeholder=" Phone" autofocus>
            <input type="text" name="subject" id="subject" placeholder=" Subject">
	        <textarea name="message" id="messarea" placeholder=" Message" required></textarea>

	        <input type="text" name="address" id="address" style="display: none;">
	        <input type="submit" name="submit" value="Send Mail" id="send">
	      </form>
	    </div>
	    <div class="bottom"></div>
	    <div class="left"></div>
	    <div class="right"></div>
	    <div class="top"></div>
	    <script src="awareness/js/script.js"></script>
      </div>
      <?php
if(isset($_POST["submit"])){

$to = "crmsales2025@gmail.com";
$subject = "Contact mail";
$from = $_POST["email"];
$msg=$_POST["message"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>
      <?php
      @include ('footer.php')
      ?>
 <script>
 $(document).ready(function () {
  $(".frame").click(function () {
    $(".top").addClass("open");
    $(".message").addClass("pull");
  });
});

  </script>
	  
</body>
</html>
