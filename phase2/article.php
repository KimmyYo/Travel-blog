<?php include "include/config.php";?>
<?php

    $country = $_GET["country_id"];
    
    if(isset($country)){
        // create country home page
        include "header.php";
?>
        <div class="home sub container background" id="homepage_banner">
<?php
        include "navigation_section.php";


        // create quote section
        // fetch data from database
        $upper = strtoupper($country);
        $sql = "SELECT * FROM `countries` WHERE `name`='$upper'";
        $quotes = $db->query($sql);

        foreach($quotes as $quote){
            $type_write = $quote["type_write"];
            $three_quote = $quote["quotes"];
            $three_cities = $quote["cities"];

        }
        // manipulate the quotes
        $quote_array = explode(". ", $three_quote);
        $city_array = explode(", ", $three_cities);

        
       
?>
  
        <div class="cities sub container">
            <div class="quote">
                <div class="title">
                    <a href="" class="typewrite" data-period="2000" data-type='[ "<?php echo "".$type_write;?>" ]'>
                        <div style="display: flex;">
                            <span class="wrap"></span>
                            <span class="wrap" style="padding-left: 3px; color: rgb(204, 169, 169)"></span>
                        </div>
                    </a>
                   
                </div>
                <div class="shortIntro"><p><?php echo $quote_array[0];?></p></div>
                <div class="shortIntro"><p><?php echo $quote_array[1];?></p></div>
                <div class="shortIntro"><p><?php echo $quote_array[2];?></p></div>
            </div>
        </div>
        <div class="cities sub container" id="polarid_section" >
            <div class="allBoxes">
<?php
        

        for ($x = 0; $x < sizeof($city_array); $x++) {
            $country_table = $country."_info";
            
            $sql = "SELECT * FROM `$country_table` WHERE `city_name`='".$city_array[$x]."' ";
            $get_city_info = $db->query($sql);
            
            foreach($get_city_info as $info){
                
                $city_home_image = $info["home_image"];
                $city_name = $info["city_name"];
                
                $city_subpage_route = "city_subpage.php?city_name=".$city_name."&country_name=".$country;
                
            ?>
                <div class="box">
                    <a href="<?php echo $city_subpage_route;?>" class="link">
                        <div class="photo">
                            <img src="<?php echo $city_home_image;?>">
                        </div>
                        <div class="name"><span><?php echo "#".$city_array[$x];?></span></div> 
                    </a>
                </div>
            <?php 
            }
        }
    }
?>
<?php include "footer.php" ?>
        </div>
    </body>
</html>