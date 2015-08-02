<!DOCTYPE html>
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="RAPP.css">
  <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>

<?php
include '../includes/header.php';
include '../includes/connect.php';

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

	function randomPassword() {
	    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}
$YourPass = randomPassword();

$sql = "INSERT into project (Title, Description, Professors, Link, Prereq, Contact, Status, Picture, LastUpdated, Password) 
values ('".$Title."','".$Description."','".$Professors."','".$Link."','".$Prereq."','".$Contact."','".$Status."','".$Picture."',".$LastUpdated.",'".$YourPass."')";
$stmt = $dbh->prepare( $sql );

/* execute the query */
$stmt->execute();
If($stmt)
{
Echo "<br><h3>Record successfully inserted <br><br>
Your Password: $YourPass <br><b>
Please make sure to record your password!</b></h3>
";
}
Else
{
	Echo "<br><h3>There was an error running the query.</h3>";
}
?>

</body>
</html>