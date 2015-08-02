<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>RAPP</title> <!-- title on top tab -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- sets initial scale -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- bootstrap css -->
	<style type="text/css">body {

}
<?php /* internal CSS */ ?>
body, h1, p {
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: normal;
  margin: 0;
  margin-bottom: 60px; /* footer height */
  padding: 0;
  text-align: center;
 
}

.container {
  margin-left:  auto;
  margin-right:  auto;
  margin-top: 177px;
  max-width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-sm-4{
padding:20px 20px 20px 40px;
}

.row:before, .row:after {
  display: table;
  content: " ";
}

h1 {
  color:#000000;
  font-size: 48px;
  font-weight: 300;
  margin: 0 0 0 0;
}
h2 {
	color: #000000;
margin:0;
	}
p {
  margin: 0 0 10px;
}

p.ex {
    margin-right: 150px;
    margin-left: 150px;
}


a {
  color: #000000;
  text-decoration: none;
}
a:active {
    color: #000000;
}
a:hover {
    color:#FF0000;
}
.btn {
    margin: 10px;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}

	</style>
</head>

<!-- Start body 989898 -->
<body id="home" background="/../RAAP-master/register/css/bck.png" style = "background-color:#FFFFFF" >

<!-- navigation bar -->

<?php
include './includes/header.php';
echo('<div style="margin-top:0px" style = "padding-bottom:100px"></div>');

?>
<section id="container-fluid pages">
<!--<h2><strong><a href = "search" type="button" class="btn btn-lg btn=large btn-primary">Click here to search for a project</a></strong></h2>primary search button -->


<a href = "/RAAP-master/active/"><img src="Logo1.png"  class = "span4-txt-center" width="400em" height="400em" class="img-responsive" style="padding:10px;"></a><!-- center picture -->

<div class="container-fluid">
  <h1></h1>
  <blockquote>
    <p >The Research and Project Portal is a website that has a list of research and projects that are either active or completed by Loyola students and faculty. The primary goal of this website is to have a resource that allows students to connect with opportunities for independent projects or research within the computer science department.</p>
    <p >The first benefit is the ability for professors and students to spread awareness of what they are currently working on (without a constant active effort.)  The second benefit is that projects can be registered while the idea is still in the formulation phase.  Students could collaborate with the professor to come up with a final idea that best suits both parties.  The third benefit is that if a student has an area of study they are interested in, they can search to see which professors are doing work in that area and might be best suited to advise them.</p>
  </blockquote>
</div>

</section>
</div>

</div>
</div>
</div>
<script>document.getElementById("demo").innerHTML = echo $_POST["nextstep"]</script>
<script src="js/myscript.js"></script>
<footer class="footer">
    <p>
      LOYOLA UNIVERSITY CHICAGO <br/>
      © Copyright 2015 <br/>
      Developed by Ana Beatrice Severo, Jose Herick Melo da Silva, Wanderson Modesto da Silva
    </p>
</footer>
</body>
</html>