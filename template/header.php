<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body{
  background-image:url("https://www.linkpicture.com/q/2_451.png");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <!-- <body style="background-color: white"> -->


  <nav class="navbar navbar-expand-sm bg-light">
   
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> <span class="glyphicon glyphicon-sort-by-alphabet"></span> A-Z BOOK STORE</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              
          <a href="about.php" class="btn">
          <span class="glyphicon glyphicon-globe"></span>&nbsp; ABOUT US
        </a>
          
        <a href="publisher_list.php" class="btn">
          <span class="glyphicon glyphicon-paperclip"></span>&nbsp; PUBLISHERS
        </a>
        <a href="books.php" class="btn btn">
          <span class="glyphicon glyphicon-book"></span>&nbsp; BOOKS
        </a>
        <a href="contact.php" class="btn btn">
          <span class="glyphicon glyphicon-earphone"></span>&nbsp; CONTACT
        </a>
        <a href="cart.php" class="btn btn">
          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; CART
        </a>
          <!-- link to publiser_list.php -->
              <!-- <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li> -->
              <!-- link to books.php -->
              <!-- <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li> -->
              <!-- link to contacts.php -->
              <!-- <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li> -->
              <!-- link to shopping cart -->
              <!-- <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li> -->
           </ul>
        </div>
      </div>
    </nav> 
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div>
    <div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 5</div> -->
  <img src="https://www.linkpicture.com/q/1_2342.jpg" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 5</div> -->
  <img src="https://www.linkpicture.com/q/3_1478.jpg" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 5</div> -->
  <img src="https://www.linkpicture.com/q/2_623.jpg" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>
<div class="mySlides fade">
  <!-- <div class="numbertext">4 / 5</div> -->
  <img src="https://www.linkpicture.com/q/4_1318.jpg" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>
<div class="mySlides fade">
  <!-- <div class="numbertext">5 / 5</div> -->
  <img src="https://www.linkpicture.com/q/5_1152.jpg" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>

    <div class="jumbotron" style="background-color: white">
      <div class="container">
       <center>
        <b><p class="lead" >Grab Your favourite book soon !</p></b></center>
       <!-- <p>* Limited stocks</p> -->
      </div>
    </div>

    <?php } ?>

    <div class="container" id="main">