


<?php
   

    $DatabaseName = "Travel-blog";
    $username = "root";
    $password = "";

   
    $db = new PDO("mysql:dbname=Travel-blog", $username, $password);
    
    if(!$db){
      
        die("Error: Failed to connect to database!");
    }
  
?>


