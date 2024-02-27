<?php
session_start();                                
include('connection.php');
$u=$_SESSION['u'];

$sql1="Select * from feedback where email='$u'";
$r=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($r);
if($row== NULL)
header('Location: feedback/feedback.html');    
if($row!= NULL)
  header('Location: logout.php');  
?>