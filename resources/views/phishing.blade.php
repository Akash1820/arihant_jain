<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="awareness/css/header.css">
   <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <style>
body{
            overflow-x: hidden
        }
.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}
h1 {
   font-family: 'Patua One', cursive;
    color: black;
}
h2 {
   font-family: 'Patua One', cursive;
    color: black;
}
hr{
  height:2px;
  border-width:auto;
  color:#b50d29;
  background-color:#b50d29;
}
h3{
   font-family: 'Patua One', cursive;
    color: black;
  
}
p{
  font-size: 18px;
}
@media screen and (min-width: 480px) {
  .container {
    font-size: 20px;
  }
}

/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  .container {
    font-size: 20px;
  }
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
hr{
  color: red;
}
.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
@media screen and (max-width: 600px) and (min-width: 480px){
   img {

   width: 100%;
     height: 100%; /* 5px rounded corners */
  }
}

  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
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

.container-fluid{
  background-color: #c7bdb1;
}
.container {
    border: 1px solid #e6e6e6;
    padding: 10px;
    box-shadow: 7px 9px #b3b3b3;
    font-family: 'Nunito', sans-serif;
}
.container .row footer-content hidden-xs{
  position: fixed;
   
   bottom: 0;
   width: 100%;
}
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
.sidebar {
  margin: 0;
  padding: 0;
  width: 240px;
  background-color: black;
  position: absolute;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  font-size: 20px;
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #b50d29;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #b50d29;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 70%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
   
  }
}    

    .dropdown-container {
  display: none;
  background-color: #00004d;
  padding-left: 0px;
}
.dropdown-btn {
  padding: 10px 10px 10px 10px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background-color: black;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.dropdown-btn:hover {
  color: white;
  background-color: #b50d29;
}    
     
</style>
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
        <a class="nav-link sactive" href="aware">Crime Awareness</a>
      </li>  
<li class="nav-item">
        <a class="nav-link" href="cyberaware">Cyber Awareness</a>
      </li>         <li class="nav-item">
        <a class="nav-link" href="helpline">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Contact Us</a>
      </li>  
     
      <li></li>
    </ul>
  </div> 

   
</nav>
<br>
<div class="container-fluid" style="background-color: white;">
 <div class="row">
  

   <div class="col-md-2" style="background-color: black;"><div class="sidebar">
    <a  href="">Types Of Crime</a>
       <button class="dropdown-btn">Cyber Crime
    <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-container">
    <a href="jacking">Web-Jacking</a>
    <a href="hacking">Hacking</a>
    <a href="cpornography">Child Pornography</a>
    <a href="sexting">Sexting</a>
    <a href="phishing">Phishing</a>
    <a href="electronicfrogery">Electronic Forgery</a>
      <a href="#">Email Abuse</a>
      <a href="threatning">Threatning Messages</a>
      <a href="defamatory">Defamatory Messages</a>
      <a href="spoofing">Email Spoofing</a>
  </div>
    <button class="dropdown-btn">Personal Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a class="active" href="assault">Assualt And Battery</a>
    <a href="kidnapping">Kidnapping</a>
    <a href="#">Homicide</a>
    <a href="#">False Pretenses</a>
    <a href="women">Crime Against Women</a>
    <a href="#">Crime Against Children</a>
  </div>
   <button class="dropdown-btn">Property Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Theft Crimes</a>
    <a href="#">Arson Crime</a>
    <a href="whitecollar">White Collar Crime</a>
    <a href="#">Reciept OF Stolen Goods</a>
    <a href="vandalism"> Vandalism Crime</a>
      <a href="cyber">Cyber Crime</a>
  </div>
   <button class="dropdown-btn">Inchoate Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Criminal Attempt</a>
    <a href="#">Conspiracy</a>
    <a href="#">Aiding Abetting</a>
    <a href="#">Burglary</a>
  </div>
   <button class="dropdown-btn">Statutory Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">Alcohol Crime</a>
    <a href="drug">Drug Crime</a>
    <a href="#">Traffic Offence</a>
    <a href="#">Bigamy</a>
  </div>
   <button class="dropdown-btn">Financial Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="financialfraud">Fraud</a>
    <a href="money">Money Laundering</a>
    <a href="bribery">Bribery</a>
    <a  href="terrorist">Terrorist Financing</a>
  </div>
 
 
</div>
   </div>
    <div class="col-md-10" style="background: white;">  
    <h1 class="Display-1">Phishing</h1>
    <h4>(Sec 420 IPC)</h4>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>Phishing is a cybercrime in which a target or targets are contacted by email, telephone or text message by someone posing as a legitimate institution to lure individuals into providing sensitive data such as personally identifiable information, banking and credit card details, and passwords. The information is then used to access important accounts and can result in identity theft and financial loss.</p>
            </div>
        <div class="col-md-4">
            <img src="https://techexperts.ae/wp-content/uploads/2017/09/square-smb-phishing-1000x480-731x351.jpg" style=" width: 95%; height: 100%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
        </div>         
    </div>
<div class="row">
  <div class="col-md-12">
    <h2>Common Features of Phishing:</h2>
    <hr>
    <h3>1. Too Good To Be True</h3>
       <p>Lucrative offers and eye-catching or attention-grabbing statements are designed to attract people’s attention immediately. For instance, many claim that you have won an iPhone, a lottery, or some other lavish prize. Just don't click on any suspicious emails. Remember that if it seems to good to be true, it probably is!</p>
    <h3>2. Sense of Urgency</h3>
       <p>A favorite tactic amongst cybercriminals is to ask you to act fast because the super deals are only for a limited time. Some of them will even tell you that you have only a few minutes to respond. When you come across these kinds of emails, it's best to just ignore them.</p>
      <h3>3. Hyperlinks</h3>
      <p> A link may not be all it appears to be. Hovering over a link shows you the actual URL where you will be directed upon clicking on it. It could be completely different or it could be a popular website with a misspelling.</p>
      <h3>4. Attachments</h3>
      <p>If you see an attachment in an email you weren't expecting or that doesn't make sense, don't open it! They often contain payloads like ransomware or other viruses. The only file type that is always safe to click on is a .txt file</p>
      <h3>5. Unusual Sender </h3>
      <p>Whether it looks like it's from someone you don't know or someone you do know, if anything seems out of the ordinary, unexpected, out of character or just suspicious in general don't click on it!</p>
  </div>
</div>
   <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Phishing:</h2>
       <hr>
        <p>
          Indian cases & investigations pertaining to phishing
471 of I.P.C r/w Sections 51, 63 and 65 of Copyright Act, 1957 which attract the punishment of 3 years imprisonment and fine up to 2 lacs rupees.
        </p>
     </div>
     <div class="col-md-6">
      <br>
      <br>
      <br>
       <img src="https://www.identity-theft-scout.com/images/xidentity-theft-punishment.jpg.pagespeed.ic.oT7xWZ6Iw2.jpg" style=" width: 85%; height: 75%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
     </div>
   </div>
   <h1>Preventions  (Safety Measures)</h1>
   <hr>
   <br>
   
  <div class="row">
    <div class="col-md-12">
        
     <ol style="font-size:20px">
    <li>To protect against spam mails, spam filters can be used. Generally, the filters assess the origin of the message, the software used to send the message, and the appearance of the message to determine if it’s spam. Occasionally, spam filters may even block emails from legitimate sources, so it isn’t always 100% accurate.</li>
          <li>The browser settings should be changed to prevent fraudulent websites from opening. Browsers keep a list of fake websites and when you try to access the website, the address is blocked or an alert message is shown. The settings of the browser should only allow reliable websites to open up.</li>
          <li>Many websites require users to enter login information while the user image is displayed. This type of system may be open to security attacks. One way to ensure security is to change passwords on a regular basis, and never use the same password for multiple accounts. It’s also a good idea for websites to use a CAPTCHA system for added security.</li>
          <li>Banks and financial organizations use monitoring systems to prevent phishing. Individuals can report phishing to industry groups where legal actions can be taken against these fraudulent websites. Organizations should provide security awareness training to employees to recognize the risks.</li>
          <li>Changes in browsing habits are required to prevent phishing. If verification is required, always contact the company personally before entering any details online.</li>
         <li>If there is a link in an email, hover over the URL first. Secure websites with a valid Secure Socket Layer (SSL) certificate begin with “https”. Eventually all sites will be required to have a valid SSL. </li>
        
    </ol>
  </div>
</div></div>
</div>
  <button id="myBtn" title="Go to top"  style="font-size:25px;color:white">Register</button>
    
        
    
      <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "block";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
          function tfunction(){
              document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
          }
  </script>


<br>

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
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>