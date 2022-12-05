<?php
    CREATE TABLE user_info(
        user_id INTEGER UNSIGNED NOT NULL PRIMARY KEY;
        user_email VARCHAR(35) NOT NULL;
        user_name VARCHAR(15);
        user_password VARCHAR(16) NOT NULL;
    );
    DROP TABLE user_info;

    INSERT INTO user_info(user_id, user_email, user_name, user_password)
        VALUES($user_id, $user_email, $user_name, $user_password);
?>


<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $db = new PDO("mysql:dbname=imdb_assignment;host = localhost","root","");
        $result = mysqli_query($db,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>