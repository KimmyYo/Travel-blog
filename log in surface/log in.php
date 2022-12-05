<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel log in</title>
</head>

<body>
<?php 
    if(isset($_COOKIE["email"])&& isset($_COOKIE["password"])){
?>
        <form action="" method="post">
        <fieldset class="b" style width=30%>  
            web logged in
        </fieldset>
        </form>
<?php 
    }
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

            <span class= "content">
                You can share your own travel experiences after log in!
            </span>
            <span class= "content">
                Leave your comments on others post!
            </span>
    </div>

    <div class = "sign_log_bottom">
        <span> Not sign up yet? 
            <a herf = "sign up.php">sign up</a>
        </span>
    </div>


</body>

</html>