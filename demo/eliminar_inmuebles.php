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

  $org="";
              
  $org=$_GET["org"];
  

  
  $sql = "DELETE FROM inmueble WHERE IMN_id='$id'";

    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "New INM record deleted successfully. Last deleted ID is: " . $last_id;
      
      
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  header('Location: listar_inmuebles2.php?id='.$org.'');
?>
