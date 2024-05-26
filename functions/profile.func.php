<?php 
        if(isset($_POST['btnAddMore']))
        {
            header('location:mytalent.php?page=edit-profile');
        }
        $sql='SELECT * FROM members WHERE email=:email';
            $req=$bdd->prepare($sql);
            $req->execute(array(
                'email'=>$_SESSION['tchat']
            ));
        
?>