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
    $email = $_POST['email'];
    $psw = $_POST['psw'];

  
    $a="SELECT * FROM register where email='$email'";
	$r=mysqli_query($conn,$a);
    session_start();
    
	$row=mysqli_fetch_array($r);
		if($email==$row["email"])
        {
           
            $sql="update register set psw='$psw' where email='$email'";
            $sql1="update login set pass='$psw' where email='$email'";
            $sql="update register set pswr='$psw' where email='$email'";
            $sql1="update login set passr='$psw' where email='$email'";
            $_SESSION['u']=$email;
           
                if ($row['type']=='Admin')
        	       header("location: Admin/Admin.php");
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