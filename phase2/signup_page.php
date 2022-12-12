
<?php include "header.php"?>
<?php include "include/config.php";?>
<style>
  body{
      background-color: #f9f6f1;
  }

</style>

<?php
    // $db = new PDO("mysql:dbname=user_info; host=localhost", "root", "");  
    if(isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])){
    ?>
         <meta http-equiv="refresh" content="0;url=index.php">;
    <?php
       
      
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
?>
    
    <div class="signup_page">
        <form action = '' method = "post" class='sign_up_form' name ='sign_up_form' onSubmit="check_password()">
            <div class = "sign_log_top">
            <div class="welcome_title">
                WELCOME TO TRAVEL TO TRAVEL
                <span class='sign_title'>Sign up for TTT to share your own travel experiences after log in!</span>
            </div>
        
                <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                <!-- <a href="../index.html">
                    <img src="../images/navbar_logo_word.png">
                </a> -->

                
                <hr class="hr_log_in">

                <label>
                    <div class="sub_label">User name</div>
                    <input aria-label="user name" type="text" name="user_name"/>
                </label>

                <label>
                    <div class="sub_label">Email</div>   
                    <input aria-label="email" type="text" name = "user_email">
                    <br>
                    <sapn id = "rewrite_email"></span>
                </label>

                <label>
                    <div class="sub_label">Password</div>
                    <input aria-label = "password" type="password" name="user_password">
                    <sapn id = "rewrite_password"></span>
                </label>

                <label>
                    <div class="sub_label">Make sure the password again</div>
                    <input aria-label = "password" type="password" name="user_password2">
                    <sapn id = "rewrite_password2"></span>
                </label>
              
                <input id = "button" type="submit" value="sign up"> 
                <span>Already has an account?   <a href="login_page.php">log in</a></span>
                <!-- <input class = "button" type="reset" value="reset"> -->
            </div>

           
    </div>
        </form>
        <!-- <div class="signup_img">
            <img src="https://kimmyyo.github.io/Travel-blog/images/甘肅沙漠.jpg'">
        <div> -->
    </div>
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

                <meta http-equiv="refresh" content="0;url=signup_page.php">;
                <?php
            }   

            else if($password != $password_check){
               
                echo '<script type="text/javascript">alert("Different password were entered");</script>';
                ?>
                <meta http-equiv="refresh" content="0;url=signup_page.php">;
                <?php
            }   

            else if(strlen($password) < 6){
              
                echo '<script type="text/javascript">alert("Password has to be longer than 6 words");</script>';
                ?>
                <meta http-equiv="refresh" content="0;url=signup_page.php">;
                <?php
            }
    
            else{
                
                $query = $db->prepare("SELECT * FROM user_account WHERE user_email = ?");
                $query->execute([$email]);
                $result = $query->rowCount();
                
                
                
                if($result > 0){ //check exist or not (exist error)
                   
                    echo '<script type="text/javascript">alert("Email allready exist");</script>';
                    ?>
                    <meta http-equiv="refresh" content="0;url=signup_page.php">;
                    <?php
                   

                }
    
                else{ 
                    $ran_img = rand(1,5);
                  
                    $add_account = "INSERT INTO user_account(`user_email`, `user_name`, `user_password`, `img`) VALUES ('".$email."', '".$name."', '".$password."', '".$ran_img."')";
                    $db -> exec($add_account);
                    
                    echo "sign up successful! After 2 second automatically go to log in page.";
                    ?><br><?php
                    echo "<a href='index.php'>If it's not successfully go to log in page, please click here.</a>";
                    ?>
                    <meta http-equiv="refresh" content="0;url=login_page.php">;
                    <?php                           
                }
            }
        }
        else{
            
            echo '<script type="text/javascript">alert("All elements need to be filled");</script>';
            ?>
            <meta http-equiv="refresh" content="0;url=signup_page.php">;
            <?php  
        }
    }       
?>

</body>

</html>
