<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<!--<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title> -->
<title>Admin Panel Farming Assistant | Home </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<!-- <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link rel="icon" type="image/png" href="../images/icons/logo.png"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/all-min.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
    
<style>
#profile-pic {
		border-radius: 50px;
 
  float: center;
  /*margin-right: 20px;
  /* If you want to crop the image to a certain size, use something like this */
  object-fit: cover;
  width: 50px;
  height: 50px;
}    
  li.second {
    padding: 0 2em;
}  
</style>
<body>
    
            <?php
      include('../connection.php');
    include "../function.php";
      session_start();
      $u=$_SESSION['u'];
                $a="SELECT * FROM register where email='$u'";
	            $sql=mysqli_query($conn,$a);
                while($r=mysqli_fetch_assoc($sql))
                {
?>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav"style="background: #0071e5bd" >
			<ul id="gn-menu" class="gn-menu-main">
                
            
				<!-- //nav_agile_w3l -->
				<li class="second logo" ><h1><a href="#"><i aria-hidden="true"></i>Farming Assistant </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../<?php echo $r["image"]; } ?>" id="profile-pic" alt=""> </span> 
											</div>	
										</a>
									<ul class="dropdown-menu drp-mnu">
											<li> <a href="../settings.php"><i class="fa fa-user"></i> Account</a>  
											
											<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
             
                                                                       
        <?php
                $b= "SELECT count(*) AS n_count FROM notification where receiver='Admin' AND status='Unread'";
                
               
	            $sql1=mysqli_query($conn,$b);
                
              $row=mysqli_fetch_assoc($sql1);
                    
           
      ?>
                
          	<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i><?php if($row['n_count']!=0){ ?> <span class="badge blue"><?php echo $row['n_count']; } ?></span></a>
										<ul class="dropdown-menu">
                                         
          
											<li>
												<div class="notification_header" style="padding-bottom:0px">
													<h3>Your Notifications</h3><hr>
												</div>
											</li>
                                                                 
  
           
    <?php  if($row['n_count']!=0){
                $b= "SELECT distinct sender_name as sender_name, page, notif_type, date_time, id FROM notification where receiver='Admin' AND status='Unread' limit 2";
                
               
	            $sql1=mysqli_query($conn,$b);
                
                while($row=mysqli_fetch_assoc($sql1))
                    
                { 
                    $u= $row["sender_name"];
                    $a="SELECT * FROM register where email='$u'";
	                        $b=mysqli_query($conn,$a);
                         $row1=mysqli_fetch_assoc($b);
                            $n= $row1["name"];
      ?>
											<li>
                                                
                                                <a href="../notification.php?id=<?php echo $row["id"];  ?>">
												<div class="user_img"><img src="../<?php echo $row1["image"];  ?>" alt=""></div>
											   <div class="notification_desc">
											     <h6><?php echo $row["notif_type"];  ?></h6>
                                                   
                                                   
												<p><?php echo $n;  ?></p>
                                                 <?php 
                    $time_ago = $row["date_time"];
                    $time = timeAgo($time_ago);  ?>  
                                                    
												<p><span><?php echo $time;  ?></span></p>
												</div>
											<div class="clearfix"></div>	
											 </a>
                                               
                                            </li> <?php }} else { ?>	
                                            <li>
                                                
                                              
											   <div class="notification_desc">
											     <h6>No notifications</h6>
                                                                                              
												</div>
											<div class="clearfix"></div>	
											<?php   } ?>	
                                               
                                            </li>
                                             <li>
												<div class="notification_bottom">
													<a href="../notification_all.php?rec=Admin">See all notifications</a>
												</div> 
											</li>	
                                            
											
										</ul>
									</li>
									
						</ul>
				</li>
				
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				       <li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 Pending tasks</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Order delivery</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Complaint fixing</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width: 90%;"></div>
												</div>
											</a></li>
											
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Website maintenance</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											
										</ul>
									</li>	
								</ul>
				</li>
                <li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="../farm_tip_up.html"title="Farming Tip Upload"  ><i class="fa fa-lightbulb-o" aria-hidden="true"></i> </a>
										
									</li>
									
						</ul>
				</li>
				
			<!--	<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>
                
                <li class="second w3l_search" style="padding-top: 10px ">
				 
						<form action="#" method="post" >
							<input type="search" name="search" placeholder="Search here..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>	
				</li>-->
                <div class="clearfix"></div>
			</ul>
              
			<!-- //nav -->
			
		</div>
        <?php
               
                 
                $a="SELECT * FROM register where type !='Admin'";
	            $sql=mysqli_query($conn,$a);
                $s=0;
                while($row=mysqli_fetch_assoc($sql))
	                    $s++;
                $b="SELECT * FROM crop_data";
	            $sql=mysqli_query($conn,$b);
                $d=0;
                while($row=mysqli_fetch_assoc($sql))
	                    $d++;
                $c="SELECT * FROM crop_fc";
				$sql=mysqli_query($conn,$c);
				$e=0;
				while($row=mysqli_fetch_assoc($sql))
				        $e++;
                $c="SELECT * FROM my_order";
				$sql=mysqli_query($conn,$c);
				$o=0;
				while($row=mysqli_fetch_assoc($sql))
				        $o++;
                $c="SELECT * FROM complaint";
				$sql=mysqli_query($conn,$c);
				$c=0;
				while($row=mysqli_fetch_assoc($sql))
				        $c++;
            ?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div class="agile_top_w3_grids">
					          <ul class="ca-menu">
                                    <li>
										<a href="../user_category.php">
										  <i class="fa fa-users" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main"><?php echo $s; ?></h4>
												<h3 class="ca-sub">Users</h3>
											</div>
										</a>
									</li>
                                  	<li>
										<a href="../crop-products.php">
											<i class="fas fa-seedling"></i>
											<div class="ca-content">
											<h4 class="ca-main one"><?php echo $e; ?></h4>
												<h3 class="ca-sub one">Crop Products</h3>
											</div>
										</a>
									</li>
									
									<li>
										<a href="../Admin-orders.php">
											
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content" style="color: red">
												<h4 class="ca-main two" ><?php echo $o ?></h4>
												<h3 class="ca-sub two">Orders</h3>
											</div>
										</a>
									</li>
								
								  
										<li>
										<a href="../Admin_complaint_category.php">
                                            <i class="fa fa-building-o" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three"><?php echo $c; ?></h4>
												<h3 class="ca-sub three">Complaints</h3>
											</div>
										</a>
									</li>
                                     <li>
										<a href="../crop-data-view.php">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four"><?php echo $d ?></h4>
												<h3 class="ca-sub four">Crop Data</h3>
											</div>
										</a>
									</li>
									<div class="clearfix"></div>
								</ul>
					   </div>
					 <!-- //agile_top_w3_grids-->
						<!-- /agile_top_w3_post_sections
							<div class="agile_top_w3_post_sections">
							       <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Latest Report</h3>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">65,800,587 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">20 </p><span class="year">This Year</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">2,690 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">40 </p><span class="year">This Month</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">24,660 </h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">30 </p><span class="year">This Week</span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">1,204</h4><span class="year">Total Companies</span></div>
													<div class="year-info"><p class="text-no">10 </p><span class="year">This Day</span></div>
													<div class="clearfix"></div>
												</div>
											  
											</div>
									   </div>
									    
							     </div>-->
                        <div class="prograc-blocks_agileits">
						 <?php
               
                 
                $c="SELECT ROUND(AVG(quality),0) AS AVG, ROUND(AVG(trade),0) AS AVG1, ROUND(AVG(usability),0) AS AVG2, ROUND(AVG(overall_sat),0) AS AVG3 FROM feedback";
	            $sql=mysqli_query($conn,$c);
               
               $row=mysqli_fetch_assoc($sql)
	                  
            ?>		
								
								 <div class="col-md-6 bars_agileits agile_info_shadow">
								    <h3 class="w3_inner_tittle two">Customer Experience Statistics</h3>
										<div class='bar_group'>
                                            
												<div class='bar_group__bar thin'  label='Quality' show_values='true' tooltip='true' value='<?php echo $row['AVG']; ?>'></div>
												<div class='bar_group__bar thin' label='Trade' show_values='true' tooltip='true' value='<?php echo $row['AVG1']; ?>'></div>
												<div class='bar_group__bar thin' label='Usability' show_values='true' tooltip='true'  value='<?php echo $row['AVG2']; ?>'></div>
												<div class='bar_group__bar thin' label='Overall Satisfaction' show_values='true' tooltip='true' value='<?php echo $row['AVG3']; ?>'></div>
                                               
                                        </div>
								</div>
							<!--	<div class="col-md-6 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Recent Followers</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>#</th>
															  <th>Project</th>
															  <th>Manager</th>                                   
																								
															  <th>Status</th>
															  <th>Progress</th>
														  </tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>1</td>
														  <td>Face book</td>
														  <td>Malorum</td>                                 
																					 
														  <td><span class="label label-danger">in progress</span></td>
														  <td><span class="badge badge-info">50%</span></td>
													  </tr>
													  <tr>
														  <td>2</td>
														  <td>Twitter</td>
														  <td>Evan</td>                               
																						  
														  <td><span class="label label-success">completed</span></td>
														  <td><span class="badge badge-success">100%</span></td>
													  </tr>
													  <tr>
														  <td>3</td>
														  <td>Google</td>
														  <td>John</td>                                
														  
														  <td><span class="label label-warning">in progress</span></td>
														  <td><span class="badge badge-warning">75%</span></td>
													  </tr>
													  <tr>
														  <td>4</td>
														  <td>LinkedIn</td>
														  <td>Danial</td>                                 
																					 
														  <td><span class="label label-info">in progress</span></td>
														  <td><span class="badge badge-info">65%</span></td>
													  </tr>
													  <tr>
														  <td>5</td>
														  <td>Tumblr</td>
														  <td>David</td>                                
																						 
														  <td><span class="label label-warning">in progress</span></td>
														  <td><span class="badge badge-danger">95%</span></td>
													  </tr>
													  <tr>
														  <td>6</td>
														  <td>Tesla</td>
														  <td>Mickey</td>                                  
																					 
														  <td><span class="label label-info">in progress</span></td>
														  <td><span class="badge badge-success">95%</span></td>
													  </tr>
												  </tbody>
											  </table>
											</div>
										</div>											
								</div>
									 <div class="clearfix"></div>
							</div>-->
							<div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
										    <div class="img_wthee_post1">
											   <h3 class="w3_inner_tittle"> Flip Clock</h3>
										       	<div class="main-example">
													<div class="clock"></div>
													<div class="message"></div>
												</div>
											</div>
							 </div>
								       <div class="clearfix"></div>	   
						<!-- //agile_top_w3_post_sections-->
							<!-- /w3ls_agile_circle_progress
							<div class="w3ls_agile_cylinder chart agile_info_shadow">
							<h3 class="w3_inner_tittle two"> Cylinder chart</h3>
							
									 <div id="chartdiv"></div>
										
								
							</div>
						<!-- /w3ls_agile_circle_progress-->
						<!-- /chart_agile-->
						 
						  <!-- /w3ls_agile_circle_progress-->
							<div class="w3ls_agile_circle_progress agile_info_shadow">
							
								<div class="cir_agile_info ">
								<h3 class="w3_inner_tittle">Website Maintenance Progress</h3>
									  <div class="skill-grids">
											<div class="skills-grid text-center">
												<div class="circle" id="circles-1" value="45"></div>
												<p>BACK END</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-2" value="70"></div>
												<p>CONTENTS</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-3" value="60"></div>
												
												<p>IMAGES</p>
											</div>
											<div class="skills-grid text-center">
												<div class="circle" id="circles-4" value="80"></div>
												<p>FRONT END</p>
											</div>
												
								
				
										 <div class="clearfix"></div>
										
								</div>
							</div>
						</div>
						<!-- /w3ls_agile_circle_progress-->
						 <!--/prograc-blocks_agileits   DAILY sales  ---------------------------------------->
							

							  <!--//prograc-blocks_agileits-->
						<!-- /bottom_agileits_grids
						<div class="bottom_agileits_grids">
						<div class="col-md-4 profile-main">
						    <div class="profile_bg_agile">
								<div class="profile-pic wthree">
									<h2>Bason Durel</h2>
									<img src="images/profile.jpg" alt="Image">
									<p>Web Designer</p>
								</div>
								<div class="profile-ser">
										<div class="follow-grids-agileits-w3layouts">
											<div class="profile-ser-grids">
												<h3>Followers</h3>
												<h4>2486</h4>
											</div>
											<div class="profile-ser-grids agileinfo">
												<h3>Following</h3>
												<h4>1582</h4>
											</div>
											<div class="profile-ser-grids no-border">
												<h3>Tweets</h3>
												<h4>1468</h4>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l_social_icons w3l_social_icons1">
											<ul>
												<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											</ul>
										</div>

						        </div>
								</div>
					       </div>
							<div class="col-md-8 chart_agile agile_info_shadow">
							 <h3 class="w3_inner_tittle two">Stacked Bar Chart</h3>
							    <div id="chartdiv1"></div>	
							</div>
											
						
							 <div class="clearfix"></div>
						</div>-->
						<!-- //bottom_agileits_grids-->
												<!-- /weather_w3_agile_info-->
						<div class="weather_w3_agile_info agile_info_shadow">
						  <div class="weather_w3_inner_info">
						      
							     <div class="over_lay_agile">
								  <h3 class="w3_inner_tittle">Weather Report</h3>
						       	  <ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THU</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="cloudy" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SAT</h4>
											<h5>15 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="fog" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SUN</h4>
											<h5>11 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								</div>
							</div>	
						</div>
						<!-- //weather_w3_agile_info-->
						<!-- /social_media
						  <div class="social_media_w3ls">
						 
						      <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									   <li>Facebook</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									<!-- <div class="col-md-4 agile_w3l_social_media_text_img"> 
									    <img src="images/admin.jpg" alt="">
									 </div> 
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Hurisa Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									   <li>Twitter</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a1.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Jasmin Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									   <li>Google+</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a2.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>John Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile dribble">
							  
							     <ul class="icon_w3_info">
									  <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									   <li>Dribbble</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a4.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Honey Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>

                              </div>
							  <div class="clearfix"></div>
													
						</div>
						 social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Farm Assistant. All Rights Reserved | Design by A3F creations </p>
</div>	
<!--copy rights end here
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
				<!-- Chart code -->
	 <script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [{
        "country": "USA",
        "visits": 4025,
        "color": "#FF0F00"
    }, {
        "country": "China",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Japan",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Germany",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "UK",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "France",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "India",
        "visits": 984,
        "color": "#04D215"
    }, {
        "country": "Spain",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Netherlands",
        "visits": 665,
        "color": "#0D52D1"
    }, {
        "country": "Russia",
        "visits": 580,
        "color": "#2A0CD0"
    }, {
        "country": "South Korea",
        "visits": 443,
        "color": "#8A0CCF"
    }, {
        "country": "Canada",
        "visits": 441,
        "color": "#CD0D74"
    }, {
        "country": "Brazil",
        "visits": 395,
        "color": "#754DEB"
    }, {
        "country": "Italy",
        "visits": 386,
        "color": "#DDDDDD"
    }, {
        "country": "Taiwan",
        "visits": 338,
        "color": "#333333"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "visits"
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
    	"enabled": true
     }

}, 0);
</script>


	<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
                                 var percent= [45, 78, 56, 90];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
                                   // var per = document.getElementById('circles-' + i).value,
                                    
										percentage = percent[i-1];
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>