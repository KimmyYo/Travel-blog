<!DOCTYPE html>

<?php 
    $db = new PDO("mysql:dbname=user_info; host=localhost", "root", ""); 
    $email = $_SESSION["email"];

    session_start(); 
    $_SESSION = array(); 
    session_destroy(); 

    $delete = "DELETE * FROM user_profile WHERE email = $email";
    $db -> exec($delete);
    
    header('location:../index.php'); 
?>

</html>