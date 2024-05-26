<?php include 'body/head.php' ?>
 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class=" bg-primary">
<nav class="navbar navbar-icon-top navbar-expand-lg justify-content-between navbar-dark bg-primary">
  <a class="text-white" style="font-style:italic, sans serif; font-size:20px; text-decoration:none" href="mytalent.php?page=home"><img src="images/etoilees.png" style="height: 50px; border-radius:20px">
  <strong style="font-style:italic; font-size:20px">MyTalent</strong></a>
  
  
    <?php 
    
    if(online()==1)
    {
        
   
    ?>
  
 
  <a href="mytalent.php?page=formulaire-video"><img class="marginauto" alt="centered image" style="border-radius:15px; height:40px" src="images/addvideo.jpg"></a>
  
  <form class="form-inline">
     <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 

    <?php

    }

    ?>
  
</nav>

<!--<img src="addvideo.jpg" style="height:0px"> -->



<!--style="background-color:#6CC5D3" -->



<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                  <div class="container bg-primary">
                <div class="row">
                    <div class="col-md-12 text-center">


                    <?php 

                      if(online()==1)
                      {
                        
                      ?>

                        <ul class="list-inline  wow">
     <li><a class="text-white" href="mytalent.php?page=acceuil" style="text-decoration:none"><img class="marginauto" src="images/home.png" alt="centered image" style="border-radius:15px"/>Home</a></li>
    <li><a class="text-white" href="mytalent.php?page=tchat" style="text-decoration:none"><img class="marginauto" src="images/message.png" alt="centered image" style="border-radius:15px"/>Messages</a></li>
     <li><a class="text-white" href="mytalent.php?page=profile" style="text-decoration:none"><img class="marginauto" src="images/profile.png" alt="centered image" style="border-radius:15px"/>Profile</a></li>
    <li><a class="text-white" href="mytalent.php?page=notification" style="text-decoration:none"><img class="marginauto" src="images/globe.png" alt="centered image" style="border-radius:15px"/>Notifications</a></li>
    <li><a class="text-white" href="mytalent.php?page=members" style="text-decoration:none"><img class="marginauto" src="images/amis.png" alt="centered image" style="border-radius:15px"/>Friends</a></li>
    
   <!--<li><a href="shop.php" ><img class="marginauto" src="shop.png" alt="centered image" style="height:50px"/>Shopping</a></li>-->
   </ul>

                                    
                    <?php 

                    }

                    ?>


             </div>
         </div>
    </div>

    
                   </div>
                  <div class="carousel-item ">
                  <div class="container bg-primary">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <?php 

                      if(online()==1)
                      {
                        
                      ?>
                        <ul class="list-inline  wow">
                          <li><a class="text-white" href="mytalent.php?page=football" style="text-decoration:none"><img class="marginauto" src="images/football.png" alt="centered image" style="border-radius:15px"/>Actuality</a></li>
    <li><a class="text-white" href="mytalent.php?page=sport-talent" style="text-decoration:none"><img class="marginauto" src="images/sportta.png" alt="centered image" style="border-radius:15px"/>Sport-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=music-talent" style="text-decoration:none"><img class="marginauto" src="images/musita.jpeg" alt="centered image" style="border-radius:15px"/>Music-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=dance-talent" style="text-decoration:none"><img class="marginauto" src="images/danceta.jpeg" alt="centered image" style="border-radius:15px"/>Dance-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=miss-talent" style="text-decoration:none"><img class="marginauto" src="images/missta.jpeg" alt="centered image" style="border-radius:15px"/>Miss-Talent</a></li>
    <!--<li><a class="text-white" href="mytalent.php?page=other-talent" style="text-decoration:none"><img class="marginauto" src="images/etoilecha.jpg" alt="centered image" style="border-radius:15px"/>Other-Talent</a></li>
   <li><a href="shop.php" ><img class="marginauto" src="shop.png" alt="centered image" style="height:50px"/>Shopping</a></li>-->
   </ul>
                  
                    <?php 

                  }

                  ?>

             </div>
         </div>
    </div>
              </div>

              <div class="carousel-item ">
                  <div class="container bg-primary">
                <div class="row">
                    <div class="col-md-12 text-center">


                    <?php 

                    if(online()==1)
                    {
                      
                    ?>

                        <ul class="list-inline  wow">
    <li><a class="text-white" href="mytalent.php?page=motivation-talent" style="text-decoration:none"><img class="marginauto" src="images/motivation.png" alt="centered image" style="border-radius:15px"/>Motivation-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=cooking-talent" style="text-decoration:none"><img class="marginauto" src="images/cooking.png" alt="centered image" style="border-radius:15px"/>Cooking-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=laugh-talent" style="text-decoration:none"><img class="marginauto" src="images/laugh.png" alt="centered image" style="border-radius:15px"/>Laugh-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=other-talent" style="text-decoration:none"><img class="marginauto" src="images/etoilecha.jpg" alt="centered image" style="border-radius:15px"/>Other-Talent</a></li>
   
    <!--<li><a class="text-white" href="mytalent.php?page=miss-talent" style="text-decoration:none"><img class="marginauto" src="images/missta.jpeg" alt="centered image" style="border-radius:15px"/>Miss-Talent</a></li>
    <li><a class="text-white" href="mytalent.php?page=other-talent" style="text-decoration:none"><img class="marginauto" src="images/etoilecha.jpg" alt="centered image" style="border-radius:15px"/>Other-Talent</a></li>
   <li><a href="shop.php" ><img class="marginauto" src="shop.png" alt="centered image" style="height:50px"/>Shopping</a></li>-->
   </ul>

                      <?php 

                    }

                    ?>


             </div>
         </div>
    </div>
              </div>


              <?php 

                if(online()==1)
                {
                  
                ?>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
              <?php 

                  }

              ?>
        </div>
     </div>
  </div>
</div>
</div>
</div>

