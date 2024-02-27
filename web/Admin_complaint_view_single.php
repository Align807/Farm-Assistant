<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin: Complaint Full View</title>
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
    <style>
      .ftco-section {
  padding: 5em 0;
  position: relative; 
}


<?php
   include("connection.php");
 
     session_start();
   
     $u=$_SESSION['u'];
       
    ?>


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
/* wrapper1 */
.wrapper1{
  border:5px solid #02335c;
  max-width: 1500px;
  width: 100%;
  background: #fff;
  margin: 0px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 20px;
}

.wrapper1 .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: black;
  text-transform: uppercase;
  text-align: left;
}

.wrapper1 .form{
  width: 100%;
}

.wrapper1 .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper1 .form .inputfield label{
   width: 200px;
   color:black;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper1 .form .inputfield .input,
.wrapper1 .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 12px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}



.wrapper1 .form .inputfield .input:focus,
.wrapper1 .form .inputfield .textarea:focus,
.wrapper1 .form .inputfield .custom_select select:focus{
  border: 1px solid #020100;
}

.wrapper1 .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper1 .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  rgb(36, 211, 36);
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper1 .form .inputfield .btn:hover{
  background: rgb(36, 211, 36);
}

.ftco-navbar-light.scrolled .nav-item.cta > a {
    color: #fff !important;
    background: rgb(16, 118, 202);
    border: none !important;
}

.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 11px;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 1 !important;
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


  /* .pre{

  } */

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

.btn.btn-primary {
    background: blue;
    border: 1px solid darkblue;
    color: #fff;
}

.btn.btn-primary:hover {
    background: black;
    border: 1px solid black;
    color: #fff;
}

/* .btn .btn-primary1{
  background: red;
    border: 1px solid maroon;
    color: #fff;
} */
#pic {
		border: 50px;
  border: 1px solid #777676ab;
  float: left;
  margin-right: 10px;
  /* If you want to crop the image to a certain size, use something like this */
  object-fit: cover;
  width: 100px;
  height: 100px;
}
.w3-main {
    width: 30%;
    margin: 0 auto;
}
.form-w3l {
    text-align: center;
}
.pl-md-5, .px-md-5 {
    padding-left: 10px !important;
}
    </style>
    
  </head>
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand"  href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      
	    </div>
	  </nav>
    <!-- END nav -->

      
   <?php 
        $compt=$_GET['cpt_id'];
        
    ?>

    <section class="ftco-section">
    <form action="msg_upload.php" method="post" class="billing-form">
    	<div class="container">
                
      <?php
                $sql2=" UPDATE complaint SET Status = 'Read' WHERE comp_id= $compt ";
                mysqli_query($conn,$sql2);
                
                $sql= "SELECT * FROM complaint WHERE comp_id = $compt";
                
                $a=mysqli_query($conn,$sql);

                $row=mysqli_fetch_array($a)
               
                ?>
    		<div class="row">
    			<div class="col-lg-2 mb-5 ftco-animate">
    				<a href="<?php echo $row['image']; ?>" class="image-popup"><img src="<?php echo $row['image']; ?>" id="pic" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
                     
    				<h3><?php echo $row['name']; ?></h3>
    				
            <div class="rating d-flex"></div>
            <p class="text-left mr-4" style="color: #000;">Email: <span style="color: gray;"><?php echo $row["user_email"]; ?></span>
            </p>
            
            <p class="text-left" style="color: #000;">Category: <span style="color: gray;"><?php echo $row["user_type"]; ?></span>
            </p>
            </div>
            <br>
           
                <p class="mr-2" name="cpidM" style="color: #000;">Complaint ID: <span style="color: gray;"><?php echo $compt; ?></span></p>
             
              <p class="mr-2" style="color: #000;">Complaint Subject: <span style="color: gray;"><?php echo $row["complaint_head"]; ?></span></p>
            
          <br><br>
          <p><?php echo $row["complaint"]; ?></p>    
          <!-- <pre style="font-family:verdana; font-size:15px; color:#777;"> -->
          
            <!-- echo wordwrap($row["complaint"] ,120,"<br>\n");  -->
             


            <!-- <p>Experienced two week delay in the delivery of my order with order id 5567. Note the same and give quick delivery since the crops may get rotten within days.
            </p> -->
            <br>
            <br>
							<div class="w-100"></div>
<!-- 			
        <label ><b>Status &nbsp;</b></label>
        <div class="custom_select">
                <select id="type" name="statM" required>
                    <option value="Unread">Unread</option>
                     <option value="Read">Read</option>
                    <option value="Pending">Pending</option>
                    <option value="Solved">Solved</option>
                             
                </select>
                </div> -->
               
                </div>
                <!-- <div style="padding-left:0px " class="form-group">
              
                    <input type="submit" style=" background: rgb(230, 0, 0); border: 1px solid maroon;" value="Mark as Unread" class="btn btn-primary py-3 px-5 ; btn btn-primary:hover ">
                    <input type="submit" style=" background: 	rgb(0, 230, 184); border: 1px solid blue; margin-left:640px"  value="Add to Pending Tasks" class="btn btn-primary  py-3 px-5">
              
                   
                    </div> -->
      
                    <!-- <div style="padding-right:0px ;display: inline;" class="form-group"> -->
                    <!-- <input type="Upload" value="Post Message" class="btn btn-primary py-3 px-5" style="background:rgb(0, 60, 255);"> -->
                   
                
                    <!-- </div> 
       -->
          				
			
			  
    			<!-- </div> -->
            <br>
            <h3 class="mb-4 billing-heading" style="text-align: center;">Leave A Message</h3>
            <!-- <form action="msg_upload.php" method="post" class="billing-form"> -->
            <div class="wrapper1" style="background:#007ee528!important;">
          
 
              <div class="form">
                  <form action="msg_upload.php" method="post" enctype="multipart/form-data">
                  
                  <div class="inputfield">
                    <label><b>Name</b></label>
                    <!-- <input type="text" placeholder="" name="name" id="name"class="input"  required> -->
                    <input type="text" class="form-control" name="nameM" value="<?php echo  $row['name']; ?>" placeholder=""readonly>
                   </div> 
                 
                 <div class="inputfield">
                  <label><b>Email</b></label>
                  <!-- <input type="text" placeholder="" name="email" id="email"class="input"  required> -->
                  <input type="text" class="form-control" name="emailM" value="<?php echo $row["user_email"]; ?>" placeholder=""readonly>
                 </div> 

                 <div class="inputfield">
                  <label><b>Complaint ID</b></label>
                  <!-- <input type="text" placeholder="" name="email" id="email"class="input"  required> -->
                  <input type="text" class="form-control" name="cpidM" value="<?php echo $compt; ?>" placeholder=""readonly>
                 </div> 
                
                 <div class="inputfield">
                  
              <label ><b> Message</b></label>
              <textarea name="msgM" id="description" cols="50" rows="5" class="form-control" required></textarea>
              </div>
                
                 
              
                
          
                  
                
                  <div style="padding-left:240px" class="form-group">
                    <!-- <input type="Upload" value="Post Message" class="btn btn-primary py-3 px-5" style="background:rgb(0, 60, 255);"> -->
                    <input type="submit"  value="Post Message" class="btn btn-primary py-3 px-5">
                    </div>
               
                 
            
          
                </form>         
              </div>
             </div>
    		</div>
    	
    </section>
      
   
<hr>
   
    <footer class="ftco-footer ftco-section">
      
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
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
 
  <script src="js/scrollax.min.js"></script>
 
 
  <script src="js/main.js"></script>
<!--===============================================================================================-->
	
  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>