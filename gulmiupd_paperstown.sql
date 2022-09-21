-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 05:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paperstown`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_status` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_priority` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_desc`, `cat_slug`, `cat_date`, `cat_edit_date`, `cat_status`, `cat_priority`) VALUES
(63, 'Business', 'This is for Business purpose', 'Business', '13/05/2021', '13/05/2021', '1', '1'),
(64, 'Technology', 'This is for Technology purpose', 'Technology', '13/05/2021', '13/05/2021', '1', '1'),
(65, 'Sport', 'This is for sport  purpose', 'Sport, games', '13/05/2021', '13/05/2021', '1', '1'),
(66, 'Art', 'This is for Art purpose', 'Art', '13/05/2021', '13/05/2021', '1', '1'),
(67, 'Lifestyle', 'This is for Lifestyle purpose', 'Lifestyle', '13/05/2021', '13/05/2021', '1', '2'),
(68, 'Entertainment', 'This is for Entertainment purpose', 'Entertainment', '13/05/2021', '13/05/2021', '1', '2'),
(69, 'Photography', 'This is for Photography purpose', 'Photography', '13/05/2021', '13/05/2021', '1', '2'),
(70, 'Biography', 'This is for Biography purpose', 'Biography', '13/05/2021', '13/05/2021', '1', '2'),
(71, 'News', 'This is for News purpose', 'News', '13/05/2021', '13/05/2021', '1', '3'),
(72, 'Education', 'This is for Education purpose', 'Education', '13/05/2021', '13/05/2021', '1', '3'),
(73, 'Social', 'This is for Social purpose', 'Social', '13/05/2021', '13/05/2021', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `comm_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `comm_text` text COLLATE utf8_bin NOT NULL,
  `comm_status` varchar(50) COLLATE utf8_bin NOT NULL,
  `comm_date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `post_category` varchar(10) COLLATE utf8_bin NOT NULL,
  `post_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_edit_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_image` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_text` text COLLATE utf8_bin NOT NULL,
  `post_tag` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_visit_counter` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_status` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_priority` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category`, `post_title`, `post_autor`, `post_date`, `post_edit_date`, `post_image`, `post_text`, `post_tag`, `post_visit_counter`, `post_status`, `post_priority`) VALUES
(57, '64', 'Free 100 minutes For Nepal Telecom Users: VoLTE Technology in Nepal.', '34', '18/05/2021', '18/05/2021', '185531047_1645358245650112_6224931431355081535_n.jpg', '<p>Nepal Telecom Has come with the latest 4G technology called VoLTE.VoLTE (Voice over LTE) is a cutting-edge technology that uses NT 4G networks to deliver high-quality, lifelike sound over voice conversations (HD voice quality calls). We can get ultra-clear voice quality with low background noise with VoLTE. Conversations sound more genuine as if the person on the other end of the line is standing right by<br />\r\nyou. You can also surf at 4G speeds while on a phone with VoLTE.</p>\r\n\r\n<h2><strong>Supported Device to use HD audio call:</strong></h2>\r\n\r\n<ul>\r\n	<li>All Samsung mobile phones have access to 4G and are manufactured after 2019.</li>\r\n	<li>Nokia 5.3, Nokia 7.2, Nokia 3.4</li>\r\n	<li>Redmi 9 Prime, Mi10, Redmi 9C, Redmi Note 9 Pro, Redmi 8A</li>\r\n</ul>\r\n\r\n<h2><strong>How to use VoLTE?</strong></h2>\r\n\r\n<ul>\r\n	<li>Make Sure you are using NT 4G SIM</li>\r\n	<li>&nbsp;Make sure your smartphone&#39;s VoLTE voice calling function is turned on.</li>\r\n	<li>&nbsp;For Android: Settings -&gt; Mobile Networks -&gt; Turn on VoLTE call. (Settings may differ according to the handset.)</li>\r\n	<li>&nbsp;VoLTE is available in all areas where a 4G network is currently accessible.</li>\r\n	<li>To check-in which devices this feature is available go through this official Nepal&nbsp; telecom site:https://ntc.net.np/</li>\r\n	<li>You can Activate LTE/VoLTE: Dial *444# and Select Activate VoLTE. This will activate in your Sim card.</li>\r\n	<li>\r\n	<h2><strong>Dial *111# to verify the VoLTE Service in Ntc Sim card.To enjoy 100 minutes of free VoLTE voice calls good for 28 days.</strong></h2>\r\n	</li>\r\n</ul>\r\n', 'free services , ntc 4G, get voice hd call', '3', '1', ''),
(58, '67', 'Increase Your Self Esteem and Confidence.', '36', '18/05/2021', '18/05/2021', 'board-2433989_1920.jpg', '<p>When one is confronted with a circumstance that he or she is unsure about &ndash; whether it is confronting someone admired, performing in front of an audience, or simply conversing with others - he or she is under a great deal of stress. Confident people can typically confront these<br />\r\nsituations without blinking; nevertheless, the rest of us will most likely melt away and try to flee. For most persons who suffer from low self-esteem, these events provide an opportunity to make a fool of themselves. This is an extremely humiliating situation.</p>\r\n\r\n<p>If you are&nbsp;one of the millions of people who want to quit fidgeting in front of others, attempting to get out of awkward situations, and feeling self-conscious when facing presentations, here are a few tips to set you on your way.</p>\r\n\r\n<ol>\r\n	<li><strong>Competence is Confidence &ndash;</strong> Some organizations, like the Toastmasters, help those afraid to speak in public toughen up by stressing this credo &ndash; and it really works. One secret to confidence and self-esteem is to be able to trust what you are able to do. This comes with a lot of practice and study. Whenever you practice a given skill, you increase your own confidence in your capability to perform even in front of other people. Prior to a major show, concentrate up. Attempt to have a deep understanding of the point before you step before the crowd. On the off chance that you have a polished path before the show, you will be in a superior situation to take their breath away. Rehearsing before strong individuals you believe will assist you with getting input on the best way to improve your presentation.</li>\r\n	<li><strong>Have faith in Yourself &ndash;</strong> One of the reasons individuals are not certain about themselves&nbsp;is the way that they are now persuaded that they will flop even prior to anything occurs. Keep in mind the force of the psyche. In the event that you trust you will fizzle, you in reality will! A superior exercise would to be to accept that you can succeed. Set your psyche towards succeeding and you most likely will!</li>\r\n	<li><strong>Take Criticisms, regardless of whether Good or Bad &ndash;</strong> Most individuals are awful at taking reactions. Rather than thinking about the reactions literally, utilize each remark and idea to improve yourself. Nonetheless, you will likewise need to pay special mind to certain reactions that were never intended to profit you. Overlook them and proceed onward.</li>\r\n	<li><strong>Resist the urge to panic no matter what &ndash; </strong>Panicking never profited anyone. In the event that you are unexpectedly in a circumstance where you are uncertain of what to do or what will occur, keep your poise. In the event that you do it have a clue about the appropriate response, say so smoothly. In the event that you don&amp;#39;t have a clue what&nbsp;o do, it would not be terrible to let it out.</li>\r\n</ol>\r\n', 'lifestyle, motivation, inspiration, self confidents', '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `gender`, `image`, `code`, `status`, `type`) VALUES
(33, 'Adarsh Rajouria', 'Adarsh', 'adarshraj640@gmail.com', 'd9ff92957ca84404788296f8a1acaff0', '1', '168062392_486763259176643_9098352848265028319_n.jpg', '', '1', '1'),
(34, 'Siwan Chaudhary', 'Siwan Chaudhary', 'Cwanassum550@gmail.com', '64a37c5e4c0420b2de94095e38bbab7a', '2', '179025604_2825986940957215_5586462527611154492_n.jpg', '', '1', '1'),
(36, 'Subash B.k', 'Subash', 'sbkcools677@gmail.com', '051f6a1206f0ea642259e2be23db14b7', '2', '167483881_2909652399357382_3888145905995548658_n.jpg', '', '1', '1'),
(37, 'Shreesh Chaudhary', 'Shreesh', 'chaudharyshirish60@gmail.com', '1943e52f4e606a6285f8a9072a9a9b65', '2', '144896429_193658205830468_3981291389392255177_n.jpg', '', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
