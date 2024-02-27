<html>
    <body>
<?php
  include('connection.php');
  session_start();
   
  
$u=$_SESSION['u'];
$id=$_GET['id'];     
        
$sql="Select * from crop_request where crop_id='$id'";
$a=mysqli_query($conn,$sql);
$date=date("d/m/y");      
extract($_POST);
$oid=rand(1000,9999); 
        
while($row=mysqli_fetch_assoc($a))
{
       
$qu=$row['quantity'];
$id=$row['crop_id'];

$n=$row['c_name'];
$p=$row['price'];
$i=$row['image'];

$unit=$row["unit"];
 
$c=$row["farmer_email"];


$sql1= "select * from farmer where email= '$c'";
$b=mysqli_query($conn,$sql1);
$row2=mysqli_fetch_assoc($b);
$f=$row2["name"];
   $sql1= "select * from register where email= '$u'";
$b=mysqli_query($conn,$sql1);
$row3=mysqli_fetch_assoc($b);
$img=$row3["image"];    
 
    $sql1="INSERT INTO `my_order`(`order_id`,`email`, `f_name`, `crop_id`, `name`,`unit`, `quan`, `price`, `pic`, `order_date`, `order_status`, `order_price`) VALUES ('$oid', '$u','$f','$id', '$n', '$unit','$qu','$p','$i','$date', 'Ordered','$p' )";
mysqli_query($conn,$sql1);


}
    $sql2="INSERT INTO `address`(`name`, `Address`, `Address2`, `Town`, `State`, `Pincode`, `order_id`, `Phone`) VALUES ('$name','$address','$address2','$town','$state','$pin','$oid','$phone')";
mysqli_query($conn,$sql2);
echo $sql2;
    $sql="Update crop_request set status='Accepted' where crop_id='$id'";
   
mysqli_query($conn,$sql);
$sql2="insert into notification (notif_type, sender_name, receiver, page, pic) values ('New Order','$u','Admin','Admin-orders.php','$img')";

 mysqli_query($conn,$sql2);
 echo "<script type='text/javascript'>alert('Order successfully placed');
window.location='supplier.php';
</script>";    
?>
    </body>
</html>