<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farm Assistant | Crop Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style1.css">
            <link rel="stylesheet" href="css/font-awesome.css">
  </head>
    <style>
    * {
  box-sizing: border-box;
}
        .ftco-navbar-light.scrolled .nav-item.cta > a {
    color: #fff !important;
    background: rgb(16, 118, 202);
    border: none !important;
}


.ftco-navbar-light {
    background: #007ee5 !important;
    z-index: 3;
    padding: 0;
}

.ftco-navbar-light .navbar-brand:hover, .ftco-navbar-light .navbar-brand:focus {
    color: deepskyblue;
}

/* @media (max-width: 991.98px) */
.ftco-navbar-light .navbar-nav > .nav-item.cta > a {
    color: #fff;
    background: darkblue;
}

a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color:rgb(16, 118, 202);
    
}
a1:hover{
    text-decoration: none;
    /* color: rgb(16, 118, 202); */
    background-color: royalblue;
}
  
.a1:focus {
    text-decoration: none;
    /* color: rgb(16, 118, 202); */
    background-color: royalblue;
}  
/* element.style {
} */
.mouse-icon {
    width: 60px;
    height: 60px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    background: rgb(16, 118, 202) ;
    cursor: pointer;
    position: relative;
    text-align: center;
    margin: 0 auto;
    display: block;
}

 a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: rgb(16, 118, 202) ;
}
 
/* element.style {
} */
.ftco-navbar-light .navbar-brand {
    color: white;
}
  .container {
  /* width: 70%; */
  
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

  .billing-form .form-control {
  font-weight: 300;
  border: transparent !important;
  border: 1px solid rgba(0, 0, 0, 0.1) !important;
  height: 58px !important;
  padding-left: 15px;
  padding-right: 15px;
  background: transparent !important;
  color: rgb(0, 0, 0) !important;
  font-size: 14px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .billing-heading {
  font-size: 24px; 
  
}
form{
	border: 6px  solid rgba(252, 252, 252, 0.63) ;
	padding: 20px;
  background-color: white ;
}

/* .categories ul li{
  transform: scaleY(0);
  transform-origin: bottom;
  transition: transform 0.5s; 
}
.categories ul  li:hover div {
  background-color: aqua;
  transform: scaleY(1);
  transform-origin: top;
  transition: transform 0.5s; 
} */
.sidebar-box {
    margin-bottom: 30px;
    padding: 20px;
    font-size: 20px;
    width: 100%;
    background: #ffffff;
}

.table tbody tr td.product-remove a:hover {
    border: 1px solid orangered;
    background: red;
}

.btn.btn-black:hover {
    background: deepskyblue;
    border: 1px solid blue;
    color: #fff;
}
     
    </style>
  <body class="goto-here">
		
  
  <?php
      include('connection.php');
   
     
                
      ?>
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
           
            
            
	     
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="ftco-section" style="padding-top: 0px">
    	<div class="container">

    		<br><br><br>
    		<div class="row">
                <?php
     
    
     $a="SELECT * FROM crop_fc";
              $sql=mysqli_query($conn,$a);
              
             
                while($row=mysqli_fetch_array($sql))
                { 
                    $c=$row["f_email"];
                    $sql1= "select * from farmer where email= '$c'";
                     $b=mysqli_query($conn,$sql1);
                 $row1=mysqli_fetch_assoc($b);
      ?>	
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $row['image']; ?>" style="height: 200px; width: 300px;"alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#"><?php echo $row['c_name']; ?></a></h3>
                            <p>Farmer name: <?php echo $row1["name"]; ?>
						</p>
                           
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price" style="color: blue"><span>₹ <?php echo $row['price']; ?>.00 /kg</span></p>
		    					</div>
	    					</div>
    						
    					</div>
    				</div>
    			</div>
    			<?php
                }
                ?>
    		</div>
            
    		
    	</div>
    </section>

		
		<hr>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        
        
      </div>
    </footer>
    
         <!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	
<!--copy rights end here
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>