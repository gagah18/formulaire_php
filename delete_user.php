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
    $supp= $_GET['id'];
    $sql = "DELETE FROM message WHERE id='$supp'";
    $result= $conn->query($sql);
// sql to delete a record
if ($result) {
  echo "deleted successfully";
} else {
  echo "Error deleting : " . $conn->error;
}
}

$conn->close();
?>
<button><a href="show_user.php"> afficher</a></button>