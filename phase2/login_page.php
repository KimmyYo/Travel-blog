<?php
session_start();
?>
<?php include "header.php"?>
<?php include "include/config.php";?>


<?php  
   
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
       
        echo '<script type="text/javascript">alert("Susseccfully log in!!!");</script>';
        
    ?>
        <meta http-equiv="refresh" content="0;url=index.php">;
    <?php
    
        
    }

    elseif($_SERVER["REQUEST_METHOD"] == "GET"){
        
?>

<form action = '' method = "post" class='sign_up_form' name ='sign_up_form'>
    <div class = "sign_log_top" style="width: 50%; ">
        <!-- <a href="../index.html">
            <img src="../images/navbar_logo_word.png">
        </a> -->

        <div class ='welcome_title'>
            Log in
            <span class='sign_title'>
                Share your own travel experiences after log in!
                Leave your comments on others post!
            </span>
        </div>
        
        <hr class="hr_log_in" style="margin-bottom: 3em;">
        
            <label>
                <div class="sub_label">Email</div>
                <input aria-label = "email" type="text" name = "user_email">
            </label>

            <label>
                <div class="sub_label">Password</div>
                <input aria-label = "password" type="password" name="user_password">
            </label>

            <input class = "button" type="submit" value="log in">    
            <span>Not sign up yet?  <a href="signup_page.php">sign up</a></span>
        
    </div>
        
  
</form>
<?php
    }

    elseif($_SERVER["REQUEST_METHOD"] == "POST"){
       
        $email = $_POST["user_email"];
        $password = $_POST["user_password"];
       
        
        $result = $db->prepare("SELECT * FROM user_account WHERE user_email=:email"); 
        echo "this";
        $result->bindParam(":email",$email,PDO::PARAM_STR);
        $result->execute();

        
        $put = $result->fetch(PDO::FETCH_ASSOC);
        
        if($put['user_password']==$password){
          
            echo'<script type="text/javascript">alert("Susseccfully to log in!!!");</script>';
           
            
            // store value into session
           
            $_SESSION["email"] = $put["user_email"];
            $_SESSION["password"] = $put['user_password'];
            $_SESSION["user_id"] = $put["user_id"];

            $email = $_SESSION["email"];
            $user_id = $_SESSION["user_id"];

            echo $email;
            echo $user_id;
            $store_session = "INSERT INTO `session_data`(`session_id`, `session_email`) VALUES ('$user_id', '$email')";
            if($db->exec($store_session)){
                echo "wrong";
            }
           
            
            
            $ran_img = rand(1,5);

            $add_profile = "INSERT INTO user_profile(email, name, id, img) 
                            VALUE ('".$put['user_email']."', '".$put['user_name']."', '".$put['user_id']."', '".$ran_img."')";
            if($db -> exec($add_profile)){
                echo "thistiaojoahga";
            ?>
                <meta http-equiv="refresh" content="0;url=index.php">;
            <?php
            }

            
        } 
        else {
            echo '<script type="text/javascript">alert("Invalid Email or Password!");</script>';
            ?>
            <meta http-equiv="refresh" content="2;url=login_page.php">;
            <?php
        }
    }
?>
</body>

</html>