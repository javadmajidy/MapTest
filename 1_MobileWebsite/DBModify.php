<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 2/7/2017
 * Time: 6:16 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['data']) && $_POST['data'] == 'check'){
    $sql = "SELECT Longitude, Latitude FROM currentcoord";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //echo $result->num_rows;
        // output data of each row
        $locationCounter = 0;
        while($row = $result->fetch_assoc()) {
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

}else {
    $longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;
    $latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;

    $sql = "INSERT INTO currentcoord (Longitude, Latitude) VALUES ($longitude, $latitude)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();