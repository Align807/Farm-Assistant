<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
  include('connection.php');
  session_start();
    
    $u=$_SESSION['u'];
echo $u;
$id=$_GET['id'];
    $a="SELECT * FROM req_crop where c_id='$id'";
$sql=mysqli_query($conn,$a);
$row=mysqli_fetch_assoc($sql);
$n=$row['s_email'];


    $c_name =$_POST['c_name'];
    $u=$_SESSION['u'];
   
    $quantity = $_POST['quantity'];
    $price =$_POST['price'];
    $fname = $_FILES['image']['name'];
     $path="add_crop/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
   $a="SELECT * FROM register where email='$u'";
	                        $b=mysqli_query($conn,$a);
                         $row=mysqli_fetch_assoc($b);
   $n= $row["name"];
   
  $sql1="insert into crop_request (farmer_email,supplier_email,c_name,price,quantity,image, status) values 
  ( '$u','$n','$c_name',' $price ',' $quantity ','$path', 'Pending')";
    
     mysqli_query($conn,$sql1);
 $sql2="insert into notification (notif_type, sender_name, receiver, page) values ('Crop Request Reply','$u', '$n', 'view_crop.php')";
    

     mysqli_query($conn,$sql2);

 echo "<script type='text/javascript'>alert('Crop Details Successfully sent');
window.location='crop-request.php';
</script>";          

  
?>
</body>
</html>