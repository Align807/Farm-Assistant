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
    $usertype =$_POST['type'];
    $date =date("d/m/y");
    $compltH =$_POST['complaintH'];
    $complt =$_POST['complaint'];
    $name=$_POST['name'];
   
    // $quantity = $_POST[''];
    
     $a="SELECT * FROM register where email='$u'";
	                        $b=mysqli_query($conn,$a);
                         $row=mysqli_fetch_assoc($b);
                         
   $n= $row["name"];
   $image=$row["image"];
	$sql1="insert into complaint (user_email,name,image,user_type,date,complaint_head,complaint) values ( '$u','$name','$image', '$usertype',' $date ','$compltH','$complt')";
  $ic="SELECT * FROM register where date='$date' AND user_email='$u' ";
	                        $bc=mysqli_query($conn,$ic);
                         $idc=mysqli_fetch_assoc($bc);
  $sql2="insert into notification (notif_type, sender_name, receiver, page) values ('New Complaint','$n','Admin','Admin_complaint_view_single.php?id=$idc['comp_id']')";

    mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);
    echo "<script type='text/javascript'>alert('Request Successfully sent');
    window.location='complaint.php';
    </script>"; 

// echo $sql1;
// echo $sql2;

?>
</body>
</html>