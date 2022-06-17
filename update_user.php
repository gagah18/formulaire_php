

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
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
  </head>
  <body>
      
      <h1>Mise à jour</h1>
      <form method="post">
          <label for="name">Nom</label>
          <input type="text" id="name" name="name">
  
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
  
          <label for="priority">Priorité</label>
          <select id="priority" name="priority">
              <option value="1">bas</option>
              <option value="2" selected>Moyen</option>
              <option value="3">Elevé</option>
           </select> 
           
           <fieldset>
              <legend>Type</legend>
              <label>
                  <input type="radio" name="type" value="1" checked>
              Complaint
              </label>
  
              <br>
  
              <label>
              <input type="radio" name="type" value="2">
             Suggestion
              </label>
           </fieldset>
  
           <label>
              <input type="checkbox" name="terms">
              I agree to the terms and conditions
          </label>
  
          <br>
  
          <button name="submit">Send</button>
        <?php

        if(isset($_POST['submit'])){

          $name=$_POST['name'];
          $message=$_POST['message'];
          $priority=$_POST['priority'];
          $type=$_POST['type'];
        

        $new= $_GET['id'];
        $sql = "UPDATE message SET name='$name', body='$message', priority='$priority', type='$type' WHERE id='$new'";

        $res = $conn -> query($sql);

        if ($res) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }
      
        $conn->close();
      }
        ?>