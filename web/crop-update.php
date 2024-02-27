<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
   
   $id= $_GET['id'];
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
  //  move_uploaded_file($ftemp,$path);
   $a="SELECT * FROM crop_data";
	            $b=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($b))
                      $img=$row['image'];  
   if(empty($fname))
         $sql1=" UPDATE `crop_data` SET `head1`='$head1',`desc1`='$desc1',`head2`='$head2',`desc2`='$desc2',`head3`='$head3',`desc3`='$desc3',`head4`='$head4',`desc4`='$desc4',`image`='$img'  where 'c_id'='$id' ";
else
    $sql1=" UPDATE `crop_data` SET `head1`='$head1',`desc1`='$desc1',`head2`='$head2',`desc2`='$desc2',`head3`='$head3',`desc3`='$desc3',`head4`='$head4',`desc4`='$desc4',`image`='$path'  where 'c_id'='$id' ";
       
   
   

  mysqli_query($conn,$sql1);
echo "<script type='text/javascript'>alert('Crop Data Successfully Updated');
window.location='crop-data-view.php';
</script>";
           

  
?>
</body>
</html>