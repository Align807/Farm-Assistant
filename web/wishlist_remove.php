<html>
    <body>
<?php
            include('connection.php');
            session_start();
                $id=$_GET['id']; 
                $a="Delete FROM wishlist where id='$id'";
	            mysqli_query($conn,$a);
        
        header("location:wishlist_check.php");
?>
    </body>
</html>