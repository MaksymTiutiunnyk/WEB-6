<?php
$conn = new mysqli("sql106.infinityfree.com", "if0_35510451", "hDiX0bIrFAEf", "if0_35510451_web6_db");

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
