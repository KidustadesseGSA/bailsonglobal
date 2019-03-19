<!DOCTYPE html>
<html>
<title>Bailson Global</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 .bgimg-4{
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url("img/truck.jpg");
  min-height: 90%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("img/service_header.jpg");
  min-height: 450px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("img/contactUsHeader.jpg");
  min-height: 400px;
}

.bgimg-4 /* about us */{
  background-image: url("img/aboutUsHeader.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-white">
  <div class="w3-bar w3-white" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i style="color: #5BEE22;" class="w3-xxxlarge fa fa-bars"></i>
    </a>
	<a href="index.php" class="w3-bar-item w3-button w3-left">
		<img style="margin-top: -10px" width="71px" height="80px" src="img/BailsonGlobalNoBackground.png">
	  </a>
	<a href="Contact.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-envelope" style="color:#5BEE22;"></i> CONTACT</a>
    <a href="AboutUs.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user" style="color:#5BEE22"></i> ABOUT</a>
	<a href="Service.php" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-th"style="color:#5BEE22"></i>SERVICES</a>
	<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right">HOME</a>
    
    
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
	<a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
	<a href="Service.php" class="w3-bar-item w3-button" onclick="toggleFunction()">SERVICES</a>
    <a href="AboutUs.php" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
	<a href="Contact.php" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>