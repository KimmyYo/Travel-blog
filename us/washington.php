<!DOCTYPE html>
<!-- main page -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="A travel website.">
    <meta property="og:site_name" content="Travel to Travel">
    <meta property="og:locale" content="zh_EN">
    <meta property="og:url" content="https://kimmyyo.github.io/Travel-blog/index.php">
    <meta property="og:image" content="https://kimmyyo.github.io/Travel-blog/images/IMAG3471.jpg">
    <title>Travel to Travel</title>
    <!-- <script src="https://gist.github.com/DavidWells/18e73022e723037a50d6.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <script defer src="../script.js"></script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW47wcJLNRymDnxasunFKdKmr0BL0mPnA&callBack=initMap"></script>
    <script src="map.js"></script>
</head>
<body>

   <div class="main container">
        <!-- start of navbar  -->
        <div class="home sub container background" id="washington_banner">
            <nav class="main_navbar" id="main_navbar">
                <div class="navItem">
                    <div class="logo">
                        <a href="../index.php">
                            <img src="../images/navbar_logo_word.png">
                        </a>
                    </div>
                </div>
        
                <div class="navItem">
                    <div class="anchor" id="main_menu_1">
                        <div class="main_menu" >
                            <div>Destination</div>
                            <div class="drop_down icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="sub_menu">
                            <ul class="choices" id="sub_menu_1">
                                <li class="country_name" id="sub_country_1">
                                    <a href="index.php">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                                <path d="M3 21h18"></path>
                                            </svg> 
                                        </div>
                                        <div>US</div>
                                    </a>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </li>
                                <ul class="city" id="sub_sub_city_1">
                                    <li class="city_name">
                                        <a href="newyork.php">
                                            <div >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div>New York</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="washington.php">
                                            <div >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>Washington</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="philadelphia.php">
                                            <div >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>Philadelphia</div>
                                        </a>
                                    </li>
                                </ul>
                                
                                <li class="country_name" id="sub_country_2">
                                    <a href="../malaysia/">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                                <path d="M3 21h18"></path>
                                            </svg> 
                                        </div>
                                        <div>Malaysia</div>
                                    </a>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </li>
                                <ul class="city" id="sub_sub_city_2">
                                    <li class="city_name">
                                    <a href="../malaysia/penang.php">
                                        <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div>Penang</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../malaysia/sabah.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>Sabah</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../malaysia/melaka.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div>Melaka</div>
                                        </a>  
                                    </li>
                                </ul>
                                <li class="country_name" id="sub_country_3">
                                    <a href="../uk/">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                                <path d="M3 21h18"></path>
                                            </svg> 
                                        </div>
                                        <div>United Kingdom</div>
                                    </a>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </li>
                                <ul class="city" id="sub_sub_city_3">
                                    <li class="city_name">
                                        <a href="../uk/Edinburgh.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div> Edinburgh</div>
                                        
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../uk/London.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div>London</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../uk/York.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>York</div>
                                        </a>
                                    </li>
                                </ul>
                                <li class="country_name" id="sub_country_4">
                                    <a href="../china/ch_index.php">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z"></path>
                                                <path d="M3 21h18"></path>
                                            </svg>
                                        </div>
                                        <div>China</div>
                                    </a>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </li>
                                <ul class="city" id="sub_sub_city_4">
                                    <li class="city_name">
                                        <a href="../china/北京.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg> 
                                            </div>
                                            <div>Beijing</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../china/上海.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>Shanghai</div>
                                        </a>
                                    </li>
                                    <li class="city_name">
                                        <a href="../china/甘肅.php">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-arrival" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15.157 11.81l4.83 1.295a2 2 0 1 1 -1.036 3.863l-14.489 -3.882l-1.345 -6.572l2.898 .776l1.414 2.45l2.898 .776l-.12 -7.279l2.898 .777l2.052 7.797z"></path>
                                                    <path d="M3 21h18"></path>
                                                </svg>
                                            </div>
                                            <div>Gansu</div>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <div class="navItem">
                    <div class="anchor" id="main_menu_2">
                        <div class="main_menu" >
                            <div>Travel Tips</div>
                            <div class="drop_down icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="sub_menu">
                            <ul class="choices" id="sub_menu_2">
                                <li class="country_name">
                                    <a href="../tips.php#transportation_tips">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="7" cy="17" r="2"></circle>
                                            <circle cx="17" cy="17" r="2"></circle>
                                            <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                        </svg>
                                        Transportation
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </li>
                                <li class="country_name">
                                    <a href="../tips.php#food_tips">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools-kitchen-2" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3"></path>
                                        </svg>
                                        Food
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </li>
                                <li class="country_name">
                                    <a href="../tips.php#clothing_tips">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shirt-sport" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0"></path>
                                            <path d="M10.5 11h2.5l-1.5 5"></path>
                                        </svg>
                                        Clothing
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
            <div class="sub_navbar" id="sub_navbar">
                <div class="toggle" id="secondary_toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="6" x2="20" y2="6"></line>
                        <line x1="10" y1="12" x2="20" y2="12"></line>
                        <line x1="6" y1="18" x2="20" y2="18"></line>
                    </svg>
                </div>
                <div class="secondary_menu" id="secondary_menu">
                    <div class="close_icon" id="close_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="sub_menu_items">
                        <div class="item">
                            <img src="../images/navbar_logo_word.png" />
                        </div>
                        <div class="item">
                            <div class="select_section">
                                Destination
                                <div class="drop_down icon" id="secondary_drop_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="sub_item_section" id="secondary_sub_sub_menu">
                                <ul class="sub_choices" >
                                    <li class="country_name"><a href="index.php">US</a></li>
                                    <li class="country_name"><a href="../malaysia/">Malaysia</a></li>
                                    <li class="country_name"><a href="../uk/">United Kingdom</a></li>
                                    <li class="country_name"><a href="../china/ch_index.php">China</a></li>
                                </ul>
        
                            </div>
                        </div>
                    
                        <div class="item">
                            <a href="../tips.php">Travel Tips</a>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="home title">Washington</div>
        </div>
        <!--navbar end-->

        <!--Content-->
        <div class="the_article">
            <article>
                <div class="title hidden">Follow the blossoms to Washington DC ~</div>

                <div class="content">
                    <div class="quote hidden">“Make memories in Washington DC by </div>
                    <div class="quote hidden">finding the souls of a nation and seeing all the monuments.”</div>
                </div>

                <div class="content hidden">
                    <div class="sub_title">White House</div>
                    <p class="paragraph">
                        Comparing with other historical establishments in Washington DC, the White House is relatively compact in scale. However, the three-layered building is basically the official residence and workplace for the president of the United States. I can always recall the weird feeling imagine that President Trump is probably somewhere in there, walking around in his bathrobe. Since admission weren’t allowed for visitors, people mainly gather around the south side of the White House, and sometimes you can even see protesters holding banners that propagate their beliefs, which is something quite interesting.
                    </p>
                    <ul class="image flex">
                        <li><img src="images/whitehouse.jpg"></li>
                        <li><img src="images/protester.jpg"></li>
                    </ul>   
                </div>

                <div class="content hidden">
                    <div class="sub_title">Washington Monument</div>
                    <p class="paragraph">
                        The Washington Monument is the highest landmark in Washington DC, and it was built to honor George Washington, the 1st president of the United States. Besides from taking strolls along its surroundings, you can also go up inside the monument itself. The admission tickets are free, but the number of people allowed per day is limited. Therefore, booking online in advance with $1 service fee is strongly suggested if you are planning a visit during the tourist season.
                    </p>
                    <ul class="image flex">
                        <li><img src="images/washingtonmonument.jpg"></li>
                        <li><img src="images/washingtonstatue.jpg"></li>
                    </ul>
                </div>

                <div class="content hidden">
                    <div class="sub_title">Thomas Jefferson Memorial</div>
                    <p class="paragraph">
                        Washington DC is known for its cherry blossom, which was a “gift” from the Japanese government a hundred years ago. The flower season is around the end of March till the middle of April, and the best place to enjoy the scenery is at the Thomas Jefferson Memorial. Just as how it was named, the construction was built in memory of the United States’ 3rd president, who drafted the unanimous Declaration of the thirteen united States of America. The famous quote “All men are created equal”, that most democracy entities promote and follow comes exactly from the declaration.
                    </p>
                    <ul class="image flex">
                        <li><img src="images/tfmemorial.jpg"></li>
                        <li><img src="images/tfmemorialstatue.jpg"></li>
                    </ul>
                </div>
                
                <div class="content hidden">
                    <div class="sub_title">Lincoln Memorial</div>
                    <p class="paragraph">
                        The Lincoln Memorial is built to commemorate the 16th president of the United States, Abraham Lincoln, who led America through the Civil War. Upon walking up the staircases, a huge marble of president Lincoln situated in the center of the memorial, with his inaugural address engrave on both sides of the wall. Across the Lincoln Memorial sits the memorial of the Vietnam War and the Korean War. Unlike the other sites, the atmosphere there is rather solemn and you can often see flowers left on the tombs as a remembrance for the soldiers who sacrificed themselves during the war.
                    </p>
                    <ul class="image flex">
                        <li><img src="images/lincolnmemorial.jpg"></li>
                        <li><img src="images/lincolnstatue.jpg"></li>
                        <li><img src="images/vietnamememorialstatue.jfif"></li>
                        <li><img src="images/vietnammemorial.jpg"></li>
                    </ul>
                </div>
            </article>
        </div>
        <!--Content end-->


        <!--footer start-->
        <div class="footer sub container">
            <div class="horizon_part">
                <div class="flex">
                    <ul>
                        <li class="title"><a href="../index.php">Travel to Travel</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <ul>
                        <li class="title">Destination</li>
                        <li><a href="index.php">United State</a></li>
                        <li><a href="../uk/">United Kingdom</a></li>
                        <li><a href="../malaysia/">Malaysia</a></li>
                        <li><a href="../china/ch_index.php">China</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <ul>
                        <li class="title">Travel Tips</li>
                        <li><a href="../tips.php#transportation_tips">Transportaion</a></li>
                        <li><a href="../tips.php#food_tips">Food</a></li>
                        <li><a href="../tips.php#clothing_tips">Clothing</a></li>
                    </ul>
                </div>
                <div class="flex">

                </div>
            </div>
           
            <div class="bottom_part">
                ©copyright
                <div class="icon_section">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
                        </svg>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                            <circle cx="12" cy="12" r="3"></circle>
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                        </svg>
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

   </div>

</body>
</html>
