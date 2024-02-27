<!DOCTYPE html>
<html lang="en">
<head>
	<title>Settings- My account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
   

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	

    

    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

   <?php
     include('connection.php');
      session_start();
     
    ?>  
     
<!--===============================================================================================-->
<style>
    body{
        text-decoration: none;
        outline: none;
    }
	#profile-pic {
		border-radius: 50px;
  border: 2px solid #73AD21;
  float: center;
  margin-right: 20px;
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

</style>
</head>
<body>
	<?php
     
      $u=$_SESSION['u'];
                $a="SELECT * FROM register where email='$u'";
	            $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($sql))
                {
      ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" >
				
                    <form action="update.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
                        
                        
					<a href="goback.php"><span class="close">&times;</span></a>
                        
                        
					<span class="login100-form-title p-b-49">
						Account Settings
					</span>
					<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
					<div class="w3-main">
							<div class="form-w3l">
                                <a href="<?php echo $row["image"]; ?>" class="image-popup" ><img src="<?php echo $row["image"]; ?> " id="profile-pic"  class="img-fluid" alt="Colorlib Template"></a>
								</div>
					</div>
					<div style="float: right"><input type="file" name="image" id="my-file"/>
					</div>
                    
					<br><br><br>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" value="<?php echo $row["name"]; ?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email id is required">
						<span class="label-input100">Email-id</span>
						<input class="input100" type="text" name="email" value="<?php echo $row["email"]; ?>">
						<span class="focus-input100" data-symbol="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mobile is required">
						<span class="label-input100">Mobile</span>
						<input class="input100" type="text" name="mob" value="<?php echo $row["number"]; ?>">
						<span class="focus-input100" data-symbol="&#x2706;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="psw" value="<?php echo $row["psw"]; ?>">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							     
									<button class="login100-form-btn">
										Update
									</button>
								
							
						</div>
					</div>
				</form >
				<?php
                }
                  
?>	
					
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    
  
  
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
 
  <script src="js/scrollax.min.js"></script>
 
 
  <script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>
	
</body>
</html>