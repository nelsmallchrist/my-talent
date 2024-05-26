
    <!------ Include the above in your HEAD tag ---------->
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                        <div class="card" style="margin-bottom:30px">
                            <div class="card-body">

                                <form style="font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue" method="post" action="" >
                                <div class="form-row">
                                     <div class="form-group col-md-12">
                                             <label for="inputEmail4">Your Surname</label>
                                            <input style="height: 30px" type="text" class="form-control" name="nom" id="name" placeholder="Enter your Sirname" value="<?php echo $nom;?>" required/>
                                        </div>
                                         <p style="color:#ff0000"><?php echo "$nomE"; ?></p>
                                 </div>
                                   
                                 <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="inputEmail4">Your Firstname</label>
                                       <input style="height: 30px" type="text" class="form-control" name="prenom" id="username" placeholder="Enter your Firstname" value="<?php echo $prenom; ?>" required/>
                                     </div>
                                     <p style="color:#ff0000"><?php echo "$prenomE"; ?></p>
                                    </div>
                                    

                                    <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="inputEmail4">Your Email</label>
                                        <input style="height: 30px" type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" value="<?php echo $email; ?>" required/>
                                        </div>
                                        <p style="color:#ff0000"><?php echo "$emailE"; ?></p>
                                    </div>
                                     
                                    <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="inputEmail4">Your Birthday</label>
                                        <input style="height: 30px" type="date" class="form-control" name="birthday" id="birthday" required/>
                                            </div>
                                        </div>
                                    
                                        <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="inputEmail4">Your Password</label>
                                        <input style="height: 30px" type="password" name="password" class="form-control"  id="password" placeholder="Enter your password" required/>
                                            </div>
                                            <p style="color:#ff0000"><?php echo "$passwordE"; ?></p>
                                        
                                    </div>

                                    <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="inputEmail4">Confirm Password</label>
                                        <input style="height: 30px" type="password" name="confirm" class="form-control" id="confirm" placeholder="Confirm your Password" required/>
                                            </div>
                                            <p style="color:#ff0000"><?php echo "$confirmE"; ?></p>
                                        </div>
                                        
                                        <div class="form-row">
                                     <div class="form-group col-md-12">
                                    <button type="submit" name="singup" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    <p class="error" style="display:<?php if(islogged($email)==1) {echo "block";} else{echo "none";} ?>; color:#ff0000"><?php echo $email_error ?></p>
                                    </div>
                                    <div class="login-register">
                                        <a href="index.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
    </div>
   