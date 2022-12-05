<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="log_style.css">
    <title>Travel-to-Travel sign up</title>
</head>

<body>

<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
?>
        <div class = "sign_log_top">
        <a href="../index.html">
            <img src="../images/navbar_logo_word.png">
        </a>

        <span class = 'sign_title'>Sign up for TtT!</span>
        <hr>

            <label>
                User name<br>
                <input aria-label = "user name" type="text" name="user_name"/>
                <sapn class = "email"></span>
            </label>

            <label>
                Email<br>        
                <input aria-label = "email" type="text" name = "user_email">
                <sapn class = "email"></span>
            </label>

            <label>
                Password<br>
                <input aria-label = "password" type="password" name="user_password">
            </label>

            <label>
                Make sure <br>the password again<br>
                <input aria-label = "password" type="password" name="user_password2">
                <sapn class = "email"></span>
            </label>
            <input class = "button" type="submit" value="sign up">    

            <span class= "content">
                You can share your own travel experiences after log in!
            </span>
            <span class= "content">
                Leave your comments on others post!
            </span>
    </div>
<?php
    }
?>

<?php
        elseif ($_SERVER["REQUEST_METHOD"]=="POST"){
            $password = $_POST["user_password"];
            $password_check = $_POST["user_password2"];
            $name = $_POST["user_name"];
            $email = $_POST["user_email"];

            if($password == $password2_check){
                
                $db = new PDO("mysql:dbname = user_info", "root", "");
                $sql = "INSERT INTO user_info(user_id, user_email, user_name, user_password) VALUES ($id, $name, $email, $password)";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    

                    $db = new PDO("mysql:dbname=imdb_assignment","root",""); 

                    $id = $db->quote($id);
                    $name = $db->quote($name);

                    $change = "UPDATE movies SET name = $name WHERE id = $id";
                    $db -> exec($change);
                }
            }
            else{
                print("password is wroung");
            }
?>
            

    <div class = "sign_log_bottom">
        <span> Already has account? 
            <a herf = "log in.php">log in</a>
        </span>
    </div>


</body>

</html>

