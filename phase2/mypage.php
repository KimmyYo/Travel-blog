<?php //session_start();?>
<?php include "include/config.php"?>


<?php include "header.php"?>
<link rel="stylesheet" href="mypage.css">


<style>
    
    .home.title{
        display: none;
    }
    body{
        min-height: 100vh;
        box-sizing: border-box;
       
       
    }
  
    #main_navbar{
        font-family: 'Josefin Sans', sans-serif;
        color: black;
        background-color: linear-gradient(#ffffff, #fffdfd);
        font-size: 2rem;
        font-weight: 400;
        
        padding: 0;
    }
    #main_navbar .drop_down_icon{
        color: black;
    }
   

</style>
<!-- <div class="home sub container background" id="homepage_banner" style="background-color:# d8d8db;"> -->
<?php include "navigation_section.php"?>


    <?php 
      $user_id = $_SESSION["user_id"];

      if(isset($user_id)){

     
        $sql = "SELECT * FROM `user_account` WHERE `user_id`='$user_id'";
        $get_user_profile = $db->query($sql);
        $nRows = $db->query("SELECT count(*) FROM `posts` WHERE `user_id`='$user_id'")->fetchColumn(); 
        foreach($get_user_profile as $profile){
            $user_image = $profile["img"];
            $user_name = $profile["user_name"];
            
        }
        ?>

    <header>
        <div class="container">
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php echo "images/profile_".$user_image.".jpg";?>" alt="">
                </div>
                <div class="profile-user-settings">
                    <h1 class="profile-user-name"><?php echo  $user_name;?></h1>
                    <button class="btn profile-edit-btn">Edit Profile</button>
                    <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
                </div>
                <div class="profile-stats">
                    <ul>
                        <li><span class="profile-stat-count"><?php echo $nRows; ?></span> posts</li>
                        <li><span class="profile-stat-count">188</span> followers</li>
                        <li><span class="profile-stat-count">206</span> following</li>
                    </ul>
                </div>
                <div class="profile-bio">
                    <p><span class="profile-real-name">Jane Doe</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>
                </div>
            </div>
            <!-- End of profile section -->
        </div>
        <!-- End of container -->
    </header>

    <main>
            <?php 
                $sql = "SELECT * FROM `posts` WHERE `user_id`='$user_id'  ORDER BY `uploaded_time` DESC";
                $user_posts = $db->query($sql);
                                
            ?>
        <div class="container">
            <div class="gallery">
            <?php
                foreach($user_posts as $user_post){
                        $user_images = $user_post["image_file_name"];
                        $post_id = $user_post["id"];
            ?>     
                <div class="gallery-item" tabindex="0">
                       
                    <a href="edit.php?post_id=<?=$post_id;?>">
                        <img src="<?php echo $user_images;?>" class="gallery-image" alt="">
                        <div class="gallery-item-info">
                            <ul>
                                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php
                
                }   
            ?>
            </div>
        </div>
    </main>	

     
<?php
    }else{
    ?>  
        <div class="non_login_page" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
            <h2 style="color: gray; " >Log In to See Your Post :)</h2>
        </div>
    <?php
    }
    ?>
    <?php //include "footer.php" ?>
        </div>
    </body>
</html>