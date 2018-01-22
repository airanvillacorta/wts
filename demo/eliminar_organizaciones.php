<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gecko";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  $id="";
              
  $id=$_GET["id"];
  
  $sql = "DELETE FROM organizacion WHERE ORG_id='$id'";

    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;      
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  header("Location: listar_organizaciones.php");

?>
