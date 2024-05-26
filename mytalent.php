<?php 

    session_start();
    
   
    
    include 'main.func.php';

    $pages=scandir('pages/');

    if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages) )
    {
        $page=$_GET['page'];
    }
    else
    {
        $page="home";
    }

    $functions=scandir('functions/');

    if (in_array($page.'.func.php', $functions) )
    {
        include 'functions/'.$page.'.func.php';
    }

    
    

   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyTalent</title>
        <?php  include 'body/head.php'; ?>
    </head>
    <body style="background-color:#D6EAF8">
        <?php
            
            include 'body/menu.php';
            include 'pages/'.$page.'.php';
         ?>
        
    </body>
    <footer>

    </footer>
</html>