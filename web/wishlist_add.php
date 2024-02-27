<html>
    <body>
<?php
session_start();                                
include('connection.php');
$u=$_SESSION['u'];
echo $u;
$id=$_GET['id'];

$a="SELECT * FROM crop_fc where crop_id='$id'";
$sql=mysqli_query($conn,$a);
$row=mysqli_fetch_assoc($sql);
$n=$row['c_name'];
$p=$row['price'];
$i=$row['image'];
$q=$row['quantity'];
    
    echo $n;
    echo $p;
    echo $i;
    $sql1="insert into wishlist(c_email,image,crop_name,price,quantity) values ('$u','$i','$n',$p,'$q')";
        mysqli_query($conn,$sql1);
        
            header("location:shop.php");

?>

    </body>
</html>