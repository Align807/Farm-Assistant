<!DOCTYPE html>
<html lang="en">
  <head>
    <title>All notifications</title>
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
	<style>
 p span {
    background: #007ee5;
    color: #fff;
    padding: 10px 11px;
    font-size: 0.85em;
    border-radius: 11px;
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
 tr:hover td{
	background: #f5f5f5;
}
           tr td {
    cursor: pointer;
}
	</style>
	
  </head>
  <body class="goto-here">
		
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      
	    </div>
	  </nav>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');" >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          
            <h1 class="mb-0 bread">All Notifications</h1>
          </div>
        </div>
      </div>
    </div>

    
          
     <br><br>
      <?php
  include('connection.php');
      include ('function.php');
  
  session_start();
?>
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				
	    				<table class="table">
						   
						    <tbody>
                             <?php
                                $u=$_GET['rec'];
                                 $b= "SELECT * FROM notification where receiver='$u' ";
                
               $n=0;
	            $sql1=mysqli_query($conn,$b);
                 while($row=mysqli_fetch_assoc($sql1))
                    $n++;
                                if($n==0) {
                                ?>
                                    
                                    <tr class="text-center" >
						      
						       
                        <td class="product-name">
						        	<h1><i>No Notifications yet</i></h1>
						        	
						        </td>
						       
						      
						        
						      
						      </tr><!-- END TR-->
                               <?php  } if($n!=0) {
                
                $a="SELECT * FROM notification where receiver = '$u' ORDER BY date_time desc";
                               
              $sql=mysqli_query($conn,$a);
            

                while($row=mysqli_fetch_array($sql))
                { $n= $row["sender_name"];
                    if($row["sender_name"]!= "Farming Assistant Help Center"){
                    $u= $row["sender_name"];
                    $a="SELECT * FROM register where email='$u'";
	                        $b=mysqli_query($conn,$a);
                         $row1=mysqli_fetch_assoc($b);
                            $n= $row1["name"];}
      ?>
						      <tr class="text-center" onClick="location.href=notification.php?id=<?php echo $row["id"]; ?>">
						      
						       
                           <td class="image-prod"><div class="img" style="background-image:url(<?php echo $row["pic"]; ?>);"></div></td>
						        <td class="price"><?php echo $n; ?> </td>
						        <td class="product-name">
						        	<h3><?php echo $row["notif_type"]; ?></h3>
						        	
						        </td>
						        
						     
						        
						        <td class="quantity">
						        	
                                    <p>Status: <?php echo $row["status"]; ?></p>
                                    
                                    
					          </td>
                                    <td class="quantity">
						        	<?php 
                    $time_ago = $row["date_time"];
                    $time = timeAgo($time_ago);  ?>  
                                                    
												<p><span><?php echo $time;  ?></span></p>
                                 
                                    
                                    
					          </td>
						        
						      
						      </tr><!-- END TR-->
                              
						     <?php
                  
                }}
                  
                  ?>  
						    </tbody>
                            
						  </table>
					  </div>
    			</div>
    		</div>
			

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
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">Stans Building, Kochi, Eranakulam</span></li>
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
 
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

 
    
  </body>
</html>