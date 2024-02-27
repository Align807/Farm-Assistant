<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
  include('../connection.php');
 $sql="";
    $name =$_POST['name'];
    $email=$_POST['email'];
     $review=$_POST['review'];
    $quality = $_POST['quality'];
    $trade = $_POST['trade'];
    $usability = $_POST['usability'];
    $overall_sat = $_POST['overall_sat'];
    $overall_exp = $_POST['overall_exp'];
    $message= $_POST['message'];
   
    $sql1="insert into feedback (name,email,review,quality,trade,usability,overall_sat,overall_exp,message) values 
    ('$name','$email','$review',' $quality ',' $trade','$usability',' $overall_sat',' $overall_exp',' $message')";
    
     mysqli_query($conn,$sql1);

       
header('Location: logout.php');

?>
</body>
</html>