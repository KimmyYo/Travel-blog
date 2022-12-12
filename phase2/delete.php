<?php include "include/config.php"?>
<?php
    
    $post_id = $_POST["post_id"];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "here";
        echo "id is". $post_id;

        $delete_sql = "DELETE FROM posts WHERE id='$post_id'";
        echo "deleted";
        $delete_succeed = $db->exec($delete_sql);
        
        if($delete_succeed){
            if(isset($_REQUEST["destination"])){
                    
                header("Location: {$_REQUEST["destination"]}");
            }else if(isset($_SERVER["HTTP_REFERER"])){
                header("Location: {$_SERVER["HTTP_REFERER"]}");
            }else{
                 /* some fallback, maybe redirect to index.php */
            }
        }
    }
?>