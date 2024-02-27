<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crop Data</title>
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
   <?php
      include("connection.php");
      session_start();
      $id= $_GET['id'];
      $sql= "select * from crop_data where c_id= $id";
      $a=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($a);
      ?>

.ftco-navbar-light {
  background: #007ee5 !important;
  z-index: 3;
  padding: 0; }
.ftco-navbar-light .navbar-brand {
    color: darkblue;
}
  .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 11px;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    color: #000;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 1 !important; }
    .ftco-navbar-light .navbar-nav > .nav-item.cta > a {
    color: #fff;
    background: darkblue;
}
        
.ftco-navbar-light.scrolled .nav-item.cta > a {
    color: #fff !important;
    background: rgb(16, 118, 202);
    border: none !important;
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
    .mouse-icon {
  width: 60px;
  height: 60px;
  border: 1px solid rgba(255, 255, 255, 0.7);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  background: #063f6e;
  cursor: pointer;
  position: relative;
  text-align: center;
  margin: 0 auto;
  display: block; }
  a.hover {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: rgb(16, 118, 202) ;
}
    
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}
.wrapper{
  border:5px solid #063f6e;
  max-width: 1000px;
  width: 100%;
  background: #fff;
  margin: 0px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: black;
  text-transform: uppercase;
  text-align: left;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 500px;
   color:black;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 300px;
  resize: none;
}

.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #020100;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}


.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

  .wrap-about .heading-section-bold h2 {
    font-size: 40px;
    font-weight: 600;
    color: #020202; }
    .wrap-about .heading-section-bold h3 {
    font-size: 40px;
    font-weight: 600;
    color: #fcfcfc; 
    text-align: center;}
    .wrap-about {
  position: relative; }
  @media (min-width: 992px) {
    .wrap-aboutaa {
      padding-left: 100em; } }
  @media (min-width: 768px) {
    .wrap-aboutaa {
      padding-left: 45em; } }
     
      .img-fluid {
  width: 1000px;
  height: 5000px;
  padding-left: 10em;
   }

   @media (max-width:768px){

h3.icon-subheading {
  font-size: 25px;
}
.row1 {
  margin-right: 0;
  margin-left: 10px;
}
.icon-box {
  margin: 0;
}
}
    </style>
  </head>
    
  <body class="goto-here">
      
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Farm Assistant</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	       <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                 
	         
	         <li class="nav-item"><a href="crop-data-view.php" class="nav-link">Home</a></li>
         	

			 <li class="nav-item"><a href="crop-data-up.html" class="nav-link">Upload Crop Data</a></li>
            <li class="nav-item  cta cta-colored"><a href="crop-data-update.php" class="nav-link">Update Crop Data</a></li>
           			      
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
	<br><br>
     
      
 <div class="wrapper" style="background: #f7f6f2 !important;">
 <h3 class="mb-4 billing-heading" style="text-align: center;"><?php echo $row["c_name"]; ?></h3>
    
 
              <div class="form">
                  <form action="crop-update.php?id=<?php echo $row["c_id"]; ?>" method="post" enctype="multipart/form-data">
                      <div class="col">
                     
                   <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
					<div class="w3-main">
							<div class="form-w3l" style="padding-left: 50px;">
								
								<img src="<?php echo $row["image"]; ?>" id="profile-pic" alt="Colorlib Template">
								
					
								</div>
					
				<div style="padding-left: 40px"><input type="file" name="image" id="my-file" />
					</div>
                          </div>
                          <br>
                  <div class="inputfield">
                    
                    <input type="text" placeholder="" name="heading1" id="name"class="input" value="<?php echo $row["head1"]; ?>" required>
                   </div> 
                  <div class="inputfield">
                  
             
             <textarea name="des1" id="description" rows="6" class="form-control" required><?php echo $row["desc1"]; ?></textarea>
              </div>
                 <div class="inputfield">
               
                  <input type="text " placeholder="" name="heading2" id="email"class="input" value="<?php echo $row["head2"]; ?>" required>
                 </div> 
                 <div class="inputfield">
                  
             
               <textarea name="des2" id="description" rows="10" class="form-control" required><?php echo $row["desc2"]; ?></textarea>
              </div>
                 
               <div class="inputfield">
                
                  <input type="text" placeholder="" name="heading3" id="email"class="input" value="<?php echo $row["head3"]; ?>" required>
                 </div>  
            <div class="inputfield">
           
              <textarea name="des3" id="description" rows="10" class="form-control" required><?php echo $row["desc3"]; ?></textarea>
              </div>
               <div class="inputfield">
              
                  <input type="text" placeholder="" name="heading4" id="email"class="input" value="<?php echo $row["head4"]; ?>" required>
                 </div>        
                       <div class="inputfield">
                  
              
               <textarea name="des4" id="description" rows="6" class="form-control" required><?php echo $row["desc4"]; ?></textarea>
                      </div>
  
                        <div style="padding-left:390px" class="form-group">
          <button class="btn btn-primary" style="background:rgb(0, 60, 255); ">
            Update
          </button>
				  </div>  

                          
                      </div>
                 
            
          
                </form>         
              </div>
      </div>
   

    
<br><br>
<hr>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	
<!--copy rights end here-->
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
  
  
  <script src="js/main.js"></script>
      
  <script>
	document.getElementById("my-file").onchange = function() {
if (this.files && this.files[0]) {
var reader = new FileReader();
reader.onload = function(e) {
  // e.target.result is a base64-encoded url that contains the image data
  document.getElementById('profile-pic').setAttribute('src', e.target.result);
};
reader.readAsDataURL(this.files[0]);
}
}</script>
 
    
  </body>
</html>