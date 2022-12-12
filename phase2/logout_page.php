

<?php include "includes/config.php"?>

<?php 
  
    
   session_start();
   session_unset();
   session_destroy();
   
    // $delete_session = "DELETE * FROM `session_data` WHERE session_email ='kimmy@abc.com'";
    // echo "here";
    // $res = $db -> exec($delete_session);
    
    
    

    // $delete = "DELETE FROM `user_profile` WHERE `email` ='kimmy@abc.com'";
    // echo "here";
    // $db -> exec($delete);

   
    

   
?>

    <meta http-equiv="refresh" content="0;url=index.php">;
<?php 
    exit();


?>

