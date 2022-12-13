<!-- insert a new row of new posts, with id, post_text, images -->

<?php include "include/config.php";?>
<?php 
    
    
    $uploadContent = $_POST["uploadContent"];
    // $sql = "SELECT * FROM `session_data` LIMIT 1";
    
    // $get_session_data = $db->query($sql);
    
    // foreach($get_session_data as $user){
    //     $email = $_SESSION["email"];
    //     $user_id = $_SESSION["user_id"];
      
    // }
    // echo $email;
    // echo $user_id;
 
    $email = $_SESSION["email"];
    $user_id = $_SESSION["user_id"];
    
    if(empty($uploadContent)){
        echo "we got empty again";
    }
    else{
        if ($_FILES['uploadImage']){
            echo "updated";
        }

        $targetDir = "images/";
        $fileName = basename($_FILES["uploadImage"]["name"]);
        $targetFilePath = 'images/'.$fileName;

        echo $targetFilePath;
        $fileTemp =  $_FILES["uploadImage"]["tmp_name"];
        echo $fileTemp;
        $getImageType = end(explode(".", $fileName));

        if($_SERVER["REQUEST_METHOD"] == 'POST'){

            
            
            $allowedType = array("jpeg", "jpg", "gif", "png");
            if (in_array($getImageType, $allowedType)){
               
                if(move_uploaded_file($fileTemp, $targetFilePath)){  
                    
                    $get_img = $db->query("SELECT * FROM `user_account` WHERE `user_id`='$user_id'");
                 
                    foreach($get_img as $id){
                        $user_id = $id["img"];
                        $user_name = $id["user_name"];
                       
                    }
                    if($user_id){
                        $sql = "INSERT INTO `posts`(`image_file_name`, `post_content`, `uploaded_time`, `user_id`, `user_name`) VALUES ('$targetFilePath', '$uploadContent', NOW(), '$user_id', '$user_name')";
                        
                        $insert = $db->exec($sql);
                        
                        
                        if(isset($_REQUEST["destination"])){
                        
                            header("Location: {$_REQUEST["destination"]}");
                        }else if(isset($_SERVER["HTTP_REFERER"])){
                            header("Location: {$_SERVER["HTTP_REFERER"]}");
                        }else{
                           
                             /* some fallback, maybe redirect to index.php */
                        }
                       
                    }else{
                        echo "no_user_id";
                    }
                    
                   
                
                }    
                // else{
                //     echo "false";
                // }
        

              
            }
            else{
                echo "<script>
                        alert('Not Support Image Format!');
                        window.location.href = 'index.php';  
                    </script>";
            }
            
        }
     
    }
    
?>
 