<html>
<body>
    <?php
     include('connection.php');
    session_start();
    $u= $_SESSION['u'];
    $a="SELECT * FROM crop_request where status='Pending' and supplier_email= '$u'";
	$r=mysqli_query($conn,$a);
   $i=0;
   
   while($row=mysqli_fetch_array($r))
   {
       $i++; 
       
   }
    if($i)
    header("location:view_crop.php");
    else
        header("location:View_crop_empty.html");
    ?>
    </body>
</html>