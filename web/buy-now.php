<html>
    <body>
<?php
session_start();                                
include('connection.php');
$u=$_SESSION['u'];

$id=$_GET['id'];
$sql1="Select * from cart where c_email='$u'";
$b=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_assoc($b))
{
    if($row1['crop_id']==$id)
    {   
       $i=0;
    }
}
        
        if($i!=0)
        {
$a="SELECT * FROM crop_fc where crop_id='$id'";
$sql=mysqli_query($conn,$a);
$row=mysqli_fetch_assoc($sql);
        
$n=$row['c_name'];
$p=$row['price'];
$i=$row['image'];
$d=$row['discount'];
    $sql1="insert into cart(c_email,crop_id,crop_name,price,discount,image) values ('$u','$id','$n','$p','$d','$i')";
       
if(mysqli_query($conn,$sql1))
{
  
$_SESSION['cart_count']+=1;

}
        }
header("location: cart.php");
?>

    </body>
</html>