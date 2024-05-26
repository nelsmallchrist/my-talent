<?php 
$_SESSION['site']="mytalent.php?page=basketball";
$l=$_SESSION['i'];
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
                                    <h2 class="post-title">Stephen Curry's Day: la superstar de la NBA à Londres...</h2>
                                    <div class="hover-item mb30">
                                        <img src="images/steph1.jpeg" class="img-responsive smoothie" alt="title">
                                        
                                        
                                    </div>
                                    <div>               
                                  <p>La moto transportant Steph Curry à travers Londres se compose des véhicules suivants: Audi à l'avant de la classe exécutive, trois Range Rover avec des fenêtres sombres au centre et quelque chose qui ressemble étrangement à une camionnette blindée à l'arrière. Est-il ici pour jouer au basket ou à un coup d'État? C'est peut-être un peu des deux.La ligne de voitures s'arrête devant Old Billingsgate, un magnifique bâtiment victorien sur les rives de la Tamise, où des barrières de contrôle des foules ont été installées autour du terrain de basket. Ils ne sont pas absolument nécessaires: il s'avère que la vue de l'un des plus grands athlètes du monde suffit pour attirer une foule de plusieurs dizaines de personnes, dont la plupart sont curieuses de la circulation, pas un vrai fan de basket.

Pourtant, il y a du bourdonnement ici quand Curry se balance, portant seulement des leggings noirs et une veste d'entraînement bordeaux. Cela ne devrait pas être une surprise, compte tenu de tout ce que nous savons sur lui, mais vous vous attendez à ce qu'il soit plus grand. Lorsque les relations publiques et les assistants d'Under Armour tournent autour de lui, préparant un film promotionnel qu'il est sur le point de tourner, l'œil n'est pas immédiatement attiré. Il est juste un gars dans une ville d'un million, qui s'occupe de ses affaires quotidiennes. Seul un admirateur solitaire dans le haut des Golden State Warriors décoré du célèbre numéro 30 Curry triche sur le jeu.</p>
                                    </div>
                            

                                    <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <ul class="list-inline social-links wow">
                            <li>
                                <a href="http://twitter.com/share?url=http://www.new-sport-infos.com&text=Neymar fait encore parler de lui... "><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/pin/create/button/?url=https://www.new-sport-infos.com&media=&description="><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="https://www.dribbble.com"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="hhttp://www.facebook.com/sharer.php?u=http://www.new-sport-infos.com&t=Neymar fait encore parler de lui..."><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.behance.com"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.new-sport-infos.com&title=&summary=&source="><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://wa.me/?text=Neymar%20fait%20encore%20parler%20de%20lui..."><i class="fa fa-whatsapp"></i></a>
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
                                $nel=$bdd->query('SELECT count(nom) as total from inscrit where page="steph1.php"');
                                $son=$nel->fetch();
                                $nel->closeCursor();
                            ?>
                                <h3><?php echo $son['total'].' Comments ';?></h3>
                            </div>
                            <div class="media">
                                 
                           <?php
                                $req = $bdd->query('SELECT nom, message, date_format(date,\'%d/%m/%y à %Hh%i\') AS date_fr FROM inscrit WHERE page="steph1.php" ORDER BY id ASC LIMIT '.$l.'');
                                echo '<ul>';
                                while($donnes=$req->fetch())
                                { 
                                ?>
                            <div class="pull-left">
                                <img class="avatar comment-avatar" src="images/avaba.jpg" alt="">
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
       <?php include 'body/caroussells.php'; ?>





       
        

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