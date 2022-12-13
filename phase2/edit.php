<?php include "include/config.php";?>
<?php include "header.php";?>

<?php 
    $user_id = $_SESSION["user_id"];
    $post_id = $_GET["post_id"];

    $sql = "SELECT img FROM `user_account` WHERE `user_id`='$user_id'";
    $current_profile = $db->query($sql);
    foreach($current_profile as $current){
        $profile_img = $current["img"];
    }

    
    $sql = "SELECT * FROM `posts` WHERE `id`='$post_id'";    
    $posts = $db->query($sql);

    foreach($posts as $post){
        $current_image = $post["image_file_name"];
        $current_content = $post["post_content"];
        $uploaded_time = explode(" ", $post["uploaded_time"])[0];
        $user_name = $post["user_name"];

    }
    
    ?>

    <div class="edit_places">
        <div class="edit_inside">
            <div>
                <img src="<?php echo $current_image;?>">
            </div>
            <div class="content_info">
                <div class="user_profile">
                    <div class="user_photo">
                        <img src="<?php echo "images/profile_".$profile_img.".jpg";?>" style="width: 50px; height: 50px; border-radius:50%;">   
                    </div>
                    <div class="user_name"><?php echo $user_name;?></div>
                   
                    <div id="more_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                        </svg>
                    </div>
            
                </div>
                <div class="post_content">
                    <div class="original_content">
                        <?php echo $current_content;?>
                    </div>

                    <div class="edit_popup">
                        <form action = "action.php" method = "post" jsf:id="form">
                            <input type="hidden" name="post_id" value="<?php echo $post_id;?>">    
                            <input type="hidden" name="destination" value="<?php echo "edit.php?post_id='.$post_id.'";?>"/>
                                
                                <div class="edit_here">
                                    <label class="">
                                       
                                        <textarea type="text" name="edit_content" id="edit_content" oninput="this.parentNode.dataset.value = this.value" rows="1"><?php echo $current_content?></textarea>
                                    </label> 
                                    <div class="btns">
                                        <button type="submit" name="edit_post">Edit</button>
                                        <button type="submit" name="delete_post">Delete</button>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
                <div class="time"><?php echo $uploaded_time;?></div>
            </div>
          
        </div>
    </div>
    <div id="leave_btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>

<?php
?>

