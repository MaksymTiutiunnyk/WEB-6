<?php
require_once 'config.php';

$conn = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM userInput"; 

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['data']; 
    }
}

$conn->close();

$response = json_encode($data); 

echo $response; 
?>
