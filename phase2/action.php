<?php include "include/config.php"
  
?>

<?php
    
    
    if(isset($_POST["delete_post"])){
        $post_id = $_POST["post_id"];
        
    
        $delete_sql = "DELETE FROM posts WHERE id='$post_id'";
        echo "deleted";
        $delete_succeed = $db->exec($delete_sql);
        
        if($delete_succeed){
            header("index.php");
            if(isset($_REQUEST["destination"])){
                    
                header("Location: mypage.php");
            }else if(isset($_SERVER["HTTP_REFERER"])){
                header("Location: {$_SERVER["HTTP_REFERER"]}");
            }else{
                    /* some fallback, maybe redirect to index.php */
            }
        }
        
    }
    if(isset($_POST["edit_post"])){
        $post_id = $_POST["post_id"];
        $edit_content = $_POST["edit_content"];
        echo $edit_content;
        // $content = htmlspecialchars(utf8_encode($_POST["editContent"]));
        $edit_sql = "UPDATE `posts` SET `post_content`='$edit_content' WHERE `id`='$post_id'";
        
        if($db->exec($edit_sql)){
            
            echo "yes";
            if(isset($_REQUEST["destination"])){
                header("Location: edit.php?post_id=$post_id");
            }else if(isset($_SERVER["HTTP_REFERER"])){
                
                header("Location: {$_SERVER["HTTP_REFERER"]}");
            }else{
               
                /* some fallback, maybe redirect to index.php */
            }
        }
    }



?>