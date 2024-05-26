<?php 

$_SESSION['site']="mytalent.php?page=football";
$l= $_SESSION['i'];
include "body/sportactumenu.php";
?>
<body id="page -top" class="index">

    <div class="master-wrapper">
 
   
        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 blog-item mb100 wow match-height">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="post-title">Neymar fait encore parler de lui...</h2>
                                    <div class="hover-item mb30">
                                        <img src="images/ney1.JPG" class="img-responsive smoothie" alt="title">
                                        <l>Publié Jeudi 19 Mars 2020 à 08h30| Dans: PSG</l>
                                        
                                    </div>
                                    <div>               
                                  <p>De retour au Brésil, Neymar se mobilise contre le coronavirus. Le joueur du Paris Saint-Germain, avec ses amis, a fait un don (montant inconnu) aux zones les plus vulnérables du Brésil. Luciano Huck, un joueur brésilien et animateur de télévision à proximité, a annoncé la nouvelle via son compte Instagram.<br><br>

                                  « Ensemble, nous voulons encourager la culture du don. Que les gens pensent plus à leur prochain, en particulier dans un moment d’angoisse, d’incertitude et de souffrance. Nous ne collectons pas de dons, nous en faisons et nous mobilisons des amis et de la famille », a écrit Luciano Huck. Un groupe d'amis, dont le champion brésilien de surf Gabriel Medina, a également appelé à la générosité et fait don d'argent à deux associations brésiliennes, UniãoSP et UniãoRio, respectivement avec COVID-19 à Sao Paulo et Rio de Janeiro.</p>
                                    </div>
                            

                                    <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <ul class="list-inline social-links wow">
                            <li>
                                <a href="https://twitter.com/home?status=https://www.news-sport-infos.000webhost.com &text=Neymar fait encore parler de lui... "><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/pin/create/button/?url=https://www.news-sport-infos.000webhost.com&media=&description=Neymar fait encore parler de lui"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="https://www.dribbble.com"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.news-sport-infos.000webhost.com&t=Neymar fait encore parler de lui..."><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.behance.com"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.news-sport-infos.000webhost.com&title=Neymar fais encore parler de lui...&summary=&source="><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://wa.me/?text=Neymar%20fait%20encore%20parler%20de%20lui...%20https://www.news-sport-infos.000webhost.com"><i class="fa fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                

                    
                    <div class="col-md-12 text-center wow">
                    </div>
                        
                            

                            <div id="comments-list" class="col-sm-8 col-sm-offset-2 gap wow">
                            <div class="mt60 mb50 single-section-title">
                            <?php

                                $nel=$bdd->query('SELECT count(nom) as total from inscrit where page="index.php"');
                                $son=$nel->fetch();
                                $nel->closeCursor();
                            ?>
                                <h3><?php echo $son['total'].' Comments ';?></h3>
                            </div>
                            <div class="media">
                                 
                           <?php
                              
                                $req = $bdd->query('SELECT nom,message, date_format(date,\'%d/%m/%y à %Hh%i\') AS date_fr FROM inscrit  WHERE page="index.php" ORDER BY id ASC LIMIT '.$l.' ');
                               echo '<ul>';
                                while($donnes=$req->fetch())
                                { 
                                ?>
                            <div class="pull-left">
                                <img class="avatar comment-avatar" src="images/avatar.JPG" alt="">
                                </div>
                                <div class="media-body">
                                <div class="well">
                            
                                        <div class="media-heading">
                                            <span class="heading-font"><?php echo $donnes['nom']; ?></span>&nbsp; <small class="secondary-font"><?php echo $donnes['date_fr']; ?></small>
                                        </div>
                                        <p><?php echo $donnes['message']; ?></p>
                                        <!--<a class="btn btn-primary pull-right" href="#">Reply</a> -->
                                        
                                    </div>
                                    <!--/.media-->
                                </div>
                                <?php
                                }
                                echo '<ul>';
                                
                                ?>
                               <a class="btn btn-primary pull-right" href="read.php">Read more</a>
                                </div>
                             <!--/.media-->
                            <div id="comments-form" class="row wow">
                                <div class="col-md-12">
                                    <div class="mt60 mb50 single-section-title">
                                        <h3>Leave A Comment</h3>
                                    </div>
                                    <div id="comment_message"></div>
                                        <form class="comment-form" method="post" action="location.php" id="regForm" role="form">
                                        <input type="text" class="form-control col-md-4" name="nom" placeholder="Your Name *" id="name1" required data-validation-required-message="Please enter your name." />
                                        <input type="email" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email1" required data-validation-required-message="Please enter your email address." />
                                        <textarea name="message" class="form-control" id="comments1" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                        <!--<a class="btn btn-primary pull-right" href="treatement1.php">Reply</a> -->
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Commente</button> 
                                       <!-- <input type="submit" value="envoyer" /> -->
                                         </form>
                                     </div>
                                </div>
                        </div>
                            <!--/.media-->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
     <?php include 'body/carousell.php'; ?>
       

    </div>

    <!-- HTML5 Shim && Respond.js IE8 support of HTML5 elements && media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php include 'body/footer.php'; ?>
</body>
</html>