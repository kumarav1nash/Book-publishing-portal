-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2019 at 03:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

DROP TABLE IF EXISTS `admin_register`;
CREATE TABLE IF NOT EXISTS `admin_register` (
  `Admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(20) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Display_Name` varchar(50) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Contact_No` text NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Profile_Image` text NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`Admin_id`, `Employee_ID`, `First_Name`, `Last_Name`, `Display_Name`, `Email`, `Contact_No`, `Password`, `Profile_Image`) VALUES
(1, 0, 'Harry', 'Gupta', 'Harry', 'harrygupta238@gmail.com', '7895344376', 'harry', ''),
(2, 0, 'Krishna', 'Nand', 'Krishna', 'krishnanand8081@gmail.com', '8081826830', 'krishna', ''),
(3, 0, 'avinash', 'kumar', 'avi', 'admin@root.com', '802127323', 'root', '11174866_492672287547998_3946782408118805098_n');

-- --------------------------------------------------------

--
-- Table structure for table `author_register`
--

DROP TABLE IF EXISTS `author_register`;
CREATE TABLE IF NOT EXISTS `author_register` (
  `Author_ID` int(50) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Password` text NOT NULL,
  `Professional_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Contact_No` text NOT NULL,
  `Address` text NOT NULL,
  `Profession` text NOT NULL,
  `College_Name` text NOT NULL,
  `Company_name` text NOT NULL,
  `Course` text NOT NULL,
  `Author_Profile_Pic` text NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Age` int(2) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `date_of_registration` date NOT NULL,
  PRIMARY KEY (`Author_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_register`
--

INSERT INTO `author_register` (`Author_ID`, `Name`, `Password`, `Professional_Name`, `Email`, `Contact_No`, `Address`, `Profession`, `College_Name`, `Company_name`, `Course`, `Author_Profile_Pic`, `Date_of_Birth`, `Age`, `Sex`, `date_of_registration`) VALUES
(1, 'harry gupta', 'harrygupta', 'harry gupta', 'harrygupta238@gmail.com', '07895344376', 'dhoolkot,dehradun,uttarakhand, dhoolkot, dehradun,uttrakhand', 'Student', 'tula\'s institute', '', 'B.Tech(Cse)', 'IMG_20181113_151808.jpg', '1996-07-18', 22, 'Male', '2018-12-13'),
(2, 'Niraj Kumar', 'nirajray', 'Nanki Ray', 'nirajkumarray@gmail.com', '8077149186', 'dhoolkot,dehradun,uttarakhand, dhoolkot, dehradun,uttrakhand', 'Student', 'tula\'s institute', 'Jai Bharat Maruti', 'B.Tech(Mechanical)', 'IMG_20181028_150346.jpg', '1998-08-05', 20, 'Male', '2018-12-23'),
(3, 'Amish Tripathi', 'amishtripathi', 'Amish Tripathi', 'contact@authoramish.com', '96191 13347', 'dhoolkot,dehradun,uttarakhand, dhoolkot, dehradun,uttrakhand', 'Employee', 'IIM Kolkata', 'DBS Bank', 'Investment Banking', 'amish.jpg', '1974-10-18', 44, 'Male', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `Post_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Post_Subject` varchar(255) NOT NULL,
  `Post_Title` varchar(255) NOT NULL,
  `Post_Image` varchar(255) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Post_By` varchar(255) DEFAULT NULL,
  `Post_Description` varchar(60000) DEFAULT NULL,
  `Poster_Id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Post_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`Post_Id`, `Post_Subject`, `Post_Title`, `Post_Image`, `Date`, `Post_By`, `Post_Description`, `Poster_Id`) VALUES
(111, 'Subject', 'aaaa bbbbbbbbbb ccccccccc ddddddddddd eeeeeeeeeee', '26904357_2006873322924748_8213489466897873523_n.jpg', 'Mon 30/04/2018', 'Harry Gupta', 'aaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbbb ccccccccccccccccc dddddddddd eeeeeeeee ffffffffffff dddddddd sssssss aaaaaa jjjjj jkkkkkkkksddddddcin encwiiuewue oiwehcfoeiwhfwedwe oiewhcfedwedc oiewhfndw edooiewfwed  oihewifcnwked mecnoiefhd cnoefchew xoichewiomncewnced woihfeew oiew ,cmocifedm oiend ocd coieww oiewhd doefihnd wdiod dldknodihqd odewid qodiedi ,picepw, eoiewm welnewifphd mwedioewdd wedleownied doiewfew oeicfnew eoneif, moewfb cipoefnfi eoif ceoibfn fnoefi mdowecfipd ncpoewif c piewnfd epief oneifnpief j cioefwk eoinew oi wenoij oin  weo oewfwm noih weonfpin mowenfoim ouwef jniwefm ,jniewf kkjoew dojew ewon e wdo e fewon  ewofn ewfjo  oiewf  oew  owe  o owefb oiwcf  owefw ouwefeb oewbf f ewofewf  owfew doewfewf oewf jowebf oi fw oweewf o  ewkfoun fwowe je owej  weew ew ewofe fkjewewf khf ef ewfb boewf ewoewf  ewfb nkewfoew wek woe ew ouew fkdjew newd jewdbew dejkew e ew ewew ekwe webe fwe we ew ewkewkdn kew ewf e we .', '7895344376'),
(112, 'News', 'Rahul Gandhi Meets RJD Chief Lalu Prasad at AIIMS in Delhi', '1.jpg', 'Mon 30/04/2018', 'Harry Gupta', 'The meeting between the two leaders lasted for around 30 minutes. Rahul Gandhi is said to have enquired about the Bihar leader s health.\r\n\r\nThe meeting comes just a day after Congress s Jan Aakrosh rally in Delhi. Observers say, there was political talk as well.\r\n\r\nLalu Yadav is lodged in Ranchis Birsa Munda Central Jail since December 23 after being convicted in the Deoghar treasury case. He was admitted to AIIMS in New Delhi on March 29 after a Special CBI court allowed him to seek specialised treatment at the premier institute.', '7895344376'),
(113, 'News', 'A Walkover in Shikaripura Not Comforting For Yeddyurappa As Shimoga Witnesses a Fierce Battle', '9585842eaf6a72b881513f8259f97eac.jpg', 'Mon 30/04/2018', 'Harry Gupta', ' Gouja, a middle-aged agriculture labourer from Ambligola village says there is no election in Shikaripura. He feels that there is no contest this time and BS Yeddyurappa will easily win from here for the eighth term.The same feeling echoes across Yeddyurappa fiefdom in Shimoga district. Whoever News18 spoke to agree that Yeddyurappa will easily win from here irrespective of what happens in rest of Shimoga and Karnataka.\r\nThe Congress has fielded a local municipality member Goni Malatesh and the JDS has pitted a low profile leader Baligar against BJPs chief ministerial candidate and former chief minister.', '7895344376'),
(114, 'News', 'Hereâ€™s What Sumona Chakravarti Has To Say About Kapil Sharmaâ€™s Off Air Show', 'f9d646c4f8e362b9aa7d1f4ba8f99129.png', 'Mon 30/04/2018', 'Harry Gupta', 'Star comedian Kapil Sharma has brought forth a lot of negative shade towards himself. Following his Twitter rant and an ugly spat with a journalist or counting the whole Preeti Simoes fiasco, Kapil Sharma is definitely very off-the-track! However, the comedian isnâ€™t alone to take the brunt of it all, he has got a lot of support from his industry friends as well as those with whom he isnâ€™t on good terms.', '7895344376'),
(115, 'News', 'Namrata Shirodkar On Mahesh Babu & Success of â€˜Bharat Ane Nenuâ€™', '6cf29c2d0b3b7d664528a3aeef12a24d.jpg', 'Mon 30/04/2018', 'Harry Gupta', 'The very beautiful Namrata Shirodkar, better known in Hyderabad as superstar Mahesh Babuâ€™s wife, is happier than she ever imagined she would be.\r\n\r\n\"â€œItâ€™s been 14 years of marriage and 4 years of courtship before that. Weâ€™ve been together in every sense, through all these years and I feel weâ€™ve been growing together. Now there are the two children - Gautam and Sitara, whom weâ€™re watching grow up. Itâ€™s the most blissful feeling in the universe. I wouldnâ€™t exchange this life of mine for anything in the world.â€\" - Namrata Shirodkar, Actor', '7895344376'),
(116, 'News', 'Donald Trump and Emmanuel Macron Planted a Tree. But Where Did it Go?', '5e01416084a61fcba5626546a6652753.jpg', 'Mon 30/04/2018', 'Harry Gupta', 'The photograph was seen around the world: US President Donald Trump and France Emmanuel Macron, gilded spades in hand, shovelling dirt over a young sapling.\r\nA week ago, at the beginning of Macron visit to Washington, the French president joined his American counterpart to throw handfuls of soil on the roots of a young oak tree as the their respective first ladies looked on.\r\nIt was a symbolic gesture: the tree came from a northern French forest where 2,000 US Marines died during the First World War.\r\nBut a few days later, the plant was nowhere to be seen.\r\nAmid fervent speculation, France on Sunday came through with an explanation: the tree, now not just a plant but a symbol of US-French relations, had been placed in quarantine.\r\n\r\n', '7895344376'),
(117, 'News', 'Image of Martian rock resembling ancient Egyptian warrior woman sparks debate on humanitys alien origins', 'nasa-mars-head_1024.jpg', 'Mon 30/04/2018', 'Harry Gupta', 'A recent photo by the Curiosity Rover on Mars has sparked a debate about how ancient Egyptians might have originated from the red planet. Surprised? Well, it has been theorised that long ago there was indeed life on Mars and that life on Earth had been seeded via a meteorite carrying life from the red planet. But finding a head of an Ancient Egyptian statue of a warrior woman on Mars really puts life to these theories.\r\n\r\nIn this day and age of photoshop, its hard to believe any photographic evidence. However, the discovery was made by Joe White, who has a YouTube channel called ArtAlienTV Â€ MARS ZOO, while he was browsing through some of NASAs released pictures from the Curiosity rover.', '7895344376'),
(118, 'News', 'India can learn a lot from Russias implementation of blockchain technology in its economy', '458bd583dda53bf6e6be07d24b794b1b.jpg', 'Mon 30/04/2018', 'Harry Gupta', '\"Aiming to overcome infrastructural limitations to its economic growth, Russia is now relying on an increased university-industry collaboration to integrate breakthrough technologies in building a new economy for the country Â€\" and there are lessons India can learn.\r\n\r\nThe National University of Science and Technology (NUST) MISIS has been mandated to create centres of excellence that can act as a playground for government departments and private companies to test new ideas.', '7895344376'),
(119, 'News', 'Nigerian Woman Sells Her 6-Week-Old Baby to Buy a Cell Phone', 'd0354fdbca55015a5de3cf7cf62300ff.jpg', 'Mon 27/08/2018', 'Harry Gupta', ' In a shocking case, a Nigerian woman has been arrested by local police for allegedly selling her six-week-old baby so that she can buy a cell phone with the money. According to a Times Now report, the accused a 23-year-old Miracle Johnson reportedly sold her baby to an orphanage in exchange for N200,000, according to a PUNCH Metro report. The mother has said that she was prompted to sell the baby by her friend Mama Joy, who is currently on the run.\r\n\r\nReportedly, her friend also suggested her to use some of the money in buying a motorcycle for her husband or help jump-start a business. The mother is now expressing regret over her decision, and that she said that she sold her baby due to frustration because her husband is unable to provide the basic needs for her and her two children.\r\n\r\nIn July this year, in India, the Jharkhand government started investigating the allegations of child trafficking against the Missionary of Charity. The organisation is set up by Nobel laureate Mother Teresa. The Child Welfare Committee (CWC) already launched an investigation after a couple filed a complaint against the organisation.\r\n\r\nThe couple approached the CWC after staffers at Missionaries of Charity took away an infant from them. According to a report published in India Today, the couple had paid Rs 1.2 lakh for the 14-day child. The police have detained a sister-in-charge for questioning. Two others have also been arrested in connection with the case.', '7895344376'),
(120, 'News', 'Nigerian Woman Sells Her 6-Week-Old Baby to Buy a Cell Phone', 'd0354fdbca55015a5de3cf7cf62300ff.jpg', 'Mon 27/08/2018', 'Harry Gupta', ' In a shocking case, a Nigerian woman has been arrested by local police for allegedly selling her six-week-old baby so that she can buy a cell phone with the money. According to a Times Now report, the accused a 23-year-old Miracle Johnson reportedly sold her baby to an orphanage in exchange for N200,000, according to a PUNCH Metro report. The mother has said that she was prompted to sell the baby by her friend Mama Joy, who is currently on the run.\r\n\r\nReportedly, her friend also suggested her to use some of the money in buying a motorcycle for her husband or help jump-start a business. The mother is now expressing regret over her decision, and that she said that she sold her baby due to frustration because her husband is unable to provide the basic needs for her and her two children.\r\n\r\nIn July this year, in India, the Jharkhand government started investigating the allegations of child trafficking against the Missionary of Charity. The organisation is set up by Nobel laureate Mother Teresa. The Child Welfare Committee (CWC) already launched an investigation after a couple filed a complaint against the organisation.\r\n\r\nThe couple approached the CWC after staffers at Missionaries of Charity took away an infant from them. According to a report published in India Today, the couple had paid Rs 1.2 lakh for the 14-day child. The police have detained a sister-in-charge for questioning. Two others have also been arrested in connection with the case.', '7895344376'),
(121, 'Subject', 'Title', 'The_Alchemist.jpg', 'Wed 19/09/2018', 'avinash kumar', 'Description', '802127323'),
(122, 'Subject', 'Title', 'The_Alchemist.jpg', 'Wed 19/09/2018', 'avinash kumar', 'Description', '802127323'),
(123, 'Subject', 'Title', 'The_Alchemist.jpg', 'Wed 19/09/2018', 'avinash kumar', 'Description', '802127323'),
(124, 'Subject', 'Title', 'The_Alchemist.jpg', 'Wed 19/09/2018', 'avinash kumar', 'Description', '802127323');

-- --------------------------------------------------------

--
-- Table structure for table `free_books`
--

DROP TABLE IF EXISTS `free_books`;
CREATE TABLE IF NOT EXISTS `free_books` (
  `Book_ID` int(50) NOT NULL AUTO_INCREMENT,
  `DYMENSON_Exclusive` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Book_Name` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Writer_Name` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Author_ID` int(10) NOT NULL,
  `Publishing_Date` date NOT NULL,
  `Book_Front_Image` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Book_Back_Cover_Image` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Poster_Id` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Poster_Name` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Book_Review` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Date_Of_Posting_on_Site` date NOT NULL,
  `Series` varchar(2) NOT NULL,
  `Language` text NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `Publisher` text NOT NULL,
  `No_Of_Chapters` int(3) NOT NULL,
  `Editor` text NOT NULL,
  `likes` int(20) NOT NULL,
  PRIMARY KEY (`Book_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1024 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `free_books`
--

INSERT INTO `free_books` (`Book_ID`, `DYMENSON_Exclusive`, `Book_Name`, `Writer_Name`, `Author_ID`, `Publishing_Date`, `Book_Front_Image`, `Book_Back_Cover_Image`, `Poster_Id`, `Poster_Name`, `Book_Review`, `Date_Of_Posting_on_Site`, `Series`, `Language`, `Edition`, `Publisher`, `No_Of_Chapters`, `Editor`, `likes`) VALUES
(1003, 'No', 'Mahabharat', 'vedvyas', 0, '1999-12-23', '51-9KBmx4DL._SX303_BO1,204,203,200_.jpg', '518sSp3DL9L._SX326_BO1,204,203,200_.jpg', 'admin@root.com', 'avinash kumar', 'Review', '2018-09-19', '', '', '', '', 0, '', 0),
(1004, 'Yes', 'The Alchemist', '', 0, '0000-00-00', 'The_Alchemist.jpg', '', '', 'Harry Gupta', 'One thing, according to me, that the World definitely needs the most now is positivity. Iâ€™m glad this book is a bestseller because it instills positivity into its readers. The book says that â€œto realize oneâ€™s destiny is a personâ€™s only real obligationâ€. It not just â€˜saysâ€™, it makes you believe! I have never been to a desert, but the narrative is so strong that I actually experienced being in the midst of a vast desert. The author not only gives a factual description of the scene, but describes also the feelings and emotions vividly. I felt the same rush of emotions through me. The narrative is fast paced in the beginning, but slows down towards the middle with sudden twists leading to thrilling portions towards the end. Honestly, I didnâ€™t know how to react at the conclusion of the book. At first it seemed as if the conclusion had disappointed me, but then, after a few moments of thoughts, I realized that the book managed to solve its purpose to make the reader understand that having faith in your destiny can actually lead you to realizing it. Now I think twice before cursing my destiny. There is always a bigger plan that we fail to comprehend.', '0000-00-00', '', '', '', '', 0, '', 0),
(1005, 'Yes', 'INFERNO', '', 0, '0000-00-00', '51P4GlGPfnL.jpg', '', '', 'Harry Gupta', 'Though I am a Dan Brown addict, I personally feel the writer has gone little overboard while tampering with some scientific facts and figures. Brown may be an avid observer of Renaissance arts, but he is a shadow of himself when it comes to dealing with scientific tools and theories. The overall story material is O.K but it lacks intensity. The fighting scenes are not at all convincing and it shows that Brown is preoccupied with the idea of its film adaptation. Thus the story sometimes loses its grip and the drives the readers crazy. The detail description of exotic locales and historic apartments with secret passages are very good. But here again there is a problem of excess. The question whether the places are introduced to induce the readers to visit those places or it was an artistic necessity would haunt the readers always. There are purple patches especially when Robert Langdon is giving a speech on â€˜Divina Commediaâ€™ or information is exchanged regarding Dante, Botticelli or other past masters and here Brown has stamped his authority as a master of historical thrillers beyond doubt.\r\nDan Brownâ€™s last book Inferno has two medieval stalwarts, Dante and Botticelli, as its central point of reference. The story of the book again follows the path of mystery and manifestation, secrets and revelation, riddles and artistic conundrum as it has been a pattern in all Brownesque publications. This time the ace iconographer Robert Langdon is fighting against an evil genius who has invented a bio-chemical time bomb which can make 33% male population impotent! This is perhaps the least possible and conceivable way to control global population. The story then is unfolded in the typical prototype of a chase thriller in which the protagonist makes a desperate attempt to save the world from utter insanity. The readers follow the Pundit from USA to the continent right up to Istanbul, the heart land of old medieval culture. But whether the odyssey turns out to be a successful one, the novelist has kept the answer open-ended.', '0000-00-00', '', '', '', '', 0, '', 0),
(1006, 'No', 'The Diary Of a Young Girl', '', 0, '0000-00-00', '51-9KBmx4DL._SX303_BO1,204,203,200_.jpg', '', '', 'Harry Gupta', 'I loved the book. I cried after finishing it. For someone who has been born and brought up in peaceful times, realization of the stark cruelty of past political regimes can have a sobering effect. The book conveys this reality like a wet sock on the face.\r\n\r\nThis is an endearing real life account of (and by) a young Jewish girl while she is in hiding from the Nazis during World War II. Anne Frank begins writing her diary on her thirteenth birthday and continues to write in it for the next two years until finally the narrative gets truncated with her capture by Nazi troops. At a surprisingly intimate level, the book reveals how one of many Jewish families tries to cope with the oppressive Nazi regime. We see how members of an affluent and well educated Jewish family are forced to share their lives with another Jewish family inside the cramped and sparing back quarters of a warehouse. Food is scarce, facilities are rare and the outdoors are out of bounds. Amidst these bleak circumstances Anne tries to keep her spirits up by occupying herself in such constructive activities as her limited means will allow. She dreams of a bright, happy future and prepares herself for it. But her youth and liveliness are under cover and they face the constant threat of exposure...', '0000-00-00', '', '', '', '', 0, '', 0),
(1007, 'Yes', 'Harry Potter and the Goblet of Fire', '', 0, '0000-00-00', 'Goblet_of_Fire_Film_Poster.jpg', '', '', 'Harry Gupta', 'I loved this book, It can be interesting to all ages, even adults can enjoy it. The book has so much detail and sometimes you cannot put it down and end up staying up all night. Because of how thick the book is, you might not find time to read it. It can also become a bit slow at times, but when the pace moves quicker it is worth the wait. I would recommend this book to all ages, especially if you love adventure and drama.\r\n\r\nHarry Potter and the Goblet of Fire by J.K Rowling is an adventure filling and heart wrenching story, at time bringing tears to your eyes. Throughout this book, Harry works his way through a dangerous tournament with the help of his friends. The beginning starts with Harry in his 4 Privet Drive Room, and gets an exciting letter from his friend, Ron. Following this letter he travels through portkey to a wondrous quidditch championship. Something goes horribly wrong and harry undergoes a traumatic experience. After this, he goes to Hogwarts with a new perspective and information about the man who killed his father, Voldemort. He surprisingly has his name pulled from the mysterious cup although under aged. Harry endures the schoolâ€™s hate against him but continues toward the end with triumph. Along the way, Harry must be strong and believe in himself, which can connect with people that have gone through similar things in their own school.', '0000-00-00', '', '', '', '', 0, '', 0),
(1008, 'No', 'The Little Prince', '', 0, '0000-00-00', 'Littleprince.JPG', '', '', 'Harry Gupta', 'The Little Prince reveals new meanings with every reading, giving the novella a timeless quality. The use of simple language to portray such deep thoughts is striking. The dedication of the book sets the tone for what is to come and the end result exceeds expectations. ', '0000-00-00', '', '', '', '', 0, '', 0),
(1009, 'Yes', 'The HOBBIT', '', 0, '0000-00-00', 'HOI2.jpg', '', '', 'Harry Gupta', 'Having read the Lord of the Rings prior to this I was expecting something along the same lines. Although it lacks the same epic style of story telling, yet it is well suited to the plot and a fitting precursor to its darker, grimmer descendant. It provides a window into a younger world, focusing on the last vestiges of carefree happiness before the War of the Ring shook Middle-Earth on its foundations. All said, it fully justifies the cult following that it has built up over the years and is an extremely relaxing and refreshing read. \r\n\r\nA young hobbit is disturbed from his peaceful life by the arrival of the mysterious wizard Gandalf and a troop of thirteen dwarves. They have come to pluck the easy-going Bilbo Baggins from his sleepy life in the Shire to take him to a dragon\'s den! Smaug the Golden, last of the Great Worms sleeps on his hoard of stolen riches. Bilbo and Co. must steal into the very heart of his cave and recover what he has been stolen from the Dwarf-lords by their most ancient foe. Already a difficult mission, it is further complicated by giant spiders, magic rings, trolls, disgruntled orc kings and the shadowy Necromancer.', '0000-00-00', '', '', '', '', 0, '', 0),
(1010, 'No', 'The HOBBIT', '', 0, '0000-00-00', 'HOI2.jpg', '', '', 'Harry Gupta', 'Having read the Lord of the Rings prior to this I was expecting something along the same lines. Although it lacks the same epic style of story telling, yet it is well suited to the plot and a fitting precursor to its darker, grimmer descendant. It provides a window into a younger world, focusing on the last vestiges of carefree happiness before the War of the Ring shook Middle-Earth on its foundations. All said, it fully justifies the cult following that it has built up over the years and is an extremely relaxing and refreshing read. \r\n\r\nA young hobbit is disturbed from his peaceful life by the arrival of the mysterious wizard Gandalf and a troop of thirteen dwarves. They have come to pluck the easy-going Bilbo Baggins from his sleepy life in the Shire to take him to a dragon\'s den! Smaug the Golden, last of the Great Worms sleeps on his hoard of stolen riches. Bilbo and Co. must steal into the very heart of his cave and recover what he has been stolen from the Dwarf-lords by their most ancient foe. Already a difficult mission, it is further complicated by giant spiders, magic rings, trolls, disgruntled orc kings and the shadowy Necromancer.', '0000-00-00', '', '', '', '', 0, '', 0),
(1011, 'Yes', 'Harry Potter and the Goblet of Fire', '', 0, '0000-00-00', 'Goblet_of_Fire_Film_Poster.jpg', '', '', 'Harry Gupta', 'I loved this book, It can be interesting to all ages, even adults can enjoy it. The book has so much detail and sometimes you cannot put it down and end up staying up all night. Because of how thick the book is, you might not find time to read it. It can also become a bit slow at times, but when the pace moves quicker it is worth the wait. I would recommend this book to all ages, especially if you love adventure and drama.\r\n\r\nHarry Potter and the Goblet of Fire by J.K Rowling is an adventure filling and heart wrenching story, at time bringing tears to your eyes. Throughout this book, Harry works his way through a dangerous tournament with the help of his friends. The beginning starts with Harry in his 4 Privet Drive Room, and gets an exciting letter from his friend, Ron. Following this letter he travels through portkey to a wondrous quidditch championship. Something goes horribly wrong and harry undergoes a traumatic experience. After this, he goes to Hogwarts with a new perspective and information about the man who killed his father, Voldemort. He surprisingly has his name pulled from the mysterious cup although under aged. Harry endures the schoolâ€™s hate against him but continues toward the end with triumph. Along the way, Harry must be strong and believe in himself, which can connect with people that have gone through similar things in their own school.', '0000-00-00', '', '', '', '', 0, '', 0),
(1012, 'No', 'THE EXORCIST', '', 0, '0000-00-00', '41WBSlB6IoL._SX331_BO1,204,203,200_.jpg', '', '', 'Harry Gupta', 'An excellent read, being a fan of the movie, I was even more satisfied on reading the book as many elements due to limitations of the medium, had not been incorporated into the movie. A resurrection of the then declining horror genre, it spawned a revival of both interest and inspiration.\r\n\r\nThe book begins with a prologue which is set in modern day Iraq, at the site of the ancient city of Nineveh. A Jesuit at the excavation feels a premonition of horror and receives signs that there is about to be an otherworldly confrontation when he sees a figurine of the demon Pazuzu entwined with a medal of St. Joseph. The scene then shifts to Georgetown, where a young girl Reagan McNeil, daughter of a famous actress, falls mysteriously ill. Following an onset of very obviously paranormal disturbances which psychiatric treatment can little resolve, she turns to a Jesuit priest: Father Damien Karras. The narrative then follows Karras\' attempts to diagnose the situation and at last he obtains approval from the church to assist in an exorcism to be conducted by Father Lankester Merrin, newly returned from Iraq. The two priests attempt to exorcise the girl evidently possessed by a demon. The book follows Karras\'s struggle with his own faith as well as his attempt to face the new dangers that the possession causes.', '0000-00-00', '', '', '', '', 0, '', 0),
(1013, 'Yes', 'And the Mountains Echoed', '', 0, '0000-00-00', '518sSp3DL9L._SX326_BO1,204,203,200_.jpg', '', '', 'Harry Gupta', 'Hosseini does a good job of tugging at the heartstrings again. Pari, Thalia, Nila and the little-boy version of Abdullah stay with you long after you are done. Their characters are beautifully etched out and there is the right amount of emotion at just the right places as far as these characters go. Pari\'s helpless, hapless frustration about the \'something\' that is missing, Abdullah\'s note and gift to her as soon as he learns that he might lose his mind soon, Amra\'s strength and loyalty, the younger Pari\'s loneliness, fear and hesitance to break free and fly, are feelings that will resonate with thousands of readers. While Hosseini\'s novels have never lacked in depth and richness of story line, you begin to wonder if his writing is getting cliched and one-dimensional. It is understandable that he wanted to gives us an in-depth look into the protagonists\' lives, but there is simply just too much for the reader to process sometimes. Too many characters, too many sub-plots and far too many details clutter the book a little bit. It could have been a lot tighter and slicker. On the whole, it is a very easy, quick read with some startlingly insightful thoughts. -- â€œI now know that some people feel unhappiness the way others love: privately, intensely, and without recourse.â€ This is a book tailor-made for the Khaled Hosseini fan - Tender, emotional, riveting, tragic - a sure formula for success. While it is certainly enjoyable, it would be interesting to see him move out of his comfort zone. \r\n\r\nThe tale revolves around two children- Pari and her protective, older brother Abdullah in a poor Afghan village in the 1950s. Pari is sold to a wealthy, childless businessman and is separated from her beloved brother. What ensues is a touching tale of how the decision to separate the siblings has a ripple effect that echoes across the next two generations.', '0000-00-00', '', '', '', '', 0, '', 0),
(1014, 'No', 'Harry Potter and deathly Hallows', '', 0, '0000-00-00', 'harry_potter.jpg', '', '', 'Harry Gupta', 'As soon as news of the last instalment had filtered in, I went into my pre-ordering ritual. And then I sat pretty, soaking in the \'Potter-Mania\'.....the buzz and the excitement which was a live and breathing thing. Along with the rest, I gave reality a hard shove and prayed fervently that the good hero, the self-effacing Harry Potter wouldn\'t be snuffed out by the end of the series. When I finally laid my hands on the book, I read it in a blur of feverish excitement. It was only a week back that I decided to revisit it and read it in full, painstaking detail. The beauty of this book lies in the fact that long and winding though it may seem; every paragraph, every seemingly tedious monologue is actually crucial to tying up the saga that began eleven years ago in the life of a boy called Harry Potter. Events, objects and people that appeared to be just a part of the magical scenery are effortlessly woven into the larger picture. The book is a fitting and fantastic conclusion to the tale of one of the most endearing heroes in contemporary literature. It is a fabulous treat for all, who, as J.K.Rowling puts it in her epigraph, \"stuck with Harry until the very end\".\r\n\r\nHarry Potter sets off on the quest assigned to him by the now deceased Dumbledore â€“ to find and destroy Voldemortâ€™s Horcruxes. He also stumbles upon the legend of â€˜The Deathly Hallowsâ€™; the possession of which would make the owner virtually impossible to defeat. And accompanying him on this final adventure are his best friends, Ron Weasley and Hermione Granger. As the three tread into new and unknown territoryâ€¦trust, courage and friendship are tested. Was Dumbledore as pristinely unblemished a character as we were led to believe? Does the unwavering friendship of the trio survive in the face of a seemingly impossible task? Was Snape the loathsome villain that we thought he was? And the biggest question of them all â€“ who will die in the final battle? - The battle between â€œThe Chosen Oneâ€ and â€œHe Who Shall Not Be Named?â€', '0000-00-00', '', '', '', '', 0, '', 0),
(1015, 'Yes', 'THE HOUSE OF THE SPIRITS', '', 0, '0000-00-00', 'Henkien_talo.jpg', '', '', 'Harry Gupta', 'I liked the story as I have never read anything like this before. My interest started to fall after the matriarch\'s death because the story becomes too dragged after that. I enjoyed 70% of the novel for sure; for the rest 30%, I feel it could have been made shorter. Some thoughts of Isabel are really inspiring like when she describes Death as a beginning not as an end; just like Life. The novel ends with a very good message conveyed through the lives of the Truebas.\r\n\r\nThis story spans through the three generations of the Trueba family that comes from the parish of San Sebastian. Esteban Trueba, the patriarch, is enterprising and powerful. The story begins with a poor, wretched and stoic Esteban Trueba venturing to build up a fortune for himself. On the road to success, he commits many hideous deeds while taking advantage of his position. Even then, Life treats him graciously and he becomes very successful and powerful. He marries the love of his life, Clara, who fills the emotional void in his life and becomes the lifeline of the Trueba family. As they say, â€œwhat goes around comes around.â€ It is through Blanca and her daughter, Alba that Life plots a scheme to get even with Esteban Trueba. How Life strikes back at Esteban Trueba, forms the rest of the story. ', '0000-00-00', '', '', '', '', 0, '', 0),
(1016, 'No', 'THE BLACK PRINCE', 'A.U.Thorname', 0, '2018-08-01', 'Historical-Fiction-Adventure-Fantasy-Book-Cover-The-Black-Prince.jpg', '', '', 'Harry Gupta', 'On my first reading of the novel, I was so taken aback by the anticlimax of the plot, that I abandoned further reading. The weakness of the protagonist simply appalled me. However, months later, when I took up the book again, I discovered the realms of psychological complexity unfolding in the various postscripts provided after the main story was over.  The book kind of grows on you with each reading.\r\n\r\nBradley Pearson, British writer, is suffering from a writer\'s block. He has waited all his life to write his masterpiece. Finally, he feels, the time has come when he can leave his small time job as a revenue officer, and go away from the city din to write. However, his fellow writer friend, Arnold Baffin, Arnold\'s wife Rachel, daughter Julian, Pearson\'s ex-wife Christian, ex-brother-in-law Francis and sister Priscilla all tug at his attentions in various ways to make Pearson\'s escape impossible. The plot unfolds from this point in the novel to reveal the emotional mess each character is in. Arnold and Rachel\'s domestic tensions lead each astray to look for love, romance and understanding elsewhere. Arnold seeks romance in Christian\'s friendship while Rachel wants to create a special bond with Pearson. Priscilla, despondent and bereaved from a failed fruitless marriage, is a chronic depression patient, in need of constant medical and emotional support. Pearson falls in love with Julian who is young enough to be his daughter. Julian, surprisingly returns his love and the two of them have a tumultuous love affair in the middle of violent opposition from Julian\'s family. However, none achieves what each had set out for. There is a sense of loss and yearning across the novel.', '2018-09-20', '', '', '', '', 0, '', 0),
(1021, 'No', 'The Seven Spiritual Laws of Success', 'Deepak Chopra', 0, '1994-11-12', '51Idi-LuZgL._SX346_BO1,204,203,200_.jpg', '51Idi-LuZgL._AC_US218_.jpg', 'admin@root.com', 'avinash kumar', 'This is a book you will cherish for a lifetime, for within is pages are the secrets of making all your dreams come true. Based on natural laws that govern all of creation, this book shatters the myth that success is the result of hard work, exacting plans, or driving ambition.\r\n\r\nInstead, Deepak Chopra offers a life-altering perspective on the attainment of success: When we understand our true nature and learn to live in harmony with natural law, a sense of well-being, good health, fulfilling relationships, and material abundance spring forth easily and effortlessly. \r\n\r\nDeepak Chopra is the bestselling author of numerous books and audio programs that cover every aspect of mind, body, and spirit. His groundbreaking books blend physics and philosophy, the practical and the spiritual, with dynamic results.\r\n\r\nThe Seven Laws of Success distills the essence of Chopra\'s teachings into seven simple, yet powerful, principles that can easily be applied to create success in all areas of your life. Filled with timeless wisdom and practical steps you can apply right away, this is a book you will want to read and refer to again and again.', '2018-10-06', '', '', '', '', 0, '', 0),
(1023, 'No', 'The Immortals of Meluha', 'Amish Tripathi', 0, '2010-02-01', '51K-Mo0AXDL.jpg', '2288384_130623062908_theimmortals-back.jpg', 'admin@root.com', 'avinash kumar', '1900 BC. In what modern Indians mistakenly call the Indus Valley Civilisation. The inhabitants of that period called it the land of Meluha a near perfect empire created many centuries earlier by Lord Ram, one of the greatest monarchs that ever lived. This once proud empire and its Suryavanshi rulers face severe perils as its primary river, the revered Saraswati, is slowly drying to extinction. They also face devastating terrorist attacks from the east, the land of the Chandravanshis. To make matters worse, the Chandravanshis appear to have allied with the Nagas, an ostracised and sinister race of deformed humans with astonishing martial skills!\r\nThe only hope for the Suryavanshis is an ancient legend: When evil reaches epic proportions, when all seems lost, when it appears that your enemies have triumphed, a hero will emerge.\r\n\r\nIs the rough-hewn Tibetan immigrant Shiva, really that hero? And does he want to be that hero at all? Drawn suddenly to his destiny, by duty as well as by love, will Shiva lead the Suryavanshi vengeance and destroy evil?', '2018-11-25', '', 'English', 'February 2018', 'Westland Press', 26, 'Amish Tripathi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Poster_Id` varchar(100) NOT NULL,
  `Poster_Name` varchar(100) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Description` varchar(6000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Poster_Id`, `Poster_Name`, `Date`, `Image`, `Description`) VALUES
(34, '802127323', 'avinash kumar', 'Fri 07/09/2018', '1414_1451220880.jpg', 'Details'),
(35, '802127323', 'avinash kumar', 'Fri 07/09/2018', '16864109_1252270078197239_4243923904904806870_n.jpg', 'Details'),
(36, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17191517_1471773992842173_9066778289756325659_n.png', 'Details'),
(37, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17201448_1735640290099592_3131767040710561323_n.jpg', 'Details'),
(38, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17309149_1739004203096534_797265233585623522_n.jpg', 'Details'),
(39, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17309520_1740715266258761_3920004008785192576_n.jpg', 'Details'),
(40, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17351976_1832893653644696_3799870060312293272_n.jpg', 'Details'),
(41, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17352085_1741135726216715_253465001784776419_n.jpg', 'Details'),
(42, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17352229_1833023476965047_6075749470439324127_n.jpg', 'Details'),
(43, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17362915_1833498303584231_8929192848375369476_n.jpg', 'Details'),
(44, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17457753_1747071445623143_618482761049573480_n.jpg', 'Details'),
(45, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17499004_1744901999173421_2675215666968683507_n.jpg', 'Details'),
(46, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17523217_1305467042877542_7264663047822950421_n.jpg', 'Details'),
(47, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17523629_1723769991247792_8730680956618130182_n.jpg', 'Details'),
(48, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17554275_1494501833902722_8558120097726870339_n.png', 'Details'),
(49, '802127323', 'avinash kumar', 'Fri 07/09/2018', '17626214_1292454397512140_4654162448766223982_n.jpg', 'Details'),
(50, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17626269_1849222451959136_2757127996106997330_n.jpg', 'Details'),
(51, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17634572_1295840117173568_1498880156232963270_n.jpg', 'Details'),
(52, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17760054_1296454013778845_7112265858227576172_n.jpg', 'Details'),
(54, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17757404_1723161874641937_5696868651657385390_n.jpg', 'Details'),
(55, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17796675_1302045419886371_2080166075189140856_n.jpg', 'Details'),
(56, '802127323', 'avinash kumar', 'Sun 09/09/2018', '17884106_1440412436257252_7369687022165141479_n.png', 'Details'),
(75, '802127323', 'avinash kumar', 'Wed 28/11/2018', '20170424_173946.jpg', 'Details'),
(76, '802127323', 'avinash kumar', 'Wed 28/11/2018', '20170424_174737.jpg', 'Details'),
(77, '802127323', 'avinash kumar', 'Wed 28/11/2018', '20170424_174738.jpg', 'Details'),
(78, '802127323', 'avinash kumar', 'Wed 28/11/2018', '20170521_200457.jpg', 'Details'),
(79, '802127323', 'avinash kumar', 'Wed 28/11/2018', 'PicsArt_04-18-06.37.57.jpg', 'Details'),
(80, '802127323', 'avinash kumar', 'Wed 28/11/2018', 'Tulas centre (Pratishtha) 20170425_033830.jpg', 'Details'),
(81, '802127323', 'avinash kumar', 'Wed 28/11/2018', 'IMG_20180213_155343.jpg', 'Details'),
(82, '802127323', 'avinash kumar', 'Wed 28/11/2018', '52.jpg', 'Details');

-- --------------------------------------------------------

--
-- Table structure for table `likes_on_book`
--

DROP TABLE IF EXISTS `likes_on_book`;
CREATE TABLE IF NOT EXISTS `likes_on_book` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `postid` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
CREATE TABLE IF NOT EXISTS `quotes` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Poster_Id` varchar(100) NOT NULL,
  `Poster_Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Resource_Type` varchar(100) NOT NULL,
  `Resource_Name` varchar(200) NOT NULL,
  `Quotes` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`ID`, `Poster_Id`, `Poster_Name`, `Date`, `Resource_Type`, `Resource_Name`, `Quotes`) VALUES
(100, 'admin@root.com', 'avinash kumar', 'Sat 08/09/2018', 'Books', 'ALBERT EINSTEIN', ' Only individuals have a sense of responsibility. --Nietzsche\r\n\r\nThis book does not represent a complete collection of the articles, addresses,\r\nand pronouncements of Albert Einstein; it is a selection made with a definite\r\nobject-- namely, to give a picture of a man. To-day this man is being drawn,\r\ncontrary to his own intention, into the whirlpool of political passions and\r\ncontemporary history. As a result, Einstein is experiencing the fate that so\r\nmany of the great men of history experienced: his character and opinions are\r\nbeing exhibited to the world in an utterly distorted form.\r\n\r\nTo forestall this fate is the real object of this book. It meets a wish that has\r\nconstantly been expressed both by Einstein\'s friends and by the wider public.'),
(101, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'â€•George R.R. Martin, A Game of Thrones', 'â€œ... a mind needs books as a sword needs a whetstone, if it is to keep its edge.â€ \r\n'),
(102, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œNever forget what you are, for surely the world will not. Make it your strength. Then it can never be your weakness. Armour yourself in it, and it will never be used to hurt you.â€'),
(103, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œBran thought about it. \'Can a man still be brave if he\'s afraid?\'\r\n\'That is the only time a man can be brave,\' his father told him.â€'),
(104, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œSome old wounds never truly heal, and bleed again at the slightest word.â€ '),
(105, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œThe man who passes the sentence should swing the sword. If you would take a man\'s life, you owe it to him to look into his eyes and hear his final words. And if you cannot bear to do that, then perhaps the man does not deserve to die.â€ '),
(106, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œMost men would rather deny a hard truth than face it.â€ '),
(107, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œWhat is honor compared to a woman\'s love? What is duty against the feel of a newborn son in your arms . . . or the memory of a brother\'s smile? Wind and words. Wind and words. We are only human, and the gods have fashioned us for love. That is our great glory, and our great tragedy.â€'),
(108, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œMy brother has his sword, King Robert has his warhammer and I have my mind...and a mind needs books as a sword needs a whetstone if it is to keep its edge. That\'s why I read so much Jon Snow.â€ '),
(109, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', 'George R.R. Martin, A Game of Thrones', 'â€œOh, my sweet summer child,\" Old Nan said quietly, \"what do you know of fear?\r\nFear is for the winter, my little lord, when the snows fall a hundred feet\r\ndeep and the ice wind comes howling out of the north. Fear is for the long\r\nnight, when the sun hides its face for years at a time, and little children\r\nare born and live and die all in darkness while the direwolves grow gaunt and\r\nhungry, and the white walkers move through the woodsâ€ '),
(110, 'admin@root.com', 'avinash kumar', 'Wed 12/09/2018', 'Books', ' Hannah Baker (13 reasons why)', '\"Maybe you think I\'m being silly. I\'m some stupid girl who gets all worked up over a little thing. But little things matter.\" ');

-- --------------------------------------------------------

--
-- Table structure for table `read_section`
--

DROP TABLE IF EXISTS `read_section`;
CREATE TABLE IF NOT EXISTS `read_section` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comments` varchar(60000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_section`
--

INSERT INTO `read_section` (`ID`, `post_id`, `name`, `date`, `comments`) VALUES
(1, '1023', 'Harry gupta', 'Thursday Dec 06, 2018', 'hihihihihihi'),
(2, '1023', 'harry gupta', 'Thursday Dec 06, 2018', 'hello amish'),
(3, '1023', 'harry gupta', 'Friday Dec 07, 2018', 'vvvytfrtfrfttr'),
(4, '1023', 'r6rdsds5r', 'Saturday Dec 08, 2018', 'drdrydryrsd'),
(5, '1023', 'harry gupta', 'Saturday Dec 08, 2018', 'hello amish you have written a very wonderful book, i am sure this book will entertain every reader'),
(6, '1023', 'harry gupta', 'Saturday Dec 08, 2018', 'you are an amazing writer amish'),
(7, '1023', 'avinash Kumar', 'Monday Dec 10, 2018', 'sir i am avinash i am big fan of yours'),
(8, '1023', 'avinash Kumar', 'Monday Dec 10, 2018', 'it is amazing book sir'),
(9, '1023', 'avinash Kumar', 'Monday Dec 10, 2018', 'mast hai sir'),
(10, '1023', 'avinash Kumar', 'Monday Dec 10, 2018', 'Leave a comment'),
(11, '1023', 'ashwani kumar', 'Monday Dec 10, 2018', 'amish rocks'),
(12, '1023', 'Niraj kumar', 'Monday Dec 10, 2018', 'i love this Book'),
(13, '1023', 'Vishal kumar', 'Monday Dec 10, 2018', 'i dont understand the book'),
(14, '1023', 'Rahul singh', 'Monday Dec 10, 2018', 'this book is hilarious'),
(15, '1023', 'harry gupta', 'Sunday Jan 06, 2019', 'working on like function');

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

DROP TABLE IF EXISTS `single`;
CREATE TABLE IF NOT EXISTS `single` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comments` varchar(60000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single`
--

INSERT INTO `single` (`ID`, `post_id`, `name`, `date`, `comments`) VALUES
(1, '120', ' ', 'Thursday Dec 06, 2018', 'efweffwefrf'),
(2, '120', ' ', 'Thursday Dec 06, 2018', 'wdewerwwe'),
(3, '120', 'Harry gupta', 'Thursday Dec 06, 2018', 'ewe5y54ydfdt');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE IF NOT EXISTS `user_register` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Contact_No` text NOT NULL,
  `Profile_image` varchar(500) NOT NULL,
  `Date_Of_Registration` date NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Age` text NOT NULL,
  `Sex` text NOT NULL,
  `Profession` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`ID`, `First_Name`, `Last_Name`, `Password`, `Email`, `Contact_No`, `Profile_image`, `Date_Of_Registration`, `Date_Of_Birth`, `Age`, `Sex`, `Profession`) VALUES
(1, 'harry', 'gupta', '1234', 'harrygupta238@gmail.com', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(2, 'harry', 'gupta', '123456', 'harrygupta238@gmail.com', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(3, 'krishna', 'gupta', '54321', 'krishnanand8081@gmail.com', '', '20170521_200457.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(4, 'krishna', 'gupta', '654321', 'krishnanand8081@gmail.com', '', '20170521_200457.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(5, 'srsefeffsf', 'ehferwerrsd', '09876', 'ksdhufnd@gmail.com', '', 'IMG_20180412_235406478.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(6, 'kifbsfefef', 'rteret5trh', '87654', 'nfrsssdcdcdcc@gmail.com', '', 'WIN_20170319_184802.JPG', '0000-00-00', '0000-00-00', '', '', ''),
(7, 'jtryscdaW', 'TJRJRDDAewe', 'xyzxyz', 'dfgsegrhshrhg@gmail.com', '', 'PicsArt_09-03-06.36.17.png', '0000-00-00', '0000-00-00', '', '', ''),
(8, 'jtryscdaW', 'TJRJRDDAewe', 'pqrpqr', 'dfgsegrhshrhg@gmail.com', '', 'PicsArt_01-12-09.33.22.png', '2018-09-17', '0000-00-00', '', '', ''),
(9, 'tfthdd', 'TsssssssJRJDswese', 'aaaaaaa', 'dfgsegrdssg@gmail.com', '', '20170522_120039.jpg', '2018-09-17', '0000-00-00', '', '', ''),
(10, 'erwrt4sf', 'ertewesdfrrgt', 'lkjh', 'errrrrrrrrrrrrrrrrrrwe', '', '20170521_200457.jpg', '2018-09-18', '0000-00-00', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
