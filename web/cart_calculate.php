<html>
    <body>
<?php
  include('connection.php');
  session_start();
   
$u=$_SESSION['u'];

        
$sql="Select * from cart where c_email='$u'";
$a=mysqli_query($conn,$sql);

$m=0;

        
while($row=mysqli_fetch_assoc($a))
{
        

$n=$row['crop_name'];
$p=$row['price'];
$i=$row['image'];
$id=$row['crop_id'];
$c_id=$row['cart_id'];
$q = $_POST['quantity'.$m];
$unit = $_POST['unit'.$m];
$m++;
    if($unit=='Grams')
{ 
$t=$p*$q/1000;
}
else{
$t=$p*$q;

}
   $sql="Update cart set total='$t',quantity='$q', unit='$unit', price='$p' where c_email='$u' and cart_id= $c_id";
mysqli_query($conn,$sql);
}
  
  header("location:checkout_cart.php");
?>
    </body>
</html>