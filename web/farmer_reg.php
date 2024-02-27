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
    $add =$_POST['add'];

    $add2 =$_POST['add2'];
   
    $email = 'aleena@gmail.com';
    $state =  $_POST['state'];
   
    $town = $_POST['town'];
      $pin = $_POST['pin'];
        
  if(empty($add2))
   
	    $sql="insert into farmer (email, address, state, town, pincode) values ('$email', '$add', '$state', '$town', '$pin')";
    else
        $sql="insert into farmer (email, address, address2, state, town, pincode) values ('$email', '$add', '$add2', '$state', '$town', '$pin')";
       
    
   
if(mysqli_query($conn,$sql))
       {
            echo "<script type='text/javascript'>alert('Request Successfully sent');
window.location='index.php';
</script>"; 
        
           
       }
    
   
?>
</body>
</html>