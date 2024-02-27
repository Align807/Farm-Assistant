<html>
    <body>
<?php
  include('connection.php');
  session_start();
   
  
$u=$_SESSION['u'];

        
$sql="Select * from cart where c_email='$u'";
$a=mysqli_query($conn,$sql);
$date=date("d/m/y");      
extract($_POST);
$oid=rand(1000,9999); 
        
while($row=mysqli_fetch_assoc($a))
{
       
$qu=$row['quantity'];
$id=$row['crop_id'];

$n=$row['crop_name'];
$p=$row['price'];
$i=$row['image'];
$t=$row['total'];
$unit=$row["unit"];
    
$sql1="Select * from crop_fc where crop_id='$id'";
$b=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($b);
$q=$row1['quantity'];
$c=$row1["f_email"];

if($unit=='Kgs')
{ 
$q= $q-$qu*1000;  
}
else
    $q= $q-$qu;    
   
    $sql="Update crop_fc set quantity='$q', price='$p' where crop_id='$id'";
mysqli_query($conn,$sql);

$sql1= "select * from farmer where email= '$c'";
$b=mysqli_query($conn,$sql1);
$row2=mysqli_fetch_assoc($b);
$f=$row2["name"];
    
    $sql1= "select * from register where email= '$u'";
$b=mysqli_query($conn,$sql1);
$row3=mysqli_fetch_assoc($b);
$img=$row3["image"];
    
 
    $sql1="INSERT INTO `my_order`(`order_id`,`email`, `f_name`, `crop_id`, `name`,`unit`, `quan`, `price`, `pic`, `order_date`, `order_status`, `order_price`) VALUES ('$oid', '$u','$f','$id', '$n', '$unit','$qu','$p','$i','$date', 'Ordered','$t' )";
mysqli_query($conn,$sql1);


}
    $sql2="INSERT INTO `address`(`name`, `Address`, `Address2`, `Town`, `State`, `Pincode`, `order_id`, `Phone`) VALUES ('$name','$address','$address2','$town','$state','$pin','$oid','$phone')";
mysqli_query($conn,$sql2);

    $sql="Delete from cart where c_email='$u'";
mysqli_query($conn,$sql);
$sql2="insert into notification (notif_type, sender_name, receiver, page, pic) values ('New Order','$u','Admin','Admin-orders.php', '$img')";

 mysqli_query($conn,$sql2);
header("location:order-success.html");
?>
    </body>
</html>