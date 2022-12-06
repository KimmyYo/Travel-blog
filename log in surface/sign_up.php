<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel sign up</title>
</head>

<body>

<?php  
    if(isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])){
        header('location:index.html');
    }

    elseif($_SERVER["REQUEST_METHOD"] == "GET"){
?>
    <form action = '' method = "post">
        <div class = "sign_log_top">
            <a href="../index.html">
                <img src="../images/navbar_logo_word.png">
            </a>

            <span class = 'sign_title'>Sign up for TtT!</span>
            <hr class="hr_log_in">

            <label>
                User name<br>
                <input aria-label = "user name" type="text" name="user_name"/>
            </label>

            <label>
                Email<br>        
                <input aria-label = "email" type="text" name = "user_email">
                <br>
                <span class="note">Only accept gmail</span>
                <sapn class = "rewrite"></span>
            </label>

            <label>
                Password<br>
                <input aria-label = "password" type="password" name="user_password">
                <sapn class = "rewrite"></span>
            </label>

            <label>
                Make sure <br>the password again<br>
                <input aria-label = "password" type="password" name="user_password2">
                <sapn class = "rewrite"></span>
            </label>
            <input class = "button" type="submit" value="sign up">    

            <span class= "content">
                You can share your own travel experiences after log in!
            </span>
            <span class= "content">
                Leave your comments on others post!
            </span>
        </div>
    </form>
<?php
    }

    elseif($_SERVER["REQUEST_METHOD"]=="POST"){
        $password = $_POST["user_password"];
        $password_check = $_POST["user_password2"];
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];

        if(strpos($email, '@gmail.com') === FALSE){ //不是gmail的情況下
            header('location:rewrite.php');
        }

        else{
            if($password == $password2_check){
                $db = new PDO("mysql:dbname = user_info", "root", "");
                $add_account = "INSERT INTO user_info(user_name, user_email, user_password) VALUES ($name, $email, $password)";
                $db -> exec($add_account);
    
                session_start();
                    $_SESSION[user_email] = email;
                    $_SESSION[user_password] = password;
    
                header("location:index.html");
            }

            else{ //確認密碼不相同
                header('location:rewrite.php');               
            }
        }

    }
?>
          
    <div class = "sign_log_bottom">
        <span> Already has account? 
            <a herf = "log in.php">log in</a>
        </span>
    </div>


</body>

</html>

