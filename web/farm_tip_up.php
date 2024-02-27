<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
    $sql="";
    $date =$_POST['date'];

    $heading=$_POST['heading'];
   
    $description = $_POST['description'];
   $fname = $_FILES['image']['name'];
     $path="farming-tip/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
   $url= $_POST['url'];
       
   
   
	$sql1="insert into farming_tip (date,heading, description,image, url) values ('$date', '$heading', '$description', '$path', '$url')";
    
     mysqli_query($conn,$sql1);

       
    header("location:admin/Admin.php");
           

  
?>
</body>
</html>