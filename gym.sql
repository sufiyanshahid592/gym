-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 08:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `useremail`, `password`, `status`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2022-01-28 02:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_url` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_tags` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `tags_clouds` varchar(255) DEFAULT NULL,
  `blog_long_desc` mediumtext DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_altname` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_url`, `meta_title`, `meta_description`, `meta_tags`, `author_name`, `tags_clouds`, `blog_long_desc`, `blog_image`, `blog_altname`, `time`) VALUES
(6, 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', 'A Complete Guide to Effective New Year Packaging', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'Top-5-Healthcare-Packaging-Trends-2021.jpg', 'A Complete Guide to Effective New Year Packaging', '2021-10-15 07:33:34'),
(10, '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '6 Ways to Boost your Product Marketing for this Christmas', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'cream-boxes.jpg', '6 Ways to Boost your Product Marketing for this Christmas', '2021-10-21 05:00:45'),
(12, '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '7 Incredible Garments Packaging Ideas to Know About', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'Why-custom.jpg', '7 Incredible Garments Packaging Ideas to Know About', '2021-10-27 07:29:32'),
(13, 'title?', 'tite', 'How Eco-Friendly Packaging Is Beneficial For Our Environment?', 'How Eco-Friendly Packaging Is Beneficial For Our Environment?', 'How Eco-Friendly Packaging Is Beneficial For Our Environment?', 'How Eco-Friendly Packaging Is Beneficial For Our Environment?', 'How Eco-Friendly Packaging Is Beneficial For Our Environment?', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'How-Custom-Window-Boxes-are-Perfect-For-Product-Sa.jpg', 'eerewr', '2021-10-27 07:29:41'),
(14, 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', 'How OTC Medicine Packaging Help In Connecting To Customers', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'An-Ultimate-Guide-to-Sustainable-Packaging.jpg', 'How OTC Medicine Packaging Help In Connecting To Customers', '2021-10-27 07:29:47'),
(15, ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', ' How Custom Window Boxes are perfect for Product Sales', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', '5-Ways-to-Customize-Christmas-Gift-Boxes.jpg', ' How Custom Window Boxes are perfect for Product Sales', '2021-10-27 07:29:53'),
(16, ' 8 Most Creative Cookie Packaging Ideas', '8 Most Creative Cookie Packaging Ideas', ' 8 Most Creative Cookie Packaging Ideas', ' 8 Most Creative Cookie Packaging Ideas', ' 8 Most Creative Cookie Packaging Ideas', ' 8 Most Creative Cookie Packaging Ideas', ' 8 Most Creative Cookie Packaging Ideas', '<p>The custom boxes are a great way to introduce your product to the market and to increase its demand among people by giving a slight look at it through its boxing.</p>', 'fun-halloween-party.jpg', ' 8 Most Creative Cookie Packaging Ideas', '2021-10-27 07:29:59'),
(17, 'ddkk', 'ddd', 'ddk', 'ddk', 'ddk', 'ddk', 'ddk', '<p>dd</p>', 'category-banner.jpg', 'ddd', '2022-03-25 05:45:10'),
(18, 'lorem ipsum', 'lorem ipsum', 'lorem   ipsum', 'lorem   ipsum', 'lorem   ipsum', 'lorem   ipsum', NULL, '<p>&nbsp; &nbsp; &nbsp;lorem &nbsp; ipsum</p>', 'favicon1.png', NULL, '2022-03-25 07:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `mini_title` varchar(255) NOT NULL,
  `big_title` varchar(255) NOT NULL,
  `slider_description` mediumtext DEFAULT NULL,
  `slider_banner` varchar(255) DEFAULT NULL,
  `slider_altname` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `mini_title`, `big_title`, `slider_description`, `slider_banner`, `slider_altname`, `button_link`, `button_text`) VALUES
(2, 'Buhan bhai', 'sdf', 'sdf', 'TCB-uk main.jpg', 'dsfsad', 'sdf', 'sdf'),
(6, 'jinga Lalaa', 'sdf', 'sdf', 'TCB-uk main4.png', 'dsf', 'https://webformatter.com/php', 'sdf'),
(10, 'Sahil', 'Sahil', 'SahilSahilSahilSahil', 'TCB-uk main2.png', 'gfdgfd', 'http://localhost/phpmyadmin/sql.php?server=1&db=cardboardboxes_db&table=home_slider&pos=0', 'Read More');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_long_desc` mediumtext DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_title`, `section_long_desc`, `time`) VALUES
(18, 'lorem ipsum', '<p>&nbsp; &nbsp; &nbsp;lorem &nbsp; ipsum</p>', '2022-03-25 07:54:11'),
(23, 'Slider Section', '<div class=\"blue\">\r\n<h1>Gym management software that frees up your time and helps you grow.</h1>\r\n\r\n<h2>Simplified billing, enrollment, member management, and marketing features that help you grow your gym or martial arts school.</h2>\r\n<a class=\"button\" href=\"register\">Start A 30-Day Free Trial</a> <small>* No credit card required to start</small></div>\r\n\r\n<div class=\"photo\">Watch Instant Demo</div>\r\n\r\n<div class=\"video\">\r\n<div class=\"video-wrapper\">\r\n<div id=\"hp-video\">&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<ul>\r\n	<li><img src=\"images/lp/newhp/kick.svg\" title=\"Fight &amp; Fitness\" />\r\n	<p>Quick setup with<br />\r\n	no training required</p>\r\n	</li>\r\n	<li><img src=\"images/lp/newhp/heart.svg\" title=\"Impress\" />\r\n	<p>Amazing<br />\r\n	customer support</p>\r\n	</li>\r\n	<li><img src=\"images/lp/newhp/calendar.svg\" title=\"30-day free trial\" />\r\n	<p>Try it for free<br />\r\n	for 30 days</p>\r\n	</li>\r\n</ul>', '2022-04-07 06:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `socials_media`
--

CREATE TABLE `socials_media` (
  `id` int(11) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `pinterest_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socials_media`
--

INSERT INTO `socials_media` (`id`, `facebook_link`, `twitter_link`, `pinterest_link`, `instagram_link`) VALUES
(1, 'https://www.facebook.com/TheCustomBoxesUK', 'https://twitter.com/TheCustomBoxes', 'https://www.pinterest.com/thecustomboxes/', 'https://www.instagram.com/accounts/login/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `slider_description` text DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `main_title`, `designation`, `slider_description`, `slider_image`) VALUES
(17, 'Fahad', 'Developer', 'A full stack developer ,  Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore similique, amet debitis quae accusantium quaerat nisi dolorem impedit beatae a? Perferendis doloremque nobis tempore sequi explicabo, esse aliquid dolore cum qui at et natus sit soluta cumque quaerat commodi consequuntur? Soluta corrupti, incidunt impedit voluptate ipsa voluptatem nostrum facere alias cum iure, voluptatum veritatis voluptatibus eveniet doloremque illum quas necessitatibus quia at dolore praesentium dolorum quo. Deleniti amet autem repellat, ut id ea tenetur aut facilis iure sed! Accusamus aliquid voluptatem facilis dicta cumque hic sed, eius enim magni mollitia nam placeat modi architecto, laudantium incidunt odio. Et ducimus delectus nesciunt? Aperiam officiis, ratione cum unde eligendi magni quia, quidem ipsa commodi sapiente error repudiandae obcaecati, ullam quibusdam. Maiores excepturi possimus debitis veniam provident quisquam dicta fugiat? Sapiente consequatur odit, earum id doloribus fugiat quaerat distinctio dolore rem ipsa aliquid dicta, architecto repellendus pariatur tempora ullam beatae aut vero ex?', 'comment_man.png'),
(16, 'Noman', 'Developer', 'A full stack developer ,  Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore similique, amet debitis quae accusantium quaerat nisi dolorem impedit beatae a? Perferendis doloremque nobis tempore sequi explicabo, esse aliquid dolore cum qui at et natus sit soluta cumque quaerat commodi consequuntur? Soluta corrupti, incidunt impedit voluptate ipsa voluptatem nostrum facere alias cum iure, voluptatum veritatis voluptatibus eveniet doloremque illum quas necessitatibus quia at dolore praesentium dolorum quo. Deleniti amet autem repellat, ut id ea tenetur aut facilis iure sed! Accusamus aliquid voluptatem facilis dicta cumque hic sed, eius enim magni mollitia nam placeat modi architecto, laudantium incidunt odio. Et ducimus delectus nesciunt? Aperiam officiis, ratione cum unde eligendi magni quia, quidem ipsa commodi sapiente error repudiandae obcaecati, ullam quibusdam. Maiores excepturi possimus debitis veniam provident quisquam dicta fugiat? Sapiente consequatur odit, earum id doloribus fugiat quaerat distinctio dolore rem ipsa aliquid dicta, architecto repellendus pariatur tempora ullam beatae aut vero ex?', 'Customer_3.png'),
(18, 'Hamza', 'Developer', 'A full stack developer ,  Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore similique, amet debitis quae accusantium quaerat nisi dolorem impedit beatae a? Perferendis doloremque nobis tempore sequi explicabo, esse aliquid dolore cum qui at et natus sit soluta cumque quaerat commodi consequuntur? Soluta corrupti, incidunt impedit voluptate ipsa voluptatem nostrum facere alias cum iure, voluptatum veritatis voluptatibus eveniet doloremque illum quas necessitatibus quia at dolore praesentium dolorum quo. Deleniti amet autem repellat, ut id ea tenetur aut facilis iure sed! Accusamus aliquid voluptatem facilis dicta cumque hic sed, eius enim magni mollitia nam placeat modi architecto, laudantium incidunt odio. Et ducimus delectus nesciunt? Aperiam officiis, ratione cum unde eligendi magni quia, quidem ipsa commodi sapiente error repudiandae obcaecati, ullam quibusdam. Maiores excepturi possimus debitis veniam provident quisquam dicta fugiat? Sapiente consequatur odit, earum id doloribus fugiat quaerat distinctio dolore rem ipsa aliquid dicta, architecto repellendus pariatur tempora ullam beatae aut vero ex?', 'Customer_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `e_mail`, `password`) VALUES
(3, 'Sufiyan Shahid', 'sufiyanshahid592@gmail.com', 'c63967a4dd011e9272dd3e273fc8f8a3'),
(4, 'Sufiyan Shahid', 'sufiyanshahid593@gmail.com', 'f3224d90c778d5e456b49c75f85dd668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_title` (`blog_title`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`),
  ADD UNIQUE KEY `section_title` (`section_title`);

--
-- Indexes for table `socials_media`
--
ALTER TABLE `socials_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
