<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title>Portfolio website</title> 
  <link rel="stylesheet" type="text/css" href="../css/style.css?v=1">
	<script src="../js/myjs.js?v=1"></script>

  

 
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>


</head>
<body>
	<!----hero Section start---->

	<div class="hero">
       
		<nav>
			<h2 class="logo">Portfo<span class="lio">lio</span></h2>
			
      <ul>
				<!-- <li><a href="#">Home</a></li> -->
        
				<li><a class="active1" href="#">About</a></li>
				<li><a  class="active2" href="#">Project</a></li>
				<li><a class="active3" href="#">Resume</a></li>
				<li><a class="active4" href="#">Contact</a></li>
			</ul>

			<a href="#" class="btn">Download Resume</a>
		</nav>
   <div class="ring-container">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
</div>
    </div>
		<div class="content">
			<h4>Hello, my name is</h4>
			<h1 class="animation">Sharia Arfin <span> Tanim</span></h1>

        <!-- <a href="https://www.linkedin.com/in/jean-philippe-belley-01558286/" target="_blank"> 
  <svg height="5.42mm" viewBox="0 0 18 16" width="5.54mm" xmlns="http://www.w3.org/2000/svg"> -->
	<path d="m.65 15.36h3.35v-10.36h-3.35zm1.7-15.36a1.77 1.77 0 0 0 -1.9 1.79 1.76 1.76 0 0 0 1.86 1.79 1.77 1.77 0 0 0 1.9-1.79 1.76 1.76 0 0 0
	 -1.86-1.79zm13.81 9.42v5.94h-3.37v-5.54c0-1.4-.49-2.35-1.71-2.35a1.83 1.83 0 0 0 -1.72 1.26 2.37 2.37 0 0 0 
	 -.12.84v5.79h-3.36s.04-9.36 0-10.36h3.36v1.46a.05.05 0 0 1 0 0 3.35 3.35 0 0 1 3-1.71c2.26 0 3.92 1.48 3.92 4.67z"
	  fill="#333" fill-rule="evenodd" /></svg>
</a>

			
			<h3>I'am a<div class="scroller">
				<span>
					Student<br/>
				Full Stack Developer<br/>
				Software Engineer<br/>
				Database Administrator
		</span>
	    </div>
</h3>
			<div class="newslatter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="../img/tanim.jpg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Developer <span>& Designer</span></h5>
				<p>I am a front-end web developer. I can provide clean code and pixel perfect design.
           I also make the website more & more interactive with web animations.I can provide clean code and pixel perfect design. 
           I also make the website more & more interactive with web animations.
           A responsive design makes your website accessible to all users, regardless of their device.</p>
				<!-- <button type="button">Let's Talk</button> -->
				<div class="container">
  <button type="button"  data-toggle="modal" data-target="#glassAnimals" data-backdrop="static">
    Lets talk
  </button>  
</div>
<div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel"><h6 style="font-size: 30px;">How to contact me...</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  Contact Number:
	  <a href="tel:+880 1314 308 598">01314308598</a>
        <br>
		Mail me:
		<a href="mailto:shariaarfin096@gmail.com">shariaarfin096@gmail.com</a>

      </div>
      <div class="modal-footer">
        <!-- <button type="button"  data-dismiss="modal">Close</button> -->
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-danger">Track Artist</button> -->
      </div>
    </div>
  </div>
</div>
			</div>
		</div>
	</section>

		<!----About section start2222222222222222222222222222---->
		<!-- <section class="about"> -->
    <div class="service"> 
		<div class="container"> 
  <!-- <h2>Activate Carousel with JavaScript</h2>  -->
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators  -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

   
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../img/background.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>1st pic</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="../img/background.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>2nd pic</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../img/background.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>3rd pic</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="../img/background.jpg"alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  	
	

     
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
    </div>
<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
 

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Education</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-certificate"></i>
				<h5>S. S. C.</h5>
				<div class="pra">
					<p><strong>Nasirabad Government High School(Science)</strong></p>
					<bold><p style="color: #C0C0C0">Chattagram, Bangladesh</p></bold>

					<p style="text-align: center;">
						<!-- <a class="button" href="#">Read More</a> -->
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fas fa-certificate"></i>
				<h5>H. S. C.</h5>
				<div class="pra">
					<p><strong> Government Model School and College(Science)</strong></p>
					<p style="color: #C0C0C0">Chattagram, Bangladesh</p>

					<p style="text-align: center;">
						<!-- <a class="button" href="#">Read More</a> -->
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fa fa-certificate"></i>
				<h5>B. S. C.</h5>
				<div class="pra">
					<p><strong>American International University(CSE)</strong></p>
					<p style="color: #C0C0C0">Dhaka, Bangladesh</p>

					<p style="text-align: center;">
						<!-- <a class="button" href="#">Read More</a> -->
					</p>
				</div>
			</div>
		</div>
	</div>

	<!------Contact Me------>
	<div class="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<a class="button-two" href="#">Hire Me</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Sharia Arfin Tanim</p>
		<p>For more information & know about me follow me here- <strong>please click on the link below</strong></p>
		<div class="social">
			<a href="https://www.facebook.com/sharia.tanim.5"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
			<a href="https://www.instagram.com/arfin_tanim619/"><i class="fab fa-instagram"></i></a>
			<!-- <a href="#"><i class="fab fa-whatsapp"></i></a> -->
		</div>
		<p class="end">© CopyRight By, Sharia Arfin Tanim</p>
	</footer>
</body>
</html>