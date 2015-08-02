<?php

        // connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=RAPP', "root", "sql4fun");

        // a query get all the records from the users table
        $sql = "SELECT * FROM project WHERE Status = 'Active: Seeking Students' OR Status = 'Active: Not Seeking Students'";

        // use prepared statements, even if not strictly required is good practice
        $stmt = $dbh->prepare( $sql );

        // execute the query
        $stmt->execute();

        // fetch the results into an array
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );

        // convert to json
        $json = json_encode( $result );

        // echo the json string
        echo $json;
?>