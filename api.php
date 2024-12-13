<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ubsent_backend"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM your_table"; 
    $result = $conn->query($sql);
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}

$conn->close();
?>
