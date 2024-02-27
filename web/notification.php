<html>
    <body>
<?php
            include('connection.php');
           
     
      
                $id=$_GET['id']; 
                $a="Update notification set status='Read' where id='$id'";
	            mysqli_query($conn,$a);
        $sql1="SELECT * FROM notification where id='$id'";
        $r=mysqli_query($conn,$sql1);     

$row=mysqli_fetch_assoc($r);
$n=$row["page"];

header('location: '. $n);  
     
?>
    </body>
</html>