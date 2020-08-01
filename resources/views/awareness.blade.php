<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://website.com/twitter_plugin_styles.css" />
<!--     <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="awareness/css/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
            overflow-x: hidden
        }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width:800px;
  position: relative;
    margin-left: 30px;
    margin-top: 50px;

}
/*
    Img{
         box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);
    }    
*/
    

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.fade:not(.show) {
    opacity: 1;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1s;
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


</style>

	  <style>

 .content{
 padding: 30px;
}
          
.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: #b50d29;
}

.topnav .icon {
  display: none;
}
          
          h3{
              font-size: 25px;
               
          }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
    
}
          @media screen and (max-width: 900px){
               .crime {
        display: flex;
        flex-wrap: wrap;
        margin-left: 12%;
    }
    .crime a{
              display: block;
            align-items: center;
              width: 100%;
              
              padding: 5px;
              margin: 0px;
              
          }
    .button{
        
        width:100%;
    }
              .slide {
       display:block;
/*        text-align: center;*/
        min-width: 100%;
    }
    .slide img{
        margin: 0px;
    }
        .Img{
      
        width: 100%;
            height: 100%;
       
    }
    .slideshow-container{
        margin-left: 0px;
        text-align: center;
        display: block;
        width: 100%;
        height: 100%;
        
    }
    .twitter 
    {
/*       margin-left: 15%;*/
        min-width: 100%;
        display: block;
        border:2px solid black;
        border-radius: 20px;
        align-items: center;
/*        scroll-behavior: smooth;*/
    }
          } 
@media screen and (max-width: 1250px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
    .crime {
        display: flex;
        flex-wrap: wrap;
    }
    .crime a{
              display: block;
            align-items: center;
              width: 100%;
              padding: 5px;
              margin: 0px;
        
              
          }
    .button{
        width:100%;
    }
    h3{
        text-align: center;
    }
    p{
        text-align: center;
    }
    h1{
        text-align: center;
    }
    .st{
        flex-direction: column;
        align-content: center;
    }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
    .slide {
       display:block;
/*        text-align: center;*/
        min-width: 100%;
    }
    .slide img{
        margin: 0px;
    }
        .Img{
        
        width: 100%;
            height: 100%;
           
       
    }
    .slideshow-container{
        margin-left: 0px;
        text-align: center;
        display: block;
        width: 100%;
        height: 100%;
        
    }
    .twitter 
    {
/*       margin-left: 15%;*/
        min-width: 100%;
        
        display: block;
        border:2px solid black;
        border-radius: 20px;
        align-items: center;
/*        scroll-behavior: smooth;*/
    }
   
    
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}
          .crime{
              display: flex;
              flex-wrap: wrap;
          }
          .crime a{
              display: block;
              align-content: center;
              width: 360px;
              height: 70px;
              padding: 5px;
              margin: 0px;
              
          }
          .button {
              margin: 5px;
             width: 100%;
              height:55px;
        border-radius:25px;
          }

         
         

</style>
    <style>
.marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            font-size: 40px;
            color: #b50d29;

        }

        .pp {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 15s linear infinite;
        }

        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }

        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            
        }
        .st{
            display: flex;
            flex-wrap: wrap;
/*            flex-direction: column;*/

        }
         .slide{
        width: 60%;
        float: left;
    }
    .twitter{
        width: 40%;
        float: right;
        height:100%;
        overflow: hidden;
        margin-top: 70px
    }
        hr{
            height: 2px;
          background-color:#b50d29;
        }
        
      
       
        .CRIME{
           margin: 30px;
           
        }
        h1{
           color:#614d4c;
           
        }
        .ss{
            width: 100%;
            padding-left: 45px;
            padding-right: 30px;
        }
    </style>
<!--    button-->
    <style>
.button {
  text-align: center;
  cursor: pointer;
  outline: none;
  box-shadow: 0 9px #b5aeae;
}

.button:active {
  box-shadow: 0 5px  #88848c;
  transform: translateY(1px);
}
        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #b50d29;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 60px;
}

#myBtn:hover {
  opacity: 0.8
}
        .cc{
            font-size: 18px;
        }
        $perspective: 800px;
$bg: #e6e6e6;
$offset: 30px;

/*
 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: $bg;
}
*/
.wrapper {
  width: 300px;
  height: 400px;
  perspective: $perspective;
  transform-style: preserve-3d;
}
/*
.txt {
  text-align: center;
  font-family: "Helvetica", sans-serif;
  font-size: 16px;
  color: darken($bg, 40%);
}
*/
.rotating-cards {
  position: relative;
  width: 100%;
  height: 100%;
  // transform: rotateX(-75deg);
  transform-style: preserve-3d;
}

.rotating-cards__el {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 0 30px -10px rgba(#000, 1);
        }
        
  .rotating-cards {
    width: calc(100% + #{$offset * 2});
    height: calc(100% + #{$offset * 2});
    margin-top: - $offset;
    margin-left: - $offset;
    background-size: cover;
    background-position: 50% 50%;
  }
@import url("https://fonts.googleapis.com/css?family=Muli:400,700&display=swap");

body {
  margin: 0;
  height: calc(100vh - 8em);
  font-family: "Muli", sans-serif;
  
}

/*
h1 {
  text-align: center;
  margin: 1.5em;
}
*/
.right {
    
  right: 0;
  background: linear-gradient(
    to left,
    rgba(245, 245, 245, 1) 0%,
    rgba(255, 255, 255, 0) 100%
  );
}
.ii {
  width: 95%;
    height: 200px;
   border-radius: 10%;
    margin-left: 10px;
}

.scontainer {
  width: 100%;
  overflow: hidden;
  position: relative;
    
}

.items {
  display: flex;
  align-items: center;
  width: fit-content;
  animation: carouselAnim 10s infinite alternate linear;
}

.entry {
  display: flex;
  align-items: center;
  flex-direction: column;
  position: relative;
  width: 300px;
  background-color: #e6e1e1;
  margin: 1em;
  padding: 0.5em;
  border-radius: 10px;
  box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.5);
}

@media only screen and (max-width: 768px) {
  .items {
    animation: carouselAnim 10s infinite alternate linear;
  }
  
  @keyframes carouselAnim {
    from {
      transform: translate(0, 0);
    }
    to {
      transform: translate(calc(-100% + (2 * 300px)));
    }
  }
}

.entry .name {
  text-align: center;
  padding: 1em;
}

.name {
  font-weight: bold;
}

@keyframes carouselAnim {
  from {
    transform: translate(0, 0);
  }
  to {
    transform: translate(calc(-100% + (5 * 300px)));
  }
}

.scontainer .faders {
  width: 100%;
  position: absolute;
  height: 100%;
}

        .faders .right{
            background: linear-gradient(
    to left,
    rgba(245, 245, 245, 1) 0%,
    rgba(255, 255, 255, 0) 100%
  );
  width: 5%;
  height: 100%;
  position: absolute;
  z-index: 200;
            
        }
.faders .left {
  background: linear-gradient(
    to right,
    rgba(245, 245, 245, 1) 0%,
    rgba(255, 255, 255, 0) 100%
  );
  width: 5%;
  height: 100%;
  position: absolute;
  z-index: 200;
}

.right {
    
  right: 0;
  background: linear-gradient(
    to left,
    rgba(245, 245, 245, 1) 0%,
    rgba(255, 255, 255, 0) 100%
  );
}
        
     html {
  scroll-behavior: smooth;
         width: 100%
}   
        body{
            width: 100%
        }

</style>
<!--tooltip-->
    
</head>
    <body>
      
        <div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
  <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div>
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="" title="Home">
               <img src="awareness/images/header1.jpeg" alt="Home" style="">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="awareness/images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link active" href="aware">Crime Awareness</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="cyberaware">Cyber Awareness</a>
      </li>
<!--
         <li class="nav-item">
        <a class="nav-link" href="resources">Resources</a>
      </li>  
-->
         <li class="nav-item">
        <a class="nav-link" href="helpline">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Contact Us</a>
      </li>  
      <!-- <li class="nav-item">
        <a class="nav-link" href="faq">FAQ</a>
      </li>  -->
      <li></li>
    </ul>
  </div> 

   
</nav>
             <div class="marquee">
        <p class="pp">Disaster strikes when you waver your concentration.Be Aware!</p>
    </div>
    
<div class="scontainer">
  <div class="row">
   <div class="faders">
    <div class="left"></div>
    <div class="right"></div>
  </div>

  <div class="items">
    <div class="entry">
      <p class="name">Acid Attacks</p>
      <a href="#personal"><img class="ii" src="https://images.firstpost.com/wp-content/uploads/2013/12/StopAcidattack.jpg" alt="Smiling person" /></a><br>
      <p class="quote">"About 300 acid attacks are reported in India each year.India has the highest incidence of acid attacks in the world."</p>
    </div>
    <div class="entry">
      <p class="name">Suicides</p>
     <a href="#personal"> <img class="ii" src="https://zululandobserver.co.za/wp-content/uploads/sites/56/2015/12/suicide-rope.jpg"  alt="Smiling person"  /></a><br>
      <p class="quote">"About 800,000 people die by suicide worldwide every year, of these 135,000 (17%) are residents of India."</p>
    </div>
    <div class="entry">
      <p class="name">Cyber Crime</p>
      <a href="#cyber"> <img class="ii" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2WpaL5z2FmqZM1TLKrG-4DT_Kxph92sWEnQ&usqp=CAU" alt="Smiling person" /></a><br>
      <p class="quote">"Rs 1.24 trillion is the amount lost in India in the past 12 months due to cyber crime.81% Indians are alarmed."</p>
    </div>
    <div class="entry">
      <p class="name">Child Labour</p>
      <a href="#personal"> <img class="ii" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQoearxRB1kx3-vDfOxszmBoUKQjIuq-FFFtA&usqp=CAU" alt="Smiling person" /></a><br>
      <p class="quote">"Official figures indicate that there are over 12 million child workers in India,but 60 million according to NGOs. "</p>
    </div>
    <div class="entry">
      <p class="name">Rape</p>
     <a href="#personal"> <img class="ii" src="https://images.outlookindia.com/public/uploads/articles/2020/1/10/rape_571_855_571_855.jpg" alt="Smiling person" /></a><br>
      <p class="quote">"The Crime rate per 10Lakh women has increased to 58.8%.Out of these,93.9% of the cases are known to victim."</p>
    </div>
    <div class="entry">
      <p class="name">Financial Fraud</p>
      <a href="#financial"><img class="ii" src="https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/rupees_505_111917053559_082519054928.jpg?size=1200:675" alt="Smiling person" /></a><br>
      <p class="quote">"74% increase as Rs 41,167 crore in the previous financial year,according to the Reserve Bank of India."</p>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-5">
    </div>
    </div>
            
   

       <div class="ss"> 
<br><hr> 
           <div id="cyber">
             <div class="row">
            <div class="col-md-4">
                	<img class="Img" style="width: 100%; height: 55%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%"  src="https://itsupplychain.com/wp-content/uploads/2020/01/Cyber-Crime-SQ1-900-x-636.jpg" >
               </div>
           <div class="col-md-8">
            <div class="CRIME">
<h1><b>Cyber Crime</b></h1>
                 <br>
<p class="cc">Cyber crimes are criminal offenses committed via the Internet or otherwise aided by various forms of computer technology, such as the use of online social networks to bully others or sending sexually explicit digital photos with a smart phone. But while cyber crime is a relatively new phenomenon, many of the same offenses that can be committed with a computer or smart phone, including theft or child pornography, were committed in person prior to the computer age.</p>
           
<h3><b>Cyber crimes include:</b></h3>
<div class ="crime">
    <a href="cpornography"><img  src="awareness/images/pornography.jpeg" class="button"></a>
         <a href="phishing"><img  src="awareness/images/phishing.jpeg" class="button"></a>
         <a href="hacking"><img  src="awareness/images/hacking.jpeg" class="button"></a>
         <a href="jacking"><img  src="awareness/images/jacking.jpeg" class="button"></a>
         <a href="electronicfrogery"><img  src="awareness/images/forgery.jpeg" class="button"></a>
         <a href="sexting"><img  src="awareness/images/sexting.jpeg" class="button"></a>
         <a href="threatning"><img  src="awareness/images/threatning.jpeg" class="button"></a>
         <a href="defamatory"><img  src="awareness/images/defamatory.jpeg" class="button"></a>
         <a href="spoofing"><img  src="awareness/images/spoofing.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/emailabuse.jpeg" class="button"></a>
     </div></div>
                 </div> </div></div>
<br>
<hr>
           <div id="personal">
   <div class="row">
    <div class="col-md-8">
 <div class="CRIME">          
<h1><b>Personal Crime</b></h1>
            <br>
<p class="cc">Personal crimes are the crimes most associated with violence against victims. For example, homicide is the willful killing of a person while murder is the unlawful willful killing of a person.Personal crimes are most commonly generalized as a violent crime that causes physical, emotional, or psychological harm to the victim. These crimes are offenses against the person.</p>
     
<h3><b>Personal Crimes include but are not limited to:</b></h3>
     <div class ="crime">
    <a href="assault"><img src="awareness/images/assault.jpeg" class="button"></a>
         <a href=""><img src="awareness/images/false.jpeg" class="button"></a>
          <a href="kidnapping"><img src="awareness/images/kidnapping.jpeg" class="button"></a>
         <a href=""><img src="awareness/images/homicide.jpeg" class="button"></a>
         <a href="women"><img src="awareness/images/women.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/children.jpeg" class="button"></a>
     </div></div></div>
       <div class="col-md-4 order-first order-md-2">       
            <img class="Img" style=" width: 100%; height: 70%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201511/techie-murder-contd-2_647_112315084231.jpg" align="right">
	
	</div>
       
               </div></div>
            
<hr>
           <div id="property">
           <div class="row">
            <div class="col-md-4">
                	<img class="Img" style="width: 100%; height: 80%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%"  src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201510/chain-story_647_100115033516.jpg" >
               </div>
           <div class="col-md-8">
            <div class="CRIME">
<h1><b>Property Crime</b></h1>
                 <br>
<p class="cc">Property crimes, or offenses against property, do not necessarily involve the harm of another person. Rather, these crimes involve interference with another person’s right to use or enjoy their own property. </p>
           
<h3><b>Property crimes include but are not limited to:</b></h3>
<div class ="crime">
    <a href=""><img  src="awareness/images/theft.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/arson.jpeg" class="button"></a>
          <a href="whitecollar"><img  src="awareness/images/white.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/stolen.jpeg" class="button"></a>
         <a href="vandalism"><img  src="awareness/images/vandalism.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/extortion.jpeg" class="button"></a>
     </div></div>
               </div> </div> </div>
<br>
<hr>
           <div id="inchoate">
               <div class="row">
                  <div class="col-md-8">
            <div class="CRIME">
<h1><b>Inchoate Crime</b></h1>
            <br>
<p class="cc">Inchoate crimes, also known as incomplete crimes, are acts taken toward committing a crime or acts that constitute indirect participation in a crime. Although these acts are not themselves crimes, they are illegal because they are conducted in furtherance of a crime, and society wishes to deter individuals from taking such steps.</p>
<h3><b>Three primary inchoate crimes are attempt, conspiracy, and aiding and abetting.</b></h3>
<div class ="crime">
    <a href=""><img  src="awareness/images/cattempt.jpeg" class="button"></a>
         <a href=""><img  src="awareness/images/conspiracy.jpeg" class="button"></a>
          <a href=""><img  src="awareness/images/aiding.jpeg" class="button"></a>
    <a href=""><img  src="awareness/images/burglary.jpeg" class="button"></a>
     </div></div>
            </div> 
            <div class="col-md-4 order-first order-md-2">
<img class="Img" style="width: 100%; height: 80%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" src="https://blog.ipleaders.in/wp-content/uploads/2020/01/Unlawful-Homicide.png" ></div>

               </div></div>
           
<hr>
           <div id="statutory">
                   <div class="row">
                      <div class="col-md-4">
<img class="Img" width="600" height="400" style="width: 100%; height: 90%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" src="https://images.mid-day.com/images/2017/apr/10-drug-l.jpg" align="left" >
                       </div>
                   <div class="col-md-8">
   <div class="CRIME">
      <h1><b>Statutory Crime</b></h1>
   <br>
   <p class="cc">Statutory offenses refer to behavior that is made illegal by laws passed by a governing body, like the legislature, as opposed to behavior that violates the common law—or “judge-made law”</p>
            <h3><b>There are Three significant types of statutory crimes:</b></h3>
           <div class ="crime">
    <a href=""><img  src="awareness/images/alcohol.jpeg" class="button"></a>
         <a href="drug"><img  src="awareness/images/drug.jpeg" class="button"></a>
          <a href=""><img  src="awareness/images/traffic.jpeg" class="button"></a>
               <a href=""><img  src="awareness/images/bigamy.jpeg" class="button"></a>
     </div></div>
                       </div> </div></div>
   <br><hr>
           <div id="financial">
                       <div class="row">
                          <div class="col-md-8">
            <div class="CRIME">
 <h1><b>Financial Crime</b></h1>
            <br>
 <p class="cc">Financial crime is crime committed against property, involving the unlawful conversion of the ownership of property to one's own personal use and benefit.</p>
  <h3><b>Financial crimes include:</b></h3>
  <div class ="crime">
    <a href="financialfraud"><img  src="awareness/images/fraud.jpeg" class="button"></a>
         <a href="money"><img  src="awareness/images/money.jpeg" class="button"></a>
          <a href="terrorist"><img  src="awareness/images/terrorist.jpeg" class="button"></a>
       <a href="bribery"><img  src="awareness/images/bribery.jpeg" class="button"></a>
     </div></div> </div>
           <div class="col-md-4 order-first order-md-2">
 <img class="Img" width="600" height="400" style="width: 100%; height: 90%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" src="https://blog.ipleaders.in/wp-content/uploads/2017/12/BV-Acharya-19.jpg" align="right" style="width:440px;">
                           </div>
               </div></div></div>
            <br><br><hr>
 </div> 
        
        <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>

    <br> 
      <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
        <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
<script>
(function() {
        var container = $('div.slider').css('overflow', 'hidden').children('ul');
        var slider = new Slider(container, $('#slider-nav'));
        
        slider.nav.find('button').on('click', function() {
            slider.setCurrent($(this).data('dir'));
            slider.transition();
        });
    })();

function Slider(container, nav) {
    this.container = container;
    this.nav = nav.show();
    this.imgs = this.container.find('img');
    this.imgWidth = this.imgs[0].width;
    this.imgsLen = this.imgs.length;
    this.current = 0;
}

Slider.prototype.transition = function(coords) {
    this.container.animate({
        'margin-left': coords || -(this.current * this.imgWidth)
    });
};

Slider.prototype.setCurrent = function(dir) {
    var pos = this.current;

    //Shortened if statement
    //(this.current === 'next') ? pos++ : pos--;

    //More shortened
    pos += (~~(dir === 'next') || -1);
    this.current = (pos < 0) ? this.imgsLen -1 : pos % this.imgsLen;
    return pos;
}
</script>
    <script>
$(window).bind("load", function() {
$(".h-feed").carouFredSel({
        items: 2,
        direction: "up",
        scroll : {
        items: 1,
        easing: "elastic",
        duration: 1000,
        pauseOnHover: true
        }
    });
});
</script>
<script>
function scrollLeft() {
	
	var $items = $(".item");					// ALL items
	
	// No scroll if wrapper is hovered.
	if ( $('.item-wrapper').data('hover') )
		return;
	
	// Check so we have items, and more items than currently on screen... else return!
	if ( $items.length <= 0 || $items.first().offset().top == $items.last().offset().top )
		return;
	
	// Get items on screen... (based on top)
	var itemsOnScreen = 1;
	for ( x=1; x < $items.length; x++ ){
		if ( $items.first().offset().top == $items.eq(x).offset().top )
			itemsOnScreen++;
	}
	
	var $first = $items.slice(0,1),		// first item
	$rest  = $items.slice(1),			// All BUT the first items
	$off   = $items.slice(itemsOnScreen);		// All off screen items

	// Offset to scroll the rest of the elements when items adjust left.
	var offset = $rest.first().offset().left - $first.offset().left;

	// Animate the first item fast..
	$first.animate({left: -$first.outerWidth(true)-50 }, 400);

	// Set all off screen items to hidden, so we can fade in later..
	$off.hide();
	
	// Animate the rest of the items a little slower.
	$rest.animate({left: '-'+offset+'px'}, 800, ).promise().done( function() {
		// Reset the items CRAZY THINGS GOING ON HERE?!?!
		var newHtml = '<div class="item">' + $first.html().trim() + "</div>\n\r";
		$(".item-wrapper").append( newHtml );
		$items.first().remove();
		$items.css({left: ''});

		// Fade in all off screen (+ the last) items, cheat don't really matter.
		$off.fadeIn(400);
	});
	
}

/**
 * Set hover state, :hover fake.
 */
$('.item-wrapper').hover(
	function() { $(this).data('hover', true); },
	function() { $(this).data('hover', false); }
).data('hover', false);

/**
 * Set up interval
 */
$(document).ready( function() {
	var interval = setInterval( function(){
			scrollLeft();
	}, 3000 );
});
</script>
    </body>
</html>
