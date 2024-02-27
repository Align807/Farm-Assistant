<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include('connection.php');
    
	$u=$_POST['email'];
    
	$p=$_POST['psw'];
    
	$a="SELECT * FROM register where email='$u'";
	$r=mysqli_query($conn,$a);
    session_start();
    $_SESSION['u']= $u;
    
	$row=mysqli_fetch_array($r);
    $_SESSION['t']=$row['type'];
		if($p==$row["psw"]){# $sql="update login set status='1' where name='$u'";
          #  mysqli_query($conn,$sql);
        
        if ($row['type']=='Admin')
        	   header("location:admin/Admin.php");
        else if ($row['type']=='Customer')
        	   header("location: customer.php");
        else if ($row['type']=='Supplier')
        	   header("location: supplier.php");
        else if($row['type']=='Farmer')
        	   header("location: farmer.php");
        }
           
        else
        {
            header("location:error/index.html");
           
           
        }
?>
</body>
</html>