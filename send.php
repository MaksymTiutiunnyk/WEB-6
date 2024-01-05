<?php 
require_once 'config.php';

$conn = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DATABASE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_text = $_POST['text'];

    $sql = "INSERT INTO userInput (data) VALUES('$user_text')";

    $conn->query($sql);
}

$conn->close();
?>