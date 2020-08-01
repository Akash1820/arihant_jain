<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<script defer src='js/form.min.js'></script>
  <script defer src="js/script.js"></script>
<style>
body, html {height:100%;}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
  .goog-logo-link {
 display:none !important;
} 
 .goog-te-gadget{
     color: transparent !important;
 } 
</style>
<link type="text/css" media="all" rel="stylesheet" href="chat/css/chat.css">
  <meta charset="UTF-8">
  <title>Chatbot</title>

</head>

<body >
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>
<!-- partial:index.partial.html --

<div class="survey-form form-container">-->
  <form name="chatbot" method="post" action="insert.php" role="form" id="survey-form">

      <!--Begin part1-->
      <div class="form-group part1" id="part1">
    
    <cf-robot-message cf-questions="Namaste!</br>Welcome To Sarvsya Rakshan"></cf-robot-message>
<cf-robot-message cf-questions="I Am Your Virtual Police Assistant, Bot-Cop"></cf-robot-message>
    <cf-robot-message cf-questions="Whatever Problem You Are Struggling With, Just Take A Deep Breathe And Let Us Know"></cf-robot-message>
    
    <cf-robot-message cf-questions="And We will Surely Help You!"></cf-robot-message>
  <!--<cf-robot-message cf-questions="Am your Cloud Migration Survey Assistant"></cf-robot-message>
  <cf-robot-message cf-questions="I'll help you complete this survey form."></cf-robot-message>
  <cf-robot-message cf-questions="The goal of this survey..."></cf-robot-message>
  <cf-robot-message cf-questions="...is to determine the cloud computing adoption rate and usage..."></cf-robot-message>
  <cf-robot-message cf-questions="...of cloud computing by technology decision-makers."></cf-robot-message>
  <cf-robot-message cf-questions="Additionally, it will determine the driving factors..."></cf-robot-message>
  <cf-robot-message cf-questions="...that influence migration to the cloud."></cf-robot-message>
  <cf-robot-message cf-questions="And factors that create an impediment to adopting cloud computing."></cf-robot-message>
  <cf-robot-message cf-questions="So, let's get started!"></cf-robot-message>
  <cf-robot-message cf-questions="There are 7 parts to this survey."></cf-robot-message>
  
      <cf-robot-message cf-questions="Start part 1 of 7:" ></cf-robot-message>--->
      <fieldset cf-questions="Personal Information:">
     
             
      <div style="position:absolute;z-index: 1000 !important;" id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'hi,ta,en,gu'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
          
              <input type="text" name="name" class="hide-placeholder part1-input" id="name" placeholder="Name" required cf-questions="Now, Tell Me Your Full Name."/>
              
            <div class="contact number" id="contact_number">
              <input type="hidden" value="" pattern="[6789][0-9]{9}" class="hide-placeholder part1-input" maxlength="10" id="tel" name="contact_number" placeholder="Phone Number" required validate cf-questions="Hello {name}, Please Enter Your 10 Digits Number."/>
              </div>
    <div class="contact">
    <cf-robot-message cf-questions="Hello {name}, We Have Recorded Your Personal Details, And Now You Need To Provide Us The Crime Details."></cf-robot-message>
            </div>
       <div class="contact">
       <select id="dropdown"  class="hide-placeholder part1-input" cf-questions="Select Your The Crime You Want To Report" placeholder="Select number of employees" required>
              <option id="options" name="crime_type" value="" disabled selected hidden>
                <!--Select number of employees-->
              </option>
              <option value="Murder">
                Murder
              </option>
              <option value="Rape">
                Rape
              </option>
              <option value="Theft">
                Theft
              </option>
              <option value="Snatching">
                Snatching
              </option>
              <option value="Financial Fraud">
                Financial Fraud
              </option>
              <option value="Marital Rape">
                Marital Rape
              </option>
              <option value="Cyber Crime">
                Cyber Crime
              </option>
              <option value="Kidnapping">
                Kidnapping
              </option>
              <option value="Harassment/Abuse">
                Harrassment/Abuse
              </option>
            </select>
            <cf-robot-message cf-questions="Ok. Do Not Worry! We Are Here To Help You."></cf-robot-message>
            </div>
      
            <div class="complaint date">
             <input id = "date" style="z-index:100 !important;" name="date" type="date" autocomplete="off" cf-questions= "Enter Exact or Appropriate Date For Crime. Also, Try To Keep The Format In dd/mm/yyy.">
              
            </div>
      <div class="complaint time">
             <input id = "time" name="time" type="time" autocomplete="off" cf-questions= "Enter Exact or Approximate Time For Crime.">
              
            </div>
            <div class="complaint detail">
             <input  name="complaint_detail"  cf-questions= "Enter The Complaint Details in More Than 250 Characters.">
              
            </div>
            <div class="complaint witness">
             <input   name="witness"  cf-questions= "Is There Any Witness To The Incident? If Yes! Please Provide Complete Personal & Contact Details.">
              
            </div>
            <div class="complaint attachment">
             <input type="file" name="attachment"  cf-questions= "Please Share A Supporting Evidence With Us">
              
            </div>
      <div class="complaint suspect">
             <input  name="suspect"  cf-questions= "If There is Anyone Whom You Doubt At Even The Least, If Yes, Please Provide The Details">
              
            </div>
          
            <input type="hidden" id="ps_id" name="ps_id" value="">
            <input type="hidden" name="loc_rel" value="home">
            <input type="hidden" name="location" value="home">
      <cf-robot-message cf-questions="End:"></cf-robot-message>
        </div>
        <!--End part1--

      
<cf-robot-message cf-questions="Thank you, {name}!"></cf-robot-message>
<cf-robot-message cf-questions="You have successfully completed the Cloud Migration Adoption Trend Survey."></cf-robot-message>
<cf-robot-message cf-questions="Your answers have been submitted."></cf-robot-message>
<cf-robot-message cf-questions="Have a great day!"></cf-robot-message>

<cf-robot-message cf-questions="Designed and developed by Code Gear."></cf-robot-message>
<cf-robot-message cf-questions="Copyright, requires attribution."></cf-robot-message>

        </div>
        <!--End part7-->
    </form>
    
  <footer>
    
      
    </div>
  </footer>
  </div>
<!-- partial -->
  

</body>

<script>
window.onload = myFunction() {
var phoneValue = localStorage.getItem("contact_number");
var psValue = localStorage.getItem("ps");
document.getElementbyId('contact_number').value = phoneValue
document.getElementbyId('ps').value = psValue
}   
</script>

</html>
