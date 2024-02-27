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
   
    $c_name =$_POST['c_name'];
   $u=$_SESSION['u'];
   
    $category=$_POST['category'];
   
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
  
   
    
    
   $fname = $_FILES['image']['name'];
     $path="shop/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
  
       
   
   
	$sql1="insert into crop_fc (c_name,f_email,category,quantity, price,discount,image) values ('$c_name','$u','$category', ' $quantity', '$price', '$discount', '$path')";
    
    if(mysqli_query($conn,$sql1))
        header("location: sell-crop.html");
           

  
?>
</body>
</html>