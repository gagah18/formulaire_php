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

$sql = "SELECT * FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th>
                   <th>Name</th>
                   <th>Body</th>
                   <th>Priority</th>
                   <th>Type</th>
                  <th>Action</th>
                   </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
              <td>".$row["id"]."</td>
              <td>".$row["name"]." </td>
              <td>".$row["body"]." </td>
              <td>".$row["priority"]."</td>
              <td>".$row["type"]."</td>
            <td>
            <button><a href=\"update_user.php?id= $row[id]\">update</a></button>
            <button><a href=\"delete_user.php?id= $row[id]\">delete</a></button>
            </td>

              
              </tr>";
  }
            echo "</table>";
  
          } else {
  echo "0 results";
}
$conn->close();
?>