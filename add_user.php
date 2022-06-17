<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "message_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])){
    
}
$sql = "INSERT INTO message ((name, body, priority, type)
VALUES (ALI, Je dors, , ?)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>