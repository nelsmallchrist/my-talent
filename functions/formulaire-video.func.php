<?php 

    $post=true;

    if(isset($_POST['submit']))
    {
        
        $title= htmlspecialchars(trim($_POST['title']));
        $description= htmlspecialchars(trim($_POST['description']));
        $video='uploads/'.basename($_FILES['monfichier']['name']);
        $talent= strtolower(htmlspecialchars(trim($_POST['select'])));
    

        if(isset($title) AND isset($description) AND isset($video) AND isset($page) AND isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
        {
            $video='uploads/'.basename($_FILES['monfichier']['name']);
             // Testons si le fichier n'est pas trop gros
            if ($_FILES['monfichier']['size'] <= 10000000)
            {
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['monfichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('MP4','mp4' ,'OGG','ogg' ,'WebM','webm');
                    if (in_array($extension_upload, $extensions_autorisees))
                    {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                            echo "L'envoi a bien été effectué !";
                   
         
      
                        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
                    
                        $req = $bdd->prepare('INSERT INTO talent_video(email,video_title,video_description,page,file_way,date) VALUES(:email,:title,:description,:page,:file_way, NOW()) ');
                        $req->execute(array(
                        'email'=> $_SESSION['tchat'],
                        'title'=> $title,
                        'page'=> $talent,
                        'description'=> $description,
                        'file_way'=> $video
                        ));
                        header("location:mytalent.php?page=$talent");
                    } 
            }
            
    
           
        }
        else
        {
            $post=false;
        }
        
        
    }


?>