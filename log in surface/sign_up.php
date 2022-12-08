<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel sign up</title>
    <script src = "log_in_surface.js" type = "text/javascript"></script>
</head>

<body>

<?php
    $db = new PDO("mysql:dbname = user_info", "root", "");  
    if(isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])){
        header('location:index.html');
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
?>
    <form action = '' method = "post" class='sign_up_form'>
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
            <br>    
            <input class = "button" type="reset" value="reset">

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

        $check = "SELECT * FROM user_info WHERE user_email='".$email."'";

        if((!(empty($password) || empty($password_check) || empty($name) || empty($email)))){
            
            if(explode($email, '@gmail.com') == FALSE){ //不是gmail的情況下 
                echo "<script>worng_email();</script>";
            }
    
            else{
                echo "<script> valiedateFrome(); </script>"; //js function call check password
                if(mysqli_num_rows(mysqli_query($db,$check))==0){ //check exist or not
                    $add_account = "INSERT INTO user_info(id, user_email, user_name, user_password) VALUES (NULL, '".$email."', '".$name."', '".$password."')";
                    $db -> exec($add_account);

                    if(mysqli_query($db, $add_account)){
                        echo "sign up successful! After 3 second automatically go to log in page.<br>";
                        echo "<a href='index.php'>If it's not successfully go to log_in page, please click here.</a>";
                        header("refresh:32;url=log_in.php");
                        exit;
                    }else{
                        echo "Error creating table: " . mysqli_error($db);
                    }
                }
    
                else{ 
                    echo "Email already exist, refresh in 3 seconds";
                    echo "<a href='sign_up.php'>If it's not refreshing, please click here to register again";
                    header("refresh:32;url:sign_up.php");          
                }
            }
        }
        else{
            echo "<script>not_complete();</script>"; //js
            heeader("Location:sign_up.php");
        }
    }
        
?>
          
    <div class = "sign_log_bottom">
        <span> Already has account? 
            <a herf = "log_in.php">log in</a>
        </span>
    </div>


</body>

</html>

