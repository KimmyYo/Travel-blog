
<!-- initialization -->
<?php 
    include "include/config.php";
   
    $ImageDir = "images/";
?>

<!-- iunclude header  -->
<?php include "header.php"; ?>
<div class="home sub container background" id="homepage_banner">
<?php include "navigation_section.php";?>
<?php include "create_btn.php";?>

<!-- render a home page  -->

<?php
    $sql = "SELECT * FROM `countries`";
    $countries = $db->query($sql);    
?>
<div class="cities sub container " id="countries_select_section">
    <div class="title">COME AND JOIN OUR ADVENTURE</div>
        <div class="all_countries flex">
        <?php 
            foreach($countries as $country){
               
                $name = $country["name"];
                $image = $country["image"];
                $link = strtolower($name);
        ?>
                <div class="countries flex">
                    <div class="countries_label">
                        <img src="<?php echo $image;?>" alt="failed" style="width: 300px; height: 300px;">
                        <a href=<?="article.php?country_id=".$link?> class="image_text_on" name="country_id"><?=$name?></a>
                    </div>
                </div>
        <?php
            }
        ?>     
        </div>
    </div>
</div>


<!-- create post -->

<div class="hide" id="create_post">

    <div class="" id="create_section">
        <div class="leave_button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </div>
        <label>Create Your New Post</label>
        <!-- create a form to input the content of the post by user -->
        <form action="upload.php" method="post" enctype="multipart/form-data" id="new_post_form">
            <!-- upload photo to database -->
            <div class="previewImage">
                <img id="file-ip-1-preview" style="display: none">
            </div>
            <!-- <img class="previewImage" src="#" alt="previewImage"/> -->
            <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
            
            <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"];?>">
            <label class="input-sizer stacked">
                <span>Text: </span>
                <textarea type="text" name="uploadContent" id="postContent" oninput="this.parentNode.dataset.value = this.value" rows="1" placeholder="hi"></textarea>
            </label>

            <div class="uploadArea">
                <label>
                    <input type="file" name="uploadImage" id="file-ip-1" accept="image/*" onchange="showPreview(event);">Choose File
                </label>
                <input type="submit" name="submitImage" value="Upload">
            </div>
            <!-- upload text -->
        </form>
    </div>
</div>

<?php 
    $rowperpage = 3;
    $allcount_post_sql = "SELECT count(*) FROM `posts`";
    $allcount_res = $db->query($allcount_post_sql)->fetchColumn();
   
?>

<!-- generate a post section from the posts database -->
<?php
    $sql = "SELECT * FROM `posts` ORDER BY `posts`.`uploaded_time` DESC LIMIT $rowperpage";
    $posts = $db->query($sql);
?>
<!-- <div class="cities sub container " id="posts_section">
    
    <div class="title" id="posts">Latest Post</div>
    <div class="all_posts flex"> -->
        <?php 
         include "getData.php";
        /*
            foreach($posts as $post){
                $post_id = $post["id"];
                $user_id = $post["user_id"];
                $user_name = $post["user_name"];

                if($user_id == null){
                    $user_id = '5';
                }
                if($user_name == null){
                    $user_id = "USER";
                }
                $content = $post["post_content"];
                $image = $post["image_file_name"];
                $relativePath = end(explode("phase2/", $image));

                $upload_time = $post["uploaded_time"];
                $relativeTime = explode(" ", $upload_time)[0];

                $current_user_id = $_SESSION["user_id"];
               
                $sql = "SELECT img FROM `user_account` WHERE `user_id`='$user_id'";
                $current_profile = $db->query($sql);
                foreach($current_profile as $current){
                    $profile_img = $current["img"];
                }


        ?>
            <div class="posts flex" id=post_<?php echo $post_id; ?>>
                
                <div class="upper_section">
                    <div class="user_icon" style="align-self: flex-start;">
                        <img src="<?php echo "images/profile_".$profile_img.".jpg";?>" style="width: 50px; height: 50px; border-radius:50%;">
                    </div>
                    <div class="content_section">
                        <div class="user_account">
                            <?php echo $user_name;?>
                            <span><?=$relativeTime?></span>
                        </div>
                        <div class="user_text">
                            <?php echo $content;?>
                        </div>
                    </div>
                </div>
               
                <div class="bottom_section">
                    <div class="user_image">
                        <img src="<?php echo $relativePath; ?>" alt="failed">
                    </div>
                    <div class="user_interact">    
                        <div class="like_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                        </div>
                        <div class="comment_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path></svg>
                        </div>
                        <div class="more_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle><circle cx="12" cy="5" r="1"></circle></svg>
                        </div>
                    </div>
                </div> 
                <!-- this comment section will be display: block after the bottom is clicked -->
                <div class="comment_section">
                    <!-- include comment.php -->
                    <div class="comment_title">Comment</div>
                    <div class="comment_body">
                        <div class="upper_part">
                            <div class="comment_user_icon"></div>
                            <div class="comment_user_name"></div>
                            <div class="comment_time"></div>
                        </div>
                        <div class="bottom_part">
                            <div class="comment_content"></div>
                            <div class="comment_thumbup"></div>
                            <div class="comment_thumbdown"></div>
                        </div>

                    </div>

                </div>
                <!-- this section will pop up like creating post -->
                <div class="more_section">
                    <!-- delete post -->
                    
                    <form action = "action.php" method = "post" jsf:id="form">
                        <input type="hidden" name="post_id" value='<?php echo $post_id?>'>    
                        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                        <!-- <button type="button" class="edit_button">Edit</button> -->
                        <button type="button" class="edit_button">Edit</button>

                        <div class="change_section">
                           
                            <div class="edit_part">
                                <label class="input-sizer stacked">
                                    <span>Text: </span>
                                    <textarea type="text" name="edit_content" id="edit_content" oninput="this.parentNode.dataset.value = this.value" rows="1"><?php echo $content?></textarea>
                                </label> 
                            </div>
                               
                            <div>

                                <button type="submit" name="edit_post">Edit</button>
                                <button type="submit" name="delete_post">Delete</button>

                            </div>
                       </div>
                    </form>
                </div>  
            </div>
        <?php   
            }
            
        ?>
        */
       
?>
    </div>


</div>

</div>
<!-- <?php include "footer.php" ?> -->
        </div>
    </body>
</html>