<html>
    <body>
<?php
            include('connection.php');
            session_start();
     $u=$_SESSION['u'];
     
      
                $id=$_GET['id']; 
                $a="Update crop_request set status='Rejected' where crop_id='$id'";
	            mysqli_query($conn,$a);
       
  header('location:view_crop_check.php');  
       
?>
    </body>
</html>