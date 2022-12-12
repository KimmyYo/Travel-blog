<?php include "include/config.php"?>

<div class="edit_post hide">               
    <div class="edit_section">
        <div class="leave_button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </div>
        <label>Edit Your Post</label>
        
        <!-- create a form to input the content of the post by user -->
       
    </div>

</div>


<?php

    $post_id = $_POST["id"];?>
     <script>
        alert($post_id);
    </script>
    
<?php
   
    $content = htmlspecialchars(utf8_encode($_POST["editContent"]));
    $edit_sql = "UPDATE `posts` SET `post_content`='new edit content' WHERE id='$post_id'";
    
    
    if($db->exec($edit_sql)){
        if(isset($_REQUEST["destination"])){
            echo "here";
            header("Location: {$_REQUEST["destination"]}");
        }else if(isset($_SERVER["HTTP_REFERER"])){
            echo "hi";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }else{
             /* some fallback, maybe redirect to index.php */
        }
    }
?>