-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 12 月 14 日 05:34
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `Travel-blog`
--

-- --------------------------------------------------------

--
-- 資料表結構 `china_info`
--

CREATE TABLE `china_info` (
  `id` int(11) NOT NULL,
  `city_name` longtext NOT NULL,
  `home_image` longtext NOT NULL,
  `title` longtext NOT NULL,
  `quote` longtext NOT NULL,
  `article` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `china_info`
--

INSERT INTO `china_info` (`id`, `city_name`, `home_image`, `title`, `quote`, `article`) VALUES
(1, 'beijing', 'images/bejing_banner.jpg', 'A place with deep cultural heritage.', 'Beautiful architecture. \r\nFull of history.', '<div class=\"content v\">                 <div class=\"sub_title\">Palace Museum</div>                 <p class=\"paragraph\">                     I have been to Taiwan National Palace Museum, so I thought China’s one is just like that.                      However, it’s totally different!                      It’s so huge and the view is incredible! The structure there is hard to describe by the words but seeing yourself!                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Palace1.JPG\">                     </li>                     <li>                         <img src=\"images/Palace2.jpg\">                     </li>                     <li>                         <img src=\"images/Palace3.jpg\">                     </li>                     <li>                         <img src=\"images/Palace4.JPG\">                     </li>                 </ul>                </div>              <div class=\"content \">                 <div class=\"sub_title\">The Great Wall of China</div>                 <p class=\"paragraph\">                     Fortunately, the day I went there the snow was not yet melting!                      Therefore, we could build a snow man on The Great Wall of China!                      In addition, the stair there was very high so it’s hard to take one step to the next step.                  </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Great Wall1.jpg\">                     </li>                     <li>                         <img src=\"images/Great Wall2.jpg\">                     </li>                     <li>                         <img src=\"images/Great Wall3.jpg\">                     </li>                     <li>                         <img src=\"images/Great Wall4.jpg\">                     </li>                 </ul>                </div>              <div class=\"content \">                 <div class=\"sub_title\">The Temple of Heaven</div>                 <p class=\"paragraph\">                     The Temple of Heaven displays the unique meanings and symbolic expressions of traditional Chinese culture.                      And the building is quite different between the others from Beijing.                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Heaven1.jpg\">                     </li>                     <li>                         <img src=\"images/Heaven2.jpg\">                     </li>                      </ul>                                        </div>'),
(2, 'gansu', 'images/gansu_banner.jpg', 'A place full of magnificent views and minority culture.', 'Different terrain. \r\nImpressive shock with the wise accient culture. \r\nnight becomes dark at 9 pm. ', '<div class=\"content \">                 <div class=\"sub_title\">Jiayu Pass</div>                 <p class=\"paragraph\">                     A majestic scene that I saw. It’s a stronghold in the ancient day when people went on “Silk Way”.                      Therefor we can saw a big wall which protected the people staying inside and some entertainment stages and so on.                      Moreover, the view outside the castle is quite impressive!                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Jiayu Pass1.jpg\">                     </li>                     <li>                         <img src=\"images/Jiayu Pass2.jpg\">                     </li>                     <li>                         <img src=\"images/Jiayu Pass3.jpg\">                     </li>                     <li>                         <img src=\"images/Jiayu Pass4.jpg\">                     </li>                     <li>                         <img src=\"images/Jiayu Pass5.jpg\">                     </li>                 </ul>                </div>              <div class=\"content \">                 <div class=\"sub_title\">Danxia Zhangye National Geological Park</div>                 <p class=\"paragraph\">                     Incredible views that I saw! It’s the first time I realize that world has this kind of terrain.                      And the wind there is really big that everything on us gonna fly away.                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Zhangye1.jpg\">                     </li>                     <li>                         <img src=\"images/Zhangye2.jpg\">                     </li>                     <li>                         <img src=\"images/Zhangye3.jpg\">                     </li>                     <li>                         <img src=\"images/Zhangye4.jpg\">                     </li>                     <li>                         <img src=\"images/Zhangye5.jpg\">                     </li>                 </ul>                </div>              <div class=\"content \">                 <div class=\"sub_title\">Mogao Grottoes</div>                 <p class=\"paragraph\">                     It’s hard to think that many years ago the ancient people have the technic to build those magnificent sculpture.                      When I saw those drawing and sculpture, I just realized that there are too many thing outside the world looking forward to being found out by us!                  </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Mogao Grottoes1.jpg\">                     </li>                     <li>                         <img src=\"images/Mogao Grottoes2.jpg\">                     </li>                     <li>                         <img src=\"images/Mogao Grottoes3.jpg\">                     </li>                      </ul>                                        </div>              <div class=\"content \">                 <div class=\"sub_title\">Dunhuang Desert</div>                 <p class=\"paragraph\">                     The place I want to go to the most at that trip in Gansu.                      Desert, a boundless place where people get in would feel helpless.                      And that’s the truth of the natural strength. The only little disappointment is that there were to many tourists out there, and the camels were meagre cause they walk too much and some of them even yelling loudly to the people.                      I felt pitiful to them.                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/Desert1.jpg\">                     </li>                     <li>                         <img src=\"images/Desert2.jpg\">                     </li>                     <li>                         <img src=\"images/Desert3.jpg\">                     </li>                     <li>                         <img src=\"images/Desert4.jpg\">                     </li>                     <li>                         <img src=\"images/Desert5.jpg\">                     </li>                      </ul>                                        </div>              <div class=\"content \">                 <div class=\"sub_title\">Lanzhou city and views</div>                 <p class=\"paragraph\">                     Though Gansu is a very inner-land province, the city there is still prosperity.                      Moreover, they also have MRT there!!!                      And the views we pass by when went to the other places were really pretty!                  </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/view1.jpg\">                     </li>                     <li>                         <img src=\"images/view2.jpg\">                     </li>                     <li>                         <img src=\"images/view3.jpg\">                     </li>                     <li>                         <img src=\"images/view4.jpg\">                     </li>                     <li>                         <img src=\"images/view5.jpg\">                     </li>                                                  </ul>             </div>'),
(3, 'shanghai', 'images/shanghai_banner.jpg', 'A global city for finance, innovation, commerce, and trade.', 'A morden city. \r\nColorful nightlife. \r\nQick tempo city. ', '<div class=\"content \">             <div class=\"sub_title\">Wukang Road</div>             <p class=\"paragraph\">                 Everyone’s impression of Shanghai might be prosperous city and hubbub urban block.                  However, here in Wukang Road you can only feel pleased and low tempo environment where are many residences live around there.                  Moreover, the side walk there is really clean and it\'s really quite also!                 Sometimes, you may see some exquisite shops and brunch restaurants in the old building.                  Overall, the hole environment let people feel comfortable and chill.             </p>             <ul class=\"image flex\">                 <li>                     <img src=\"images/wukang road1.jpg\">                 </li>                 <li>                     <img src=\"images/wukang road2.jpg\">                 </li>                 <li>                     <img src=\"images/wukang road3.jpg\">                 </li>                 <li>                     <img src=\"images/wukang road5.jpg\">                 </li>             </ul>            </div>          <div class=\"content \">             <div class=\"sub_title\">Brunch</div>             <p class=\"paragraph\">                 In Wukang Road there is a nice brunch restaurant I recommend you.                 It’s called LOKAL.                  The payment there is not that cheep but the quantity and quality are perfect!                 If you have a chance to go there, I strongly recommend you to have a great meal there!             </p>              <ul class=\"image flex\">                 <li>                     <img src=\"images/brunch1.jpg\">                 </li>                 <li>                     <img src=\"images/brunch2.jpg\">                 </li>                 <li>                     <img src=\"images/brunch3.jpg\">                 </li>             </ul>            </div>          <div class=\"content \">             <div class=\"sub_title\">Thames Town</div>             <p class=\"paragraph\">                 An exotic place with many England architectures.                  There is a famous library there, it included many kinds of books.                  And the feature of the library is its directory, everywhere is full of books.              </p>             <ul class=\"image flex\">                 <li>                     <img src=\"images/Thames Town1.jpg\">                 </li>                 <li>                     <img src=\"images/Thames Town2.jpg\">                 </li>                 <li>                     <img src=\"images/Thames Town3.jpg\">                 </li>                 <li>                     <img src=\"images/Thames Town4.jpg\">                 </li>              </ul>                                </div>          <div class=\"content \">             <div class=\"sub_title\">Guangfulin Cultural Site Park</div>              <p class=\"paragraph\">                 A place with different kind of countries’ buildings and the ancient civilization which initially confirmed in scientific archaeology.                  It’s hard to think that in a busy city having an ancient civilization.                  In addition, there are many museums which combine modern audio-visual technology to design the archaelolgical memory of Guangfulin.             </p>              <ul class=\"image flex\">                 <li>                     <img src=\"images/Guangfulin1.jpg\">                 </li>                 <li>                     <img src=\"images/Guangfulin2.jpg\">                 </li>                 <li>                     <img src=\"images/Guangfulin3.jpg\">                 </li>                 <li>                     <img src=\"images/Guangfulin4.jpg\">                 </li>                 <li>                     <img src=\"images/Guangfulin5.jpg\">                 </li>             </ul>           </div>          <div class=\"content \">             <div class=\"sub_title\">Starbucks Reserve</div>             <p class=\"paragraph\">                 There are only 6 Starbucks Reserve in the world.                  And Shanghai has one which including wine, tea, coffee and the first stop for coffee beans at the Roastery.                  The most attracting thing is that it’s really beautiful!             </p>             <ul class=\"image flex\">                 <li>                     <img src=\"images/Starbucks1.jpg\">                 </li>                 <li>                     <img src=\"images/Starbucks2.jpg\">                 </li>                 <li>                     <img src=\"images/Starbucks4.jpg\">                 </li>                 <li>                     <img src=\"images/Starbucks5.jpg\">                 </li>                 <li>                     <img src=\"images/Starbucks6.jpg\">                 </li>             </ul>                   </div>          <div class=\"content \">             <div class=\"sub_title\">Duoyun Books</div>             <p class=\"paragraph\">                 The world highest library, Duoyun Books, has a wonderful view to see part of Shanghai.                  Moreover, the building there is one of the most important offices in Shanghai.             </p>             <ul class=\"image flex\">                 <li>                     <img src=\"images/Duoyun1.jpg\">                 </li>                 <li>                     <img src=\"images/Duoyun3.jpg\">                 </li>                 <li>                     <img src=\"images/Duoyun4.jpg\">                 </li>                 <li>                     <img src=\"images/Duoyun5.jpg\">                 </li>             </ul>                   </div>          <div class=\"content \">             <div class=\"sub_title\">Night in Shanghai</div>             <p class=\"paragraph\">                 It still has a lively life in the night at Shanghai.                  Shopping, staying at the bar, enjoying the scenery and so on.                  Just come and see!             </p>             <ul class=\"image flex\">                 <li>                     <img src=\"images/night1.jpg\">                 </li>                 <li>                     <img src=\"images/night2.jpg\">                 </li>                 <li>                     <img src=\"images/night3.jpg\">                 </li>                 <li>                     <img src=\"images/night4.jpg\">                 </li>                 <li>                     <img src=\"images/night5.jpg\">                 </li>             </ul>                   </div>');

-- --------------------------------------------------------

--
-- 資料表結構 `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type_write` longtext NOT NULL,
  `quotes` longtext NOT NULL,
  `cities` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `countries`
--

INSERT INTO `countries` (`id`, `name`, `image`, `type_write`, `quotes`, `cities`) VALUES
(1, 'US', 'https://kimmyyo.github.io/Travel-blog/images/us_home.jpg', 'Welcome To America', '\"Got my hands up, they\'re playing my song. I know I\'m gonna be okay. Yeah, it\'s a party in the U.S.A. \"  -- Miley Cyrus, Party in the USA', 'New York, Washington DC, Philadelphia'),
(2, 'UK', 'https://kimmyyo.github.io/Travel-blog/images/uk_view.jpg', 'Welcome To United Kingdom', 'London? The Royal Family? 007? British Style?...  Want to know more about UK\'s cities? Just check the following list~. ', 'London, York, Edinburgh'),
(3, 'MALAYSIA', 'https://kimmyyo.github.io/Travel-blog/malaysia/images/IMAG3471.jpg', 'What is Your imagination of Malaysia?', 'A place that could occur you the Chinese history. A cultural fusion island. The impact of colonization.', 'Penang, Sabah, Melaka'),
(4, 'CHINA', 'https://kimmyyo.github.io/Travel-blog/malaysia/images/IMAG3471.jpg', 'Welcome To China', 'A place with a deep cultural heritage.  Lots of spectacular views.  A big market in the world.', 'Beijing, Gansu, Shanghai');

-- --------------------------------------------------------

--
-- 資料表結構 `malaysia_info`
--

CREATE TABLE `malaysia_info` (
  `id` int(11) NOT NULL,
  `city_name` mediumtext NOT NULL,
  `home_image` longtext NOT NULL,
  `title` longtext NOT NULL,
  `quote` longtext NOT NULL,
  `article` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `malaysia_info`
--

INSERT INTO `malaysia_info` (`id`, `city_name`, `home_image`, `title`, `quote`, `article`) VALUES
(1, 'penang', 'images/2019-07-04-11-44-30.jpg', 'How does penang looks like?', 'A state with Chinese, Malaysian, and Indian culture.\nA place full of delicious food.\nBeautiful street and building while you\'re sightseeing.', '<div class=\"content\">                     <div class=\"sub_title\">Food and Chinese culture</div>                     <p class=\"paragraph\">                         The best impression of Penang is the food and chinese culture in Penang. Cantonese-style noodles, dessert, Burburchacha..., every food I\'d tried is beyond my expectation, with surprise, amaze, and delight.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-03-11-05-04.jpg\">                         </li>                         <!-- <li>                             <img src=\"images/20190702_171245.jpg\">                         </li> -->                         <li>                             <img src=\"images/20190703_095500.jpg\">                         </li>                     </ul>                    </div>                 <div class=\"content \">                     <p class=\"paragraph\">                         Recalling the history textbook that Chinese culture had spread to south-east Asia. I saw so much building, temple and even the language they use are like different dialect of Taiwanese.                         If you got a chance to walk through every alley in Penang, you will be amazed by how beautiful those traditional building look like.                      </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-03-13-57-39.jpg\">                         </li>                         <li>                             <img src=\"images/2019-07-03-15-59-50.jpg\">                         </li>                         <!-- <li>                             <img src=\"images/2019-07-03-19-10-26.jpg\">                         </li> -->                     </ul>                 </div>                 <div class=\"content\">                     <div class=\"sub_title\">Culture Fusion</div>                     <p class=\"paragraph\">                         Penang is also a place with a various of culture, especially Indian, Malaysian, and Chinese culture. Without taking a long filght to different countries, one can experience these culture in a small state.                         One thing that I remembered the most is while I was taking the taxi, different taxi drivers with different races played the radio that belongs to their language. Although it might be something small, it is something that you can\'t easily experience.                         There\'s also a place call \"Small India\", as the name of the area shown, it\'s a region with a great amout of India culture. Not only their food, but also India traditional clothing, Hindu temple.                          As I stepped into the area, I felt like I was standing in India. Moreover, \"Small India\" is not like a absolute region with boundaries, it even let Mosque, temples, Hindu temple lied in the same place.                      </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-02-17-03-41.jpg\">                         </li>                         <li>                             <img src=\"images/20190702_170858.jpg\">                         </li>                     </ul>                 </div>                 <div class=\"content \">                     <div class=\"sub_title\">Georgetown - UNESCO Historic Site</div>                     <p class=\"paragraph\">                         Another attracting area I\'d visited is \"Georgetown\", it\'s an area with soooooo much amazing street art.                          I even got a map to go around every small alley in the town to find those street art.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-04-11-02-56.jpg\">                         </li>                         <li>                             <img src=\"images/2019-07-04-17-52-10.jpg\">                         </li>                         <li>                             <img src=\"images/2019-07-04-11-44-47.jpg\">                         </li>                         <li>                             <img src=\"images/2019-07-04-13-57-40.jpg\">                         </li>                         <!-- <li>                             <img src=\"images/2019-07-04-16-15-51.jpg\">                         </li> -->                         <li>                             <img src=\"images/2019-07-04-16-44-18.jpg\">                         </li>                     </ul>                     <p class=\"paragraph\">                         The trip in Georgetown was like an adventure to find treasure, and always got amazed by another small beautiful things beside.                      </p>                 </div>'),
(2, 'sabah', 'images/IMAG3471.jpg', 'The beautiful island at the east side of Malaysia.', 'A great amount of small island around.\r\nBeautiful ocean.\r\nFood with different taste from main island.', '<div class=\"content \">                     <div class=\"sub_title\">Mosque and mosque</div>                     <p class=\"paragraph\">                         There are many mosques in Sabah with different but amazing style.                         When I was visiting these mosques, I learned Islam culture at the same time.                          What time do they perform the ritual? How do they perform the ritual? The bell rings at the ceratin time sounded so different, and the hijab they wear also vary from different person.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/IMAG3385.jpg\">                         </li>                         <li>                             <img src=\"images/IMAG3435.jpg\">                         </li>                     </ul>                    </div>                 <div class=\"content\">                     <div class=\"sub_title\">Riding scooter</div>                     <p class=\"paragraph\">                         It\'s easy to ride the bike to different sightseeing spots in Sabah. Me and my friend rent a scooter for 3 days. At the time I don\'t have a scooter license, so I was the one who direct the driver.                          However, it\'s some how not easy to understand how was the pattern of the road, so it\'s kind of mess when we try to go to somewhere. But still, it\'s a convenient way to travel in Sabah.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/IMAG3463.jpg\">                         </li>                         <li>                             <img src=\"images/2019-06-29-20-20-39.jpg\">                         </li>                     </ul>                        </div>                 <div class=\"content\">                     <div class=\"sub_title\">Mengalum Island</div>                     <p class=\"paragraph\">                         There are so many island around Sabah, we chose Mengalum Island to travel.                         We took a boat from main island to there, to go snorkeling.                         It was my first time trying snorkeling, and it was also my first time seeing how beautiful the marine creatures are.                          Corals, clown fish, every creature I expected to find in the ocean all showed in my front.                          There\'s also lifeguard beside us, so glad that he took many fantastic pictures for us.                          Funny thing was that at the time we had to go back to the beach, I just couldn\'t approach to our ship, \'cause the wave push me away from our ship.                          Hopefully the lifeguard brought us back.                          The beach in Mengalum Island was also amazing, clear ocean water, white and shiny sand, swing lying on the beach. Fely like the world most beautiful scenenary was right in frout of me.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-06-30-09-27-28.jpg\">                         </li>                         <li>                             <img src=\"images/2019-06-30-09-25-01.jpg\">                         </li>                      </ul>                                        </div>'),
(3, 'melaka', 'images/2019-07-05-23-09-14.jpg', 'Melaka, it\'s Melaka', 'History sites of colonization.\r\nAmazing night.\r\nMusic, red, and colorful.', '<div class=\"content \">                     <div class=\"sub_title\">All about history.</div>                     <p class=\"paragraph\">                         There were a great amout of historic heritage sites in Melaka, like Europe style buildings.                          You can feel the colonization heritage once you step into Melaka.                         It\'s like a combination of British style and Malaysian style.                      </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-05-09-09-10.jpg\">                         </li>                         <li>                             <img src=\"images/2019-07-05-10-58-46.jpg\">                         </li>                         <!-- <li>                             <img src=\"images/2019-07-05-10-29-39.jpg\">                         </li> -->                      </ul>                                         </div>                 <div class=\"content \">                     <div class=\"sub_title\">The Melaka Night.</div>                     <p class=\"paragraph\">                         At the moment I closed the door of the taxi, I told my friend, \"Would you like to come out again after we put all our thing back?\"                         Because the night in Melaka was sooooooooo attractive, with colorful lights decoration, street artist singing familiar Chinese song, old building.                          We walk back to the same destination, and fall into Melaka again.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/2019-07-05-19-57-01.jpg\">                         </li>                         <li>                             <img src=\"images/20190705_230818.jpg\">                         </li>                         <li>                             <img src=\"images/IMAG3541.jpg\">                         </li>                         <li>                             <img src=\"images/20190705_231425.jpg\">                         </li>                       </ul>                                         </div>');

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image_file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_time` datetime NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`id`, `image_file_name`, `post_content`, `uploaded_time`, `user_id`, `user_name`) VALUES
(24, 'images/2019-07-04-11-44-30.jpg', 'thisg', '2022-12-10 23:59:26', '3', '0'),
(25, 'images/2019-07-04-11-44-47.jpg', 'hillep', '2022-12-11 00:01:19', '3', '0'),
(26, 'images/2019-07-04-11-02-56.jpg', 'new post', '2022-12-11 00:12:15', '5', '0'),
(28, 'images/2019-07-03-13-57-39.jpg', 'ad ne', '2022-12-11 00:15:38', '5', '0'),
(29, 'images/2019-07-04-11-44-47.jpg', 'ejiogwe\r\nnew post', '2022-12-11 00:17:16', '5', '0'),
(30, 'images/2019-07-04-13-57-40.jpg', 'hiela', '2022-12-11 00:19:09', '5', '0'),
(58, 'images/2019-07-05-23-09-14.jpg', 'new post', '2022-12-11 02:23:31', '2', '0'),
(59, 'images/2019-07-05-09-09-10.jpg', 'hi', '2022-12-11 11:14:09', '3', '0'),
(60, 'images/2019-07-05-10-58-46.jpg', 'new i edit the post', '2022-12-11 11:17:29', '3', 'Kimmy Yo'),
(62, 'images/2019-07-04-16-15-51.jpg', 'my new post', '2022-12-11 13:47:45', '3', 'Kimmy Yo'),
(64, 'images/2019-07-03-15-59-50.jpg', 'my new article can be write through this one', '2022-12-11 15:31:39', '3', 'Kimmy Yo'),
(65, 'images/2019-07-04-17-52-10.jpg', 'NEw post newo ne', '2022-12-11 22:17:06', '3', 'Kimmy Yo'),
(68, 'images/截圖 2022-10-04 上午10.23.17.png', 'my new post', '2022-12-11 23:27:18', '4', 'web'),
(69, 'images/2019-07-04-16-44-18.jpg', 'hey new post new edit\r\nhere ', '2022-12-12 01:04:30', '1', 'Kimmy Yo'),
(71, 'images/smoothing_img.jpg', 'auntie', '2022-12-12 20:53:34', '3', 'hello'),
(72, 'images/2019-07-03-11-05-04.jpg', 'new post to that', '2022-12-13 00:31:33', '1', 'Kimmy Yo'),
(73, 'images/bit_plane_img.jpg', 'I create a new post with a really long text here to text if it works or not. \r\nI create a new post with a really long text here to text if it works or not. \r\nI create a new post with a really long text here to text if it works or not. \r\n\r\nnew post with new thing', '2022-12-13 01:21:02', '1', 'Kimmy Yo'),
(75, 'images/mean_img.jpg', 'this is the image that we usually use in DIP class. Her name is Lenna.\r\nYou can use filter, FFT, DFT, to her, and make her looks different.\r\nThis is the result of mean filtering', '2022-12-13 12:35:38', '1', 'Kimmy Yo'),
(78, 'images/your_image.jpg', 'hello auntie my auntie', '2022-12-13 17:27:58', '3', 'hello'),
(79, 'images/2019-07-05-10-58-46.jpg', 'This is a memorial building in Melaka', '2022-12-14 01:18:29', '1', 'Kimmy Yo'),
(80, 'images/IMAG3471.jpg', 'A beautiful beach in Sabah. I remembered I pointed the wrong road, so we took extra time to the beach. But the waiting for this amazing scenery is valuable.\n\nthis\n : ) I\'ve', '2022-12-14 12:13:59', '1', 'Kimmy Yo');

-- --------------------------------------------------------

--
-- 資料表結構 `session_data`
--

CREATE TABLE `session_data` (
  `session_id` int(11) NOT NULL,
  `session_email` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `session_data`
--

INSERT INTO `session_data` (`session_id`, `session_email`) VALUES
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(4, 'web@email.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(3, 'work@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(1, 'kimmy@abc.com'),
(5, 'web@abc.com');

-- --------------------------------------------------------

--
-- 資料表結構 `uk_info`
--

CREATE TABLE `uk_info` (
  `id` int(11) NOT NULL,
  `city_name` longtext NOT NULL,
  `home_image` longtext NOT NULL,
  `title` longtext NOT NULL,
  `quote` longtext NOT NULL,
  `article` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `uk_info`
--

INSERT INTO `uk_info` (`id`, `city_name`, `home_image`, `title`, `quote`, `article`) VALUES
(1, 'london', 'images/first/002.jpeg', 'The capital of UK', 'The Mod. \r\nDivided by the River Thames. \r\nCulture diversity, entertainment and economic center... ', '<div class=\"content\">                     <div class=\"sub_title\"></div>                     <p class=\"paragraph\">                                              </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/london/207.jpg\">                         </li>                         <li>                             <img src=\"images/london/201.jpeg\">                         </li>                     </ul>                                         </div>                 <div class=\"content\">                     <div class=\"sub_title\">Take a glimpse</div>                     <p class=\"paragraph\">                         No visit to London is complete without having a look of Buckingham Palace, Big Ben, London Bridge...                         My first recommandation is watching The King’s Guard changing ceremony in front of Buckingham Palace.                         If you are lucky enough, you can take a picture with horses.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/london/204.jpg\">                         </li>                         <li>                             <img src=\"images/london/206.jpg\">                         </li>                     </ul>                 </div>                     <div class=\"content\">                     <div class=\"sub_title\">Time to relax</div>                     <p class=\"paragraph\">                         Like New York Time Square, London also has a place with many LED billboard - Piccadilly Circus.                         Nearby are Oxford Circus and Regent St where you are able to find some global brand flagship stores.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/london/202.jpeg\">                         </li>                         <li>                             <img src=\"images/london/209.jpg\">                         </li>                     </ul>                                                       </div>'),
(2, 'York', 'images/first/003.jpg', 'The most haunted city of United Kingdom', 'Surrounded inside the York City Wall. \r\nGhost stories, ancient church, slow–moving lifestyle... ', ' <div class=\"content\">                 <div class=\"sub_title\"></div>                 <p class=\"paragraph\">                                  </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/york/307.jpg\">                     </li>                     <li>                         <img src=\"images/york/310.jpg\">                     </li>                 </ul>                </div>             <div class=\"content\">                 <div class=\"sub_title\">York Ghost Merchants</div>                 <p class=\"paragraph\">                     Being \"The most haunted city in UK\", York has a vary famous shop that selling unique ghost figures.                     Inside the shop, there are houndreds of second to none, handmade figures.                      Each has a multi-color painting, just come inside and find your favorite one.                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/york/305.jpeg\">                     </li>                     <li>                         <img src=\"images/york/306.jpg\">                     </li>                 </ul>                  </div>                          <div class=\"content\">                 <div class=\"sub_title\">Slow–moving life</div>                 <p class=\"paragraph\">                 Though most York\'s famous spots are in the town, there are a church that needs to take a 20-minute train.                 Selby Abbey is a famed church for Taiwanese because Jay Chou\'s wedding was hold in here. The interior of this church is very refined.                 </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/york/302.jpeg\">                     </li>                     <li>                         <img src=\"images/york/301.jpeg\">                     </li>                 </ul>                 <p class=\"paragraph\">                 Speaking to \"British Style\", you can never miss the \"British afternoon tea\".                 Bettys is the most well-known café tea store in York. People always line up waiting to have a try on their food.                 Scones with butter, sandwiches and desserts are all placed on a three-tier tea stand. Almost every table order that set.                  </p>                 <ul class=\"image flex\">                     <li>                         <img src=\"images/york/303.jpeg\">                     </li>                     <li>                         <img src=\"images/york/304.jpeg\">                     </li>                 </ul>                              </div>'),
(3, 'Edinburgh', 'images/first/004.jpg', 'The Towns of Edinburgh', 'The capital of Scotland. \r\nOld town & New town. \r\nWhisky, Castles, Giraffas... ', '                 <div class=\"content\">                     <div class=\"sub_title\"></div>                     <p class=\"paragraph\">                                              </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/edinburgh/106.jpg\">                         </li>                         <li>                             <img src=\"images/edinburgh/107.jpg\">                         </li>                     </ul>                                         </div>                 <div class=\"content\">                     <div class=\"sub_title\">Elegant Architectures</div>                     <p class=\"paragraph\">                         In one of Jay Chou\'s MV \"明明就\", there are lots of scenes fliming in Edinburgh.                         Climing up Calton Hill, you can see some famous architecture of Edinburgh, National Monument of Scotland, Edinburgh, Nalson Monument and Royal Observatory.                         When you walk to the cliff, you will see the beauty of both old and new town of Edinburgh.                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/edinburgh/103.jpg\">                         </li>                         <li>                             <img src=\"images/edinburgh/102.jpg\">                         </li>                     </ul>                      </div>                 <div class=\"content\">                     <div class=\"sub_title\">Worth give it a try</div>                     <p class=\"paragraph\">                         Walking in the city, you can always find colorful-painted installation giraffas,                          there are more than 40 giraffas around the city, and each has different fascinating details, just collect them all!                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/edinburgh/108.jpg\">                         </li>                         <li>                             <img src=\"images/edinburgh/109.jpg\">                         </li>                     </ul>                     <p class=\"paragraph\">                         Besides giraffas, there are also some street artists performing \"Great Highland Bagpipe\". Have a listen.                         Last but not least, the delicious Artisan Gelato\'s ice cream is a must try!                     </p>                     <ul class=\"image flex\">                         <li>                             <img src=\"images/edinburgh/111.jpg\">                         </li>                         <li>                             <img src=\"images/edinburgh/110.jpg\">                         </li>                     </ul>                                          </div>');

-- --------------------------------------------------------

--
-- 資料表結構 `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_password` varchar(16) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_email`, `user_name`, `user_password`, `img`) VALUES
(1, 'kimmy@abc.com', 'Kimmy Yo', 'checkthat', 1),
(2, 'kimmy@abd.com', 'web', 'programming', 2),
(3, 'work@abc.com', 'hello', 'workout', 3),
(4, 'web@email.com', 'web', 'programming', 4),
(5, 'web@abc.com', 'web ', 'programming', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user_profile`
--

INSERT INTO `user_profile` (`id`, `img`, `name`, `email`) VALUES
(3, 1, 'hello', 'work@abc.com'),
(1, 3, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 2, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 3, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 3, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(4, 4, 'web', 'web@email.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 1, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 2, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 2, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 1, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 1, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 3, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 3, 'hello', 'work@abc.com'),
(1, 2, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 3, 'hello', 'work@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(3, 5, 'hello', 'work@abc.com'),
(1, 3, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 1, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 2, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 4, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 5, 'Kimmy Yo', 'kimmy@abc.com'),
(1, 1, 'Kimmy Yo', 'kimmy@abc.com'),
(5, 5, 'web ', 'web@abc.com');

-- --------------------------------------------------------

--
-- 資料表結構 `us_info`
--

CREATE TABLE `us_info` (
  `id` int(11) NOT NULL,
  `city_name` longtext NOT NULL,
  `home_image` longtext NOT NULL,
  `title` longtext NOT NULL,
  `quote` longtext NOT NULL,
  `article` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `us_info`
--

INSERT INTO `us_info` (`id`, `city_name`, `home_image`, `title`, `quote`, `article`) VALUES
(1, 'new york', 'images/newyorkskyscrapers.jpg', 'Now you\'re in New York.', '“Concrete jungle where dreams are made of\r\nThere\'s nothing you can\'t do. \r\nThese streets will make you feel brand new. \r\nBig lights will inspire you. \r\nHear it for New York, New York, New York”. \r\n-- Alicia Keys, New York', '<div class=\"content \">                     <div class=\"sub_title\">Central Park</div>                     <p class=\"paragraph\">                         Covering up to 843 acres (around 4km in length and 0.8km in width), the Central Park is the most visited, yet the most filmed urban park in the world. It features several landscapes, amusement attractions and even a zoo. If you are seeking a way to escape the hustle and bustle of city life, arrange yourself with a nice picnic on one of the lawns/meadows inside the park will definitely be one good option.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/centralparkpond.jpg\"></li>                         <li><img src=\"images/centralparkzoo.jpg\"></li>                     </ul>                    </div>                 <div class=\"content \">                     <div class=\"sub_title\">Fifth Avenue</div>                     <p class=\"paragraph\">                         When speaking of places to shop in New York, the 5th Avenue is surely the right spot to go. Aside from having boutiques selling all kinds of goods, it also features numerous flagship stores with fancy decorations. Even if you aren’t one of those shopaholics, strolling down the street simply window-shopping is another great way to spend your afternoon there.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/fifthavenue.jpg\"></li>                         <li><img src=\"images/tiffandco.jpeg\"></li>                     </ul>                 </div>                 <div class=\"content \">                     <div class=\"sub_title\">Times Square</div>                     <p class=\"paragraph\">                         Being an extremely busy area in New York, the Times Square is always packed with rushing people, soaring skyscrapers and dazzling billboards. If your stay isn’t long enough to enjoy any of the shows at the Broadway, I would highly recommend you to visit the M&M World nearby as an alternative. Aside from shopping for chocolates that sweeten up your day, you can also customize your own M&M beans by choosing its color and the symbols engraved on it. The exciting and jumping atmosphere at the Times Square will certainly leave an electrifying mark in your memory.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/timessquare.jpg\"></li>                         <li><img src=\"images/MMstore.jpg\"></li>                         <li><img src=\"images/MMcolor.jpg\"></li>                     </ul>                 </div>'),
(2, 'washington dc', 'images/washingtondc.jpg', 'Follow the blossoms to Washington DC ~', '“Make memories in Washington DC by. \r\nfinding the souls of a nation and seeing all the monuments.”', '<div class=\"content \">                     <div class=\"sub_title\">White House</div>                     <p class=\"paragraph\">                         Comparing with other historical establishments in Washington DC, the White House is relatively compact in scale. However, the three-layered building is basically the official residence and workplace for the president of the United States. I can always recall the weird feeling imagine that President Trump is probably somewhere in there, walking around in his bathrobe. Since admission weren’t allowed for visitors, people mainly gather around the south side of the White House, and sometimes you can even see protesters holding banners that propagate their beliefs, which is something quite interesting.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/whitehouse.jpg\"></li>                         <li><img src=\"images/protester.jpg\"></li>                     </ul>                    </div>                 <div class=\"content \">                     <div class=\"sub_title\">Washington Monument</div>                     <p class=\"paragraph\">                         The Washington Monument is the highest landmark in Washington DC, and it was built to honor George Washington, the 1st president of the United States. Besides from taking strolls along its surroundings, you can also go up inside the monument itself. The admission tickets are free, but the number of people allowed per day is limited. Therefore, booking online in advance with $1 service fee is strongly suggested if you are planning a visit during the tourist season.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/washingtonmonument.jpg\"></li>                         <li><img src=\"images/washingtonstatue.jpg\"></li>                     </ul>                 </div>                 <div class=\"content \">                     <div class=\"sub_title\">Thomas Jefferson Memorial</div>                     <p class=\"paragraph\">                         Washington DC is known for its cherry blossom, which was a “gift” from the Japanese government a hundred years ago. The flower season is around the end of March till the middle of April, and the best place to enjoy the scenery is at the Thomas Jefferson Memorial. Just as how it was named, the construction was built in memory of the United States’ 3rd president, who drafted the unanimous Declaration of the thirteen united States of America. The famous quote “All men are created equal”, that most democracy entities promote and follow comes exactly from the declaration.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/tfmemorial.jpg\"></li>                         <li><img src=\"images/tfmemorialstatue.jpg\"></li>                     </ul>                 </div>                                  <div class=\"content \">                     <div class=\"sub_title\">Lincoln Memorial</div>                     <p class=\"paragraph\">                         The Lincoln Memorial is built to commemorate the 16th president of the United States, Abraham Lincoln, who led America through the Civil War. Upon walking up the staircases, a huge marble of president Lincoln situated in the center of the memorial, with his inaugural address engrave on both sides of the wall. Across the Lincoln Memorial sits the memorial of the Vietnam War and the Korean War. Unlike the other sites, the atmosphere there is rather solemn and you can often see flowers left on the tombs as a remembrance for the soldiers who sacrificed themselves during the war.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/lincolnmemorial.jpg\"></li>                         <li><img src=\"images/lincolnstatue.jpg\"></li>                         <li><img src=\"images/vietnamememorialstatue.jfif\"></li>                         <li><img src=\"images/vietnammemorial.jpg\"></li>                     </ul>                 </div>'),
(3, 'Philadelphia', 'images/philly.jpg', 'Welcome to Philly!', '“Life, liberty, and cheesesteak!”. ', '                 <div class=\"content hidden\">                     <div class=\"sub_title\">Independence Hall & Liberty Bell</div>                     <p class=\"paragraph\">                         Philadelphia, being the most populated city in Pennsylvania, played a significant role during the American War of Independence. Both <i>the unanimous Declaration of the thirteen united States of America</i> and <i>the Constitution of the United States of America</i> drafted and signed within the Independence Hall on 4th July, 1776. When visiting the Independence Hall, don’t forget to stop by the Liberty Bell as well!  The bell was once hung on the top of the Independence Hall building; however, it was then removed to the due to impairments. The crack on the bell was said to be caused by knocking too hard while celebrating George Washington’s birthday in 1846.                      </p>                     <ul class=\"image flex\">                         <li><img src=\"images/independencehall.jpg\"></li>                         <li><img src=\"images/libertybell.jpg\"></li>                     </ul>                    </div>                 <div class=\"content hidden\">                     <div class=\"sub_title\">Philadelphia City Hall & Love Park</div>                     <p class=\"paragraph\">                         The Philadelphia City Hall is the greatest of all city halls in the United States, and it is known for its attractive outer appearance. However, you can also inspect the interior part of the City Hall by paying an admission fee of <i>$18</i>.                         <a href=\"https://www.phlvisitorcenter.com/CityHallInteriorExterior\">(See Official Website)</a>                          On the northwestern side of the City Hall locates the John F Kennedy Plaza, the “LOVE sculpture” on the plaza is also one of the famous check-in attractions in Philadelphia, and people therefore nicknamed the plaza as “LOVE park”. If you ever happen to stop by the park around Christmas, you may have a chance to encounter holiday fairs that hold annually.                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/cityhall.jpg\"></li>                         <li><img src=\"images/lovesculpture.jpg\"></li>                     </ul>                 </div>                 <div class=\"content hidden\">                     <div class=\"sub_title\">Cheesesteak</div>                     <p class=\"paragraph\">                         You can miss anything but the ultimate iconic food in Philly – the Cheesesteaks! Cheesesteaks are simply thinly sliced ribeye beef sautéed and tucked into a fresh roll with melted cheese topping on it. The food was said to be invented by Pat Olivieri, who owned a hotdog cart in the1930s, later imitated by many. In this day and age, you can find a cheesesteak stand almost everywhere in Philadelphia. Though they come in high calories and fats, eating once in a while won’t do much damage to your health, so just grab one and dig in!                     </p>                     <ul class=\"image flex\">                         <li><img src=\"images/cheesesteak.jpg\"></li>                     </ul>                 </div>');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `china_info`
--
ALTER TABLE `china_info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `malaysia_info`
--
ALTER TABLE `malaysia_info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `uk_info`
--
ALTER TABLE `uk_info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- 資料表索引 `us_info`
--
ALTER TABLE `us_info`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `china_info`
--
ALTER TABLE `china_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `malaysia_info`
--
ALTER TABLE `malaysia_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `uk_info`
--
ALTER TABLE `uk_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `us_info`
--
ALTER TABLE `us_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
