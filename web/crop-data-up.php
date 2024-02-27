<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
   
    $name =$_POST['name'];

    $category=$_POST['category'];
   $head1=$_POST['heading1'];
   $desc1=$_POST['des1'];
   $head2=$_POST['heading2'];
   $desc2=$_POST['des2'];
   $head3=$_POST['heading3'];
   $desc3 = $_POST['des3'];
   $head4 = $_POST['heading4'];
   $desc4 = $_POST['des4'];
   $fname = $_FILES['image']['name'];
     $path="images/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
  
       
   
   
	$sql1="insert into crop_data (c_name,category, head1,desc1, head2, desc2, head3, desc3, head4, desc4, image) values ('$name', '$category', '$head1', '$desc1','$head2','$desc2','$head3','$desc3','$head4','$desc4','$path')";
    
     mysqli_query($conn,$sql1);

       
    header("location:admin/Admin.php");
           

  
?>
</body>
</html>