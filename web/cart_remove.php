<html>
    <body>
<?php
            include('connection.php');
            session_start();
                $id=$_GET['id']; 
                $a="Delete FROM cart where cart_id='$id'";
	            mysqli_query($conn,$a);
        $_SESSION['cart_count']-=1;
        header("location:cart_check.php");
?>
    </body>
</html>