<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel log in</title>
</head>

<body>
<?php  
    $db = new PDO("mysql:dbname=user_info","root","");
    if(isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])){
        header('location:index.html');
    }

    elseif($_SERVER["REQUEST_METHOD"] == "GET"){
?>
    <div class = "sign_log_top">
        <a href="../index.html">
            <img src="../images/navbar_logo_word.png">
        </a>

        <span class = 'sign_title'>Log in</span>
        <hr>

            <label>
                Email<br>        
                <input aria-label = "email" type="text" name = "user_email">
            </label>

            <label>
                Password<br>
                <input aria-label = "password" type="password" name="user_password">
            </label>

            <input class = "button" type="submit" value="sign up">    
            <br>
            <input class = "button" type="reset" value="reset">
            <span class= "content">
                You can share your own travel experiences after log in!
            </span>
            <span class= "content">
                Leave your comments on others post!
            </span>
    </div>

    <div class = "sign_log_bottom">
        <span> Not sign up yet? 
            <a herf = "sign_up.php">sign up</a>
        </span>
    </div>
<?php
    }

    elseif($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $result = user_info($db,"SELECT * FROM user_id WHERE user_email='" . $_POST["user_email"] . "' and user_password = '". $_POST["user_password"]."'");
        $row  = mysqli_fetch_array($result);

        if(is_array($row)) {
        $_SESSION["email"] = $row['user_email'];
        $_SESSION["password"] = $row['user_password'];
        } 
        else {
         $message = "Invalid Username or Password!";
        }
    }

    // elseif($_SERVER["REQUEST_METHOD"]=="POST"){
    //     $db = new PDO("mysql:dbname=user_info","root","");
    //     $password = $_POST["user_password"];
    //     $name = $_POST["user_name"];
    //     $email = $_POST["user_email"];

    //     $userid = $db -> query("SELECT * From user_id");

    //     foreach($userid as $row){
    //         if()
    //     }
    // }
?>

    


</body>

</html>