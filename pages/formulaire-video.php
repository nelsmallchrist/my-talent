

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<form enctype="multipart/form-data" method="POST" action="" style="margin:30px 0; font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Video-title</label>
      <input type="text" name="title" class="form-control" id="inputEmail4" style="height: 30px" placeholder="Give a title to your video" required>
    </div>
    
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="monfichier" class="form-control-file" style="height: 30px" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group col-md-6">
      <label for="inputState">Which talent</label>
      <select id="inputState" name="select" style="height: 30px" class="form-control" required>
        <option >Dance-talent</option>
        <option>Music-talent</option>
        <option>Sport-talent</option>
        <option>Miss-talent</option>
        <option>Laugh-talent</option>
        <option>Cooking-talent</option>
        <option>Motivation-talent</option>
        <option>Other-talent</option>
      </select>
        </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Video-Description</label>
    <input type="text" name="description" class="form-control" style="height: 75px" id="inputAddress2" placeholder="Video-Description" required>
  </div>
 
  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="submit" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPOST <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    </div>
    </div>
    <p style="display:<?php if($post==false){echo "block" ;} else {echo "none";} ?>; color:#ff0000; font-size:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"> Une erreur s'est produite veuillez ressayer encore ou verifier que votre la taille  de votre video est superieur a 10 Mo... </p>
</form>
</div>
</div>
</div>