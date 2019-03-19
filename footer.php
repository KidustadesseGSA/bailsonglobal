<div class="w3-row w3-center w3-blue-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <i class="fa fa-facebook-square" style="font-size:48px;color:#5BEE22"></i><br>
    Facebook
  </div>
  <div class="w3-quarter w3-section">
    <i class="fa fa-youtube-play" style="font-size:48px;color:#5BEE22"></i><br>
    Youtube
  </div>
  <div class="w3-quarter w3-section">
    <i class="fa fa-instagram" style="font-size:48px;color:#5BEE22"></i><br>
    Instagram
  </div>
  <div class="w3-quarter w3-section">
    <i class="fa fa-twitter-square" style="font-size:48px;color:#5BEE22"></i><br>
    Twitter
  </div>
</div>


<script>
// Modal Image Gallery
//this is on the service page
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>