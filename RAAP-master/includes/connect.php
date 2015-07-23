<?php

$dbh = new PDO('mysql:host=localhost:8080;dbname=RAPP', "root", "sql4fun");
$result = $dbh->prepare($query);
$result->execute();

?>