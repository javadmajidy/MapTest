<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxi";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT Longitude, Latitude FROM currentcoord";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "salam" . $result->num_rows;
        // output data of each row
        $locationCounter = 0;
        while($row = $result->fetch_assoc()) {
            echo '<br />' . $row["Longitude"] . '<br />';
            echo $row["Latitude"];
            //Data 1
            $Loc[$locationCounter]['longitude'] = $row["Longitude"];
            //Data 2
            $Loc[$locationCounter++]['latitude'] = $row["Latitude"];
        }
        $response = json_encode($Loc);
        echo $response;
    } else {
        echo "0 results";
    }

$conn->close();