<html>
<body>
    <?php
    include('connection.php');
    session_start();
            $u=$_SESSION['u'];
                $a="SELECT * FROM complaint where user_email='$u'";
	            $sql=mysqli_query($conn,$a);
                $_SESSION['cmplt_count']=0;
                while($row=mysqli_fetch_assoc($sql))
	                    $_SESSION['cmplt_count']++;
    
    if($_SESSION['cmplt_count']==0)
        header("location:complaint_empty.html");
    else
        header("location:my-complaints.php");
    ?>
    </body>
</html>