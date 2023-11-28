<?php 
$conn = new mysqli("sql106.infinityfree.com", "if0_35510451", "hDiX0bIrFAEf", "if0_35510451_web6_db");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_text = $_POST['text'];

    $sql = "INSERT INTO userInput (data) VALUES('$user_text')";

    $conn->query($sql);
}

$conn->close();
?>