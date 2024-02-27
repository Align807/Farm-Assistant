<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Supplier Panel- Farm Assistant | Home</title>
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
	
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
       <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
   <link href="css/all-min.css" rel="stylesheet" type="text/css" media="all" />
       <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
      <?php
      include('connection.php');
      include('function.php');
      session_start();
     
      $u=$_SESSION['u'];
                
      ?>
	<style>

.notification {
  background-color: white;
  color: black;
  text-decoration: none;
  padding: 5px 20px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}
        .tagcloud a:hover{
            color: black;
            border-color: black;
        }

.notification .badge {
  position: absolute;
  top: 20px;
  right: 10px;
  padding: 0px 0px;
  border-radius: 50%;
  background: red;
  color: white;
}
   
li.nav-item dropdown-tog a.dropdown-item {
    width: 365px!important;
}
   div .notification_header {
    padding: 0em 0em;
    
}
    .dropdown-item .notification_header  h3 {
    padding-left: 0px;
    display: block;
    font-size: 1.17em;
    letter-spacing: normal;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

.user_img {
    float: left;
    width: 19%;
}
.notification_desc {
    float: left;
    width: 100%;
  
}
      
.desc {
    float: left;
    width: 100%;
    
}
.notification_desc h6 {
    font-size: 1.2em;
    
    font-weight: 600;
    color: #131415;
   
}

 .notification_desc:hover{
    color: #111!important;
  
   
       background-color: #d7e4ef;
}
#profile-pic {
		border-radius: 50px;
 
  float: center;
  /*margin-right: 20px;
  /* If you want to crop the image to a certain size, use something like this */
  object-fit: cover;
  width: 50px;
  height: 50px;
}    
    

.inner_content_w3_agile_info {
	margin-top:3.5em;
	margin-left: 3em;
}
.inner_content_w3_agile_info.two_in {
    margin-top: 4em;
}
.owl-carousel.home-slider .slider-item .slider-text h1 {
          font-size: 8vw;
          color: #fff;
          line-height: 1;
          font-weight: 600;
          font-family: "Amatic SC", cursive; }
	</style>
	
  </head>
    
  <body class="goto-here">
      
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
            
	      <div class="collapse navbar-collapse" id="ftco-nav">
              
	        <ul class="navbar-nav ml-auto">
                
	          <li class="nav-item  cta cta-colored"><a href="supplier.php" class="nav-link">Home</a></li>
	         
			  <li class="nav-item"><a href="req_crop.html" class="nav-link">Request Crops</a></li>
              <li class="nav-item"><a href="view_crop_check.php" class="nav-link">View Crops</a></li>
            <?php
                
                $_SESSION['n_count']=0;
                $b= "SELECT * FROM notification where receiver='$u' AND status='Unread'";
                
               
	            $sql1=mysqli_query($conn,$b);
                 while($row=mysqli_fetch_assoc($sql1))
                    $_SESSION['n_count']++;
            ?>
			  <li class="nav-item dropdown-tog notification"><a href="#" class="nav-link"data-toggle="dropdown"><i class="icon-bell-o" style="font-size: 20px"></i><?php if($_SESSION['n_count']!=0){ ?><span class="badge blue" style="padding-top: 2.5px"><?php echo $_SESSION['n_count']; ?></span></a>
                 <div class="nav-link dropdown-menu" style="padding-left: 0px;padding-bottom: 0px;padding-right: 0px;left: -100%; top: 100%;width: 260px" >
                     
                     <a class="dropdown-item">
												<div class="notification_header">
													<h3>Your Notifications</h3>
												</div>
						</a>					 
                                    <hr>
        <?php
                $b= "SELECT * FROM notification where receiver='$u' AND status='Unread' limit 2";
                
               
	            $sql1=mysqli_query($conn,$b);
                while($row=mysqli_fetch_assoc($sql1))
                    
                {$n=$row["sender_name"];
                    if($n!= "Farming Assistant Help Center"){
                    $n= $row["sender_name"];
                    $a="SELECT * FROM register where email='$n'";
	                        $b=mysqli_query($conn,$a);
                         $row1=mysqli_fetch_assoc($b);
                            $n= $row1["name"];}
      ?>
                 <a class="dropdown-item">    <a href="notification.php?id=<?php echo $row["id"];  ?>">
												
											   <div class="notification_desc" style="margin-left: 0px">
                                                   <div class="desc" style="margin-left: 10px">
											     <h6><?php echo $row["notif_type"];  ?></h6>
												<p><?php echo $n;  ?></p>
												 <?php 
                    $time_ago = $row["date_time"];
                    $time = timeAgo($time_ago);  ?>  
                                                    
												<p><span><?php echo $time;  ?></span></p>
												</div>
                                                 
												
                                                </div>
                          </a> </a><?php  }?>     
                                         
                    <a class="dropdown-item" style="padding-bottom: 0px">
											<div class="notification_bottom">
													<a href="notification_all.php?rec=<?php echo $u;  ?>">See all notifications</a>
												</div> 
                     </a>
                         <?php  }?>     
					 						
                      
                 </div>  
                </li>
               <?php
      
                $a="SELECT * FROM register where email='$u'";
	            $sql=mysqli_query($conn,$a);
                while($row1=mysqli_fetch_assoc($sql))
                {
      ?>
                
				       <ul class="top_dp_agile ">
									
										 <a class="nav-link dropdown-tog" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo $row1["image"];  ?>" id="profile-pic" alt=""> </span> 
											</div>	
										</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown04" style="left: -120%; top: 100%;width: 180px" >
              	                             <a class="dropdown-item" href="settings.php"><i class="fa fa-gear"></i> Account Settings</a> 
              	                              <a class="dropdown-item"  href="my-orders.php?t=<?php echo $row1["type"]; ?>"><i class="fa fa-book"></i> My orders</a>
                                            <a class="dropdown-item"  href="notification_all.php?rec=<?php echo $u ?>"><i class="fa fa-bell"></i> My notifications</a>
                                              <a class="dropdown-item" href="complaint.php"><i class="fa fa-pencil"></i> Complaint</a> 
              	                             <a class="dropdown-item" href="feedback-logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                
                                        </div> 
						</ul>
				
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bg_6.jpg);">
	
			  <div class="overlay"></div>
			         <div class="container">
								<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
				  
								  <div class="col-sm-12 ftco-animate text-center">
									<h1 >Welcome <?php echo $row1["name"]; } ?>!!! </h1>
									<h2 class="subheading mb-4">Buy fresh vegetables &amp; fruits directly from farmers</h2>
                                    <p><a href="req_crop.html" class="btn btn-primary">Request now</a></p>
									<!-- <p><a href="#" class="btn btn-primary">View Details</a></p> -->
								  </div>
                                </div>
                    </div>
            </div>

	      <div class="slider-item" style="background-image: url(images/bg_5.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Fresh vegetables and friuts at low rates</h1>
	              <h2 class="subheading mb-4">Get the best crops</h2>
	              <p><a href="req_crop.html" class="btn btn-primary">Contact farmer now</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>
		
	          	<!-- <div class="ml-md-0">
		            <h2 class="mb-4">Welcome to Farm Assistant- an eCommerce and an Ultimate Farming Assistant website</h2>
	            </div> -->
	         
						
	<div class="clearfix"></div>
	     
 

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Contact & Complaint</h3>
                <span>Quick clarifications</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Farm Assistant</h2>
										<p>Protect the health of every home</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Vegetables</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Fruits</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Spices</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Dried</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    
		


    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
		
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
         <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Farm Assistant</h2>
              <p>An eCommerce and an Ultimate Farming Assistant website for farmers, customers as well as wholesalers.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Stans House, Street 12, Eranakulam</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9876543210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@farmassistant.com</span></a></li>
	              </ul>
	            </div>
            </div>
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