<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
li{
  font-size: 20px;
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
      </li>
        <li class="nav-item">
        <a class="nav-link " href="helpline">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Contact Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="faq">FAQ</a>
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
    <a href="assault">Assualt And Battery</a>
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
    <a class="active" href="drug">Drug Crime</a>
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
    <a   href="terrorist">Terrorist Financing</a>
  </div>
 
</div>
   </div>


   <div class="col-md-10" style="background: white;"> 
     
    <h1 class="Display-1">Hacking Cyber Crime</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <p>
             Hacking means an illegal intrusion into a computer system and/or network. Every act committed towards breaking into a computer and/or network is hacking. Hackers write or use ready-made computer programs to attack the target computer. They possess the desire to destruct and they get the kick out of such destruction. Some hackers hack for personal monetary gains, such as to stealing the credit card information, transferring money from various bank accounts to their own account followed by withdrawal of money. Government websites are the most targeted sites for the hackers.

            </p>   
            <p>
             Research carried out on drug-related crime found that drug misuse is associated with various crimes that are in part related to the feelings of invincibility, which can become particularly pronounced with abuse. Problematic crimes associated include shoplifting, property crime, drug dealing, violence and aggression and driving whilst intoxicated.
            </p>
            </div>
        <div class="col-md-4">
            <img src="https://techcrunch.com/wp-content/uploads/2015/01/hack.jpg?w=730&crop=1" style="width: 100%; height: 97%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
        </div>

    </div>
    <div class="row">
          <div class="col-md-12">
          <p> The websites of state governments have also been hacked in the past. The official website of Maharashtra government was hacked, and the hackers were not traceable.There have been some professional hackers in India who have taken huge amounts to hack data from websites. In the infamous case of Amit Tiwari, who was a global hacker, he has hacked more than 950 accounts since 2003 and was caught by the police only in 2014. This shows the lack of evidence and the difficulty in arresting a hacker</p>
          </div>
        </div>
    <h2>Hacking v/s Cracking</h2>
    <hr>
     <div class="row">
        <div class="col-md-8">
            <p>
            The term hacker is a term used by some to mean 'a clever programmer' and by others, especially journalists or their editors, to mean 'someone who tries to break into computer systems'. Programmers who use their skills to cause trouble, crash machines, release computer viruses, steal credit card numbers, make free long distance calls (the phone system is so much like a computer system that it is a common target for computer criminals), remove copy-protection, and distribute pirated software may also call themselves 'hackers', leading to more confusion. Hackers in the original sense of the term, however, look down on these sorts of activities. Hackers generally deplore cracking.
            </p>   
            <p>
            A cracker is generally someone who breaks into someone else's computer system, often on a network, bypasses passwords or licenses in computer programs or in other ways intentionally breaches computer security. A cracker can be doing this for profit, maliciously, for some altruistic purpose or cause, or because the challenge is there. Some breaking-and-entering has been done ostensibly to point out weaknesses in a site's security system.

            </p>
            </div>
            <div class="col-md-4">
              <img src="https://img-cdn.tnwcdn.com/image?fit=1280%2C720&url=https%3A%2F%2Fcdn0.tnwcdn.com%2Fwp-content%2Fblogs.dir%2F1%2Ffiles%2F2019%2F07%2FUntitled-design.png&signature=3eb451a46f0dc8aab8a65144e88af73f" style="width: 100%; height: 97%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
            </div>
    </div>
    <h2>Essentials of hacking under section 66</h2>
    <hr>
    <div class="row">
          <div class="col-md-12">
          <p> The websites of state governments have also been hacked in the past. The official website of Maharashtra government was hacked, and the hackers were not traceable.There have been some professional hackers in India who have taken huge amounts to hack data from websites. In the infamous case of Amit Tiwari, who was a global hacker, he has hacked more than 950 accounts since 2003 and was caught by the police only in 2014. This shows the lack of evidence and the difficulty in arresting a hacker</p>
          </div>
        </div>
         <h1>Laws on hacking in India</h1>
    <hr>
    <div class="row">
          <div class="col-md-12">
<p>
          Section 43 and section 66 of the IT Act cover the civil and criminal offenses of data theft or hacking respectively.<br>
          Under section 43, a simple civil offense where a person without permission of the owner accesses the computer and extracts any data or damages the data contained therein will come under civil liability. The cracker shall be liable to pay compensation to the affected people. Under the ITA 2000, the maximum cap for compensation was fine at Rs. One crore. However in the amendment made in 2008, this ceiling was removed. Section 43A was added in the amendment in 2008 to include corporate shed where the employees stole information from the secret files of the company.
</p> 

  </div>
        </div>
        <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Hacking:</h2>
       <hr>
        <p>
         Section 66B covers punishment for receiving stolen computer resource or information. The punishment includes imprisonment for one year or a fine of rupees one lakh or both. Mens rea is an important ingredient under section 66A. Intention or the knowledge to cause wrongful loss to others i.e. the existence of criminal intention and the evil mind i.e. concept of mens rea, destruction, deletion, alteration or diminishing in value or utility of data are all the major ingredients to bring any act under this Section.
        </p>
     </div>
     <div class="col-md-6">
      <br>
       <img src="https://marketingtechnews.net/wp-content/uploads/sites/6/2020/03/big-data-and-artificial-intelligence-concept-vector-id1040557296.jpg" width="90%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
     </div>
   </div>
   
<br>
<h1>Preventive Measures (Safety Tips)</h1>
<hr>
  <div class="row">
    <div class="col-md-12">
      <ul>
        <li>Update your OS and other software frequently, if not automatically. This keeps hackers from accessing your computer through vulnerabilities in outdated programs (which can be exploited by malware). 
        . </li>
        <li>Download up-to-date security programs, including anti-malware software with multiple technologies for protecting against spyware, ransomware, and exploits, as well as a firewall, if your OS didn’t come pre-packaged with it. </li>
        <li>Get the kids involved in family projects. </li>
        <li>Destroy all traces of your personal info on hardware you plan on selling. Consider using d-ban to erase your hard drive.</li>
        <li>Do not use open Wi-Fi on your router; it makes it too easy for threat actors to steal your connection and download illegal files. </li>
        <li>Speaking of passwords: password protect all of your devices, including your desktop, laptop, phone, smartwatch, tablet, camera, lawnmower…you get the idea. </li>
        <li>Keep sensitive data off the cloud. “No matter which way you cut it, data stored on the cloud doesn’t belong to you,” says Taggart. “ </li>
        <li>Insist that the community gets involved in drug abuse prevention. </li>
       
      </ul>
    </div>
  </div>

     </div>
</div>
</div>
</div>
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
  </script>

<i onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-angle-double-up" style="font-size:36px;color:white"></i>
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
