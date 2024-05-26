<?php
     if(online()==1)
     {
         header('location: mytalent.php?page=home');
     }
    $nom=$prenom=$email=$password="";
    $nomE=$prenomE=$emailE=$passwordE=$confirmE="";
    
    if(isset($_POST['singup']))
    {

        $nom=validateInput($_POST['nom']);
        $prenom=validateInput($_POST['prenom']);
        $email=validateInput($_POST['email']);
        $password=sha1(validateInput($_POST['password']));
        $confirm=sha1(validateInput($_POST['confirm']));
        $birthday=validateInput($_POST['birthday']);


       

            
    if(empty($nom))
    {
        $nomE="Please I want your Surname";
    }
    if(empty($prenom))
    {
        $prenomE="Please I want also your Firstname";
    }
    if(!isEmail($email))
    {
        $emailE="Please give me a good email adress";
    }
    if(empty($password) || $password!=$confirm)
    {
        $passwordE="Veuillez bien revoir votre mot de passe";
    }
    
    if(isset($nom) && isset($prenom) && isEmail($email) && isset($password))
    {
        function islogged($email)
        {
            global $bdd;
            $sql='SELECT * FROM members WHERE email=:email';
            $req=$bdd->prepare($sql);
            $req->execute(array(
                'email'=>$email
            ));
            $result= $req->rowCount($sql);
            return $result;
        }
        if(islogged($email)==0)
        {

            $_SESSION['tchat']=$email;
            $sql='INSERT INTO members(surname, firstname, password ,email, birthday, date) VALUES (:surname, :firstname, :password, :email, :birthday, NOW())';
            $req=$bdd->prepare($sql);
            $req->execute(array(
                'surname'=>$nom,
                'firstname'=>$prenom,
                'password'=>$password,
                'email'=>$email,
                'birthday'=>$birthday
            ));
           header("location: mytalent.php?page=members");
        }
        else
        { 
            $email_error="Cet email est déjà utlisé...";
        }

    }
     

}

function validateInput($var)
{
    $var=trim($var);
    $var=stripslashes($var);
    $var=htmlspecialchars($var);
    $var=strip_tags($var);
    return $var;
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

?>