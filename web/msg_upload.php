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
   
    $u=$_SESSION['u'];
    $email =$_POST['emailM'];
    $cpid =$_POST['cpidM'];
    $msg =$_POST['msgM'];
    
    // $quantity = $_POST[''];
    
    //  $a="SELECT * FROM register where email='$u'";
	  //                       $b=mysqli_query($conn,$a);
    //                      $row=mysqli_fetch_assoc($b);
                         
  
 
  $sql2=" UPDATE complaint  SET Status = 'Solved' WHERE comp_id= $cpid ";
  $sql1="INSERT INTO message(user_email,comp_id,message) VALUES ( '$email','$cpid','$msg')";
    $a=" SELECT * FROM message order by id limit 1 ";
                             $sql=mysqli_query($conn,$a);
                             $row=mysqli_fetch_array($sql)
                             $c=$row["id"]
  $sql3="INSERT INTO notification (notif_type, sender_name, receiver, page) VALUES ('Complaint Reply','Farming Assistant Help Center','$email','message_view.php?id=$c')";

    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql3);
    echo "<script type='text/javascript'>alert('Request Successfully sent');
    window.location='Admin_complaint_category.php';
    </script>"; 

echo $sql1;
echo $sql2;
echo $sql3;

?>
</body>
</html>