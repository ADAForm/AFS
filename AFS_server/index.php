<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
        $conn;
        
        $nl = "<br \\>";
    
        function connectToDB() {
            if ($conn == NULL) {
                return false; 
                break;                
            }
            $conn = new mysqli($servername, $username, $password); 
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              echo $nl;
              return false;
            } 
            return true;
            echo "Connected successfully";
            echo $nl;
        }
        
        function disconnectDB() { 
            $conn->close();
        }
        
    

        

    

      
      


      





      $sql = "CREATE DATABASE myDB";

      if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
        echo $nl;
      } else {
        echo "Error creating database: " . $conn->error;
        echo $nl;
      }
      $conn->close();
      echo "Connected closed successfully";
      echo $nl;  
      
      
      
      $conn = new mysqli($servername, $username, $password, "myDB");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      echo "Connected successfully";
      echo $nl;
      
        $sql = "CREATE TABLE names (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        lastname VARCHAR(30) NOT NULL        
        )";
             if ($conn->query($sql) === TRUE) {
        echo "table created successfully";
        echo $nl;
      } else {
        echo "Error creating table: " . $conn->error;
        echo $nl;
      }         


      $conn->close();
      echo "Connected closed successfully";
      echo $nl;
    ?>
  </body>
</html>
