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
	
	$a="SELECT * FROM register where email='$u'";
	$r=mysqli_query($conn,$a);
   
   
	$row=mysqli_fetch_array($r);

		if ($row['type']=='Admin')
        	   header("location:admin/Admin.php");
        else if ($row['type']=='Customer')
        	   header("location: customer.php");
        else if ($row['type']=='Supplier')
        	   header("location: supplier.php");
        else if($row['type']=='Farmer')
        	   header("location: farmer.php");
       
?>
</body>
</html>