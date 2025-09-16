<?php

    try {
        $dsn = "mysql:host=Personal_MySQL_Server;dbname=Personal_App";

        $connection = new PDO($dsn, "root", "root");

        $test = $connection->query("Show variables");

        while ($row = $test->fetch()) {
            echo "<p>Name: " . $row[0] . " (" . $row[1] . ")</p>";
        }
    }
    catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
    }

?>