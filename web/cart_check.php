<html>
<body>
    <?php
    session_start();
    if($_SESSION['cart_count']==0)
        header("location:cart_empty.html");
    else
        header("location:cart.php");
    ?>
    </body>
</html>