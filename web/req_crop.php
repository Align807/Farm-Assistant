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
    $sql="";
    $c_name =$_POST['c_name'];
    $u=$_SESSION['u'];
   
    $quantity = $_POST['quantity'];
    

   $fname = $_FILES['image']['name'];
     $path="request_crop/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
    
	$sql1="insert into req_crop (s_email,c_name, quantity,image) values ( '$u','$c_name',' $quantity ','$path')";
    
 mysqli_query($conn,$sql1);
 
echo "<script type='text/javascript'>alert('Request Successfully sent');
window.location='req_crop.html';
</script>";

           

  
?>
</body>
</html>