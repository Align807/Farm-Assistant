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
    $name =$_POST['name'];

    $type =$_POST['type'];
   
    $email = $_POST['email'];
    $number =  $_POST['number'];
   
    $psw = $_POST['psw'];
      $pswr = $_POST['pswrepeat'];
        $a="SELECT * FROM register"; 
    $sql=mysqli_query($conn,$a);
     while($row=mysqli_fetch_assoc($sql))
    {
    if($row['email']==$email)
    {
        echo "<script type='text/javascript'>alert('Email Already Exist..Try another one:-) ');
window.location='reg.html';
</script>";
        break;
    }
    
    
    if($row['email']!=$email)
    {
	$sql1="insert into register (name,type, email,number, psw, psw_repeat, image) values ('$name', '$type', '$email', '$number', '$psw', '$pswr', 'profile/default.png')";

       
        
   
   if(mysqli_query($conn,$sql1))
   {
       
          if($type=='Farmer')
          {     $_SESSION['e']= $email;
               header("location:farmer_reg.html");
          }
          else
               header("location:index.php");
           
      }
    }}
   
?>
</body>
</html>