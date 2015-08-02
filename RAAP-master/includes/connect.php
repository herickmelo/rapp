<!-- Database Connection -->
<?php

$dbh = new PDO('mysql:host=localhost;dbname=RAPP', "root", "sql4fun");
$result = $dbh->prepare($query);
$result->execute();

?>