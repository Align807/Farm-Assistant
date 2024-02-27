<html>
<body>
    <?php
     include('connection.php');
    session_start();
    $u= $_SESSION['u'];
    $a="SELECT * FROM wishlist where c_email= '$u'";
	$r=mysqli_query($conn,$a);
   $i=0;
   
   while($row=mysqli_fetch_array($r))
   {
       $i++; 
       
   }
    if($i)
    header("location:wishlist.php");
    else
        header("location:wishlist_empty.html");
    ?>
    </body>
</html>