<?php
session_start();error_reporting(0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>IP Project</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="stylesheet" href="css/index.css">
 	<link href="dist/hamburgers.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/index-responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
</head>
<body>
		<div id="menu-cont" class="nav-menu-btn-cont">
			<button class="hamburger hamburger--emphatic nav-menu-btn" onclick="nav()" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div id="menu-item-cont" class="menu-content">
				<a href="index.php">home</a>
				<a href="contact.html">contact</a>
        <div id="nav_user"></div>
			</div>
		</div>
	<header class="hero">
		<div class="nav-decoy" id="menu-block"></div>
		<div class="hero-banner">
			<div class="play"></div>
			<h1 class="hero-title">Where To?</h1>
		</div>
	</header>

	<section class="white-play">
		<div class="btn-container">
			<a class="minimal" href="france.php"><div class="img1"><div class="img-overlay"><span>FRANCE</span></div></div></a>
			<a class="minimal" href="india.php"><div class="img2"><div class="img-overlay"><span>INDIA</span></div></div></a>
			<a class="minimal" href="australia.php"><div class="img3"><div class="img-overlay"><span>AUSTRALIA</span></div></div></a>
			<a class="minimal" href="america.php"><div class="img4"><div class="img-overlay"><span>AMERICA</span></div></div></a>
			<a class="minimal" href="spain.php"><div class="img5"><div class="img-overlay"><span>SPAIN</span></div></div></a>
			<a class="minimal" href="turkey.php"><div class="img6"><div class="img-overlay"><span>TURKEY</span></div></div></a>

	</section>

	<section class="white-play-2">
		<div class="clip-context">
			<div class="help-banner clip-text">What Do Our Customers Say?</div>
		</div>
		<div class="testimonials-cont">
      <div class="test-head-cont">
        <div class="test-head">testimonials</div>
      </div>
      <div class="testimonial-box-cont">
        <div class="testimonial-box">
          <!-- SLIDER -->
          <div class="slide hi-slide">
            <div class="hi-prev "></div>
            <div class="hi-next "></div>
            <ul>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
                <li><div class="testimonial"><div class="user-cont"><i class="fas fa-user"></i></div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </div></li>
              </ul>
            </div>
            <!-- SLIDER-END -->
        </div>
      </div>
			<!-- <div class="world-map"></div> -->
		</div>
	

  	<footer class="last">
      <span>Copyright <i class="far fa-copyright"></i> 2019 Travelo Inc.</span>
  	</footer>
  </section>

</body>
<?php
include('session.php');
if(isset($_SESSION['login_user'])){
echo '<script type="text/javascript" src="js/logout.js"></script>';
}
else {
  echo '<script type="text/javascript" src="js/login.js"></script>';
}

?>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
      $('.slide').hiSlide();
</script>
<script type="text/javascript">
  // function toggleLogin() {
  //   var loginout = document.getElementById('nav_user');
  //   loginout.innerHTML += '<a href="log.php">login</a>';
  // }

  // function toggleLogout() {
  //   var loginout = document.getElementById('nav_user');
  //   loginout.innerHTML += '<a href="logout.php">logout</a>';
  // }
	  // --------------Menu Button
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  var menu_cont = document.querySelector(".nav-menu-btn-cont");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
});
  function nav() {
      var wid = document.body.offsetWidth;
       var open = document.querySelector(".hamburger");
       var menu_cont = document.querySelector(".nav-menu-btn-cont");
      if(open.classList.contains("is-active")) {
        document.getElementById("menu-item-cont").style.display= "none";
        document.getElementById("menu-cont").style.borderRadius= "50%";
        document.getElementById("menu-cont").style.background= "#0004";
        if(wid <=414) {
          document.getElementById("menu-cont").style.top= "0.75rem";
          document.getElementById("menu-cont").style.right= "1.25rem";
          document.getElementById("menu-cont").style.height= "3rem";
          document.getElementById("menu-cont").style.width= "3rem";
        }
        else {
          document.getElementById("menu-cont").style.top= "1.25rem";
          document.getElementById("menu-cont").style.right= "6.5rem";
          document.getElementById("menu-cont").style.height= "5rem";
          document.getElementById("menu-cont").style.width= "5rem";
          document.body.style.overflow = "scroll";
        }
      }
      else {
        document.getElementById("menu-item-cont").style.display= "block";
        document.getElementById("menu-cont").style.background= "#000c";
        if(wid<=414){
          document.getElementById("menu-cont").style.height= "100rem";
          document.getElementById("menu-cont").style.width= "100rem";
          document.getElementById("menu-item-cont").style.fontSize= "1rem";
          document.getElementById("menu-item-cont").style.width= "5rem";
          document.getElementById("menu-cont").style.top= "-35rem";
          document.getElementById("menu-cont").style.right= "-25rem";
        }
        else {
          document.getElementById("menu-cont").style.height= "200rem";
          document.getElementById("menu-cont").style.width= "200rem";
          document.getElementById("menu-cont").style.top= "-80rem";
          document.getElementById("menu-cont").style.right= "-20rem";
          // document.getElementById("menu-cont").style.overflow= "hidden";
          document.body.style.overflow = "hidden";
        }
      }
    }

  	$(".white-play-2").mousemove(function(e) {
  		parallaxIt(e, ".map-context", 50);
  	});

  	function parallaxIt(e, target, movement) {
  		var $this = $(".white-play-2");
  		var relX = e.pageX - $this.offset().left;
  		var relY = e.pageY - $this.offset().top;

  		TweenMax.to(target, 1, {
  			x: (relX - $this.width() / 16 ) / $this.width() * movement,
  			y: (relY - $this.height() / 16) / $this.height() * movement
  		});
  	}

</script>
</html>