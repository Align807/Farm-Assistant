<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin: User Category</title>
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
      .ftco-section {
  padding: 5em 0;
  position: relative; 
}


<?php
   include("connection.php");
 
     session_start();
   
     $u=$_SESSION['u'];
       
    ?>

    
element.style {
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


  .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 11px;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 1 !important; }
    
        .ftco-navbar-light .navbar-nav > .nav-item.cta > a {
            color: #fff;}

a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color:rgb(16, 118, 202);
    
}
.categories li a, .sidelink li a {
    display: block;
    width: 370px;
    padding-left: 20px;
    color: #000000;
}
.a1:hover{
    text-decoration: none;
    /* color: rgb(16, 118, 202); */
    background-color: rgb(0 123 255 / 31%);
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
  width: 70%;
  
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
        .span{
            color: black;
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

#profile-pic {
		border: 50px;
  border: 1px solid #777676ab;
  float: left;
  margin-right: 10px;
  /* If you want to crop the image to a certain size, use something like this */
  object-fit: cover;
  width: 170px;
  height: 170px;
}
.w3-main {
    width: 30%;
    margin: 0 auto;
}
.form-w3l {
    text-align: center;
	
	
}
    </style>
    
  </head>
  <body class="goto-here">
 

		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="padding-left: 20px; padding-right: 20px">
	   
	      <a class="navbar-brand"  href="#">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	   
	  </nav>
    <!-- END nav -->

    
    <div class="hero-wrap hero-bread" style="background-image: url('images/progress.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="admin/admin-main-page.html">ADMIN</a></span></p> 
            <!-- <span>Complaint</span></p> -->
            <h1 class="mb-0 bread">user Categories</h1>
          </div>
        </div>
      </div>
    </div>


   

   
   <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
          <form action="/action_page.php" class="billing-form">
            <br>
            <div class="row align-items-end">
            <?php
                include('connection.php');
                $a="SELECT(SELECT COUNT(type) FROM register WHERE type='Farmer') AS farmer, (SELECT COUNT(type) FROM register WHERE type='Supplier') AS supplier, (SELECT COUNT(type) FROM register WHERE type='Customer') AS customer FROM register ORDER BY type LIMIT 1";
                $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($sql))
                {
            ?>
      
              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group" >
                    <div class="col-lg-20 sidebar ftco-animate">
            
                      <div class="sidebar-box ftco-animate"style="padding-left: 20px;">
                        <!-- <h3 class="heading">Categories</h3> -->
                        <ul class="categories ">
                          <li><a class="a1" href="user_table.php?type=Farmer">Farmers <span style="color: black">(<?php echo $row["farmer"]; ?>)</span></a></li>
                          <li><a class="a1" href="user_table.php?type=Supplier">Suppliers <span style="color: black">(<?php echo $row["supplier"]; ?>)</span></a></li>
                          <li><a class="a1" href="user_table.php?type=Customer">Customers <span style="color: black">(<?php echo $row["customer"];} ?>)</span></a></li>
                        </ul>
                      </div>
                     </div>
                </div>
                </div>
              </div>
<!--              
              <div class="w-100"></div>
              
              <div class="w-100"></div>
              
              <div class="w-100"></div> -->
              <!-- <div class="col-md-12">
               
                <div class="form-group">
                  <input type="text"   class="form-control" placeholder="Your Email">
                 </div>
              </div> -->
              <!-- <div class="col-md-12">
                <div class="form-group">
                                                              
                  <div class="select-wrap"> 
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                     
                                
                                <select name="" id="" class="form-control" required >   
                                  <option value="">Your UserType</option>
                                  <option value="Farmer">Farmer</option>
                                  <option value="Customer">Customer</option>
                                  <option value="Supplier">Supplier</option> 
                                  </select>
                  </div>
               
               </div> 

              </div> -->
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="country">State / Country</label>
                  <div class="select-wrap">
                  
                    <select name="" id="" class="form-control">
                      <option value="">France</option>
                      <option value="">Italy</option>
                      <option value="">Philippines</option>
                      <option value="">South Korea</option>
                      <option value="">Hongkong</option>
                      <option value="">Japan</option>
                    </select>
                  </div>
                </div>
              </div> -->
              <div class="w-100"></div>
        <!-- <div class="col-md-12">
          
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject of your Complaint">
          </div>
          </div> -->
          <!-- <div class="col-md-12">
            <div class="form-group">
       
        <textarea name="" id="" cols="50" rows="5" class="form-control" placeholder="Detailed description of the Complaint" required></textarea>
        </div>
          </div> -->
        
      <!-- <div class="w-100"></div> -->
      <!-- <br>  -->
      
      
             
      </div>
      <!-- <div class="form-group" style="padding-left: 8em;">
        <input type="submit" value="SEND COMPLAINT" class="btn btn-primary py-3 px-5">
      </div> -->
      
          </form><!-- END -->
        </div>
        
      </div>

      
      <!-- <div class="col-lg-4 sidebar ftco-animate"> -->
            
        



    </div>
  </section> 

	
    
  <!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	

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