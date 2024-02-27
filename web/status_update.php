<html>
<body>
    
<?php
    include('connection.php');
    session_start();
    extract($_POST);
   $u=$_GET['id'];
   $sql="Update my_order set order_status='$status' where id='$u'";

            
  
    mysqli_query($conn,$sql);
 
    header("location:Admin-orders.php");
    ?>
    </body>
</html>