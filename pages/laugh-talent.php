<?php 

$_SESSION['site']="mytalent.php?page=laught-talent";

?>
<body id="page -top" class="index">

    <div class="master-wrapper">
      <section>
            <div class="section-inner">
                <div class="container">
                <div class="row mb50">
                  <?php
                                 $req = $bdd->query('SELECT video_title, video_description, file_way ,date_format(date,\'%d/%m/%y à %Hh%i\') AS date_fr FROM talent_video WHERE page="Laugh-talent"');
                                 while($donnes=$req->fetch())
                                    { 
                 ?>
                             <div class="col-md-6">
                                <div class="hover-item mb30">
                                <video class="video-fluid z-depth-1"  autoplay loop controls muted allowfullscreen=""  frameborder="0" height="250" >
                                
                                <source src="<?php echo $donnes['file_way'] ?>" type="video/mp4">
                                <source src="<?php echo $donnes['file_way'] ?>" type="video/ogg">
                                <source src="<?php echo $donnes['file_way'] ?>" type="video/webm">
                                Your browser does not support the video tag.
                                </video>
                                    <div class="overlay-item-caption smoothie"></div>
                                    
                                </div>
                                <div  class="col-md-10">
                                <div class="item-excerpt">
                                    <h4 class="pull-right"><?php echo $donnes['date_fr']; ?></h4>
                                    <h4><a href="#"><?php echo $donnes['video_title']; ?></a></h4>
                                    <p><?php echo $donnes['video_description']; ?></p>
                                </div>
                                </div>
                            </div>


                            <?php
                                }
                                $req->closeCursor();
                                ?>
                         </div>
                            
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

   


    <!-- HTML5 Shim && Respond.js IE8 support of HTML5 elements && media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>