
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Order Details</title>
  
   
    	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
 <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
 </head>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

 body {
     background-color: #eeeeee;
     font-family: 'Open Sans', serif
 }

 .container {
     margin-top: 20px;
     margin-bottom: 100px;
      margin-left: 100px;
      margin-right: 100px;
 }

 .card {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.1);
     border-radius: 0.10rem
 }

 .card-header:first-child {
     border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
 }

 .card-header {
     padding: 0.75rem 1.25rem;
     margin-bottom: 0;
     background-color: #fff;
     border-bottom: 1px solid rgba(0, 0, 0, 0.1)
 }

 .track {
     position: relative;
     background-color: #ddd;
     height: 7px;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     margin-bottom: 60px;
     margin-top: 50px
 }

 .track .step {
     -webkit-box-flex: 1;
     -ms-flex-positive: 1;
     flex-grow: 1;
     width: 25%;
     margin-top: -18px;
     text-align: center;
     position: relative
 }

 .track .step.active:before {
     background: #82ae46
 }

 .track .step::before {
     height: 7px;
     position: absolute;
     content: "";
     width: 100%;
     left: 0;
     top: 18px
 }

 .track .step.active .icon {
     background: #82ae46;
     color: #fff
 }

 .track .icon {
     display: inline-block;
     width: 40px;
     height: 40px;
     line-height: 40px;
     position: relative;
     border-radius: 100%;
     background: #ddd
 }

 .track .step.active .text {
     font-weight: 400;
     color: #000
 }

 .track .text {
     display: block;
     margin-top: 7px
 }

 .itemside {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     width: 100%
 }

 .itemside .aside {
     position: relative;
     -ms-flex-negative: 0;
     flex-shrink: 0
 }

 .img-sm {
     width: 80px;
     height: 80px;
     padding: 7px
 }


 .itemside .info {
     padding-left: 15px;
     padding-right: 7px
 }

 .itemside .title {
     display: block;
     margin-bottom: 5px;
     color: #212529
 }

 p {
     margin-top: 0;
     margin-bottom: 1rem
 }

 .btn-warning {
     color: #ffffff;
     background-color: #82ae46;
     border-color: #82ae46;
     border-radius: 1px
 }

 .btn-warning:hover {
     color: #ffffff;
     background-color: #28a745;
     border-color: #28a745;
     border-radius: 1px
 }
    
    a:hover{
        color: black;
    }
tr:hover td{
	background: #f5f5f5;
}
         tr td {
    cursor: pointer;
}
    .section1 {
    padding: 16px 24px;
    font-size: 16px;
    font-weight: 500;
    color: black;
    border-top: 10px solid #f0f0f0;
}
</style>

<div class="container">
    <article class="card">
         <figure class="itemside mb-3">
        <img src="images/icons/logo.png" class="img-sm border" style="width: 60px; height: 60px; ">
         <figcaption class="info align-self-center">
                            <b class="title">FARM ASSISTANT </b> 
                            
                        </figcaption>
          </figure>
          <?php
      include("connection.php");
     
      $id= $_GET['id'];
    $type= $_GET['type'];
      $sql= "select * from my_order where id= '$id'";
     
      $a=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($a);
      $u= $row['email'];

      $sql1= "select * from register where email= '$u'";
      $b=mysqli_query($conn,$sql1);
      $row1=mysqli_fetch_assoc($b);
      $n= $row1['name'];

      $sql2= "select * from address where name= '$n'";
      $c=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_assoc($c);
   
      
      ?>
      
        <header class="card-header"> <a href="my-orders.php" style="color: black">My Orders</a> / Tracking 
        	
           <a href="#"> <i class="fa fa-print"  style="font-size:36px; padding-left: 800px; "  onclick="window.print()"></i></a></header> 
        <div class="card-body">
        
            <h6>Order ID: <?php echo $row["order_id"]; ?> </h6><br>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Order date:</strong> <br><i class="fa fa-calendar"></i><span> <?php echo $row["order_date"]; ?></span> </div>
                    <div class="col"> <strong><?php echo $type; ?> name:</strong> <br><i class="fa fa-user"></i><span>  <?php echo $row1["name"]; ?></span> </div>
                    <div class="col"> <strong>Address:</strong> <br><i class="fa fa-home"></i> <?php echo $row2["Address"]; ?>  
                     <br><?php echo $row2["Address2"]; ?> <br> <?php echo $row2["Town"]; ?>, <?php echo $row2["State"]; ?><br>   </div>
                    <div class="col"> <strong>Phone:</strong> <br><i class="fa fa-phone"></i> <?php echo $row1["number"]; ?> </div>
                    <div class="col"> <strong>Status:</strong> <br><i class="fa fa-check-circle"></i> <?php echo $row["order_status"]; ?> </div>
                  <?php $st=$row["order_status"]; ?>
                </div>
            </article>
         <br>
              
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="<?php echo $row["pic"]; ?>" class="img-sm border" style="width: 200px; height: 200px"></div>
                        <figcaption class="info align-self-center">
                            <p class="title" style="font-weight: 800; text-transform: uppercase;"><?php echo $row["name"]; ?></p><p>
                             <br> Farmer name: <?php echo $row["f_name"]; ?> 
                            <br> Quantity: <?php echo $row["quan"];  ?>  <?php echo $row["unit"];  ?></p> 
                            <span class="text-muted">₹ <?php echo $row["order_price"]; ?></span>
                        </figcaption>
                    </figure>
             
      
            <div class="track">
                
                                 <div class="step active"> <span class="icon"> <i class="fa fa-book"></i> </span> <span class="text">Ordered</span> </div>
                  <?php if( $st=='Packed'|| $st=='Shipped'|| $st=='Delivered'){?>
                                   <div class="step active"> <span class="icon"> <i class="flaticon-box"></i> </span> <span class="text"> Packed </span> </div> <?php }?>
                <?php if( $st=='Ordered'){?>
                  <div class="step"> <span class="icon"> <i class="flaticon-box"></i> </span> <span class="text"> Packed </span> </div><?php }?>
                                <?php if( $st=='Shipped'|| $st=='Delivered'){?>
                               <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text">Shipped </span> </div>
                                
                                                                 <?php }?> 
                               
                                 <?php if( $st!='Shipped'&& $st!='Delivered'){?>
                                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text">Shipped </span> </div>
                                                                 <?php }?>
                                 <?php if( $st!='Delivered'){?>
                                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div>
                                                                 <?php }?>
                                <?php if( $st=='Delivered'){?>
                                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div>
                                
                                                                 <?php }?>
                                  
                
                
            </div>
            <br>
            
            
            <div class="section1"><br>
                <span>Other items in this order</span>
            </div>
          <hr>
           <table class="table">
               <tbody>
                   
                   
                   <?php $o= $row["order_id"];
                    $sql= "select * from my_order where order_id= '$o' AND id != '$id'";
     
      $a=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($a)){
                   ?> 
           <tr class="text-center"  onClick="location.href='order-details.php?id=<?php echo $row["id"];  ?>'">
						      
						       
                                  <td class="image-prod"><div class="img" style="background-image:url(<?php echo $row["pic"];  ?>);"></div></td>
						        
						        <td class="product-name"style="font-weight: 800; text-transform: uppercase;">
						        	<h3><?php echo $row["name"]; ?></h3>
						        
                                    <p>Farmer: <?php echo $row["f_name"]; ?>  </p>
						        </td>
						        <td class="price">Quantity: <?php echo $row["quan"];  ?>  <?php echo $row["unit"];  ?></td>
						        <td class="price">₹ <?php echo $row["order_price"]; ?> </td>
						        
						        <td class="quantity">
						        	
                                    <p>Status: <?php echo $row["order_status"];} ?></p>
                                    
					          </td>
					
						      </tr><!-- END TR-->
                  
                </tbody>   
            </table>
            
               
      
            <a href="javascript:history.back();" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to my orders</a>
        </div>
    </article>
</div>
   
</html>
