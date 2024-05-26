<script src="js/edit-profile.func.js"></script>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <form class="form" action="" method="post" id="registrationForm">
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" name="monfichier" class="text-center center-block file-upload">
      </div></hr><br>

         <!--      
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>

          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
          -->
               
          <div class="panel panel-default">
            <!--<div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div> -->
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <!--<li><a data-toggle="tab" href="#messages">Menu 1</a></li> 
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li>-->
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                 
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="religion"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="religion" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." pattern="[0-9]{8,12}">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Site Web</h4></label>
                              <input type="text" class="form-control" name="site_web" id="site_web" placeholder="enter your web site" title="enter your web site link.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="profession"><h4>Profession</h4></label>
                              <input type="text" class="form-control" name="profession" id="profession" placeholder="professsion" title="enter your profession.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="langue"><h4>Langue</h4></label>
                              <input type="text" name="langue" class="form-control" id="langue" placeholder="langue" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="country"><h4>Country</h4></label>
                              <input type="text" class="form-control" name="country" id="county" placeholder="enter yourcountry" title="enter your country.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="city"><h4>City</h4></label>
                              <input type="text" class="form-control" name="city" id="city" placeholder="enter your city" title="enter your city.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                            <!-- <button class="btn btn-lg btn-success" type="submit" name="edit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              <!--/tab-pane-->
           <!--  <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="religion"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="religion" id="religion" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div> /tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
               
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="talent"><h4>Talent</h4></label>
                              <input type="text" class="form-control" name="talent" id="talent" placeholder="your talent" title="enter your talent.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="religion"><h4>Religion</h4></label>
                              <input type="text" class="form-control" name="religion" id="religion" placeholder="religion name" title="enter your religion name.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          <label for="other_email"><h4>Other email</h4></label>
                              <input type="email" class="form-control" name="other_email" id="other_email" placeholder="email" title="enter your other email.">
                          
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">

                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">

                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">

                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          <label for="bio"1><h4>Your BIO</h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            
                              <textarea type="text" class="form-control" name="bio" id="bio" placeholder="your bio" title="enter your bio." style="height: 60px"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button style="margin-bottom: 10px" class="btn btn-lg btn-success pull-right"  type="submit" name="edit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              		</form>
              
             
              
             </div>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->