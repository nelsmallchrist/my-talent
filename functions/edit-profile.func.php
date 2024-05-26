<?php 
    
    if(isset($_POST['edit']))
    {
        
        $first_name= htmlspecialchars(trim($_POST['first_name']));
        $last_name= htmlspecialchars(trim($_POST['last_name']));
        $site_web= htmlspecialchars(trim($_POST['site_web']));
        $profession= htmlspecialchars(trim($_POST['profession']));
        $langue= htmlspecialchars(trim($_POST['langue']));
        $country= htmlspecialchars(trim($_POST['country']));
        $city= htmlspecialchars(trim($_POST['city']));
        $talent= htmlspecialchars(trim($_POST['talent']));
        $religion= htmlspecialchars(trim($_POST['religion']));
        $other_email= htmlspecialchars(trim($_POST['other_email']));
        $bio= htmlspecialchars(trim($_POST['bio']));
       
      
        if(isset($first_name) AND !empty($first_name))
        {
            $req = $bdd->prepare("UPDATE members SET first_name=:first_name where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'first_name'=> $first_name));
        }

        if(isset($last_name) AND !empty($last_name))
        {
            $req = $bdd->prepare("UPDATE members SET last_name=:last_name  where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'last_name'=> $last_name));
        }

        if(isset($site_web) AND !empty($site_web))
        {
            $req = $bdd->prepare("UPDATE members SET site_web=:site_web where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'site_web'=> $site_web));
        }
        

        if(isset($profession) AND !empty($profession))
        {
            $req = $bdd->prepare("UPDATE members SET profession=:profession where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'profession'=> $profession));
        }


        if(isset($langue) AND !empty($langue))
        {
            $req = $bdd->prepare("UPDATE members SET langue=:langue where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],'langue'=> $langue));
        }


        if(isset($country) AND !empty($country))
        {
            $req = $bdd->prepare("UPDATE members SET country=:country where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'country'=> $country));
        }


        if(isset($city) AND !empty($city))
        {
            $req = $bdd->prepare("UPDATE members SET city=:city where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],'city'=> $city));
        }


        if(isset($talent) AND !empty($talent))
        {
            $req = $bdd->prepare("UPDATE members SET talent=:talent where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'talent'=> $talent));
        }


        if(isset($religion) AND !empty($religion))
        {
            $req = $bdd->prepare("UPDATE members SET religion=:religion where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'religion'=> $religion));
        }


        if(isset($other_email) AND !empty($other_email))
        {
            $req = $bdd->prepare("UPDATE members SET other_email=:other_email where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'other_email'=> $other_email));
        }


        if(isset($bio) AND !empty($bio))
        {
            $req = $bdd->prepare("UPDATE members SET bio=:bio where email=:email");
            $req->execute(array(
                'email'=>$_SESSION['tchat'],
                'bio'=> $bio));
        }
        
        
    if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
    {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 10000000)
        {
                // Testons si l'extension est autorisée
                $photo='uploads/'.basename($_FILES['monfichier']['name']);
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg','JPG' ,'jpeg','JPEG' ,'png','PNG');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";

                        $req = $bdd->prepare("UPDATE members SET profile_image=:photo");
                        $req->execute(array('photo'=> $photo));
               
     
  
                }

         }

    }
    
        header('location: mytalent.php?page=profile');
    
    }
?>