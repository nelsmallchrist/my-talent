
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
<form style="font-size:30px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue" method="post" action="" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input style="height: 40px" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input style="height: 40px" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="signin" class="btn btn-primary">Se connecter</button>
  <p  style="font-size:20px; color:#ff0000; display:<?php if(isset($u)){ echo 'block';} else{echo 'none';} ?>"><?php echo $user_error ?></p>
  
</form>
            </div>
        </div>
    </div>