<?php
session_start();error_reporting(0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>India</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/india.css">
  <link href="dist/hamburgers.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!-- <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/swup"></script> -->
</head>
<body>
	<header class="nav-bar">
    <div class="nav-logo-cont"><span class="nav-logo" id="nav-logo">india</span></div>
    <div id="menu-cont" class="nav-menu-btn-cont">
      <!-- <button class="fas fa-bars nav-menu-btn" id="menu"></button> -->
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
  </header>
	<!-- <div class="nav-decoy" id="menu-block"></div> -->
	<header class="hero">
		<div class="nav-decoy" id="menu-block"></div>
		<div class="hero-banner">
			<!-- <div class="play"></div> -->
			<h1 class="hero-title">a country of  culture and tradition</h1>
			<!-- <span class="hero-subtitle">to <b>MUDEO</b></span> -->
		</div>
	</header>

	<section class="white-play">
		<div class="help-banner clip-text" id="clip-text">Places To Visit</div>
		<div class="btn-container" id="place-btn">
		</div>

	<footer class="last">
      <span>Copyright <i class="far fa-copyright"></i> 2019 Travelo Inc.</span>
    </footer>
  </section>
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
<script type="text/javascript">
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


  	function dataFeedPlace () {
  		const request = new XMLHttpRequest();
  		request.open("get", "data/place-india.json");
  		request.onload = () => {
  			try {
  				const json = JSON.parse(request.responseText);
  				populatePlace(json);
  			}
  			catch (e) {
  				console.warn("Error: :_(");
  			}
  		};

  		request.send();
  	}

  	function page_animate(clicked_id, len) {
  		var posx = document.getElementById(clicked_id).offsetLeft;
      	var posy = document.getElementById(clicked_id).offsetTop;
      	var screenTop = document.body.scrollTop;
      // var newPosy = posy - screenTop;
  		var sideWidth = screen.width / 10;
  		var diffWidth = screen.width / 8.5;
  		var deadCenter = ((screen.width / 2) - sideWidth) - diffWidth;
  		var move = deadCenter - posx;
  		var newPosx = 0;
  		if(posx > 0){ newPosx = newPosx - posx; newPosx = newPosx - sideWidth; }
  		else {newPosx = posx - sideWidth; }
  		// pos = pos - pos ;

      	var pos = document.getElementById(clicked_id).getBoundingClientRect();
      	var scr = document.body.getBoundingClientRect();
      	var movTop;
        var movLeft;
      // alert(posy);

      // if(posy > 0) {
        // document.getElementById(clicked_id).style.transform = "translateY(-"+posy+"px)";
      // }
        var wid = document.body.offsetWidth;

        if(wid <= 414) {
          // alert(document.getElementById(clicked_id).className);
          var a = document.getElementById(clicked_id);
          var b = a.getElementsByClassName('card')[0].id;

          document.getElementById(b).style.backgroundAttachment = "fixed";
          document.getElementById(b).style.width = "50%";
          var c = document.getElementById(b).offsetHeight;
          document.getElementById(b).style.height = ""+c/2+"px";
          document.getElementById(b).fontSize = "0.2rem";

          // for (var j=0;j<len;j++){
          //   document.getElementById("place-img-"+j).style.backgroundAttachment = "fixed";
          // }
          // document.getElementById(clicked_id).style.width = "80%";
          // document.getElementById(clicked_id).style.height = "10rem";

          // setTimeout(function(){document.getElementById(clicked_id).style.transform = "scale(0.7)";},200);
        }
        else {
          document.getElementById(clicked_id).style.width = "100%";
        }
        
        movTop = pos.top;
        movLeft = pos.left;
        document.getElementById(clicked_id).style.marginTop = "-"+movTop+"px";
        document.getElementById(clicked_id).style.marginLeft = "-"+movLeft+"px";
        document.getElementById(clicked_id).style.transition = "ease 1s";
        
      // var move = posy - movTop;
      // document.getElementById(clicked_id).style.transform = "translateY(-"+move+"px)";

      // alert(clicked_id);

      // ************************FIND A WAY TO UPDATE THE LOOP COUNT***************
        for (var i=0;i<4;i++) {
          var cardId = "place-page-"+i;
          var cardCssId = document.getElementById('place-page-'+i);
          var child = cardCssId.getElementsByClassName('card')[0].id;
        // var cardCss = cardPcss.getElementsByClassName('place')[0].id;
        // alert(cardId)
          if (cardId != clicked_id) {
          // alert(cardId);
              document.getElementById(child).style.transition = "1s";
              document.getElementById(child).style.transform = "scale(0.5)";
              document.getElementById(child).style.opacity = "0";
              document.getElementById('nav-logo').style.transition = "2s";
              document.getElementById('nav-logo').style.opacity = "0";
          // document.getElementById('desc').style.transition = "2s";
          // document.getElementById('desc').style.opacity = "0";
              document.getElementById('clip-text').style.transition = "0.5s";
              document.getElementById('clip-text').style.opacity = "0";
          }
          document.getElementById('info-'+i).style.transition = "2s";
            document.getElementById('info-'+i).style.opacity = "0";
        }

        var test = document.getElementById(clicked_id);
        var child = test.getElementsByClassName('card')[0].id;
        var childElem = test.getElementsByClassName('card')[0];
        var child2 = childElem.getElementsByClassName('place')[0].id;
        setTimeout(function(){
          document.getElementById(clicked_id).style.transition= "0.5s ease";
          document.getElementById(clicked_id).style.transform= "scale(1)";
          document.getElementById(child2).style.filter = "brightness(0.6)";
          document.getElementById(child2).style.height = "70%";
          document.getElementById(child).className = 'card-transition';
        },1000);
    
		 // }, 500);
    // var a = document.getElementById('').scrollTop;
    // document.body.scrollTop = a;
		// alert(a);
 	  }

  	function redirect(clicked_id) {
  		page_animate(clicked_id);
  		const loc = window.location.href;
  		const path = loc.substring(0, loc.lastIndexOf("/"));

   		var a = document.getElementById(clicked_id);
  		// alert(clicked_id);
      var wid = document.body.offsetWidth;
        if(wid <= 414) {
          setTimeout(function(){window.location.href = ""+path+"/place.html";}, 2200);
        }
        else {
  		setTimeout(function(){window.location.href = ""+path+"/place.html";}, 2000);
    }
      // var trigger = await window.location.href = ""+path+"/place.html";
  		document.cookie = 'place='+a.name;
      	document.cookie = 'country=india';
  		// console.log("button name:"+a.name);
  		// console.log(document.cookie);
  	}

    // redirect(clicked_id);
    var len;
  	function populatePlace(json) {
  		// console.log(json.length);
  		const placeDiv = document.getElementById('place-btn');
     len = json.length;
  		for (var i = 0; i < json.length; i++) {
  			placeDiv.innerHTML += '<button id="place-page-'+i+'" name="'+json[i][1]+'" class="minimal" onclick="redirect(this.id,len)"><div id="changePage-'+i+'" class="card"><img class="place" id="place-img-'+i+'"></img><div id="info-'+i+'" class="info"><div id="p-name" class="p-name"><span>'+json[i][1]+'</span></div><div id="desc" class="desc"><span>'+ json[i][2] +'</span></div></div></div></button>';
  			document.getElementById("place-img-"+i).style.background = "url('img/india/"+json[i][1]+"/" + json[i][0] + "') no-repeat";
  			document.getElementById("place-img-"+i).style.backgroundSize = "cover";
  			document.getElementById("place-img-"+i).style.backgroundPosition = "center top";
  		}

       var wid = document.body.offsetWidth;
       if(wid<=414) {
        for (var j=0;j<json.length;j++){
          document.getElementById("place-img-"+j).style.backgroundAttachment = "initial";
        }
       }
       else {
        for (var j=0;j<json.length;j++){
          document.getElementById("place-img-"+j).style.backgroundAttachment = "fixed";
        }
       }


  	}

  	document.addEventListener("DOMContentLoaded", () => { dataFeedPlace(); });
</script>
</html>