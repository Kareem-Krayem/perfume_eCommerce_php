-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2019 at 01:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_rose`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_poster` longblob NOT NULL,
  `about_about` longtext NOT NULL,
  `about_about_ar` longtext NOT NULL,
  `about_about_attention` longtext NOT NULL,
  `about_about_attention_ar` longtext NOT NULL,
  `about_first_image` longblob NOT NULL,
  `about_second_image` longblob NOT NULL,
  `about_image` longtext NOT NULL,
  `about_image_ar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_poster`, `about_about`, `about_about_ar`, `about_about_attention`, `about_about_attention_ar`, `about_first_image`, `about_second_image`, `about_image`, `about_image_ar`) VALUES
(3, 0x382e6a7067, '870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai 870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai870x450 But I must explain to you how all this mistaken idea of denouncing pleasure and praising pai', 'انتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن', 'No one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do nNo one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do nNo one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do nNo one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do nNo one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do nNo one rejects, dislikes, or avoids pleasure itself, because it pleasure, but because those who do n', 'انتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن', 0x362e6a7067, 0x372e6a7067, '300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p 300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p300x155 But I must explain to you how all this mistaken idea of denouncing pleasure and praising p', 'انتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن\r\nانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عنانتباه عن');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(30) NOT NULL,
  `blog_title_ar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `blog_name` varchar(30) NOT NULL,
  `blog_name_ar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `blog_description` varchar(100) NOT NULL,
  `blog_description_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `blog_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_title_ar`, `blog_name`, `blog_name_ar`, `blog_description`, `blog_description_ar`, `blog_image`) VALUES
(1, 'Soap', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, co', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, consec tetur adipisici', 'السيد كريم كريّم', 0x352e6a7067),
(2, 'Perfume', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, co', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, consec tetur adipisicing elitLorem ipsum dolor sit amet, consec tetur ad', 'السيد كريم كريّم', 0x332e6a7067),
(8, 'body', 'الوصف', 'ghfdjs', 'الوصفالوصف', 'Lorem ipsum dolor sit amet, consec tetur adipisicing elitLorem ipsum dolor sit amet, consec tetur ad', 'الوصفالوصفالوصفالوصف\r\nالوصفالوصفالوصفالوصفالو\r\nصفالوصفالوصفالوصف', 0x3630363237352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Perfume'),
(2, 'Soap');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_address` varchar(50) NOT NULL,
  `contact_address_ar` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_address`, `contact_address_ar`) VALUES
(4, 'Kadisha Street - Tripoli', '١‎٢‎٣‎٤‎٦‎٧‎٨');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(30) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_email` text NOT NULL,
  `customer_number` int(11) NOT NULL,
  `customer_address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_username`, `customer_password`, `customer_email`, `customer_number`, `customer_address`) VALUES
(1, 'kareem', '123', 'kareem.krayem420@gmail.com', 71848214, 'Tripoli abu samra'),
(4, 'jaja', '123', 'jana@gmail.com', 3505375, ' gbhfdjnvckmsdnewrhie ietngjrdkqw\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_about` longtext NOT NULL,
  `footer_about_ar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_about`, `footer_about_ar`) VALUES
(2, 'No one rejects, dislikes, \r\nor avoids pleasure itself, because it pleasure\r\n, but because those who do nNo one rejects\r\n, dislikes, or avoids pleasure itself.', '{}الوصفالوصفالوصفالوصف الوصفالوصف\r\nالوصفالوصفالوصفالوصف\r\nالوصفالوصفالوصف');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`) VALUES
(4, 0x3731303839342e6a7067),
(5, 0x3630363238342e6a7067),
(6, 0x3630363330312e6a7067),
(7, 0x3438373836362e6a7067),
(8, 0x3935363133382e706e67),
(9, 0x6172742d62792d6c6f6e66656c64742d313038323833302d756e73706c6173682e6a7067),
(10, 0x63617373692d6a6f73682d3634343031322d756e73706c6173682e6a7067),
(11, 0x69616e2d646f6f6c65792d3238303932382d756e73706c6173682e6a7067),
(12, 0x3630363238342e6a7067),
(13, 0x3634333436392e706e67),
(14, 0x3630363237352e6a7067),
(15, 0x61757374696e2d6e65696c6c2d3136303133322d756e73706c6173682e6a7067),
(16, 0x536e6170636861742d3132333034373138382e6a7067),
(17, 0x312e6a7067),
(18, 0x312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingredient_id` int(11) NOT NULL,
  `ingredient_name` varchar(30) NOT NULL,
  `ingredient_name_ar` varchar(30) NOT NULL,
  `ingredient_image` longblob,
  `ingredient_desc` longtext NOT NULL,
  `ingredient_desc_ar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `ingredient_name`, `ingredient_name_ar`, `ingredient_image`, `ingredient_desc`, `ingredient_desc_ar`) VALUES
(4, 'prod one', 'dddd', 0x362e6a7067, 'DescriptionDes\r\ncriptionDescription DescriptionDescriptio\r\nnDescription Description\r\nDescriptionDescription\r\n Description Description.', 'الوجهالوجهالوجهالوجهالوجهالوجه\r\nالوجهالوجهالوجه'),
(5, 'prod 2', 'kklk', 0x382e6a7067, 'DescriptionDescriptionDescriptionDescription DescriptionDescriptionDescription \r\nDescriptionDescriptionDescription Description.', 'الوجهالوجهالوجهالوجهالوجهالوجه\r\nالوجهالوجهالوجه'),
(6, 'prod 3', 'lnln ', 0x372e6a7067, 'DescriptionDescriptionDescriptionDescription DescriptionDescriptionDescription \r\nDescriptionDescriptionDescription Description.', 'الوجهالوجهالوجهالوجهالوجهالوجه\r\nالوجهالوجهالوجه');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients_mix`
--

CREATE TABLE `ingredients_mix` (
  `ingredients_mix_id` int(11) NOT NULL,
  `ingredients_mix_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredients_mix`
--

INSERT INTO `ingredients_mix` (`ingredients_mix_id`, `ingredients_mix_name`) VALUES
(3, 'men'),
(4, 'women'),
(5, 'oriental'),
(6, 'bar'),
(7, 'Samir');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_title` varchar(30) NOT NULL,
  `location_lat` float NOT NULL,
  `location_lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_title`, `location_lat`, `location_lng`) VALUES
(1, 'Beirut', 33.8938, 35.5018),
(2, 'Tripoli', 34.4346, 35.8362);

-- --------------------------------------------------------

--
-- Table structure for table `mix_contains`
--

CREATE TABLE `mix_contains` (
  `mix_id` int(11) NOT NULL,
  `ing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mix_contains`
--

INSERT INTO `mix_contains` (`mix_id`, `ing_id`) VALUES
(3, 4),
(3, 5),
(4, 5),
(5, 5),
(5, 6),
(6, 4),
(6, 5),
(6, 6),
(4, 6),
(4, 4),
(7, 4),
(7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_cust_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_cust_id`, `order_product_id`) VALUES
(10, 1, 3),
(11, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(11) NOT NULL,
  `phone_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `phone_number`) VALUES
(1, 96171848214),
(2, 971501740884);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(30) NOT NULL,
  `product_title_ar` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` longblob NOT NULL,
  `product_rating` int(11) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_description_ar` longtext NOT NULL,
  `product_sub_cat_id` int(30) NOT NULL,
  `product_mix` int(11) NOT NULL,
  `pro_sub_title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_title_ar`, `product_price`, `product_image`, `product_rating`, `product_description`, `product_description_ar`, `product_sub_cat_id`, `product_mix`, `pro_sub_title`) VALUES
(3, 'perfume 1', 'ckjnwejkl', 200, 0x372e6a7067, 4, 'DescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.\r\nDescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.', 'الوجهالوجهالوجهالوجهالوجهالوجه\r\nالوجهالوجهالوجه', 3, 4, 'Bar'),
(4, 'perfume 2', 'nwkejfnwjkf', 100, 0x362e6a7067, 2, 'DescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.\r\nDescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.', 'DescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.\r\nDescriptionDescriptionDescriptionDescriptionDescription DescriptionDescription Description\r\nDescriptionDescriptionDescriptionDescriptionDescription.', 4, 5, 'Oriental'),
(12, 'soap 1', 'efnlnf', 20, 0x31302e6a7067, 3, 'DescriptionDescriptionDescription DescriptionDescription\r\nDescriptionDescriptionDescription Description\r\nDescription DescriptionDescription\r\n\r\nDescriptionDescriptionDescription DescriptionDescription\r\nDescriptionDescriptionDescription Description\r\nDescription DescriptionDescription', 'DescriptionDescriptionDescription DescriptionDescription\r\nDescriptionDescriptionDescription Description\r\nDescription DescriptionDescription\r\n\r\nDescriptionDescriptionDescription DescriptionDescription\r\nDescriptionDescriptionDescription Description\r\nDescription DescriptionDescription', 6, 5, 'Facial');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_title_ar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `slider_name` varchar(50) NOT NULL,
  `slider_name_ar` varchar(50) CHARACTER SET utf8 NOT NULL,
  `slider_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_title_ar`, `slider_name`, `slider_name_ar`, `slider_image`) VALUES
(11, 'Spring Collection', 'العنوان', 'rgewr', 'العنوانالعنوان', 0x3331383331302e6a7067),
(12, 'jana', 'العنوان', 'masri', 'الأسم', 0x362e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL,
  `social_title` varchar(50) NOT NULL,
  `social_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_title`, `social_link`) VALUES
(3, 'facebook', 'https://unsplash.com/oauth/applications/93487');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_cat_id` int(11) NOT NULL,
  `sub_cat_title` varchar(30) NOT NULL,
  `sub_cat_title_ar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_cat_id`, `sub_cat_cat_id`, `sub_cat_title`, `sub_cat_title_ar`) VALUES
(1, 1, 'Women', 'نسائي'),
(2, 1, 'Men', 'رجالي'),
(3, 1, 'Bar', 'بار الروائح'),
(4, 1, 'Oriental', 'عطر عربي'),
(5, 2, 'BodySplash', 'الجسم'),
(6, 2, 'Facial', 'الوجه'),
(7, 2, 'BathBomb', 'فقّاعات الحمام');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `testimonial_name_ar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `testimonial_about` varchar(50) NOT NULL,
  `testimonial_about_ar` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `testimonial_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_name_ar`, `testimonial_about`, `testimonial_about_ar`, `testimonial_image`) VALUES
(2, 'Mr. Mohamad', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, consec tetur adipisici', 'نينيتيني\r\nتينيهينيخي\r\nخبريهيريهيني\r\nميريهينيهي هينيني\r\n', 0x342e706e67),
(3, 'Mr. Kareem', 'السيد كريم كريّم', 'Lorem ipsum dolor sit amet, consec tetur adipisici', 'نينيتيني تينيهينيخي خبريهيريهيني ميريهينيهي هينيني', 0x322e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_role`) VALUES
(1, 'kareem', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `whishlist`
--

CREATE TABLE `whishlist` (
  `whishlist_id` int(11) NOT NULL,
  `whishlist_customer_id` int(11) NOT NULL,
  `whishlist_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_username` (`customer_username`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `ingredients_mix`
--
ALTER TABLE `ingredients_mix`
  ADD PRIMARY KEY (`ingredients_mix_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `mix_contains`
--
ALTER TABLE `mix_contains`
  ADD KEY `mix_id` (`mix_id`),
  ADD KEY `ing_id` (`ing_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_cust_id` (`order_cust_id`),
  ADD KEY `order_ibfk_2` (`order_product_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `pro_sub_title` (`pro_sub_title`),
  ADD KEY `product_mix` (`product_mix`),
  ADD KEY `product_sub_cat_id` (`product_sub_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD UNIQUE KEY `sub_cat_title` (`sub_cat_title`),
  ADD KEY `sub_cat_cat_id` (`sub_cat_cat_id`),
  ADD KEY `sub_cat_title_2` (`sub_cat_title`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- Indexes for table `whishlist`
--
ALTER TABLE `whishlist`
  ADD PRIMARY KEY (`whishlist_id`),
  ADD KEY `whishlist_product_id` (`whishlist_product_id`),
  ADD KEY `whishlist_customer_id` (`whishlist_customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingredients_mix`
--
ALTER TABLE `ingredients_mix`
  MODIFY `ingredients_mix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whishlist`
--
ALTER TABLE `whishlist`
  MODIFY `whishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mix_contains`
--
ALTER TABLE `mix_contains`
  ADD CONSTRAINT `mix_contains_ibfk_1` FOREIGN KEY (`mix_id`) REFERENCES `ingredients_mix` (`ingredients_mix_id`),
  ADD CONSTRAINT `mix_contains_ibfk_2` FOREIGN KEY (`ing_id`) REFERENCES `ingredient` (`ingredient_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`order_cust_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`order_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`pro_sub_title`) REFERENCES `sub_cat` (`sub_cat_title`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`product_mix`) REFERENCES `ingredients_mix` (`ingredients_mix_id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`product_sub_cat_id`) REFERENCES `sub_cat` (`sub_cat_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `sub_cat_ibfk_1` FOREIGN KEY (`sub_cat_cat_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `whishlist`
--
ALTER TABLE `whishlist`
  ADD CONSTRAINT `whishlist_ibfk_1` FOREIGN KEY (`whishlist_product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `whishlist_ibfk_2` FOREIGN KEY (`whishlist_customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
