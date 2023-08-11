<?php
session_start();
include('auth.php');

/* if
{} */
?>
<html>
<title>ONLINE BARANGAY SERVICES</title>
<link type="text/css" rel="stylesheet" href="ccs/index.css" />
<body>
<div class="wrap">
 <nav>
  <div class="logo"><img src="img/logo.png" height="120" width="120"></div>
   <ul>
    <li><a href="index.php">HOME</a></li>
	<li><a href="reservation.php">BOOK AN APPOINTMENT</a></li>
	<li><a href="logout.php">Log Out</a></li>
	
</div>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: auto;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

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

/* Number text (1/4 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/pic1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/pic2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/pic3.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/pic4.jpg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
 
</div>
<section class="About">
				<div class="About us" id="About us"> 
					<div class="container">
						<h1 >About us</h1>
						<h2>Our Story</h2>
						<p > During the Spanish occupation, the barangay was once a horse farm that is quite muddy, that the Spaniards call it "marulas" or "madulas" which means slippery. They celebrate their fiesta during October 13 which is the feast of Fatima and every 1st Sunday of May which is the feast of Santo Christo. Some famous landmarks include the San Miguel Brewery and the Pinyahan bridge.</p>
						
					</div>
				</div>
		</section>
			<section class="Offers" >
					<div class="rowof" >
						<div class="columnof" id="Offers" >
							<h2 data-aos="zoom-in" data-aos-duration="2000">We only offer the best services to you</h2>
								
							
						</div>
						
						<div class="columnof" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<video id="video1" width="420" height="276" controls="controls">
								<source src="video/vid.mp4" type="video/mp4">
								<source src="video/vid.ogg" type="video/ogg">
							</video>
						</div>
					</div>
			</section>
			
		
<!-- Footer -->		
			<div class="footer" data-aos="fade	-up" data-aos-duration="800" data-aos-delay="100">
				<div class="container">
					<div class="rowf">
						<div class="columnf" >
							<h2 >SUPPORT US</h2>
							<p ><a  href="https://www.patronage.org/hermes_marulas">https://www.patronage.org/barangay_marulas</a></p>
						</div>
						
						<div class="columnf" >
							<h2 data-aos="fade-down" data-aos-duration="1400" data-aos-delay="600">LEARN MORE</h2>
								<p ><a href="#">About us</a></p>
								<p ><a href="#">Developers</a></p>
								<p ><a href="privacydisclaimer.html">Privacy & Disclaimer</a></p>
						</div>
						
						<div class="columnf">
							<h2 >CONNECT WITH US</h2>
								<a  href="https://www.facebook.com/Pamahalaang-Barangay-Marulas-108764474755028/" class="fa fa-facebook"></a>
								<a  href="https://twitter.com/barangay_marulasofficial" class="fa fa-twitter"></a>
								<a  href="https://www.instagram.com/barangay_marulasofficial" class="fa fa-instagram"></a>
								</br></br>
						
						</div>		
					</div>
				</div>
				
			<p class="copyright">© 2021 OBS: Online Barangay Service. All Rights Reserved</p>				
			</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



</html>
</body>