<!DOCTYPE html>
<html lang="en" ng-app="RAPPApp">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Search Output</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="RAPP.css">
  <link rel="stylesheet" href="animations.css">

  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/angular/angular.js"></script>
  <script src="bower_components/angular-animate/angular-animate.js"></script>
  <script src="bower_components/angular-route/angular-route.js"></script>
  <script src="bower_components/angular-resource/angular-resource.js"></script>
  <script src="js/app.js"></script>
  <script src="js/animations.js"></script>
  <script src="js/controllers.js"></script>
  <script src="js/services.js"></script>
  
  <style type="text/css">	</style>
</head>
<body id="archive" background="/../RAAP-master/register/css/bck.png">


<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
include '../includes/header.php';  
echo('<div style="margin-top:30px"></div>'); 

/* 
$a = "select * from project where archived = true order by ProjectID asc";




try {
   include '../includes/connect.php';
}catch(PDOException $e) {
   die('Error1');
}
 
$query = $a;
$sth = $dbh->prepare($a);
if(!$sth->execute()) {
   die('Error2');
}

$html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr><th>ID</th><th>Name</th><th>Description</th><th>Contact Email</th></tr>';
foreach($sth as $row) {



$link ="projectsummary.php?var=".$row['ProjectID'];

	$html_table .= '<tr><td>' .$row['ProjectID']. '</td><td><a href='.$link.'>' .$row['Title']. '</td><td>' .substr($row['Description'],0,200). '</td><td>'.$row['AdvisorEmail'].'</td></tr>';
	}
  $conn = null;     

  $html_table .= '</table>';         

  echo $html_table;
  */
?>

<div class="view-container">
    <div ng-view class="view-frame"></div>
  </div>

<script src="js/myscript.js"></script>

</body>
</html>