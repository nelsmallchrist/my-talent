<?php

    if(online()==1)
    {
        header('location: mytalent.php?page=home');
    }

    if(isset($_POST['signin']))
    {
        $email=htmlspecialchars(trim(stripslashes($_POST['email'])));
        $password=sha1(htmlspecialchars(trim(stripslashes($_POST['password']))));

        function islogged($email,$password)
        {
            global $bdd;
            $sql='SELECT * FROM members WHERE email=:email AND password=:password';
            $req=$bdd->prepare($sql);
            $req->execute(array(
                'email'=>$email,
                'password'=>$password
            ));
            $result= $req->rowCount($sql);
            return $result;
        }
        if(islogged($email,$password)==1)
        {

            $_SESSION['tchat']=$email;
            header("location: mytalent.php?page=home"); 
        }
        else
        {
            $u=true;
            $user_error="Email or Password error";
        }

    }


?>