<?php include "include/config.php";
include "header.php";?>


<?php

    $city_name = $_GET["city_name"];
    $country_name = $_GET["country_name"];
    
    

    $country_table= $country_name."_info";

    $sql = "SELECT * FROM `$country_table` WHERE `city_name`='$city_name'";
    $get_article = $db->query($sql);
    
    foreach($get_article as $detail){
        
        $title = $detail["title"];
        $quote = $detail["quote"];
        $article = $detail["article"];
        

    }

    $separate_quote = explode(".", $quote);
    
    // get article 
    
?> 
    <div class="main container">
    <!-- <div class="home sub container background" id="homepage_banner"> -->
<?php

    include "navigation_section.php";

?>

    <div class="the_article">
            <article>
                <div class="title"><?php echo $title;?></div>
                <div class="content">
                    <div class="quote"><?php echo $separate_quote[0];?></div>
                    <div class="quote"><?php echo $separate_quote[1];?></div>
                    <div class="quote"><?php echo $separate_quote[2];?></div>
                </div>
                <!-- article start -->
                <?php echo $article;?>
            </article>
        </div>
    

    <?php include "footer.php" ?>
        </div>
    </body>
</html>


