<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel sign up</title>
    <!-- <script src = "log_in_surface.js" type = "text/javascript"></script> -->
</head>

<body>

<?php
    $db = new PDO("mysql:dbname=user_info; host=localhost", "root", "");  
    if(isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])){
        header('location:index.html');
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
?>
    <form action = '' method = "post" class='sign_up_form' name ='sign_up_form' onSubmit="check_password()">
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
                <sapn id = "rewrite_email"></span>
            </label>

            <label>
                Password<br>
                <input aria-label = "password" type="password" name="user_password">
                <sapn id = "rewrite_password"></span>
            </label>

            <label>
                Make sure <br>the password again<br>
                <input aria-label = "password" type="password" name="user_password2">
                <sapn id = "rewrite_password2"></span>
            </label>
            <input id = "button" type="submit" value="sign up">
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
        <span> Already has account? 
            <a href = "log_in.php">log in</a>
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

        if((!(empty($password) || empty($password_check) || empty($name) || empty($email) ))){ //ok
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //不是email的情況下 ok
                echo '<script type="text/javascript">alert("Wrong email was filled");</script>';
                ?>
                <meta http-equiv="refresh" content="2;url=sign_up.php">;
                <?php
            }   

            else if($password != $password_check){
                echo '<script type="text/javascript">alert("Different password were entered");</script>';
                ?>
                <meta http-equiv="refresh" content="2;url=sign_up.php">;
                <?php
            }   

            else if(strlen($password) < 6){
                echo '<script type="text/javascript">alert("Password has to be longer than 6 words");</script>';
                ?>
                <meta http-equiv="refresh" content="2;url=sign_up.php">;
                <?php
            }
    
            else{
                
                $query = $db->prepare("SELECT * FROM user_account WHERE user_email = ?");
                $query->execute([$email]);
                $result = $query->rowCount();
                
                
                if($result > 0){ //check exist or not (exist error)
                    echo '<script type="text/javascript">alert("Email allready exist");</script>';
                    ?>
                    <meta http-equiv="refresh" content="2;url=sign_up.php">;
                    <?php

                }
    
                else{ 
                    $add_account = "INSERT INTO user_account(user_email, user_name, user_password) VALUES ('".$email."', '".$name."', '".$password."')";
                    $db -> exec($add_account);

                    echo "sign up successful! After 2 second automatically go to log in page.";
                    ?><br><?php
                    echo "<a href='index.php'>If it's not successfully go to log in page, please click here.</a>";
                    ?>
                    <meta http-equiv="refresh" content="2;url=log_in.php">;
                    <?php                           
                }
            }
        }
        else{
            echo '<script type="text/javascript">alert("All elements need to be filled");</script>';
            ?>
            <meta http-equiv="refresh" content="2;url=log_in.php">;
            <?php  
        }
    }       
?>

</body>

</html>

