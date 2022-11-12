<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to Travel</title>
    <!-- <script src="https://gist.github.com/DavidWells/18e73022e723037a50d6.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src="script.js"></script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW47wcJLNRymDnxasunFKdKmr0BL0mPnA&callBack=initMap"></script>
    <script src="map.js"></script>
    <script>
        $(function(){
            $("#header").load("header.html"); 
            // $("#footer").load("footer.html"); 
        });


    </script>
</head>
<body>

   <div class="main container">
        <div class="home sub container">
            <div><?php
                include("header.html")?></div>
            <div class="home title">Malaysia</div>
          
        </div>
        <div class="cities sub container">
            <div class="quote">
                <div class="title">
                    <a href="" class="typewrite" data-period="2000" data-type='[ "What is Your imagination of Malaysia?" ]'>
                        <div style="display: flex;">
                            <span class="wrap"></span>
                            <span class="wrap" style="padding-left: 3px; color: rgb(204, 169, 169)"></span>
                        </div>
                    </a>
                   
                </div>
                <div class="shortIntro"><p>A place that could occur you the Chinese history.</p></div>
                <div class="shortIntro"><p>An cultural fusion island.</p></div>
                <div class="shortIntro"><p>The impact of colonization.</p></div>
            </div>
        </div>
        <div class="cities sub container">
            <div class="allBoxes">
                <div class="box">
                    <a href="penang.html" class="link">
                        <div class="photo">
                            <img src="images/2019-07-04-11-44-30.jpg">
                        </div>
                        <div class="name"><span>#Penang</span></div> 
                    </a>
                </div>
                <div class="box">
                
                    <a href="sabah.html" class="link">
                        <div class="photo">
                            <img src="images/IMAG3471.jpg">
                        </div>
                        <div class="name"><span>#Sabah</span></div>
                    </a>
                </div>
                <div class="box">
                    <a href="melaka.html" class="link">
                        <div class="photo">
                            <img src="images/2019-07-05-23-09-14.jpg">
                        </div>
                        <div class="name"><span>#Melaka</span></div>
                    </a>
                </div>
            </div>
        </div>

        <div style="width: 100%; height:70vh; margin-bottom: 100px; z-index: 1000;" id="map"></div>
        <div class="footer sub container">
            
        </div>
   </div>

</body>
</html>