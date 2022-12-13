<?php include "include/config.php";?>

<?php
   
    if(isset($_POST["getData"])){
        
        $start = (int)$_POST["start"];
        $limit = (int)$_POST["limit"];

        $nRows = $db->query("SELECT count(*) FROM `posts`")->fetchColumn(); 
        

        $sql = "SELECT * FROM `posts` ORDER BY `uploaded_time` DESC LIMIT $start, $limit";
       
        $posts = $db->query($sql);
        
       
       
        if(true){
           
            $response = "";
            foreach($posts as $post) {
                
                $post_id = $post["id"];
                $user_id = $post["user_id"];
                $user_name = $post["user_name"];

                if($user_id == null){
                    $user_id = '5';
                }
                if($user_name == null){
                    $user_name = "USER";
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
                if($profile_img == null){
                    $profile_img = "1";
                }
                $profile_img_route = "images/profile_".$profile_img.".jpg";


                $first_content = explode(" ", $content);
                $data = "";
                $other_content = null;
                
                for ($i=0; $i < 5; $i++){
                    if($first_content[$i] == null){
                        $first_content[$i] = "";
                    }
                    else{
                        $data .= $first_content[$i]." ";
                    }  
                }

                
                for ($i=5; $i < count($first_content); $i++){
                    $other_content .= $first_content[$i]." ";
                }
               
               
               
                

            ?>
               
            <?php
           
                $response .= 
                '  <div class="posts flex" id=post_'.$post_id.'>
                
                <div class="upper_section">
                    <div class="user_icon" style="align-self: flex-start;">
                        <img src="'.$profile_img_route.'" style="width: 50px; height: 50px; border-radius:50%;">
                    </div>
                    <div class="content_section">
                        <div class="user_account">
                            ' .$user_name.'

                        </div>
                      
                    </div>
                </div>
               
                <div class="bottom_section">
                    
                    <div class="user_image">
                        <img src="'.$relativePath.'" alt="failed">
                    </div>
                   
                    
                    <div class="user_interact">
                        <div class="icon_section">
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
                        <div class="content">
                            <div class="user_text">
                                <div>' .$user_name.' <span>'.$data.'</span><button type="button" id="post_more_content" onclick="show_more_post();">...more</button></div>
                            </div>
                            <div class="other_text" id="other_text" style="display:none">'.$other_content.'</div>
                            <div class="time">'.$relativeTime.'</div>
                        </div>
                       
                    </div>
                </div> 
                <!-- this comment section will be display: block after the bottom is clicked -->
                
                <!-- this section will pop up like creating post -->

            </div>
            ';

            }       
           
            exit($response);

        }
        else{
       
            exit('reachedMax');
        }


    }





?>