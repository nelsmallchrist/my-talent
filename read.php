<?php 
    session_start();
    $url= $_SESSION['site'];
    if(isset($_SESSION['i']))
    {
        $_SESSION['i']= $_SESSION['i']+3;
    }
   header("location:$url");
?>