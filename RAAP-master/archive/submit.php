<!DOCTYPE html>
<html lang="en" ng-app="RAPPApp">
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="RAPP.css">
  <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<body>


<?php
include '../includes/header.php';
include '../includes/connect.php';


$varid = $_POST['Projectid'];

$Title= $_POST['Title']                 or    $Title ="Title";                  
$Description= $_POST['Description']     or    $Description="Description";
$Professors= $_POST['Professors']     	or    $Professors="None";
$Link= $_POST['Link']                   or    $Link="None";
$Prereq= $_POST['Prereqs']              or    $Prereq="None";
$Contact= $_POST['Contact']     		or    $Contact="None";
$Status= $_POST['Status']               or    $Status="Status";
$Picture= $_POST['Picture']             or    $Picture="http://triplecrit.com/wp-content/themes/creativemag/images/default.png";
if (substr( $Picture, 0, 4 )==='http'){} else $Picture= "http://".$Picture;
$LastUpdated="now()";

	

$sql = "UPDATE project set Title = '$Title', Description = '$Description', Professors = '$Professors', Link = '$Link', Prereq = '$Prereq', Contact = '$Contact', Status = '$Status', Picture = '$Picture', LastUpdated = ".$LastUpdated."
WHERE ProjectID = '$varid'";
$stmt = $dbh->prepare( $sql );

        // execute the query
$stmt->execute();
If($stmt)
{
Echo "<br><h3>Record successfully updated.</h3>";
}
Else
{
	Echo "<br><h3>There was an error running the query.</h3>";
}
?>

</body>
</html>