<?php 

    $servername = "localhost";
    $username = "graphiclnw_design";
    $password = "0950042047aA";
    $dbname = "graphiclnw_SA";
    
    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>