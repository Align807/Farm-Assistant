<html>
<body>
    
<?php
    include('connection.php');
    session_start();
    extract($_POST);
    $u=$_SESSION['u'];
   
   $fname=$_FILES["image"]["name"];
    $path="profile/".$fname;
    $ftemp=$_FILES["image"]["tmp_name"];
    move_uploaded_file($ftemp,$path);
    $a="SELECT * FROM register where email='$u'";
	            $b=mysqli_query($conn,$a);
                while($row=mysqli_fetch_array($b))
                      $img=$row['image'];  
   if(empty($fname))
        $sql="Update register set name='$name', psw ='$psw',email='$email',number='$mob', image='$img' where email='$u'";
else
   $sql="Update register set name='$name', psw ='$psw',email='$email',number='$mob', image='$path' where email='$u'";
  
    mysqli_query($conn,$sql);
  
    $_SESSION['u']=$email;
    
    header("location:settings.php");
    ?>
    </body>
</html>