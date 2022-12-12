<?php

    include "include/config.php";
    
    $user_id = $_SESSION["user_id"];
    
    $check_sql = "SELECT * FROM `user_account` WHERE `user_id`='$user_id'";
    
    $get_login_ornot = $db->query($check_sql);
   

    
    foreach($get_login_ornot as $login_user_info){

        if($login_user_info["user_email"] == $_SESSION["email"]){
            
            $img_route = 'images/'.'profile_'.$login_user_info["img"].'.jpg';
            $img = '<img src="'.$img_route.'" / id="profile_img">';
            $js =  
            '<script type="text/javascript">
                jQuery(document).ready(function() {
                    $("#login_label").css("display", "none");
                    jQuery("#profile_photo").append(' . json_encode($img).');
                    $("#create_button").css("display", "block");
                });
                
            </script>';
            echo $js;
      
            break;
        }

    }
        
    
   

?>