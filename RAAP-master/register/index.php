<!DOCTYPE HTML>
<html>
<head>
    <meta content = "text/htm; charset=utf-8" http-equiv="Content-Type" />
    <title>Register</title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="RAPP.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <style type="text/css">
      .page_label {
        font-size:70%;
        font-weight:normal;
      }
    </style>
</head>

<body id="register" background="css/bck.png">
<?php include '../includes/header.php';
?>

<script src="js/myscript.js"></script>

<!-- Checking for a luc.edu email -->
<script type="text/javascript">

  function checkForm(form)
  {
    var string = (form.Contact.value).trim(); 
    var res = string.substring(string.indexOf("luc.edu")).trim();
    if( res != "luc.edu" ) {
      alert("Error: It is not a Loyola email!");
      form.Contact.focus();
      return false;
    }
    return true;
  }
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<form class="form-horizontal" method="post" action="submit.php" onsubmit="return checkForm(this);">
<fieldset>

<!-- Form Name -->
<legend align="center" style="font-size:100%;font-weight:bold;">Register your Project</legend>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="Title">Title</label>  
  <div class="col-md-4">
  <input id="Title" name="Title" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="Description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Description" name="Description" placeholder="Write here a description for your project" required=""></textarea>
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="Professors">Researcher</label>  
  <div class="col-md-4">
  <input id="Professors" name="Professors" type="text" placeholder="Please provide the name of the researchers" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Contact" type="email" name="Contact" type="text" placeholder="example@luc.edu" class="form-control input-md" required="">
  </div>
  <img src="help.png" height="20" width="20" data-toggle="tooltip" data-placement="right" style="vertical-align:baseline;" title="Make sure that the Email provided is 'luc.edu'."></img>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="External">External Link</label>  
  <div class="col-md-4">
  <input id="Link" name="Link" type="text" class="form-control input-md" placeholder="If your project has an external website, enter the link here">
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="txtPrereqs">Prerequisites</label>  
  <div class="col-md-4">
  <input id="Prereqs" name="Prereqs" placeholder="example: Python, 2 years of programming experience, COMP398" type="text" class="form-control input-md">
  </div>
    <img src="help.png" height="20" width="20" style="vertical-align:baseline;" data-toggle="tooltip" data-placement="right" title="Define prerequisites for that project."></img>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="txtPicture">URL of Picture</label>  
    <div class="col-md-4">
  <input id="Picture" name="Picture" type="text" placeholder="http://www.example.com/example.jpeg" class="form-control input-md">
    
  </div>
  <img src="help.png" height="20" width="20" data-toggle="tooltip" style="vertical-align:baseline;" data-placement="right" title="Copy and paste or just type in the URL of a jpeg, gif, or png image."></img>
</div>

<!-- Multiple dropdown (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label page_label" for="Status">Status</label>
  <div class="col-md-4">
    <select id="Status" name="Status" class="form-control" required="">
      <option value="">Select a status</option>
      <option value="Active: Seeking Students">Active: Seeking Students</option>
      <option value="Active: Not Seeking Students">Active: Not Seeking Students</option>
      <option value="Archived: Seeking Students">Archived: Seeking Students</option>
      <option value="Archived: Finished">Archived: Finished</option>
    </select>
  </div>
  <img src="help.png" height="20" width="20" data-toggle="tooltip" style="vertical-align:baseline;" data-placement="right" title="Active projects are currently in progress and may be seeking student or not. Archived projects are projects that are finished or seeking continuity."></img>
</div>

<!-- Button -->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="btnRegister"></label>
  <div class="col-md-4">
    <button id="Register" name="Register" class="btn btn-success btn-lg">Register</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>

