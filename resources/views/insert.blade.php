<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sarvasya Rakshan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="chat/css/header.css">
    <script> 
        function printDiv() { 
            var divContents = document.getElementById("FIR_copy").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body >'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
</head>

<body>
 
  <div class="container-fluid op" style="background-color: #b50d29;">
  
      <div class="row wor" style="background-color: #b50d29;">
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
    <div class="container">
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="/" title="Home">
               <img class="logo1" src="chat/images/header1.jpeg" alt="Home">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img class="nocrime" src="chat/images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link" href="#">Crime Awareness</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Resources</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li> 
      <li></li>
    </ul>
  </div> 

   
</nav>
<br>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "chat");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$contact_number = mysqli_real_escape_string($link, $_REQUEST['contact_number']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$crime_type = mysqli_real_escape_string($link, $_REQUEST['crime_type']);
$witness = mysqli_real_escape_string($link, $_REQUEST['witness']);
$attachment = mysqli_real_escape_string($link, $_REQUEST['attachment']);
$suspect = mysqli_real_escape_string($link, $_REQUEST['suspect']);
$complaint_detail = mysqli_real_escape_string($link, $_REQUEST['complaint_detail']);
$ps_id = mysqli_real_escape_string($link, $_REQUEST['ps_id']);
$loc_rel = mysqli_real_escape_string($link, $_REQUEST['loc_rel']);
// Attempt insert query execution
$sql = "INSERT INTO complaints (name, contact_number, location, crime_type, complaint_detail, witness, attachment, suspect, ps_id, loc_rel) VALUES ('$name', '$contact_number', '$location','$crime_type','$complaint_detail','$witness','$attachment','$suspect', '$ps_id','$loc_rel')";
if(mysqli_query($link, $sql)){
    echo "Complaint Has Been Successfully Reported. You Will Get A Reply Within 1-2 Hours. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>

<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = mysqli_query($conn,"SELECT * FROM complaint_track ORDER BY id DESC LIMIT 1");
$print_data = mysqli_fetch_row($sql);



echo "\n";
echo $print_data[0];
echo "\n";
echo $print_data[1];
echo "\n";
echo $print_data[2];
echo "\n";

?>


<footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :35px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
</footer>
</body>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>

</html>
