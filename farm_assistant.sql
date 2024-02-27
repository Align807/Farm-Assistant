-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 06:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Address2` varchar(40) DEFAULT NULL,
  `Town` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` varchar(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`add_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `name`, `Address`, `Address2`, `Town`, `State`, `Pincode`, `order_id`, `Phone`) VALUES
(6, 'Ashlin', 'Habit,Opp.AIDA Hotel', 'Opp.AIDA Hotel', 'Kottayam', 'Kerala', '686001', 5523, '8765122871'),
(9, 'John', 'Mount Pleasant', 'Opp.AIDA Hotel', 'Pathanamthitta', 'Kerala', '689641', 7475, '0987654321'),
(10, 'Krishna', 'Mount Pleasant', 'Opp.AIDA Hotel', 'Pathanamthitta', 'Kerala', '689641', 8132, '1234567890'),
(11, 'John', 'Mount Pleasant, Opp.AIDA Hotel', 'Opp.AIDA Hotel', 'Pathanamthitta', 'Kerala', '689641', 2498, '0987654321'),
(12, 'Krishna', 'Habit,Opp.AIDA Hotel, Opp.AIDA Hotel', 'Opp.AIDA Hotel', 'Kottayam', 'Kerala', '686001', 1617, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_email` varchar(20) NOT NULL,
  `crop_id` int(30) NOT NULL,
  `crop_name` varchar(30) NOT NULL,
  `quantity` int(20) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `price` int(20) NOT NULL,
  `discount` int(4) NOT NULL,
  `image` varchar(40) NOT NULL,
  `total` int(10) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `c_email`, `crop_id`, `crop_name`, `quantity`, `unit`, `price`, `discount`, `image`, `total`) VALUES
(23, 'ashlin@gmail.com', 1, 'Carrot ', NULL, NULL, 30, 2, 'shop/product-1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `comp_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `image` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `date` varchar(11) NOT NULL,
  `complaint_head` varchar(40) NOT NULL,
  `complaint` text CHARACTER SET latin1 NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Unread',
  PRIMARY KEY (`comp_id`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=12358 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comp_id`, `user_email`, `name`, `image`, `user_type`, `date`, `complaint_head`, `complaint`, `Status`) VALUES
(12345, 'john@gmail.com', 'John', 'profile/person_2.jpg', 'Supplier', '12/10/20', 'Delivery Latency', 'Experienced two week delay in the delivery of my order with order id 5567. Note the same and give quick delivery since the crops may get rotten within days.', 'Solved'),
(12346, 'Riya@gmail.com', 'Riya', 'profile/a1.jpg', 'Farmer', ' 07/12/20 ', 'Manure suggestion on Orange production', 'Can you suggest best soil and manure details for the production of orange. If possible please provide details of an expert to deal with', 'Read'),
(12347, 'Riya@gmail.com', 'Riya', 'profile/a1.jpg', 'Farmer', ' 07/12/20 ', 'Poor Quality Seeds', 'Chilly Seeds recieved with the order ID 3454 was recieved with poor quality rotten seeds. Please provide immediate action upon this', 'Read'),
(12348, 'john@gmail.com', 'John', 'profile/person_2.jpg', 'Supplier', ' 07/12/20 ', 'More info on Famers and crop ', 'Please provide the info for farmers and crops in the area of Wheat fields. Need to make contract.', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `crop_data`
--

DROP TABLE IF EXISTS `crop_data`;
CREATE TABLE IF NOT EXISTS `crop_data` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(15) NOT NULL,
  `category` varchar(11) NOT NULL,
  `head1` text,
  `desc1` text,
  `head2` varchar(40) DEFAULT NULL,
  `desc2` text,
  `head3` varchar(40) DEFAULT NULL,
  `desc3` text,
  `head4` varchar(40) DEFAULT NULL,
  `desc4` text,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_data`
--

INSERT INTO `crop_data` (`c_id`, `c_name`, `category`, `head1`, `desc1`, `head2`, `desc2`, `head3`, `desc3`, `head4`, `desc4`, `image`) VALUES
(1, 'CARROT', 'Vegetable', 'About carrots(basics) ', 'Carrots are full of flavor and texture. They are a popular long-lasting root vegetable that can be grown in many climates.\r\n                \r\nCarrot seeds are ready to plant early in spring, just after the last major frost as come and gone. Like all root plants, carrots grow best in cool weather climates, between 60 and 70 degrees Fahrenheit. If the climate is too hot, the carrots might not grow as large, and might have an overpoweringly strong flavor. Conversely, if the climate is too cold (below 55 degrees Fahrenheit), they will grow too long and thin, with a pale color. However, growing carrots is fairly easy because they are so resilient. Often, they can be planted in early spring and left in the ground until late fall.  ', 'Inspect Your Soil and Fertilizer', 'The type of soil used is an important factor in determining how carrots grow. The best soil for growing carrots is moist, yet well-drained and loose to about 1 foot in depth. Stay away from soil that contains a lot of rocks and twigs; they will interfere with the growth of the roots.\r\nCarrots do not do well in soil that is too acidic. Test your soil’s pH balance; ideally, for carrots, it should be between 6 and 6.5. You should also make sure that your fertilizer does not contain too much nitrogen (about three-fourths to 1 cup urea per 100 square feet is appropriate).\r\nWhat you put on your soil is also important. Never use a weed fertilizer on your carrot garden, as it contains weed killers that will also kill your vegetable plants. Also, avoid topping your soil with fresh manure; it will cause the roots to fork, thus diminishing the size and shape of your carrots.', 'Plant the Seeds', 'Before you plant your carrot seeds, make sure you deeply till the soil. Breaking up the soil so that it becomes loose will help the carrot seeds sprout deep roots. Plant the seeds about half-inch deep in the soil, and about 1 inch apart. Space your rows at least 15 inches apart. If your garden space is limited, consider growing your carrots in separate containers in raised beds.\r\nWhen you are finished planting, cover the seeds with a thin layer of mulch, such as shredded bark or straw, to help keep them moist. You should also sprinkle the soil with water, but you must be careful not to let the top form a crust.', 'Cultivate and harvest the carrots', 'Like most vegetables, growing carrots need a minimum of 1 inch of water every week. If they cannot get an adequate supply from rainfall, you will need to water the soil. When you water your carrots, make sure to soak the soil completely. If you only wet the soil’s surface, the roots will not grow as deeply. If your soil is particularly sandy, you may need to water your crops more often.\r\nOnce your plants begin to sprout, it is a good idea to add about 3 to 4 inches of mulch around the seedlings. This will help enrich the soil and keep it moist. The first few weeks are the most important for growing carrots. During this time, the carrot plant grows its taproot (the largest of all roots, which will later become the carrot).\r\nDuring the first few weeks after you have planted your carrots, the plants will be too small to successfully survive against weeds. You will need to take special care to weed your garden thoroughly during this delicate time. Again, don’t use any anti-weed fertilizers or weed-killing sprays, as these will damage your vegetable plants and/or expose them to chemicals that could be poisonous when ingested.\r\nAnother tip on how to grow carrots is to continually thin your plants as they grow. If you skip this important step, your carrot plants will become too crowded, and they will grow with very small or no roots.\r\nYou must also look for signs of insects and other pests harming your crops. Pests common to carrot plants include carrot root flies, flea beetles, leaf hoppers and rodents. The insects eat the plant and spread diseases that can harm the plant. Instead of using potentially harmful insecticides, try using a floating row cover that will provide a barrier to insects while allowing sunlight and rain to reach the plants. Rodents are also notorious for eating up carrot crops. For them, carrots are a tasty treat.\r\n\r\nYou can harvest your carrots whenever they reach their desired size. You can usually tell when they are ready to harvest because the thick, upper end of the carrots will push up out of the ground slightly. To dig out your carrots while keeping them intact, use a spade to loosen the soil around them, then push the roots from side to side and, finally, pull them out of the ground by their stocks. They should come up easily.', 'images/product-1.jpg'),
(2, 'BEANS', 'Vegetable', 'Plant the beans wisely and carefully', 'Beans best grow in the soil even with normal fertility. Moreover, beans don’t need supplemental fertilizer because they have the capacity to fix their own nitrogen. However, poor soil needs to be replaced with aged manure or compost in the fall prior to planting. \r\n\r\nStudies say that seeds are best down directly in the ground anytime after the last spring frost. It is advised to not plant too early or the cool soil will delay germination and the seeds could also rot.\r\n\r\nIt is also advised to not start green bean seeds indoors; they may not survive to transplant.\r\n\r\nSow bush bean seeds 1 inch deep and 2 inches apart in rows 18 inches apart. Plant a little deeper in sandy soils.\r\n\r\nIf you like pole beans, another easy support for them is a “cattle panel”—a portable section of wire fence—16 feet long and 5 feet tall. The beans will climb with ease and you won’t have to get into contorted positions to pick them.', 'How to Take Care of Plant', '1. To retain moisture; make sure that the soil is well-drained. Beans have shallow roots so mulch keeps them cool.\r\n\r\n2. You need to water regularly, from the start of the pod to set, about 2 inches per week. If you do not keep beans well watered, they will stop flowering. Water on sunny days so foliage will not remain soaked.\r\n\r\n3. If necessary, fertilize after heavy bloom and the set of pods. Butavoid a high-nitrogen fertilizer or you will get lush foliage and few beans. Just add a side dressing of compost or composted mature halfway through their growing season.\r\n\r\n4. Weed diligently and use shallow cultivation to prevent disturbing the root systems.\r\n\r\n5. Pinch out the tops of pole beans when they reach the top of the support to force them to put energy into producing more pods.\r\n\r\n6. In high heat, use row covers; hot weather can cause blossoms to drop from plants, reducing harvest.', 'Harvesting of Green Beans', '1. Harvest beans in the morning when their sugar level is highest.\r\n\r\n2. Green beans are picked young and tender before the seeds inside have fully developed. \r\n\r\n3. Pick green beans every day; the more you pick, the more beans grow.\r\n\r\n4. Look for firm, sizable that are firm and can be snapped, generally as thick as a pencil. \r\n\r\n5. Snap or cut off the plant, do not tear the plant. Fresh beans should snap easily when broken.\r\n\r\n6. Once you see the seeds inside bulging, green beans are past their peak and will taste tough.\r\n\r\n7.Store beans in a moisture-proof, airtight container in the refrigerator. Beans will toughen over time even when stored properly.\r\n\r\n8. Beans can be kept fresh for about 4 days, or blanched and frozen immediately after harvesting.\r\n\r\n ', NULL, NULL, 'images/product-2.jpg'),
(3, 'ORANGE', 'Fruit', 'Orange and its Varieties', 'Orange is also one of the topmost fruit, that is cultivated widely in every corner of the world. Basically, oranges are citrus fruits, frequently eaten by the people because of orange nutritional value. Orange fruits are the excellent source of vitamins, particularly the vitamin C. And, Orange juice acquire an important place in the regular diet of many people. So, friends, growing orange tree is a great idea to begin a new tree farming business plan\r\n\r\nThe scientific name of Orange is Citrus reticulata & the botanical name of orange is Citrus aurantium.\r\n\r\nSelecting a high yielding and fast growing variety for orange cultivation will directly impact on the production of your oranges. So, always select a high yielding and fast growing variety for orange for obtaining a higher amount of production.\r\n\r\n\r\nDepending on your region’s climatic condition, select a suitable for your orange farm. It is a good idea select a disease and pest resistant variety with the help of local horticulture department for obtaining more orange production.\r\n\r\n', 'Climate Condition For Orange', 'Likewise Mango Farming and Banana Farming, Oranges are also cultivated widely as they can grow well in the tropical region as well as in sub-tropical regions up to a height of 1500 m. However, a dry climatic condition is favorable for profitable orange cultivation for obtaining higher oranges production.\r\n\r\n\r\nA soil temp. (about room temp: 26 ‘C) is beneficial in enhancing the growth of plant root as well plant growth. However, farming oranges in an arid and drier area with good hot summer and moderate rainfall, about 100 to 200 cm is considered as the best and most favorable climatic conditions for the excellent growth of orange plants.\r\n\r\nTake care that orange trees are very sensitive to high humid and frost condition and such climatic condition in orange farming invites numbers of many diseases and harmful pest, insect, etc. Also, note that hot winds during summer lead to dropping down of orange flower and budding fruits. So, for obtaining high production of oranges, it is a good idea to keep maintaining the favorable temp in your farm during the growth period.', 'Farming oranges', 'Oranges can be cultivated on a wide variety of soil like sandy loam to loamy soil, alluvial, red to black soils with too much clay. However, a soil with high fertility, good drainage power, lime-free soil with good salt absorption power and light loam is considered as the best & most favorable for the orange cultivation.\r\n\r\nAs soil ph for citrus trees is about 6.0 to 7.0 and oranges are also a citrus tree, it is smartness to cultivate them on soil, which has pH ranging between 5. 8 to 7.3 for best production.\r\n\r\nSelect a site for your orange farm, from where there is a full availability of transport for transporting your oranges in the market. Also, it should not be too cold during the winter and monsoon season because this invites numbers of pest and disease to your farm. It is also suggested to give windbreaks on sides of your farm from heavy winds since hot and heavy winds during summer lead to dropping down of orange flower and budding fruits. Growing Jamun (Plum), Mulberry trees, Eucalyptus, etc on sides is a good idea for providing windbreaks.\r\n\r\nPrepare your soil, favorable for orange farming like managing ph about 5.8 to 7.3, make rich your soil in all essential organic matters for producing more fruits. If your soil has any nutrient deficiency, then it should be supplemented at the time of soil preparation and remover the previous crop’s weeds, if present.', 'Manures and fertilizers', 'Basically, an orange plant needs Nitrogen, Potassium, Phosphate along with some Micro-nutrient Magnesium, Zinc, Iron, etc for good development of vegetative plant growth. Keeping orange tree full of organic manure is helpful to the orange plant in bearing healthy and delicious oranges. So, here below is a guide for application of manure and fertilizer in orange farming for good fruit production.\r\n\r\nOrange Plant Age	Year-wise Fertilizer dose (gm per plant)\r\nN	P	K\r\n1st Year	150	50	25\r\n2nd Year	300	100	50\r\n3rd Year	450	150	75\r\n4th Year & above	600	200	100\r\nNote that timely application of suitable manure and fertilizer play an important role in enhancing Orange fruit production. You can make use of any best fertilizer for orange trees in your farm', 'images/product-3.jpg'),
(4, 'CABBAGE', 'Vegetable', 'Basic information of cabbages', 'Cabbage (Brassica oleracea var capitata) is a small, leafy biennial producing a compact globular mass of smooth or crincled leaves wrapped over each other known as head. The outer leaves are generally larger than the inner. The stem is short and stout. Plants flower generally after winter.\r\n\r\n\r\nFlavour in cabbage leaves is due to the glycoside sinigrin.  Cabbage contains goitrogens which cause enlargement of thyroid glands.', 'Propagation of cabbages', 'Cultivation of cabbage is done mainly on sandy to heavy soils rich in organic matter. Early crops prefer light soil while late crops thrive better on heavier soils due to retention of moisture. On heavy soils, plants grow more slowly and the keeping quality is improved. A pH range of 6.0-6.5 is considered as optimum for growing cabbage. Plants growing in saline soils are prone to diseases.\r\n\r\nIn India, cabbage is grown in large areas having a cool and moist climate. A temperature range of 15o-21o C is considered as optimum for growth and head formation of the crop. The intensity of flowering depends upon the age of the plants and the period for which they are exposed to low temperatures.\r\n\r\n\r\n\r\nThe seeds are generally sown in a seed bed and 4-6 week old seedlings are transplanting to the field. Cabbage seeds are sown on nursery beds to raise seedlings for transplanting in the field. Raised beds of size 3 x 0.6 m and 10-15 cm in height are prepared. About 70cm distance is kept between two beds to carry out intercultural operations such as watering, weeding, etc. The surface of beds should be 2 smooth and well levelled. Well-decomposed FYM @ 2-3 kg/m is added at the time of bed preparation. Raised beds are necessary to avoid problem of water logging in heavy soils. To avoid mortality of seedlings due to damping off, drenching of the beds with Bavistin (15-20g/10 litres of water) is effective.\r\n\r\nThe field is ploughed to fine tilth by giving four to five ploughing with a sufficient interval between two ploughing. Planking should be done for proper levelling. The transplanting is done on the flat land, ridges or in furrows depending on climate and soil conditions. For early planting, ridge method is suitable especially in areas where the rains occur at the time of planting. In saline soils, planting in furrows and in dry areas transplanting on flat beds is recommended.\r\n\r\nTransplanting should be done preferably in the morning or late evening. Before transplanting, the roots of the seedlings are dipped in a solution of Bavistin (2g/litre of water). Irrigation should be given immediately after transplanting. In some parts of the country, beds are first irrigated and then the seedlings are transplanted.\r\n\r\n', 'Manures and fertilizers', 'The fertilizer dose depends upon the fertility of soil and amount of organic manure applied to the crop. For a good yield, 15-20 tonnes of well-decomposed FYM is incorporated into the soil about 4 weeks before transplanting. Generally, application of 80-120 kg N, 60-100kg P2O5 and 60-120 kg K2O is recommended for optimum yield. Half the dose of N and entire amount of P and K is given at the time of transplanting. The balance N is given six weeks after transplanting or at the time of earthing up.\r\n\r\n', 'Harvesting and yield of cabbages', 'Cabbage is ready for harvest at 90-120 days after planting. Cabbage should be harvested promptly when the heads are firm and mature. Delaying harvest, even a few days beyond maturity can result in split heads and increased incidence of field disease.\r\n\r\nHarvesting immature heads, however, reduces yield, and the heads are too soft to resist handling damage. Immature heads also have a shorter shelf life than mature heads.\r\n\r\nThe head is harvested by bending it to one side and cutting it with a knife. The stalk should be cut flat and as close to the head as possible, yet long enough to retain two to four wrapper leaves. Extra leaves act as cushions during handling and may be desired in certain markets. The head should not be removed by snapping or twisting it since this practice damages the head and results in inconsistent stalk length. Broken stalks are also more susceptible to decay. As the heads are not ready for harvest at the same time, therefore they are harvested in stages based on the maturity of the heads.\r\n\r\nHarvested produce should always be stored in shade before packing. Yield of the cabbage varies greatly depending upon variety, maturity group and season of cultivation. Average yield obtained from early varieties is 25-30 t/ha and that of late type is 40-60 t/ha.', 'images/product-4.jpg'),
(5, 'TOMATO', 'Fruit', 'Tomato- information', 'Tomato is originated in Peru of South America. It is important commercial vegetable crop of India. It is the second most important crop of world after potato. Fruits are eaten raw or in cooked form. It is rich source of vitamin A, C, potassium and minerals. It is used in soup, juice and ketch up, powder. The major tomato producing states are Bihar, Karnataka, Uttar Pradesh, Orissa, Maharashtra, Andhra Pradesh, Madhya Pradesh and West Bengal. In Punjab state, Amritsar, Ropar, Jalandhar, Hoshiarpur are tomato growing districts.', 'Soil preparation and farming', 'Do solarization for one month before sowing. Sow tomato seeds on raised beds of 80-90cm width and of convenient length. After sowing covered bed with mulch and irrigate bed with Rose-Can daily in morning. To protect crop from virus attack cover nursery bed with fine nylon net.\r\n\r\n10-15days after transplanting sprayed 19:19:19 along with micronutrients@2.5 to 3gm/Ltr of water. To make plants healthier and stronger and to harden seedling against transplanting sock take spray of Lihocin@1ml/Ltr water at 20days after sowing. Damping Off damages crop to great extent, to prevent crop from it avoid overcrowding of seedlings and keep soil wet. If wilting is observed, do drenching of Metalaxyl@2.5gm/Ltr water, 2-3 times till plants are ready for transplantation.\r\n\r\nSeedling is ready for transplantation 25 to 30days after sowing with 3-4leaves. In case if seedlings age is more than 30days transplant it after de-toping. Water seedling beds 24hours before transplanting so that seedlings can be easily uprooted and be turgid at transplanting time.\r\n\r\nTo protect crop from bacterial wilt, dip seedlings in 100ppm Streptocycline solution for 5 minutes before transplanting.\r\n\r\nTime of sowing\r\nFor northern state, tomato cultivation for spring season is done in late November and transplanted in second fortnight of January. For autumn crop, sowing is done in July - August and transplanted in August - September. In hilly areas sowing is done in March- April and transplantation is done in April -May.\r\n\r\nSpacing\r\nDepending upon variety use and its growth habit, use spacing of 60x30cm or 75x60cm or 75x75cm. In Punjab, for dwarf variety use spacing of 75cm x 30cm and for rainy season use spacing of 120-150 x 30cm.\r\n\r\nSowing Depth\r\nIn nursery sow seeds at depth of 4cm and then covered with soil.  \r\n\r\nMethod of sowing\r\nTransplanting of seedling in main field.', 'Manures and fertilizers', 'At the time of land preparation, apply well rotten cow dung@10ton/acre and mix well in the soil. Apply fertilizer dose of N:P:K @60:25:25kg/acre in form of Urea@130kg/acre, Single Super Phosphate@155kg/acre and MOP@45kg/acre. Apply half dose of Nitrogen, full dose of Phosphorus and Potash applied as basal dose, apply it before transplanting. 20 to 30days after transplantation apply remaining 1/4th dose of nitrogen. Two month after transplantation, apply remaining dose of Urea.\r\n\r\nWSF: 10-15days after transplanting, take spray of 19:19:19 along with micronutrient@2.5 to 3gm/ltr of water. Due to low temperature, plant absorbs fewer nutrients and growth get affected. In such cases foliar spray helps in growth of plants. In vegetative growth stage take spray of 19:19:19 or 12:61:00 @ 4-5 gm/Ltr. For better growth and more yield, spray with 50ml Brassinolide per acre in 150ltr of water at 40-50 days after transplanting for two times at 10days intervals.\r\n\r\nObtain good fruit quality along with good yield, take spray of 12:61:00 (Mono Ammonium Phosphate)@10 gm/Ltr before flowering.  When flowering starts in initial days, take spray of Boron@25gm/10litre of water. It will help to control flower and fruit dropping.  Sometime black spots are observed on fruits, these are due to calcium deficiency. Take spray of calcium nitrate@2gm/ltr of water. In high temperature flower drop is seen, spray with NAA@50 ppm (50ml/10L water) when crop is in flowering stage. Give one spray of sulphate of potash (00:00:50+18S) during fruit development stage@3-5 gm/ltr of water. It will give good fruit development and colour. Fruit cracking reduces fruit quality and lowers prices up to 20%. Take spray of chelated boron (Solubor)@200gm/acre/200Ltr water at fruit ripening stage. To improve plant growth, flowering and fruit set, spray with sea weed extract (Biozyme/Dhanzyme)@3-4 ml/Ltr water twice a month. Maintain good soil moisture.', 'Harvesting and post harvesting', 'Plant starts yielding by 70days after transplantation. Harvesting is done depending upon purpose like for fresh market, long distance transport etc. Mature green tomatoes, 1/4th fruits portion gives pink color are harvested for long distance markets. Almost all fruits turn into pink or red color but having firm flesh are harvested for local markets. For processing and seed extraction purpose, fully ripe fruits with soft flesh are used.', 'images/product-5.jpg'),
(6, 'BROCCOLI', 'Vegetable', 'Land preparation for broccoli', 'Broccoli can be grown in a wide variety of soils type. To get a better yield from broccoli crop sandy and silt loam soils are most preferred. The soil PH should be in between  5.5 pH – 6.5 pH.\r\n\r\nBefore Planting broccoli Land is plowed 3-4 times then add compost or well rotten FYM 25-30 tons/ hectare and mix thoroughly at the time of land preparation.', 'Farming steps', 'Generally, most of the farmer create broccoli plant seedlings on own felid because most of the nursery don’t create broccoli seedling due to less demand for broccoli seeling. so you can buy broccoli seed and prepared own broccoli plant seedlings.\r\n\r\n\r\nBroccoli plant seedlings with soil Media procedure\r\nprepare  1 meter wide and 3 meters long and 30 cm wide soil bed.\r\nMix roughly 10 kgs of good F.Y.M or compost manure into the soil in each bed. Likewise, add 50 grams of foret and 100 gm of Bavistin powder in each spring and mix them in soils.\r\nThen make 5 cm parallel to the width of the 2 cm deep line on the bed and sow broccoli seed after that cover the seeds with fine compost material.\r\nProvide light water with the help of a sprinkler.\r\nFor one hectare, broccoli cultivating hybrid seeds requires approximately 312 grams.\r\nSeed germination starts after 5 to 6 days and seedlings and ready for transplantation within 35 days.\r\nAt this time the transplantation the broccoli plant must have 4-5 leaves.\r\nThe best time sowing of seeds is the second week of September.\r\nDuring plant growth, the temperature should be 20° C to 22 ° C.\r\nfor better growth for the seedlings, the ideal night and day temperature is  20° C to 23° C\r\nEach time while giving water to the nursery Give quantity to be calcium nitrate and potassium nitrate, should be given to the plants mixed with 1.5 liters of water in one liter of water.\r\nSimilarly, every 10-12 days of malathion or disease should be prevented due to diseases and diseases that do not affect the plants. + Bavistin 1 gm, or copper oxychloride 1.5 g per liter of water should be sprayed.', 'Manures and fertilizers management', 'Before start giving fertilizer to broccoli crop, It is necessary soil must be analyzed and then decide fertilizer dose quantity.\r\n\r\nGenerally, the broccoli crop is required to give 150 kg of Nitrogen, 100 kg of phosphorus and 170kg potassium per hectare.\r\n\r\nNitrogen 120 kg, 80 kg phosphorus and60 kg potash should be applied at the time of transplanting. The remaining half of nitrogen should be used in two split doses at 30 and 45 days after transplanting.\r\n\r\nGive micronutrient according to the crop requirement. broccoli plant show born deficiency, so it is observed in the field then apply born with foiler spray or with water fertilizer', 'Harvesting and Production:', 'After 80-90 days of transplanting crop ready to harvest. Harvest broccoli when it Heads become 3 to 6 inches size with a sharp knife also this crop must be harvested before small flower open present on the broccoli crop heads.\r\n\r\nA good quality broccoli crop Heads weight is around 250-300 gm.\r\n\r\nOn an average, yield varies from 19 to 24 ton/hectare depending upon the variety. According to market demand  broccoli pack in corrugated box or plastic crates\r\n\r\nbroccoli packing\r\nBroccoli farming is a good source of income. this guide help in how to grow Broccoli complete step by step broccoli cultivation procedure', 'images/product-6.jpg'),
(7, 'CAPSICUM', 'Fruit', 'Capsicum- general and important points', 'Capsicum, also known as sweet pepper, bell pepper or Shimla Mirch is one of the popular vegetables grown throughout India. It is rich in Vitamin A (8493 IU), Vitamin C (283 mg) and minerals like Calcium (13.4 mg), Magnesium (14.9 mg) Phosphorus (28.3 mg) Potassium, (263.7 mg) per 100 g fresh weight.\r\n\r\nCapsicum is a cool season crop, but it can be grown round the year using protected structures where temperature and relative humidity (RH) can be manipulated. This crop requires day temperature of 25-300C and night temperature of 18-200C with relative humidity of 50-60%. If temperature exceeds 350C or falls below 120C, fruit setting is affected.\r\n\r\n', 'Propagation of capsicum', 'Good quality seeds are required for producing better seedlings. The seedlings are raised in pro-trays of 98 cells or cavities. About 16,000 to 20,000 seedlings are required to plant one acre for which 160-200 gm of seeds is required.\r\nThe pro-trays are filled with sterilized cocopeat and seeds are sown, one seed per cell to a depth of ½ cm and covered with the same media.\r\nThe filled trays are staked one above the other and covered with plastic sheets till germination of seeds.\r\nSeeds germinate in about a week’s time after sowing. The trays are shifted to net house/ polyhouse and lightly watered. After 15 days of sowing, Mono ammonium phosphate (12:61:0) (3g/L) and 22 days after sowing 19:19:19 (3g/L) solution has to be drenched. The seedlings in protrays are drenched with COC 3g/L before transplanting. The seedlings will be ready for transplanting in 30-35 days.\r\nSpray imidacloprid @ 0.2 ml/L and chlorothelonil @ 1gm/L before transplanting of seedlings. Always add about 0.3 ml/L of wetting agent per liter of water with each spray of pesticide.', 'Fertilizers and microbes', 'A basal fertilizer dose of 20:25:20 NPK is required per acre and is applied to the beds uniformly before transplanting in the form of 80 kg calcium ammonium nitrate, 125 kg super phosphate and 32 kg murate of potash or 40 kg sulphate of potash.\r\n\r\nFifteen days before transplanting, neem cake has to be enriched with bio agents like Trichoderma harzianam and Pseudomonas lilacinous. Neem cake of about 200 Kg is powdered and slightly moistened. Trichoderma harzianam, Pseudomonas lilacinous and Paecilomyces chilmdosporia each of two kg are mixed thoroughly to the neem cake. The mixture is covered with wet gunny bags or dry grass and left for 8-10 days. Avoid direct exposure to sunlight and rainfall. After 10 days, this enriched mixture of neem cake and bio-agent along with 600 kg of neem cake has to be applied uniformly to the beds for an area of one acre. This is highly useful to reduce the problem of soil borne pathogens and nematodes. Azospirillum or Azoctobacter or VAM which is a nitrogen fixing bacteria can also be applied to the growing bed.', 'Tips and points for high yield', 'The organic manure/compost applied to the soil should be enriched with Microbial Bio-control Agents like Pseudomonas fluorescens, Paecilomyces lillacinus, Trichoderma harzianum etc. and biofertilizers like, PSB, Azospirillum, Azotobacter, etc. to enhance soil health.\r\nAny damage of net or polysheet in the structure should be immediately repaired to prevent entry of pests and diseases.\r\nThe polyhouse/ nethouse should have double door system which is 25 the safest way to prevent the entry of pests and diseases. The doors should be constructed preferably away from roadside.\r\nSeedlings raised in protrays have to be transplanted within 30-35 days after sowing on the main raised planting beds (1/2 ft above the ground level).\r\nRegular pruning has to be followed to retain two-third healthy branches and retain one fruit with good shape and size in each branch and remove deformed fruits, if any, at a very early stage.\r\nBranches are properly tied with plastic twine and other end tied to the supporting GI grid to give strong support and to avoid breakage of branches/ fruits.\r\nDrip irrigation and fertigation schedules should be followed regularly.\r\nAvoid pests and disease incidence for adopting prophylactic measures. Use proper and recommended quantity and dosage of pesticides and insecticides to control the incidence.\r\nMaintain hygiene condition in green house and dispose off the rotten, fallen and infected plant debris/ fruits and regularly, preferably everyday during evening hours, after completing all the operations of the day. Use clean plastic bags to collect and carry these materials to the place of disposal, to avoid the spread of infection.\r\nCare should be taken not to pinch the apical bud and protect it from the mite infestation.\r\nBotanicals, Microbial Bio-control Agents, biological agents and biofertilizers should be used as an integrated pest, disease and nutrient management practice.\r\nYield should constitute 85-90 percent of A grade fruits (3-4 lobes, 150-180 gms). Deformed and irregular shaped fruits are pinched out at younger stage and fruits with 50-70 per cent colour should be harvested, graded and packed properly.', 'images/product-7.jpg'),
(8, 'ONION', 'Vegetable', 'Start onion farming', 'Do you want to start onion farming? This is the brief guideline to start your onion farm easily and all the thing you have to know before and after setting up a farm to grow onions. Onion farming is troublesome, but you can make it easier. Learn how to...\r\n\r\nOnions are playing a vital role in a great number of recipes. They are one of the most used herbs.  Farming onions is a great choice for the farmer around the worlds. But they have a reputation for being hard to grow.\r\n\r\nHealthy stands mean Plentiful harvest based on geography, the perfect plantings achieve 60,000 to 140,000 bulbs (plants) per acre of land. In Georgia 60,000 to 80,000 plants for each acre of land is ideal whereas around 100,000 bulbs are in focus in Texas. Nowadays onion farming becomes very popular among cultivars.', 'Planting Onion bulb into bed:', 'A less popular alternative to direct seeding is planting sets. Sets are a little onion bulb that is planted rather than seed to produce a mature bulb. Sets are immature bulbs turn the earlier year and offer the most farmers choices.\r\n\r\nThey are the simplest to plant, the shortest time to harvest, and the limited complication of the disease. However, they are more prone to bolting than seedlings or transplants. Roughly 15 years back, business cultivators tried different things with using sets and observed direct seeding to be more successful.\r\n\r\nPlant the seedlings in mid to late spring.\r\nSeed must be planted in the row,4 to 6 inches apart.\r\n1 to 2 feet distance should maintain between any two.\r\n After, cut the tips to approximately 4 inches and put them about 1/2 inch below the surface.\r\nAn organic buffer line of 30-50 cm can be introduced after several rows to ensure healthy crops.', 'Care onions properly', 'A proper management of watering & fertilization gives you double production. As onion is a very sensitive plant. It requires frequent treatments of fertilizer.\r\n\r\nOnion also farms with different crops like ginger, tomato. After cultivating ginger you can Grow baby corn.\r\n\r\nIn supplement of fertilizer, onions require moist, weed-free soil with a pH level between 5.5 and 6.68 which we talk earlier.\r\nTo get best results, the first application of fertilizer should be about three weeks after planting and then continue with applying every 2 to 3 weeks.\r\nWhen the neck starts feeling soft, stop apply any more fertilizer. This should occur nearly 4 weeks earlier to harvest.\r\nYou must be watering after feeding and maintain moisture as early as you can during the growing season.\r\nOnions roots are vulnerable to moisture. So they need a steady watering process to thrive without problems.\r\nThe closer to harvest time the more water will require for onion.\r\nThe farmer who lives in the area with limited sunlight should grow short-day varieties, while long-day varieties seeds for whore live in areas where sunlight is abundant.\r\nEach onions need about 1 inch of water per week.', 'Harvesting onions', 'If you harvest young onion just pull them up few weeks after plantation if you want them to use as \"spring onion\" or \"scallions\" as there is no ideal measurement, just pull them up when they are big enough to suit you.harvesting onions\r\n\r\nWhen the onion tops turn in to yellow it means it is matured enough to harvest.\r\nUse a garden fork to pull them up early in the morning on a sunny day, loosen the soil and lay them a dry airy location for two days and always handle them very carefully.\r\nTo avoid sunscald, lay the tops of one row over the bulbs of another.\r\nOnce the onions are completely dry, cut back the tops to one inch. Now they are ready to eat.', 'images/product-8.jpg'),
(9, 'APPLE', 'Fruit', 'About the crop', 'Apple (Malus pumila) is an important temperate fruit. Apples are mostly consumed fresh but a small part of the production is processed in to  juices, jellies, canned slices and other items.\r\n\r\nIn India, Apple is primarily cultivated in Jammu & Kashmir; Himachal Pradesh; hills of Uttar Pradesh and Uttaranchal. It is also cultivated to a small extent in Arunachal Pradesh; Nagaland; Punjab and Sikkim.\r\n\r\n', 'Apple propagation and planting methods', 'Grafting : Apples are propagated by several methods viz.; whip, tongue, cleft and roots grafting. Tongue and cleft grafting at 10-15 cm above the collar during February-March gives the best results. Usually grafting is done at the end of winter.\r\n\r\nBudding : Apples are mostly propagated by shield budding, which gives a high percentage of success. In shield budding a single bud along with a shield piece of stem is cut along with the scion and inserted beneath the rind of the rootstock through a \'T\' shaped incision during active growth period. Budding is done when the buds are fully formed during summer. The optimum time of budding is September in Kashmir Valley, Kumaon hills of Uttaranchal, high hills of Himachal Pradesh and June in mid hills of Himachal Pradesh.\r\n\r\nRootstocks : Most of the apple plants are grafted or budded on seedling of wild crab apple. The seedling rootstocks obtained from the seeds of diploid cultivars like Golden Delicious, Yellow Newton, Wealthy, Macintosh and Granny Smith also can be used. High density planting is done using dwarfing rootstocks (M9, M4, M7 and M106).\r\n\r\n', 'Manures and fertilizers', 'Farmyard manure @ 10 kg./ year age of tree is applied along with other fertilizers. The fertilizer dose depends upon the fertility of soil and amount of organic manure applied to the crop. Generally, application of 350 g N, 175 g P2O5 and 350 g K2O per plant per year in split doses is recommended for fully-grown bearing trees. On some trees deficiency of zinc, boron, manganese and calcium may be observed which is corrected with the application of appropriate chemicals through foliage spray.\r\n\r\n', 'Tips and points for high yield', 'Normally the apples are ready for harvest from September-October except in the Nilgiris where the season is from April to July. The fruits mature within 130-150 days after the full bloom stage depending upon the variety grown. The ripening of fruits is associated with the change in colour, texture, quality and the development of the characteristic flavour. The fruits at the time of harvest should be uniform, firm and crisp. The colour of the skin at maturity ranges from yellow-red depending on the variety. However, the optimum time of harvest depends on fruit quality and intended period of storage. Due to the introduction of dwarf rootstock hand picking is recommended as it reduces bruising due to fruit fall during mechanical harvesting.\r\n\r\nYield : The apple tree starts bearing from 4 year onwards. Depending on variety and season, a well managed apple orchard yields on an average 10-20 kg/tree/year.', 'images/product-9.jpg'),
(10, 'STRAWBERRY', 'Fruit', 'Importance of Growing Strawberries', 'Strawberries are the most popular small fruit grown in home gardens for good reason. Few things bring back summer memories like sinking teeth into a fresh and juicy strawberry. Why not have these sweet berries growing in your own garden? They are able to be grown in all the temperate regions of the world!\r\n\r\nStrawberries are relatively easy to grow, and they can fit within small space constraints or fill huge garden plots. Growing strawberries doesn’t require any specialized equipment. And, they can even be grown in a container or pot on a deck, porch, patio, or balcony.\r\n\r\nOne of the biggest benefits of growing strawberries is their perennial nature. You can reap the rewards of your labor for several years after initially planting strawberries with minimal effort after the initial planting year. With proper care, it is not uncommon for each strawberry plant to produce a full quart of strawberries. Approximately twenty-five strawberry plants should adequately supply a normal family with delicious strawberries.\r\n\r\nPerhaps an even more important reason you should consider growing strawberries in your own garden is what you often buy along with the strawberries in stores. You buy pesticides. Commercial strawberries repeatedly rank very poorly on list of most-contaminated produce items (the Environmental Working Group’s data). This rank gains them membership in the infamous “Dirty Dozen” club. Even after washing, store-bought strawberries often have residual pesticides on or in them. Growing strawberries in your own garden allows you to know exactly what you are eating! In fact, here are reasons you should consider growing your own strawberries.', 'Preparing Your Garden', 'If your site is sod-covered, it is best to cultivate and till the area the year before you want to plant your strawberries to eliminate competing grasses. When possible, it is best to grow a green manure crop the year before you want to begin growing strawberries to improve soil quality (oats, sudan grass, and rye are all excellent for this).\r\n\r\nWhen you are ready to plant your berry plants, you should, to the best of your ability, ensure that the site is free of weeds, grubs, and any soil-bourne diseases. Once any sod or grass is gone, work two to three inches of compost into the top layer of soil. Add more organic material before planting, especially if the soil doesn’t retain moisture very well. Peat, compost, or aged straw and manure are good options. Additionally, organic or inorganic fertilizer can further improve soil quality by being worked in down to six inches.\r\n\r\nThe pH of your site’s soil is also important for growing strawberries. In order to grow strawberries most effectively, the soil needs to be slightly acidic. Strawberry plants will grow in dirt that has a pH between 5.0 and 7.0, but 5.8 to 6.2 is ideal for maximum growth and production. Soil test kits are available online and through garden supply stores. However, the best results are obtained through the professional soil testing services provided by your county’s agricultural extension agent. Before planting strawberries, you should test your soil and amend it as indicated to create the best possible environment for growing strawberries.\r\n\r\nYou should have disease-free, healthy plants ready to plant. If picking them yourself, choose plants that have large crowns with healthy, light-colored roots. If you ordered them, open the package immediately and inspect them. If moldy, send the strawberry plants directly back. If you can’t plant them immediately, wrap the strawberry plants in wet paper towels, put them in a bag, and store them in your refrigerator until you can plant strawberry plants outside. Planting strawberry plants should be done on a cloudy or overcast day or during the late afternoon.', 'Fertilizing Strawberry Plants', 'Fertilizing helps growing strawberry plants reach their maximum potential. It can be beneficial to fertilize multiple different times in the life of a strawberry bed.\r\n\r\nFirst, a balanced (10-10-10) fertilizer should be added just before planting your strawberry plants. Add one to two pounds of fertilizer per 100 square feet. This helps increase the nitrogen levels in the soil.\r\n\r\nSecond, during the first year of the strawberry garden, another round can be applied after the strawberries have been planted for around four to six weeks, and again in August, depending on plant growth.\r\n\r\nThird, day-neutral and everbearing strawberries can be fertilized after the first harvest. June-bearing strawberries should be fertilized during renovation. This is done to keep the plants vigorous. Be sure to water the fertilizer well to get it to soak in down to the roots of the growing strawberries.\r\n\r\nYou should not fertilize your strawberry plants in the spring of a fruiting year. Too much nitrogen will result in soft, easily-damaged strawberries. You can still fertilize after the initial crop for day-neutral and everbearing strawberries, and you should also fertilize immediately after renovation once the plants are completely dry. Applying fertilizer to wet strawberry plants can result in phytotoxicity, and no fertilizer particles should remain lodged in the plants. After application, sweep your plants with a broom or other suitable tool to dislodge any stuck fertilizer.\r\n\r\nYou do have to be careful when fertilizing growing strawberries. If you apply too much fertilizer, you will get excessive leaf growth and poor production of flower stalks. If you plant strawberries in colder climates, late-season fertilizing can cause new growth that will be damaged by cold-weather frosts. Indeed, I have grown strawberries without any fertilizers in less-than-optimum soil and still gotten a reasonable harvest, so it is better to fertilize too little than too much until you become experienced.\r\n\r\nIf you prefer growing organic strawberries, blood meal can be used to increase nitrogen while bone meal can be used to increase phosphates. Growing organic strawberries with these organic fertilizers requires application about once per month from June through September.', 'You Grow Strawberries for the Harvest!', 'After a couple of years planting and caring for growing strawberries, you are ready for harvest! Strawberries should be completely ripened on the plant before harvesting. Most varieties should be left on the plant for one or two days after the strawberries have gained full color. Ultimately, however, you have to eat one to know if it is ready!\r\n\r\nStrawberries are somewhat fragile and are easily damaged and bruised. Gentle hands and tender care should be used when picking them from the strawberry plants. To pick a ripe strawberry, release it using the fingernails of your thumb and forefinger to sever the stem directly above the berry instead of pulling on the strawberry itself. Cradle the berry in your palm as you pick it so that it doesn’t fall and bruise or get dirty. The cap and part of the stem should still be attached to the berry. You can harvest your strawberries as often as every other day if you want to maintain ripe, high-quality fruits.\r\n\r\nStrawberries should be dry when they are picked. Wet berries do not do well and will mold quickly, and, unlike tomatoes, will not ripen after being picked. As soon as they are harvested, it is best to place unwashed strawberries in cool, dry, shady place (a refrigerator is best).', 'images/product-10.jpg'),
(11, 'GARLIC', 'Spice', 'Garlic-basic and general points', 'Garlic (Allium sativum L.) is important bulb crops grown and used as a spice or a condiment throughout India. It is also an important foreign exchange gaining crop for India. Garlic has a higher nutritive value than other bulb crops\r\n\r\nIndia exports fresh and chilled garlic, dried garlic, dehydrated garlic flakes, dehydrated garlic powder, and garlic oil to Bahrain, Bangladesh, Germany, Japan.\r\n\r\nGarlic farming is mainly in Gujarat, Madhya Pradesh, Orissa, Maharashtra, Uttar Pradesh, and Rajasthan.', 'Soil for Garlic Farming', 'The Garlic crop grows in the well-drained loamy, rich in humus with fairly good potash content soil. Garlic Crops raised on sandy or loose soils have poor keeping quality and the bulbs produced are lighter in weight.\r\n\r\nGarlic Bulbs produced in heavy soils are deformed, and during harvest, many bulbs are broken and bruised. Bulbs become badly discolored poorly-drained soil.\r\n\r\nAcidic soils are not suitable for clove development. However, a pH range between 5 – 7 had little effect on growth and yield.\r\n\r\nGarlic is propagated by planting cloves or bulbils or aerial bulbils.\r\n\r\nPropagation by aerial bulbils is preferred when closer space is adopted. Aerial bulbils are more productive as compared to clones.\r\n\r\nLarger cloves give a higher yield. The seed should be virus-free.', 'Manures and fertilizers', 'Garlic responds well to organic manure so add Well decomposed FYM at the rate of 20 tonnes per hectare at the time of field preparation for garlic cultivation.\r\n\r\nNitrogen, phosphorus, potassium are applied at the rate of 60 kg each.\r\n\r\nNitrogen is given two split dose one is at the time of planting second is 30 days after planting.\r\n\r\nThe application of borax at the rate of 10 kg/ ha is improving bulb size and crop yield.', 'When to Harvest Garlic?', 'You will know when to harvest garlic when most of the leaves have turned brown. This usually occurs in mid-July to early August, depending on your climate. At this time you may dig the bulbs up, being careful not to bruise them. If the bulbs are left in the ground too long, they may separate and will not store well. Lay the garlic plants out to dry for 2 or 3 weeks in a shady area with good air circulation. Be sure to bring the garlic plants in if rain is forecasted for your area. When the roots feel brittle and dry, rub them off, along with any loose dirt. Do not get the bulbs wet or break them apart, or the plants won\'t last as long.\r\n\r\nEither tie the garlic in bunches, braid the leaves, or cut the stem a few inches above the bulb. Hang the braids and bunches or store the loose bulbs on screens or slatted shelves in a cool, airy location. You may want to set aside some of the largest bulbs for replanting in the fall.\r\n\r\n', 'images/product-11.jpg');
INSERT INTO `crop_data` (`c_id`, `c_name`, `category`, `head1`, `desc1`, `head2`, `desc2`, `head3`, `desc3`, `head4`, `desc4`, `image`) VALUES
(12, 'CHILLI', 'Spice', 'Chilli Cultivation points', 'Chilli is a spicy fruit used in cuisine preparations. It is mostly added as an ingredient in foods to make it spicy. As per the latest data, India tops the list in chilli production followed by China, Peru, Spain and Mexico. Indian chillies are known for their pungency and color, especially the ones grown in Guntur district of Andhra Pradesh. Some of the chillies that are bigger in size are called bell peppers and are used as a vegetable. Chilli has various local names in India like lanka, mirchi etc.', 'Soil and planting for chilli farming', 'Chillies need moisture for growth. It has been found that black soil which retains moisture is ideal in case they are grown as rainfed crops. Under irrigated conditions, the crop needs well-drained sandy loam with rich organic content. They can also be grown in deltaic soil under irrigated conditions. In areas such as Uttarakhand, soil is mixed with gravel and coarse sand before undertaking chilli cultivation.\r\n\r\nChillies are propagated from seeds. At the time of cultivation, disease- free, good quality seeds must be chosen. Various high yielding, disease resistant varieties have been developed by research institutes and different organizations. In case of organic farming, they must be obtained from farms certified by the central authority.', 'Seedling protection', 'The seeds of chilli are commonly grown in nurseries and then the seedlings are transplanted.\r\n\r\nAfter sowing the seeds are covered with coco peat and it is watered everyday till it germinates.\r\n\r\nAround 3% Panchagavya spray is done after 15 days or a micronutrient spray is done after 18 days.\r\n\r\nOnce they are 35 days old, the seedlings are transplanted.', 'Harvesting in Chilli Cultivation', 'The harvesting of chilli is done according to the intended use of chillies.\r\n\r\nFor making powdered chilli and dry chilli, fruits are harvested when the chilli turns dark red in color.\r\n\r\nThe green chilli is plucked for preparing pickles.\r\n\r\nPlucking should be done at regular intervals.\r\n\r\nKeeping them on the plant for a longer period of time can cause color fading and wrinkles.\r\n\r\nThe chilli in green colour or green chillies can be plucked 8-10 times while ripe ones are plucked 5-6 times.', 'images/product-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crop_fc`
--

DROP TABLE IF EXISTS `crop_fc`;
CREATE TABLE IF NOT EXISTS `crop_fc` (
  `crop_id` int(4) NOT NULL AUTO_INCREMENT,
  `f_email` varchar(40) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `category` varchar(15) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(4) NOT NULL,
  `discount` int(4) NOT NULL DEFAULT '0',
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`crop_id`),
  KEY `f_email` (`f_email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_fc`
--

INSERT INTO `crop_fc` (`crop_id`, `f_email`, `c_name`, `category`, `quantity`, `price`, `discount`, `image`) VALUES
(1, 'Riya@gmail.com', 'Carrot ', 'Vegetable', 500, 30, 2, 'shop/product-1.jpg'),
(2, 'aleena@gmail.com', 'Apple', 'Fruit', 3000, 120, 10, 'shop/product-9.jpg'),
(3, 'aleena@gmail.com', 'Onion', 'Vegetable', 10000, 22, 2, 'shop/product-8.jpg'),
(4, 'Riya@gmail.com', 'Cabbage', 'Vegetable', 3000, 45, 0, 'shop/product-4.jpg'),
(5, 'Riya@gmail.com', 'Chilli', 'Spice', 900, 100, 0, 'shop/product-12.jpg'),
(6, 'Riya@gmail.com', 'Beans', 'Vegetable', 30000, 30, 0, 'shop/Beans.jpg'),
(7, 'mathew@gmail.com', 'Tomato', 'Vegetable', 19000, 30, 0, 'shop/tomato.jpg'),
(8, 'mathew@gmail.com', 'Cardomom', 'Spice', 4850, 1000, 0, 'shop/CARDAMOM.jpg'),
(9, 'mathew@gmail.com', 'Strawberry', 'Fruit', 10000, 120, 10, 'shop/strawberry.jpg'),
(10, 'aleena@gmail.com', 'Pepper', 'Spice', 4000, 300, 0, 'shop/pepper.jpg'),
(11, 'Riya@gmail.com', 'Almond', 'Dried', 10000, 200, 0, 'shop/Almond.jpg'),
(12, 'aleena@gmail.com', 'Cashew', 'Dried', 2000, 300, 0, 'shop/cashew-nuts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crop_request`
--

DROP TABLE IF EXISTS `crop_request`;
CREATE TABLE IF NOT EXISTS `crop_request` (
  `crop_id` int(4) NOT NULL AUTO_INCREMENT,
  `farmer_email` varchar(20) NOT NULL,
  `supplier_email` varchar(40) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `price` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `image` varchar(30) NOT NULL,
  `status` varchar(11) DEFAULT 'Pending',
  PRIMARY KEY (`crop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_request`
--

INSERT INTO `crop_request` (`crop_id`, `farmer_email`, `supplier_email`, `c_name`, `price`, `quantity`, `image`, `status`) VALUES
(2, 'Riya@gmail.com', 'john@gmail.com', 'cabbage', 300, 10, 'add_crop/product-4.jpg', 'Accepted'),
(3, 'Riya@gmail.com', 'john@gmail.com', 'carrot', 70, 10, 'add_crop/product-1.jpg', 'Accepted'),
(4, 'Riya@gmail.com', 'jiss@gmail.com', 'Beans', 100, 20, 'add_crop/product-2.jpg', 'Pending'),
(6, 'Riya@gmail.com', 'john@gmail.com', 'onion', 300, 10, 'add_crop/product-8.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cstmr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Cstmr_Name` varchar(50) NOT NULL,
  `Cstmr_Mob` bigint(20) UNSIGNED NOT NULL,
  `Cstmr_Email` varchar(45) NOT NULL,
  `Cstmr_Addrs` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Cstmr_id`),
  UNIQUE KEY `Cstmr_id_UNIQUE` (`Cstmr_id`),
  UNIQUE KEY `Cstmr_Mob_UNIQUE` (`Cstmr_Mob`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='all details of the customer present in this project';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cstmr_id`, `Cstmr_Name`, `Cstmr_Mob`, `Cstmr_Email`, `Cstmr_Addrs`) VALUES
(1, 'Arjith Sinha', 1234567, 'arjith123@gmail.com', 'Guwahati'),
(2, 'Shyam Sundar', 5673473, 'sunder.lal@hotmail.com', 'Coimbatore'),
(3, 'Latheef M H', 7834234, 'latheef.mh2345@yahoo.com', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE IF NOT EXISTS `farmer` (
  `email` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `town` varchar(20) NOT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='all the details of farmers included in this project' KEY_BLOCK_SIZE=1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`email`, `name`, `address`, `address2`, `town`, `state`, `pincode`) VALUES
('aleena@gmail.com', 'Aleena', 'Jiss villa ', 'Opp.AIDA Hotel', 'Kottayam', 'Kerala', '686001'),
('Mathew@gmail.com', 'Mathew', 'Sneha Bhavan', NULL, 'Kottayam', 'Kerala', '686001'),
('Riya@gmail.com', 'Riya', 'Cheramannil house', NULL, 'Pathanamthitta', 'Kerala', '689641');

-- --------------------------------------------------------

--
-- Table structure for table `farming_tip`
--

DROP TABLE IF EXISTS `farming_tip`;
CREATE TABLE IF NOT EXISTS `farming_tip` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `url` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farming_tip`
--

INSERT INTO `farming_tip` (`id`, `date`, `heading`, `description`, `image`, `url`) VALUES
(1, '2020-11-01', 'How to Prepare the Soil for Growing Garlic', 'To grow nice, big heads of garlic, you need loose, fertile soil. Loosen the soil with a digging fork, spread a 2- to 3-inch-deep layer of organic matter over the area, and dig it in. For organic matter, I use a well-aged mixture of compost, leaf mold, and aged rabbit manure. To avoid disease problems, donâ€™t plant garlic in the same spot two years running. Prepare several shallow furrows in the soil that are 6 inches apart.', 'farming-tip/How to Prepare the Soil for Growing Garlic.jpg', 'D06y-i4Pvf4'),
(2, '2020-11-04', 'High yield for soybeans', 'Many soybean producers depend on residual corn fertility to supply nutrients to their soybean crop. When soils are routinely maintained at high or very high levels of phosphorous (P) and potassium (K), this may be a safe strategy, but often it is not. Some Extension soil fertility specialists have indicated soil test levels of P and K in their states often are not adequate for optimum soybean yields.', 'farming-tip/High yield for soybeans.jpg', 'EHPfvVcCa90'),
(3, '2020-10-08', 'Growing beans in home gardens', 'Plant beans once the soil has warmed. In much of Minnesota, this is not until late May or even early June.\r\nBean seed planted in cold soil may rot rather than germinate, and plant growth will be very slow in cooler weather.\r\nSome gardeners plant bush beans in succession, every two weeks until early August, for production throughout the summer and into fall. Pole beans will continue to flower and bear until frost, so there is no need for succession planting.', 'farming-tip/Growing beans in home gardens.jpg', '4sYRtS2l9Ks'),
(4, '2020-09-02', 'Preparing apple seeds for planting', 'Apple seeds need cold stratification to break dormancy.  The seeds need to be kept under moist refrigeration for at least 6 weeks before they’re planted.  Place apple seeds in a moist paper towel, and then put that paper towel inside a plastic bag, leaving it open just a crack for air exchange.  Store it in the back of the refrigerator, checking on the towel every week or so to make sure it’s moist.', 'farming-tip/PREPARING APPLE SEEDS FOR PLANTING.jpg', 'B34oMqbL_js'),
(6, '2020-11-12', 'How To Grow Cabbage At Home ', 'bbage is a relatively easy crop to grow and doesn’t require much pre-planning. Nonetheless, there are a few things you would want to check off your to-do list before you plant the seeds. Cabbage can be grown in different kinds of soils ranging from sandy loam to clay soil. But make sure that the pH level of the soil is maintained at 6.5 to 7 to get a good yield. Soil rich in organic matter with good drainage is all that your cabbage plants need to thrive. \r\n\r\nAllowing your plants, adequate room to grow is crucial in case of all crops, not just cabbage. You can ensure that your plants have enough space to grow by referring to the following details -\r\n\r\nRow to Row Distance - 45 cms (Early Maturity) & 60 cms (Late Maturity)\r\nPlant to Plant Distance - 30 cms (Early Maturity) & 45 cms (Late Maturity) ', 'farming-tip/How To Grow Cabbage At Home.jpg', 'DG-KeAukx7s'),
(7, '2020-11-18', 'Grow sprouts like a pro', 'Rule of thumb: sprouts should be consumed when the seedling has grown to about 2 to 3 times the length of the seed. \r\n\r\nTip: start growing your own sprouts with seed varieties that germinate easily such as mung beans, cress, alfalfa or radishes.\r\n', 'farming-tip/sprout.jpg', 'M0SGh85_MgY'),
(8, '2020-11-20', 'Easy tip for carrot planting', 'Carrots dislike transplanting, so sow the seeds outdoors, about 1/8-inch deep, in rows spaced 15 inches apart. An easy planting tip: space the seeds along the ground and lightly rake the soil over them with your hand. They should make light contact with the soil, so pat them down gently, and keep them moist.', 'farming-tip/carrot.jpg', '3W1FpYIO-8s');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` varchar(50) DEFAULT NULL,
  `quality` int(10) NOT NULL,
  `trade` int(10) NOT NULL,
  `usability` int(10) NOT NULL,
  `overall_sat` int(10) NOT NULL,
  `overall_exp` int(10) NOT NULL,
  `message` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `review`, `quality`, `trade`, `usability`, `overall_sat`, `overall_exp`, `message`) VALUES
(1, 'John', 'john@gmail.com', ' Avoid delivery delays', 30, 30, 20, 10, 10, 'okay'),
(2, 'Krishna', 'Kris@gmail.com', 'Good fruit', 40, 20, 40, 30, 40, ' good'),
(3, 'Riya', 'Riya@gmail.com', 'Easy to use', 30, 40, 30, 30, 40, 'Overall good');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) NOT NULL,
  `comp_id` int(6) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_email`, `comp_id`, `message`) VALUES
(1, 'john@gmail.com', 12345, 'Dear John,\r\n\r\n\r\nThank you for bringing this to our notice and we are really sorry to hear this. We\'ve taken this up on priority and will get back to you. The delivery duration depends on the distance between the farmer and user. We will surely take this into consideration and make the delivery duration as less as possible. It is advisable to choose the farmer near to your place.\r\n\r\n'),
(27, 'Riya@gmail.com', 12346, 'Hello Riya,\r\n\r\nThankyou for reaching out to Farm Assistant  Help Desk. We will soon update the data and information on our Crop Specialisation after discussion with experts. Please keep updated on Crop Specialisation page.\r\nThank you!');

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

DROP TABLE IF EXISTS `my_order`;
CREATE TABLE IF NOT EXISTS `my_order` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `crop_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quan` int(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `price` int(20) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `order_date` varchar(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_order`
--

INSERT INTO `my_order` (`id`, `order_id`, `email`, `f_name`, `crop_id`, `name`, `quan`, `unit`, `price`, `pic`, `order_date`, `order_status`, `order_price`) VALUES
(2, 5523, 'ashlin@gmail.com', 'Riya', 1, 'Carrot ', 500, 'Grams', 30, 'shop/product-1.jpg', '21/11/20', 'Delivered', 15),
(3, 5523, 'ashlin@gmail.com', 'Aleena', 2, 'Apple', 2, 'Kgs', 120, 'shop/product-9.jpg', '21/11/20', 'Packed', 240),
(4, 5523, 'ashlin@gmail.com', 'Mathew', 8, 'Cardomom', 100, 'Grams', 1000, 'shop/CARDAMOM.jpg', '21/11/20', 'Shipped', 100),
(8, 7475, 'john@gmail.com', 'Riya', 3, 'carrot', 10, '', 70, 'add_crop/product-1.jpg', '21/11/20', 'Ordered', 70),
(9, 8132, 'Kris@gmail.com', 'Riya', 5, 'Chilli', 100, 'Grams', 100, 'shop/product-12.jpg', '23/11/20', 'Packed', 10),
(10, 8132, 'Kris@gmail.com', 'Mathew', 8, 'Cardomom', 50, 'Grams', 1000, 'shop/CARDAMOM.jpg', '23/11/20', 'Ordered', 50),
(11, 8132, 'Kris@gmail.com', 'Mathew', 7, 'Tomato', 1, 'Kgs', 30, 'shop/tomato.jpg', '23/11/20', 'Packed', 30),
(12, 8132, 'Kris@gmail.com', 'Riya', 1, 'Carrot ', 2, 'Kgs', 30, 'shop/product-1.jpg', '23/11/20', 'Packed', 60),
(13, 2498, 'john@gmail.com', 'Riya', 2, 'cabbage', 10, '', 300, 'add_crop/product-4.jpg', '15/12/20', 'Ordered', 300),
(14, 1617, 'Kris@gmail.com', 'Riya', 1, 'Carrot ', 2, 'Kgs', 30, 'shop/product-1.jpg', '15/12/20', 'Ordered', 60);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(40) DEFAULT NULL,
  `notif_type` varchar(30) DEFAULT NULL,
  `sender_name` varchar(40) DEFAULT NULL,
  `pic` varchar(50) NOT NULL DEFAULT 'images/icons/logo.png',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Unread',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `receiver`, `notif_type`, `sender_name`, `pic`, `date_time`, `page`, `status`) VALUES
(1, 'john@gmail.com', 'Complaint Reply', 'Farming Assistant Help Center', 'images/icons/logo.png', '2020-12-12 08:09:14', 'message_view.php?id=1', 'Unread'),
(15, 'Admin', 'New Order', 'john@gmail.com', 'profile/default.png', '2020-12-15 13:38:30', 'Admin-orders.php', 'Unread'),
(8, 'john@gmail.com', 'Crop Request Reply', 'Riya@gmail.com', 'profile/a1.jpg', '2020-11-21 08:09:14', 'view_crop.php', 'Unread'),
(10, 'Admin', 'New Order', 'Kris@gmail.com', 'profile/person_1.jpg', '2020-11-23 08:09:14', 'Admin-orders.php', 'Read'),
(13, 'Admin', 'New Complaint', 'Riya@gmail.com', 'profile/a1.jpg', '2020-11-23 08:09:14', 'Admin_complaint_view_single.php?id=12351', 'Read'),
(14, 'Riya@gmail.com', 'Complaint Reply', 'Farming Assistant Help Center', 'images/icons/logo.png', '2020-12-13 13:12:31', 'message_view.php?id=27', 'Unread'),
(16, 'Admin', 'New Order', 'Kris@gmail.com', 'profile/person_1.jpg', '2020-12-15 13:49:35', 'Admin-orders.php', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(11) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `psw_repeat` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `type`, `email`, `number`, `psw`, `psw_repeat`, `image`) VALUES
('Riya', 'Farmer', 'Riya@gmail.com', '987654321', 'qwert', 'qwert', 'profile/a1.jpg'),
('Krishna', 'Customer', 'Kris@gmail.com', '1234567890', 'poiu', 'poiu', 'profile/person_1.jpg'),
('John', 'Supplier', 'john@gmail.com', '0987654321', 'asdf', 'asdf', 'profile/default.png'),
('Align Elsa Agith', 'Admin', 'alignagith@gmail.com', '9387206533', '123', '123', 'profile/Align.jpg'),
('Aleena', 'Farmer', 'aleena@gmail.com', '9387206533', 'zxcv', 'zxcv', 'profile/default.png'),
('Ashlin', 'Customer', 'ashlin@gmail.com', '8765122871', 'zxcv', 'zxcv', 'profile/default.png'),
('Mathew', 'Farmer', 'Mathew@gmail.com', '987654321', 'mnb', 'mnb', 'profile/default.png'),
('Jiss', 'Supplier', 'jiss@gmail.com', '8765321561', 'lkj', 'lkj', 'profile/person_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `req_crop`
--

DROP TABLE IF EXISTS `req_crop`;
CREATE TABLE IF NOT EXISTS `req_crop` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_email` varchar(40) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_crop`
--

INSERT INTO `req_crop` (`c_id`, `s_email`, `c_name`, `quantity`, `image`) VALUES
(1, 'john@gmail.com', 'carrot', 4, 'request_crop/product-1.jpg'),
(2, 'john@gmail.com', 'cabbage', 3, 'request_crop/product-4.jpg'),
(3, 'john@gmail.com', 'onion', 10, 'request_crop/product-8.jpg'),
(6, 'john@gmail.com', 'Beans', 20, 'request_crop/product-2.jpg'),
(7, 'jiss@gmail.com', 'Beans', 20, 'request_crop/product-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplr_Id` int(10) UNSIGNED NOT NULL,
  `Supplr_Name` varchar(50) NOT NULL,
  `Supplr_Mob` bigint(20) UNSIGNED NOT NULL,
  `Supplr_Email` varchar(45) NOT NULL,
  `Supplr_Addrs` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Supplr_Id`),
  UNIQUE KEY `Supplr_Id_UNIQUE` (`Supplr_Id`),
  UNIQUE KEY `Supplr_Mob_UNIQUE` (`Supplr_Mob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='contains details of all the suppliers in this project';

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplr_Id`, `Supplr_Name`, `Supplr_Mob`, `Supplr_Email`, `Supplr_Addrs`) VALUES
(1, 'Lal Shastri', 8967452, 'lalindustry@gmail.com', 'Haryana'),
(2, 'Ibrahim Junaid', 4587867, 'junaid345ibrahim@yahoo.com', 'Banglore'),
(3, 'Sara Williams', 5679555, 'sara90franchise@gmail.com', 'Kerala');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `c_email` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `crop_name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `c_email`, `image`, `crop_name`, `price`, `quantity`) VALUES
(4, 'ashlin@gmail.com', 'shop/product-12.jpg', 'chili', 10, 100),
(5, 'ashlin@gmail.com', 'shop/product-10.jpg', 'strawberry', 5, 40),
(8, 'Kris@gmail.com', 'shop/product-1.jpg', 'Carrot ', 30, 2500),
(10, 'Kris@gmail.com', 'shop/product-4.jpg', 'Cabbage', 45, 3000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
