<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<title>Tesla</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssf1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
/* latin-ext */
</style>
<body>

<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-black crs-card">
    <a href="#" class="crs-bar-item crs-button crs-padding-large">HOME</a>
    <a href="login-admin.php" class="crs-bar-item crs-button crs-padding-large crs-right">ADMIN LOGIN</a>
    <a href="login-client.php" class="crs-bar-item crs-button crs-padding-large crs-right">CLIENT LOGIN</a>
    <a href="#contact" class="crs-bar-item crs-button crs-padding-large">CONTACT</a>
  </div>
</div>

<!-- Page content -->
<div class="crs-content" style="max-width:1800px;max-height:1080px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides crs-display-container crs-center">
    <img src="logo.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <h3>The future is now</h3>   
    </div>
  </div>
  <div class="mySlides crs-display-container crs-center">
    <img src="car.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <h3>The new model Y</h3>    
    </div>
  </div>
  <div class="mySlides crs-display-container crs-center">
    <img src="spacex.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <h3>Aim for the moon, shoot for the stars</h3>   
    </div>
  </div>

  <!-- The Info Section -->
  <div class="crs-container crs-content crs-center crs-padding-64" style="max-width:800px" id="band">
    <h2 class="crs-wide">TESLA</h2>
     <p class="crs-justify  crs-center">Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California. Tesla's current products include electric cars, battery energy storage from home to grid-scale, solar panels and solar roof tiles, as well as other related products and services.</p>
      <p class="crs-justify  crs-center">Founded in July 2003 by Martin Eberhard and Marc Tarpenning as Tesla Motors, the company's name is a tribute to inventor and electrical engineer Nikola Tesla. Elon Musk, who contributed most of the funding in the early days, has served as CEO since 2008.</p>
       <p class="crs-justify  crs-center">Tesla began production of its first car model, the Roadster, in 2009. This was followed by the Model S sedan in 2012, the Model X SUV in 2015, the higher volume Model 3 sedan in 2017, and the Model Y crossover in 2020. The Model 3 is the world's all-time best-selling plug-in electric car, with more than 800,000 delivered through December 2020. Tesla's global vehicle sales were 499,550 units in 2020, a 35.8% increase over the previous year. In 2020, the company surpassed the 1 million mark of electric cars produced.</p>
  </div>

 
  <!-- The Contact Section -->
  <div class="crs-black" id="contact">
    <h2 class="crs-wide crs-center">CONTACT</h2>
    <p class="crs-opacity crs-center"><i>Interested in our services?</i></p>
    <div class="crs-row crs-padding-32">
      <div class="crs-col m6 crs-large crs-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> California, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 74893623<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: elon.musk@tesla.yahoo.com<br>
      </div>
      <div class="crs-col m6 crs-center">
        <form action="home.php" method="POST" autocomplete="">
          <div class="crs-row-padding" style="margin:0 -16px 8px -16px">
            <div class="crs-half">
              <input class="crs-input crs-border" type="text" name="name" placeholder="Name">
            </div>
            <div class="crs-half">
              <input class="crs-input crs-border" type="email" name="mail" placeholder="Email">
            </div>
          </div>
          <input class="crs-input crs-border" type="text" name="message" placeholder="Message" required name="Message">
          <button class="crs-button crs-white crs-section crs-center" type="submit" name="contact" value="Contact">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<script>
// automatic slideshow - change image every 4 seconds
var myIndex = 0;
schimbare_poze();

function schimbare_poze() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(schimbare_poze, 4000);    
}

</script>
</body>
</html>