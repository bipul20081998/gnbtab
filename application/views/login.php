
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GNB TAB</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.ico")?>" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url("assets/img/apple-touch-icon.png")?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("assets/img/apple-touch-icon-72x72.png")?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("assets/img/apple-touch-icon-114x114.png")?>">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url("assets/css/bootstrap.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome/css/font-awesome.css")?>">

<!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/nivo-lightbox/nivo-lightbox.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/nivo-lightbox/default.css")?>">
<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">-->
<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">-->


<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/styleLogin.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/cart.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/carousel.css")?>">

<link href="<?php echo base_url("assets/css/crsl.css")?>" rel="stylesheet" type="text/css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body id="page-top" data-spy="scroll" >

<script>
    function loginForm(){
        var $uname = document.getElementById('uname').value;
        var $psw = document.getElementById('psw').value;
        console.log($uname);
    }
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">

  

  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">GNB TAB</a>
      <!--<div class="phone"><span>Call Today</span>320-123-4321</div>-->
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
	
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">products</a></li>
        <li><a href="#portfolio" class="page-scroll">customers</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a class="page-scroll"><?php echo $user ?></a></li>
        <li><a href="#" id="clk" name="clk" onclick="logout()">Logout</a></li>
      </ul>
    </div>

<script>
  function logout(){
    window.location.href="<?php echo site_url("construction/logout") ?>"; 
  }
</script>


    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->


<!-- Get Touch Section -->
<!-- <div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div> -->
<!-- About Section -->
 <!-- Slideshow container -->
 
 
    <div class="container">
       <div class="row">
           <div class="col-md-12 col-xs-12 col-lg-12">
           <div class="slideshow-container">

     <!-- Full-width images with number and caption text -->
               <div class="mySlides fade">
                   <div class="numbertext">1 / 3</div>
                   <img src="<?php echo base_url("assets/img/cement.jpg")?>" style="width:100%">
                   <div class="text">Caption Text</div>
               </div>

               <div class="mySlides fade">
                 <div class="numbertext">2 / 3</div>
                 <img src="<?php echo base_url("assets/img/bricks.jpg")?>" style="width:100%">
                 <div class="text">Caption Two</div>
               </div>

               <div class="mySlides fade">
                 <div class="numbertext">3 / 3</div>
                 <img src="<?php echo base_url("assets/img/cement.jpg")?>" style="width:100%">
                 <div class="text">Caption Three</div>
               </div>

               <!-- Next and previous buttons -->
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
           </div>

           <br>

   <!-- The dots/circles -->
           <div style="text-align:center">
             <span class="dot" onclick="currentSlide(1)"></span>
             <span class="dot" onclick="currentSlide(2)"></span>
             <span class="dot" onclick="currentSlide(3)"></span>
           </div>
           </div> 
       </div>
   </div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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
<div id="about">
  <div class="container">
    <div class="row">
        
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url("assets/img/1st.jpg")?>" style="width:100%"/><!--<img src="<?php echo base_url("img/1st.jpg")?>" class="img-responsive" alt="">--> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Years of Experience</li>
                <!-- <li>Fully Insured</li> -->
                <li>Cost Control Experts</li>
                <li>100% Satisfaction Guarantee</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Consultation</li>
                <li>Satisfied Customers</li>
                <!-- <li>Project Management</li> -->
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->

<div id="id02" class="modal" >
  
  <div class="modal-content animate" action="/action_page.php" method="post" >
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

       <h2 style="text-align: center;" id="Buy">Buy</h2>
    <div class="imgcontainer1">
    
      <img src="img/bricks.jpg" alt="Avatar" class="avatar1" id="img2">
    </div>

    <div class="containerDetails" >
      <h4>Price</h4>
     <ul>
      <li>details</li>
     </ul>
     
    </div>

    <div class="containerlogin" style="background-color:#f1f1f1">
       <!-- <div class="psw frgtpsw" ><a href="#">Forgot password?</a></div> -->
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" class="loginbtn"  >Buy</button>
    </div>
  </div>
</div>



<script>
  function pay(name){
    document.getElementById('id02').style.display="block";
    document.getElementById('Buy').innerHTML= name;
  }
  function changeimg(a){
   
    var image=document.getElementById(a);

    document.getElementById('img2').src=image.src;
  }
</script>



<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Products</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
          
          
        <div class="service-media"> <img src="<?php echo base_url("assets/img/bricks.jpg")?>" id="BRICKS" alt=" "> </div>
        <div class="service-desc">
          <h3>Bricks</h3>
          <button type="button" value="BRICKS" class="btn btn-success" onclick="pay(value);changeimg(value)">Buy</button>
          <ol>
            <li>Rock hard bricks</li>
            <li>Raw soil</li>
          </ol>
        </div>
      </div>
      <div class="col-md-4">
          
        <div class="service-media"> <img src="<?php echo base_url("assets/img/sand.jpg")?>" id="BAALU"alt=" "> </div>
        <div class="service-desc">
          <h3>Baalu</h3>
          <button type="button" class="btn btn-success" value="BAALU"onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/cement.jpg")?>" id="CEMENT"alt=" "> </div>
        <div class="service-desc">
          <h3>CEMENT</h3>
          <button type="button" class="btn btn-success" value="Rait"onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/sariya.jpg")?>" id="Sariya" alt=" "> </div>
        <div class="service-desc">
          <h3>IRON ROD</h3>
          <button type="button" class="btn btn-success" value="Sariya" onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/gravel.jpg")?>" id="Windows and Doors"alt=" "> </div>
        <div class="service-desc">
          <h3>GRAVEL</h3>
          <button type="button" class="btn btn-success" value="Windows & Doors" onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/tiles.jpg")?>" id="Aluminium Cabinet" alt=" "> </div>
        <div class="service-desc">
          <h3>TILE</h3>
          <button  type="button" class="btn btn-success" value="Aluminium Cabinet" onclick="pay(value);changeimg
          (value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
 
 <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/bricks.jpg")?>" id="BRICKS" alt=" "> </div>
        <div class="service-desc">
          <h3>Bricks</h3>
          <button type="button" value="BRICKS" class="btn btn-success" onclick="pay(value);changeimg(value)">Buy</button>
          <ol>
            <li>Rock hard bricks</li>
            <li>Raw soil</li>
          </ol>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/sand.jpg")?>" id="BAALU"alt=" "> </div>
        <div class="service-desc">
          <h3>Baalu</h3>
          <button type="button" class="btn btn-success" value="BAALU"onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/cement.jpg")?>" id="CEMENT"alt=" "> </div>
        <div class="service-desc">
          <h3>CEMENT</h3>
          <button type="button" class="btn btn-success" value="Rait"onclick="pay(value);changeimg(value)">Buy</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
 </div>
</div>
<!-- login window -->


<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our Works</h2>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/01-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/02-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/02-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/03-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/03-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/04-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/04-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/05-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/05-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/06-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/06-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/07-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/07-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/08-large.jpg")?> title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/08-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/09-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/09-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
          <form name="sentMessage" id="" novalidate action="#">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>Madiyaon,Lucknow,<br>
          Uttar Pardesh, India</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span>+91-9264930401</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span>gnbtab@company.com</p>
      </div>
    </div>
    <div class="col-md-12" >
      <div class="row" >
        <div class="social" >
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->

<!--<script type="text/javascript" src="<?php // echo base_url("assets/js/jquery.1.11.1.js")?>"></script>--> 
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/SmoothScroll.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/nivo-lightbox.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/jqBootstrapValidation.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/contact_me.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/main.js")?>"></script>
</body>
</html>