<?php //session_start();?>
<?php include "include/config.php"?>
<?php include "header.php"?>
<style>
    
    .home.title{
        display: none;
    }
    body{
       
    }
  
    #main_navbar{
        color: black;
        background-color: white;
       
        padding: 0;
    }
   

</style>
<!-- <div class="home sub container background" id="homepage_banner" style="background-color:# d8d8db;"> -->
<?php include "navigation_section.php"?>

    <?php 
      $user_id = $_SESSION["user_id"];
      
      $sql = "SELECT * FROM `user_account` WHERE `user_id`='$user_id'";
      $get_user_profile = $db->query($sql);

      foreach($get_user_profile as $profile){
          $user_image = $profile["img"];
          $user_name = $profile["user_name"];
         
      }
    ?>

    <div class="my_page_container">
        <header>
            <div class="profile_container">
                <div class="profile">

                    <div class="myphoto">
                        <img src="<?php echo "images/profile_".$user_image.".jpg";?>" alt="">
                    </div>

                    <div class="user_info">
                        <div class="user-setting">
                            <h1 class="user-name"><?php echo $user_name;?></h1>
                            <button class="user-edit-button">Edit</button>
                            <button class="user-setting-button">Setting</button>
                            
                        </div>
                   
                        <div class="profile-bio">
                              
                        </div>
                    </div>
                </div> 
            </div>
        </header>
        <main>
            <div class="gallery_container">
                <div class="gallery"> 
                <?php 
                    
                    
                    $sql = "SELECT * FROM `posts` WHERE `user_id`='$user_id'";
                    $user_posts = $db->query($sql);
                    
                    foreach($user_posts as $user_post){
                        $user_images = $user_post["image_file_name"];
                        
                ?>
                        <div class="gallery-item">
                            <a>
                            <img class="gallery-image" src="<?php echo $user_images;?>" alt="">
                            </a>
                        </div>
                        <div class="gallery-item ">
                            <a>
                            <img class="gallery-image" src="<?php echo $user_images;?>" alt="">
                            </a>
                        </div>
                     
                <?php 
                }
                ?>
                </div>
                
            </div>
        </main>
    </div>
    <?php include "footer.php" ?>
        </div>
    </body>
</html>
