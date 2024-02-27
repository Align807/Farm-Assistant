<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin| Orders</title>
<link rel="icon" type="image/png" href="images/icons/logo.png"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
    
}
.table-wrapper .btn {
	float: right;
	color: #333;
	background-color: #fff;
	border-radius: 3px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-wrapper .btn:hover {
	color: #333;
	background: #f2f2f2;
}
.table-wrapper .btn.btn-primary {
	color: #fff;
	background: #03A9F4;
}
.table-wrapper .btn.btn-primary:hover {
	background: #03a3e7;
}
.table-title .btn {		
	font-size: 13px;
	border: none;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
.table-title {
	color: #fff;
	background: #4b5366;		
	padding: 16px 25px;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.show-entries select.form-control {        
	width: 60px;
	margin: 0 5px;
}
.table-filter .filter-group {
	float: right;
	margin-left: 15px;
}
.table-filter input, .table-filter select {
	height: 34px;
	border-radius: 3px;
	border-color: #ddd;
	box-shadow: none;
}
.table-filter {
	padding: 5px 0 15px;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 5px;
}
.table-filter .btn {
	height: 34px;
}
.table-filter label {
	font-weight: normal;
	margin-left: 10px;
}
.table-filter select, .table-filter input {
	display: inline-block;
	margin-left: 5px;
}
.table-filter input {
	width: 200px;
	display: inline-block;
}
.filter-group select.form-control {
	width: 110px;
}
.filter-icon {
	float: right;
	margin-top: 7px;
}
.filter-icon i {
	font-size: 18px;
	opacity: 0.7;
}	
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 80px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.view {        
	width: 30px;
	height: 30px;
	color: #2196F3;
	border: 2px solid;
	border-radius: 30px;
	text-align: center;
}
table.table td a.view i {
	font-size: 22px;
	margin: 2px 0 0 1px;
}   
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.status {
	font-size: 30px;
	margin: 2px 2px 0 0;
	display: inline-block;
	vertical-align: middle;
	line-height: 10px;
}
.text-success {
	color: #10c469;
}
.text-info {
	color: #62c9e8;
}
.text-warning {
	color: #FFC107;
}
.text-danger {
	color: #ff5b5b;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
 <?php
  include('connection.php');
  
  
?>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Order <b>Details</b></h2>
                    </div>
                   
                </div>
            </div>
            <div class="table-filter">
                <div class="row">
                    
                   
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Location</th>
                        <th>Order Date</th>						
                        <th>Status</th>						
                        <th>Net Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
         $f=1;
    
                $a="SELECT * FROM my_order order by order_date desc, email limit 5";
              $sql=mysqli_query($conn,$a);
                    
              $b="SELECT count(*) FROM my_order";
                $sql1=mysqli_query($conn,$b);
             $row3=mysqli_fetch_array($sql1);

                while($row=mysqli_fetch_array($sql))
                {$c=$row["email"];
                 $o=$row["order_id"];

                  $sql1= "select * from register where email= '$c'";
                   $b=mysqli_query($conn,$sql1);
                   $row1=mysqli_fetch_assoc($b);
                 $sql2= "select * from address where order_id= '$o'";
                   $d=mysqli_query($conn,$sql2);
                   $row2=mysqli_fetch_assoc($d);
      ?>

                    <tr>
                        <form action="status_update.php?id=<?php echo $row["id"];?>"  method="post">
                        <td><?php echo $f; ?></td>
                        <td><a href="#"><img src="<?php echo $row1["image"]; ?>" class="avatar" alt="Avatar" style="width:60px; height:60px"> <?php echo $row1["name"]; ?></a></td>
                        <td><a href="#"><img src="<?php echo $row["pic"]; ?>" class="avatar" alt="Avatar" style="width:60px; height:60px"> <?php echo $row["name"]; ?><br>Farmer: <?php echo $row["f_name"]; ?></a></td>
                        <td><?php echo $row2["Address"]; ?><br> <?php echo $row2["Town"]; ?>, <?php echo $row2["State"]; ?></td>
                        <td><?php echo $row["order_date"]; ?></td> 
                       
                        <td>
                        <?php if( $row["order_status"]=='Cancelled'){?>
                            <span class="status text-danger">&bull;</span> Cancelled  <?php }?>
                        <div class="filter-group">
                        
                            <?php $default = $row["order_status"];?>

                            <select name="status" class="form-control" style="width: 150px">
                                
                                 <option value='<?php echo $default?>' selected='selected'><?php echo $default?></option>
                                
                                <?php if( $default!='Packed'&& $default!='Shipped'&& $default!='Delivered'){?>
                                 <option value="Packed">Packed</option><?php }?>
                                <?php if( $default!='Shipped'&& $default!='Delivered'){?>
                                                   
                                <option value="Shipped">Shipped</option>
                                                                 <?php }?>
                               
                                 <?php if( $default!='Delivered'){?>
                                <option value="Delivered">Delivered</option>
                                                                 <?php }?>
                                  
                            </select>
                        </div>
                        </td>
                         
                        <td>₹ <?php echo $row["order_price"]; ?></td>
                        <td>
                            <button  class="view" data-toggle="tooltip"><i class="material-icons" style="color: #007bff; border-color: #007bff;">&#xE5C8;</i>
           
          </button></td>
                        </form>
                    </tr>
                        <?php
                  $f++; 
                }
                  
                  ?>  
                </tbody>
            </table>
             <?php
          
             $c=$row3['count(*)'];
             ?> 
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b><?php echo $c ?></b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                     <?php  
                  $p=1;
             for($i=1; $i<=7; $i++) { 
                   $z=($i-1)*5;
                  ?>
              <?php if($i==$p){  ?>	  <li class="page-item active"><a href="Admin-orders-page.php?pg=<?php  echo $p;?>"><?php  echo $p;?></a></li><?php } ?>
            
              <?php if($z<$c && $i!=$p){  ?>	  <li><a href="Admin-orders-page.php?pg=<?php  echo $i;?>"><?php  echo $i;?></a></li><?php } ?>
               <?php if($z>$c){  ?>    <li><a href="#"><?php  echo $i;?></a></li><?php } ?>
                  <?php } ?>
                    <li class="page-item"><a href="Admin-orders-page.php?pg=<?php  echo $p+1;?>" class="page-link">Next</a></li>
              
                </ul>
            </div>
        </div>
    </div>        
</div>     
</body>
</html>