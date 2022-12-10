<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel log in</title>
</head>

<body>
<?php  
    $db = new PDO("mysql:dbname=user_info; host=localhost", "root", "");  
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
        echo '<script type="text/javascript">alert("Susseccfully log in!!!");</script>';
        header('location:index.html');
    }

    elseif($_SERVER["REQUEST_METHOD"] == "GET"){
?>
<form action = '' method = "post" class='sign_up_form' name ='sign_up_form'>
    <div class = "sign_log_top">
        <a href="../index.html">
            <img src="../images/navbar_logo_word.png">
        </a>

        <span class = 'sign_title'>Log in</span>
        <hr class="hr_log_in">

            <label>
                Email<br>        
                <input aria-label = "email" type="text" name = "user_email">
            </label>

            <label>
                Password<br>
                <input aria-label = "password" type="password" name="user_password">
            </label>

            <input class = "button" type="submit" value="log in">    
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
            <a href = "sign_up.php">sign up</a>
        </span>
    </div>
</form>
<?php
    }

    elseif($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["user_email"];
        $password = $_POST["user_password"];

        $result = $db->prepare("SELECT * FROM user_account WHERE user_email=:email"); 
        $result->bindParam(":email",$email,PDO::PARAM_STR);
        $result->execute();

        $put = $result->fetch(PDO::FETCH_ASSOC);

        if($put['user_password']==$password) {
            echo'<script type="text/javascript">alert("Susseccfully log in!!!");</script>';
            
            $_SESSION["email"] = $put['user_email'];
            $_SESSION["password"] = $put['user_password'];

            $ran_img = rand(1,5);

            $add_profile = "INSERT INTO user_profile(email, name, id, img) 
                            VALUE ('".$put['user_email']."', '".$put['user_name']."', '".$put['user_id']."', '".$ran_img."')";
            $db -> exec($add_profile);
            header('Location:../index.html');
        } 
        else {
            echo '<script type="text/javascript">alert("Invalid Email or Password!");</script>';
            ?>
            <meta http-equiv="refresh" content="2;url=log_in.php">;
            <?php
        }
    }
?>
</body>

</html>
