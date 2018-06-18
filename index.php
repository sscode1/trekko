<?php
    session_start();
    include_once 'dbh_inc.php';
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php

	if(isset($_SESSION['username'])){
	    include_once 'header.html';
	}
	else{
	    include_once 'header.html';
	}
?>
<!DOCTYPE html>

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

.modal-content{
    border:solid 2px powderblue ;
    /*border-radius: 27px;*/
  }
.modal-body input{
    border:solid 2px lightgreen;
}
.modal-body textarea{
    border:solid 2px lightgreen;
}

  .menu_icon{
    display: none;
  }

.w3-bar a,button{
}

.w3-bar a:hover{
  text-decoration: none;
}

.buttonsoham {
  position: absolute;
  /*width: 250px;*/
  left:0;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.buttonsoham a {
  width: 200px;
  padding: 12px 48px;
  text-decoration-color: brown;
    font-weight: 200;
  color: brown;
}

.sohamimg {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
}

</style>

<script>
</script>
<body>

<!-- =============BACKGROUND IMAGES ========================= -->
<!--<img class="mySlides" src="image/1.jpg" width=100% height="550px" margin-top:"30px">
<img class="mySlides" src="image/8.jpg" width=100% height="550px" margin-top:"30px">
<img class="mySlides" src="image/9.jpg" width=100% height="550px" margin-top:"30px">

    <button class="w3-button w3-display-left w3-jumbo" style="background-color: transparent;" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-jumbo" style="background-color: transparent;" onclick="plusDivs(+1)">&#10095;</button>-->

<!-- division to add a background image -->
 <div class="container">
    <p class="topic"><b> CHOOSE A PLACE </b></p>
     <div class="row top-buffer col-sm-12">
      <div class="row col-sm-12 col-lg-12 roow">
        <div class="col col-sm-12 col-md-6 col-lg-4">
          <p><b><a href="places/kurinjal.php"> KURINJAL </a></b> </p>
        </div>
        <div class=" col col-sm-12 col-md-6 col-lg-4">
          <p> <b> COORG </b></p>
        </div>
        <div class="col col-sm-12 col-md-6 col-lg-4">
          <p>  <b>KODACHADRI</b> </p>
        </div>
      </div>
    </div>

</div>
<br><br><br>

<footer style="margin-top:250px;" class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#Home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
      <a href="https://www.facebook.com" title="fb page" target="_blank" class="w3-hover-text-green"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

  <style>

  .topic{
    font-size:24px;
    color:#3AAFA9;
    margin-top: 30px;
    padding-left: 475px;
    padding-bottom: -30px;
  }
  .top-buffer{
  margin-top: 40px;
  }

  .col:hover{
    background-color:#5CDB95;
    color:#05386B;
  }

  .col{
    margin-top:10px;
    height:100px;
/*    border:solid 2px green;*/
    padding-top: 35px;
    padding-left:135px;

    box-shadow: 0px 2px 3px 0px;
  }

  .col p{
    font-size: 20px;
  }

  .roow{
    margin-top: 5px;
    height:120px;
    border:solid 2px white;

  }

  .footer{
    width: 100%;
    height:200px;
    background-color: #3500D3;
    color: white;
  }

  .footer p{
    font-size: 30px;
    padding-left: 43%;
    padding-top: 90px;
  }
  </style>

  <script>

  window.onscroll = function() {
      myFunction()};
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

          var slideIndex = 1;
  manual(slideIndex);

  function plusDivs(n) {
      manual(slideIndex += n);
  }

  function manual(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
  }

      var slideIndex = 0;
  automatic();

  function automatic() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(automatic, 5000);
  }

  </script>

</body>
</html>
