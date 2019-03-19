<?php include "header.php"?>

<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">SERVICE</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">What We Do</h3>
  <p class="w3-center"><em>Solutions</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="img/billOfLading.png" style="width:70%" class="w3-hover-opacity">
		<h5>Bill Of Lading </h5>
		<p>A bill of lading (BL or BoL) is a legal document issued by a carrier to a shipper that details the type, quantity, and destination of the goods being carried. We will create and handle the bill of lading in in preparation for shipping.</p>
		
    </div>

    <div class="w3-col m3">
      <img src="img/exportManagment.png" style="width:70%"  class="w3-hover-opacity">
		<h5>Export Management</h5>
		<p>As soon as we resive confirmation for the international order, we will help you move your product from your facility to the International client.</p>
    </div>

    <div class="w3-col m3">
      <img src="img/logisticsAndTransportion.png" style="width:70%" class="w3-hover-opacity" >
		<h5>Logistics and Transportation</h5>
		<p>We will provide the Transportation needed to ship your products so you can focus on running your business."</p>
		
    </div>
	
	  <div class="w3-col m3">
      <img src="img/internationalMarketIdentification.png" style="width:70%"  class="w3-hover-opacity">
		  <h5>International Market Identification</h5>
		  <p>The analytics and the research is very important to reach you international clients. Using data we are going to help you understand your international market and how to reach them in the most efficient way.</p>
    </div>
  </div>

 
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<?php include "footer.php"?>