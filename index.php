<?php 

    session_start();
    $_SESSION['i']=2;
    header("location: mytalent.php?page=home");
 
?>
