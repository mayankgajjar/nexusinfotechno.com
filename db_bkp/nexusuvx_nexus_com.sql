-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2018 at 05:45 AM
-- Server version: 5.6.36-82.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexusuvx_nexus_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `introduction_content` text COLLATE utf8mb4_unicode_ci,
  `introduction_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approach_work_content` text COLLATE utf8mb4_unicode_ci,
  `approach_work_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giving_back_content` text COLLATE utf8mb4_unicode_ci,
  `giving_back_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profitability_content` text COLLATE utf8mb4_unicode_ci,
  `profitability_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `introduction_content`, `introduction_image`, `approach_work_content`, `approach_work_image`, `giving_back_content`, `giving_back_image`, `profitability_content`, `profitability_image`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, '<p>Nexus Infotechno is a leading IT company based in Surat, Gujarat, India, started with a principal commitment to deliver high-quality IT Services to fulfill their client\'s unique goals and objectives. We have already marked our place in the field of internet marketing and our offshore services include:</p>\r\n<ul>\r\n<li>Website Designing</li>\r\n<li>Web Development</li>\r\n<li>Web Hosting</li>\r\n<li>Mobile Apps Development</li>\r\n<li>Graphics Designing</li>\r\n<li>Game Development</li>\r\n<li>Search Engine Optimization</li>\r\n<li>Digital Marketing</li>\r\n<li>Social Media Marketing</li>\r\n</ul>', 'introduction_1536922564.jpg', '<p>Nexus Infotechno is a full IT service provider for business, corporate or individual interested in creating their design and development needs of web- based projects.</p>\r\n<p>Nexus Infotechno is among best IT companies in India. Nexus Infotechno has proudly provided the best of services to our clients across the world, as a result to our years of experience in Mobile Application Development, Web Designing and Website Development, Game Development and many other services.</p>\r\n<p>&nbsp;</p>', 'approach_1534767351.jpg', '<p>Our experienced teams of each department are fully updated over latest technology changes, and also are the expert in their line of work. Nexus Infotechno\'s employees are highly qualified to bring a change in the market and are dedicated to satisfying their clients and their unique requirements.</p>\r\n<p>Nexus Infotechno stands with qualified and skilled team members who strive hard to deliver matchless solutions to their clients.</p>\r\n<p>We believe that every business should have distinct and unique space in World Wide Web.</p>', 'giving_1534767351.jpg', '<p>We have years of experience in serving clients from various sectors like Garments &amp; Fashion, Financial Services, Real Estate, Medical, Media, Retail, and Distribution etc.</p>\r\n<p>From strategic planning to unique website design, from mobile application development to result-oriented SEO services, our professional team with the full dedication to delivering success to our clients on every project assigned.</p>\r\n<p>As a <strong>leading website development company in Surat,India</strong>, we have expertise as well as creativity in designing website and mobile applications that can generate inquiries as well as sales.</p>', 'profitability_1534767351.jpg', 'N', 'Y', NULL, '2018-09-14 10:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_image`, `blog_content`, `blog_category`, `blog_slug`, `blog_video`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(3, 'Why Shopify is Good for Ecommerce ?', '1537248872.jpg', '<p>Shopify is an internet business stage that hosts more than 165,000 online stores. It happens to be the most prevalent facilitated shopping basket because of its adaptability, effortlessness and reasonableness. Things being what they are, is Shopify useful for making an online store?</p>\r\n<p>The appropriate response is very basic for the a large portion of us. By and by, I feel that Shopify is a standout amongst other web based business stages that is anything but difficult to set up and can satisfy the requirements of most online stores. Clearly, this may shift, contingent upon your requirements and individual inclination.</p>\r\n<p><strong>For what reason IS SHOPIFY GOOD?</strong></p>\r\n<p>Here are the advantages of utilizing Shopify to make an online business store:</p>\r\n<p>Straightforward, however viable, store arrangement process for a brisk store setup and dispatch.</p>\r\n<p>The shopping basket is intensely valued, enabling you to keep a greater amount of your benefits.</p>\r\n<p>Worked in highlights to satisfy a large portion of your essential store capacities &ndash; advertising, modifying, stock, and so forth.</p>\r\n<p>A broad rundown of outside applications for extra store highlights.</p>\r\n<p>Boundless activity to your online store. Some facilitated trucks really constrain this.</p>\r\n<p>There are not exchange expenses, when you utilize their in-house Mastercard preparing administration.</p>\r\n<p>A full, coordinated blogging stage is incorporated with each arrangement. Web journals are perfect for improving and advancing your online store.</p>\r\n<p>Highlights the relinquished truck recuperation instrument. This apparatus is known for expanding transformations.</p>\r\n<p>Incorporates with a portion of the best email showcasing administrations.</p>\r\n<p>The accessibility of an all day, every day specialized help group. Their specialized help group is accessible through live visit, telephone and email ticketing.</p>\r\n<p>The capacity to attempt Shopify for nothing for 14 days.</p>\r\n<p>To see Shopify advantages and disadvantages or to take in more about their shopping basket, read my top to bottom Shopify survey.</p>\r\n<p><strong>SHOPIFY PRICING</strong></p>\r\n<p>One reason of why I think Shopify is great is a result of their moderate designs. Their designs are additionally adaptable and will offer an extensive variety of spending plans.</p>', 'Web Development,Web Design', 'why-shopify-is-good-for-ecommerce', NULL, 'N', 'Y', '2018-09-18 05:34:32', '2018-09-18 05:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_title`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'N', 'Y', '2018-09-10 06:23:26', '2018-09-10 06:28:27'),
(2, 'Web Design', 'N', 'Y', '2018-09-10 07:19:50', '2018-09-10 07:19:50'),
(3, 'Logo Making', 'N', 'Y', '2018-09-10 07:20:37', '2018-09-10 07:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_title`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'N', 'N', '2018-08-17 01:32:06', '2018-09-17 06:19:55'),
(2, 'Social Media Marketing', 'N', 'N', '2018-08-17 01:32:14', '2018-09-17 06:19:49'),
(3, 'Search Engine Optimization', 'N', 'N', '2018-08-17 01:32:23', '2018-09-17 06:19:42'),
(4, 'Mobile Apps', 'N', 'N', '2018-08-17 01:32:39', '2018-09-17 06:19:36'),
(5, 'Web Design', 'N', 'N', '2018-08-17 01:32:50', '2018-09-17 06:19:29'),
(6, 'Software Development', 'N', 'N', '2018-09-08 09:40:02', '2018-09-17 06:19:23'),
(7, 'Website', 'N', 'N', '2018-09-10 05:40:57', '2018-09-17 06:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `happyclient`
--

CREATE TABLE `happyclient` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `happyclient`
--

INSERT INTO `happyclient` (`id`, `name`, `image`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Nexus Infotechno', '1534751158.jpg', 'Y', 'Y', '2018-08-20 01:59:49', '2018-08-20 02:18:04'),
(2, 'Themeforest', '1535020052.jpg', 'Y', 'Y', '2018-08-23 04:57:32', '2018-09-14 05:48:04'),
(3, 'Codecanyon', '1535020076.jpg', 'Y', 'Y', '2018-08-23 04:57:56', '2018-09-14 05:48:09'),
(4, 'KD\'S', '1536904180.jpg', 'N', 'Y', '2018-08-23 04:58:18', '2018-09-14 05:49:40'),
(5, 'Luck365', '1535690849.jpg', 'N', 'Y', '2018-08-23 04:58:35', '2018-08-31 04:47:29'),
(6, 'Nannyez', '1537160354.png', 'N', 'Y', '2018-08-23 04:58:53', '2018-09-17 04:59:14'),
(7, 'Player11', '1536904590.png', 'N', 'Y', '2018-08-23 05:10:23', '2018-09-14 05:56:30'),
(8, 'hot Deals', '1537164335.jpg', 'N', 'Y', '2018-09-17 06:05:35', '2018-09-17 06:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) UNSIGNED NOT NULL,
  `inquiry_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inquiry_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inquiry_contact_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inquiry_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inquiry_massage` text COLLATE utf8mb4_unicode_ci,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `inquiry_name`, `inquiry_email`, `inquiry_contact_number`, `inquiry_subject`, `inquiry_massage`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Dharmendra tiwari', 'tivari1995dharmendra@gmail.com', '', 'Seeking for the opportunity', 'I\'m an IT professional having the knowledge of vmware,microsoft servers, aws, hyper-v, azure, openstack.', 'N', '2018-09-09 02:36:49', '2018-09-09 02:36:49'),
(3, 'Rahul Magan patel', 'patelrahul725997@gmail.com', '', 'Web development', 'Job required', 'N', '2018-09-14 04:22:40', '2018-09-14 04:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobopening`
--

CREATE TABLE `jobopening` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_vacancy` int(11) NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_negotiable` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobopening`
--

INSERT INTO `jobopening` (`id`, `title`, `job_description`, `qualification`, `number_vacancy`, `salary`, `salary_negotiable`, `experience`, `location`, `type`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Sr. PHP Developer', '<ul class=\"sf-list list-tick\">\r\n<li>Strong knowledge of PHP5, JavaScript, Linux shell, and SQL</li>\r\n<li>Strong Object Oriented Programming skills in languages such as Java, Python, or C#/.NET</li>\r\n<li>Experience with major PHP frameworks (Symfony, CodeIgniter, Zend, Kohana, etc.)</li>\r\n<li>Extensive experience with LAMP stack and open source software in general</li>\r\n<li>Strong eCMS experience with commercial and open source systems such as Alfresco, Interwoven, Documentum, CQ5, Drupal, and Wordpress</li>\r\n<li>Experience with MySQL, MSSQL or other RDBMSs</li>\r\n<li>Experience with creating and consuming RESTful APIs</li>\r\n<li>Good knowledge of front-end technologies such as HTML, CSS, jQuery and how they play with back-end services</li>\r\n<li>Experience in an Agile development environment, particularly SCRUM and Test Driven Development (TDD)</li>\r\n<li>Understanding and applying SDLC principles when working with or leading a large team of developers</li>\r\n<li>Demonstrated ability in working in a geographically distributed development team environment</li>\r\n<li>Must have excellent problem-solving skills and love technical challenges</li>\r\n<li>Must be self-motivated, and able to multi-task</li>\r\n<li>Must be able to take initiative to be productive and efficient</li>\r\n<li>Computer Science degree preferred - but your GitHub URL speaks louder than a piece of paper.</li>\r\n</ul>', 'MCA, MSCICT', 2, '20,000 - 30,000', 'Y', '1 - 3 Years', 'Surat, Gujarat', 'Full Time', 'N', 'N', '2018-08-31 12:26:09', '2018-09-07 07:08:49'),
(2, 'PHP Developer', '<ul class=\"sf-list list-tick\">\r\n<li>Strong knowledge of PHP5, JavaScript, Linux shell, and SQL</li>\r\n<li>Strong Object Oriented Programming skills in languages such as Java, Python, or C#/.NET</li>\r\n<li>Experience with major PHP frameworks (Symfony, CodeIgniter, Zend, Kohana, etc.)</li>\r\n<li>Extensive experience with LAMP stack and open source software in general</li>\r\n<li>Strong eCMS experience with commercial and open source systems such as Alfresco, Interwoven, Documentum, CQ5, Drupal, and Wordpress</li>\r\n<li>Experience with MySQL, MSSQL or other RDBMSs</li>\r\n<li>Experience with creating and consuming RESTful APIs</li>\r\n<li>Good knowledge of front-end technologies such as HTML, CSS, jQuery and how they play with back-end services</li>\r\n<li>Experience in an Agile development environment, particularly SCRUM and Test Driven Development (TDD)</li>\r\n<li>Understanding and applying SDLC principles when working with or leading a large team of developers</li>\r\n<li>Demonstrated ability in working in a geographically distributed development team environment</li>\r\n<li>Must have excellent problem-solving skills and love technical challenges</li>\r\n<li>Must be self-motivated, and able to multi-task</li>\r\n<li>Must be able to take initiative to be productive and efficient</li>\r\n<li>Computer Science degree preferred - but your GitHub URL speaks louder than a piece of paper.</li>\r\n</ul>', 'MCA, MSCICT', 2, '20,000 - 30,000', 'Y', '1 - 3 Years', 'Surat, Gujarat', 'Full Time', 'N', 'N', '2018-08-31 12:26:09', '2018-09-07 07:08:58'),
(3, 'Shopify Developer', '<p>&nbsp;&nbsp;<strong>Job Description&nbsp;</strong></p>\r\n<ol>\r\n<li>Strong knowledge of liquid file customization.</li>\r\n<li>Generate custom - tailored Shopify theme and altering pre - existing template.</li>\r\n<li>Act as Shopify expert, specializing in all facets of the ecommerce platform.</li>\r\n<li>Track record of producing clean, efficient, and standards compliant code.</li>\r\n<li>&nbsp;Prototype solutions quickly, researching new technologies - where applicable and collaborate to implement the technical vision.</li>\r\n<li>Develop web sites, applications and rich multi-media experiences according to the brief and technical specifications</li>\r\n</ol>\r\n<p>&nbsp;<strong>Skills Required</strong> : -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>&nbsp; HTML, CSS, jQuery, Javascript, PHP &amp; MySQL</p>', 'Minimum Graduate', 2, '15000 to 35000', 'Y', 'Minimum 1 to 2 year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-07 06:42:56', '2018-09-07 07:08:39'),
(4, 'Magento Developer', '<ul>\r\n<li>Meaningful PHP Web Development experience</li>\r\n<li>Familiarity and experience with Model-View-Controller (MVC) architectural patterns</li>\r\n<li>Strong MySQL skills</li>\r\n<li>Experience using PHP to create and consume web services (e.g. SOAP, REST)</li>\r\n<li>Strong analytic and problem solving skills</li>\r\n<li>Good knowledge of JavaScript</li>\r\n<li>Good knowledge of CSS and CSS preprocessors</li>\r\n<li>Certified Magento developer credentials strongly preferred, but not required</li>\r\n<li>Linux System Administration experience strongly preferred, but not required</li>\r\n<li>Experience with release building and deployment software, such as Jenkins, preferred but not required</li>\r\n<li>Strong knowledge of Javascript, HTML, CSS and related tools/packages</li>\r\n<li>Strong knowledge of relational databases, i.e. MySQL (2+ years experience)</li>\r\n<li>Problem solver and go getter</li>\r\n</ul>', 'Minimum Graduate', 2, '15000 to 35000', 'Y', 'Minimum 1 to 2 year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-07 07:27:28', '2018-09-07 07:34:26'),
(5, 'Dot Net Developer', '<ul>\r\n<li>Familiarity with the ASP.NET framework, SQL Server and design/architectural patterns (e.g. Model-View-Controller (MVC))</li>\r\n<li>Knowledge of at least one of the .NET languages (e.g. C#, Visual Basic .NET) and HTML5/CSS3</li>\r\n<li>Familiarity with architecture styles/APIs (REST, RPC)</li>\r\n<li>Understanding of Agile methodologies</li>\r\n<li>Excellent troubleshooting and communication skills</li>\r\n<li>Reporting Tools : SQL Reporting Services 2000/2005, Crystal Reports 9.0</li>\r\n<li>Database: SQL Server 2008/2005, SQL Server Reporting Services SSRS , SQL Server Analysis Services SSAS , Oracle, DB2, MySQL, Access.\r\n<p>&nbsp;</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'Relevant', 1, '15000 to 30000', 'Y', 'Minimum 2 year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-08 11:17:11', '2018-09-08 11:17:11'),
(6, 'PHP Developer', '<ul>\r\n<li>Strong knowledge of PHP web frameworks</li>\r\n<li>Understanding the fully synchronous behavior of PHP</li>\r\n<li>Understanding of MVC design patterns</li>\r\n<li>Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3</li>\r\n<li>Knowledge of object oriented PHP programming</li>\r\n<li>Understanding accessibility and security compliance&nbsp;<strong>{{Depending on the specific project}}</strong></li>\r\n<li>Strong knowledge of the common PHP or web server exploits and their solutions</li>\r\n<li>Understanding fundamental design principles behind a scalable application</li>\r\n<li>User authentication and authorization between multiple systems, servers, and environments</li>\r\n</ul>', 'Relevant', 1, '15000 to 30000', 'Y', 'Minimum 1 to 2 year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-08 11:19:38', '2018-09-08 11:19:38'),
(7, 'SEO', '<p>&nbsp;<strong>We are looking for an SEO/SEM expert to manage all search engine optimization and marketing activities.</strong></p>\r\n<ul>\r\n<li>Knowledge of ranking factors and search engine algorithms</li>\r\n<li>Up-to-date with the latest trends and best practices in SEO and SEM</li>\r\n<li>In-depth experience with website analytics tools</li>\r\n<li>Provide creative ideas for content marketing and update website</li>\r\n<li>The ability to work with back-end SEO elements such as .htaccess, robots.txt, metadata, site speed optimization, and related skills</li>\r\n<li>An up-to-date, working knowledge of current, past, and projected trends in the SEO industry</li>\r\n</ul>\r\n<ul>\r\n<li>You will be responsible for managing all SEO activities such as content strategy,</li>\r\n</ul>\r\n<ul>\r\n<li>&nbsp;link building and keyword strategy to increase rankings on all major search networks.</li>\r\n<li>&nbsp;Supplementary skills:&nbsp;PHP, UX, IA, CRO, SEM, Content Strategy, Social Media</li>\r\n</ul>\r\n<p><strong><em></em></strong></p>\r\n<p>&nbsp;</p>', 'Relevant', 1, '15000 to 30000', 'Y', 'Minimum 2 Year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-17 06:07:00', '2018-09-17 06:07:00'),
(8, 'Senior Dot Net Developer', '<ul>\r\n<li>Familiarity with the ASP.NET framework, SQL Server and design/architectural patterns (e.g. Model-View-Controller (MVC))</li>\r\n<li>Knowledge of at least one of the .NET languages (e.g. C#, Visual Basic .NET) and HTML5/CSS3</li>\r\n<li>Familiarity with architecture styles/APIs (REST, RPC)</li>\r\n<li>Understanding of Agile methodologies</li>\r\n<li>Excellent troubleshooting and communication skills</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'Relevant', 1, '25000 to 45000', 'Y', 'Minimum 3 year', 'Surat', 'Full Time', 'N', 'Y', '2018-09-20 07:58:11', '2018-09-20 07:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `latestwork`
--

CREATE TABLE `latestwork` (
  `id` int(10) UNSIGNED NOT NULL,
  `latestwork_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latestwork_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latestwork_category` int(11) DEFAULT NULL,
  `latestwork_technology` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latestwork_content` text COLLATE utf8mb4_unicode_ci,
  `latestwork_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latestwork`
--

INSERT INTO `latestwork` (`id`, `latestwork_title`, `latestwork_image`, `latestwork_category`, `latestwork_technology`, `latestwork_content`, `latestwork_url`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(2, 'Luck365', '1536924930.jpg', 5, 'Graphic, Logo', '<p>Luck 365 is a simple and free app that offers predictions during live sports matches. It automatically analyzes the course of spots matches and provides tips for you to bet on.</p>\r\n<p>You don\'t have to follow multiple matches at the same time to find some opportunity to bet on.</p>\r\n<p>We do that for you!</p>\r\n<p>Find over 25 real sports and thousands of leagues to bet on, including NFL, NBA, CRICKET, UFC and esports such as Dota, Counter Strike, WoW.</p>', 'http://luck365.co', 'N', 'Y', '2018-08-23 23:15:26', '2018-09-17 06:33:37'),
(8, 'Hot Deals', '1537166909.jpg', 1, 'Digital Marketing, SEO', '<p>About HotDeals.com<br />HotDeals.com provides online shoppers with up-to-the-minute coupons, promo codes, sales, and offers that help them save money and time. Our mission is to save you money on the brands you love, in every area of your life.</p>\r\n<p>Why HotDeals.com?<br />Have you ever tried to use a promo code that didn&rsquo;t work? If so, you&rsquo;re not alone! The internet is overrun with phony coupon sites and outdated promotions, and that&rsquo;s why we created HotDeals.com&mdash;to offer consumers like you a go-to resource for savings that work every time.</p>\r\n<p>HotDeals.com features everything from company-wide coupons to special deals on quality products. We offer a simple and convenient way to save money, and the transaction is hassle-free because our coupons work.</p>', NULL, 'N', 'Y', '2018-09-17 06:48:29', '2018-09-17 06:50:41'),
(3, 'Android App', '1535085955.jpg', 2, 'PHP, MySQL, Laravel', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'https://www.facebook.com/', 'Y', 'Y', '2018-08-23 23:15:55', '2018-09-14 05:25:07'),
(4, 'IOS Work', '1535085984.jpg', 3, 'PHP, MySQL, Laravel', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'https://www.facebook.com/', 'Y', 'Y', '2018-08-23 23:16:24', '2018-09-14 05:25:02'),
(5, 'Fluffy Fish', '1536924908.jpg', 4, 'Android, Animation, Graphic', '<p>The most popular hobby now in your pocket! Start catching fish species in Fishing Clash - free fishing simulator and new 3D game from Nexus Infotechno. High time to go fishing!&nbsp;<br /><br />Face other players in real-time PvP!<br />-Be faster and better - catch more valuable fish species&nbsp;<br />-Beat your opponents and win exclusive rewards&nbsp;<br />-Get social and interact with other anglers&nbsp;<br /><br />Enjoy vivid 3D graphics!<br />-Visit great animated realistic fisheries (Arabian Coast, Pacific, Amazon River, Niagra Falls, Great Barrier Reef, India Ocean and many more)<br />- Discover hundreds of 3D fish species&nbsp;<br />- Feel the power of professional fishing gear&nbsp;</p>', NULL, 'N', 'N', '2018-08-23 23:16:43', '2018-09-17 06:49:34'),
(6, 'Nannyez', '1536558433.jpg', 7, 'ASP.NET with MVC , .NetCore WebAPI', '<h2>Babysitter and Home Care Services</h2>\r\n<p>We are industry leaders in providing care and take pride in delivering an exceptional service. Whether you need a long-term au pair, short-term care, child care at short notice, or special home care for an elderly or ill person, service users can relax and be sure that the level of care provided will be high in quality. We maintain a directory of qualified carers who are passionate about the profession, regardless of whom they are caring for. We offer an inclusive service that caters to every service user&rsquo;s needs with compassion. Regardless of physical or mental disability we believe in equality. Those who have special care needs will find a suitable service provider. Parents, and general care seekers are also able to post jobs on Nannyez via the jobs page, for our directory of local registered service providers.</p>\r\n<h2>Pet Care Services</h2>\r\n<p>Does your canine or feline friend need care while you are away? No problem. Nannyez have your need covered. We have a range of pet carers available.</p>\r\n<h2>Housekeeping Services</h2>\r\n<p>No time for the dusting, cleaning and ironing? No problem, Nannyez is here to help ease the demands of your personal commitments and managing a home. Within our directory you will find the perfect service provider for housekeeping services.</p>\r\n<h2>Tutoring Services</h2>\r\n<p>Our directory of private tutors are on a mission to help improve school grades. Also support students with comprehension of a variety of subjects, and homework. Our tutors are not only academically bright, they also have outstanding people skills and patience to differentiate their teaching style. Our tutors recognize and understand that &lsquo;one size does not fit all,&rsquo; each student will have a personalized approach to tutoring to secure their overall achievement.</p>', 'http://www.nannyez.com', 'N', 'Y', '2018-08-23 23:17:02', '2018-09-10 06:56:18'),
(7, 'Nannyze', '1536558618.jpg', 7, NULL, NULL, NULL, 'Y', 'Y', '2018-09-10 05:50:18', '2018-09-10 06:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_08_16_061842_create_slider_table', 1),
(9, '2018_08_17_051047_create_categorys_table', 1),
(10, '2018_08_17_064835_create_latestwork_table', 1),
(11, '2018_08_20_050120_create_testimonial_table', 2),
(12, '2018_08_20_063502_create_happayclinet_table', 3),
(13, '2018_08_20_094315_create_about_table', 4),
(14, '2018_08_21_055118_create_service_table', 5),
(16, '2018_08_21_075248_create_portfolio_table', 6),
(17, '2018_08_21_110057_create_blog_table', 7),
(18, '2018_08_21_120834_update_blog_table', 8),
(19, '2018_08_23_045145_update_paragraph_blog_table', 9),
(20, '2018_08_24_061737_add_rating_designation_testimonial', 10),
(21, '2018_08_25_052312_add_technology_portfolio', 11),
(22, '2018_08_25_052754_add_content_technology_latestwork', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_menu` int(5) NOT NULL DEFAULT '0',
  `mate_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mate_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mate_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_order` int(5) DEFAULT NULL,
  `is_sub_menu` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `menu`, `sub_menu`, `mate_title`, `mate_keywords`, `mate_description`, `body`, `page_order`, `is_sub_menu`, `created_at`, `updated_at`) VALUES
(7, 'Restaurant & Hotel Marketing', 'restaurant-hotel-marketing', 'service', 5, 'Restaurant & Hotel Digital Marketing Agency, Branding Services in Surat', 'hotel advertising, digital marketing for restaurants, restaurant digital marketing, branding restaurant, hospitality advertising, restaurant marketing trends, restaurant marketing services, hotel marketing, online marketing for hotel business, restaurant branding service', 'Want to promote your cafe, restaurant or hotel business? Get in touch with Nexus Infotechno today for best digital marketing services specially designed for food outlets. We offer best branding services, Facebook Ad Management, Social Media Marketing, Search Engine Optimization services to attract new customers and get more bookings for your outlet.', '<p>When you are running a restaurant or hotel business, you have to constantly attract people to approach your restaurant or hotel to make your business successful and profitable.</p>\r\n<p>You just can keep yourself relaxed and hope that your customers would walk-in by themselves without knowing what you have to offer for them.</p>\r\n<p>Every restaurant or hotel owner has passion and vision of running a successful gourmet business, and they work hard from day to night to make it happen.</p>\r\n<p>Most of the restaurants and hotels have the challenge to generate sales more than their competitors, for this they are constantly running special offers time by time to increase their cash flow and walk-in customers.</p>\r\n<p>But in reality it&rsquo;s not easy as it looks like, as every restaurant or hotel owner doesn\'t take time to analyses what works best for them and what does not, it\'s not because they are lazy or less experienced, but in fact they don\'t have time to create new strategies and execute their plans.</p>\r\n<p>No one wants to take a step back and analyze about their business.</p>\r\n<p><strong>Nexus Infotechno - Digital Marketing Ideas and Solutions for Restaurant and Hotel Services</strong> works as an outsourced restaurant marketing agency that will take care of all aspects of your gourmet business marketing from start to finish.</p>\r\n<p>We focus on new techniques and technologies and execute to engage new customers and also retain existing customers.</p>\r\n<p>Our team of experienced and professional digital marketers, content strategists and designers will give all possible and profitable resources that would lead into growth of your business.</p>\r\n<p>Nexus Infotechno would implement all the strategies that really work through social media marketing, search engine optimizations, email marketing, content marketing and branding.</p>\r\n<p>To find out which digital marketing service would really benefit your restaurant and hotel business marketing and promotions, connect with us for a free consultation service and we would suggest the best strategy and solution for all your business needs.</p>\r\n<p>Nexus Infotechno is an expert digital marketing agency to promote your restaurant or hotel business at local, national and international level.</p>\r\n<p>Apart from above services, we are also an expert in generating positive reviews for your business through various services offered by Google like Google Maps, Google Plus, YouTube, Google Analytics, Google Webmasters and much more.</p>\r\n<p>Also, we will ensure that your business has a top seat at the social media marketing table. Participation in social media can avail you a big opportunity to connect and engage with more customers.</p>\r\n<p>Facebook, Instagram, Twitter, Google Plus, LinkedIn, etc. are some of the social media platforms that can help you in generating more sales, customers and branding.</p>\r\n<p>When you are running a food outlet then it becomes necessary to get positive reviews as well as genuine reviewers. For this, we work on various restaurant and hotel reviews platforms like TripAdvisor, Yelp, Zomato, Foursquare, etc.</p>', 6, 'N', '2018-09-07 08:06:11', '2018-09-12 05:08:46'),
(6, 'Mobile App Development', 'mobile-app-development', 'service', 0, 'Android,iOS,Windows,Hybrid Mobile Application Development Company Surat', 'mobile app development, mobile app development company, mobile app services, mobile app surat, mobile application surat, android app development surat, iphone app development, hybrid app development surat, best mobile app developer, best mobile app development company surat, surat mobile app development', 'Are you looking for best mobile app development company? Nexus Infotechno provides professional mobile application development services for iPhone, Android, Windows, cross-platform, hybrid app and much more. We are top mobile app development company from Surat, Gujarat, India.', '<p>Nexus Infotechno is a renowned offshore <strong>Mobile app development company</strong> known for developing result-oriented, high-performing and versatile mobile application for all platforms.</p>\r\n<p>We have a team of skilled and experienced mobile app developers for Android, iOS, Windows, Ionic, Xamarin, and all other supporting platforms.</p>\r\n<p>Nexus Infotechno develops engaging and innovative mobile application designs with best user-interfaces and latest technologies. We also have expertise in designing online and offline applications for every sector, whether you are looking for gaming services, ecommerce platform, a CMS application, lead generation, social networking application or any other.</p>\r\n<p>Our Mobile Application Services includes:</p>\r\n<ul>\r\n<li>iPhone app development</li>\r\n<li>Android app development</li>\r\n<li>HTML5 App Development</li>\r\n<li>Hybrid App Development</li>\r\n<li>iPad App Development</li>\r\n<li>Mobile UI Design</li>\r\n<li>Java Mobile App Development</li>\r\n<li>Custom Windows Mobile App Development</li>\r\n<li>Cross-Platform App Development</li>\r\n<li>Native App Development</li>\r\n</ul>\r\n<p>Nexus Infotechno strives hard to offer cutting-edge technology solutions to clients, so they can&rsquo;t just keep pace with the ever-changing industry but dominate the market competition.</p>\r\n<p>We have ample experience in developing customer-centric mobile application for various mobile platforms.</p>', 1, 'N', '2018-09-07 06:45:40', '2018-09-08 09:25:33'),
(4, 'Website Design & Development', 'website-design-development', 'service', 0, 'Web Design Company in Surat,Website Development Services India-Nexus Infotechno', 'website development surat,web design surat,responsive web design,e-commerce website development surat, dynamic website development surat, best IT company, software development company, website design India, website development India, responsive website design, website redesign company in India, best software companies', 'Nexus Infotechno has an expert team of web designers and developers. With the specialization in website design and development, we give maximum priority to develop a website using latest technologies and frameworks and also keep in mind that the development process is compatible with SEO strategies. We use various tools like ASP.NET, PHP, JAVA, AJAX, HTML, Magento, Open Cart, Jquery, HTML, MVC, Silverlight and Database tools like SQL Server, MySQl, Access, SQLLite so that in the internet world you can provide 100% facilitated solutions.', '<p>Web application development is an expression that covers an extensive variety of services and includes a custom approach towards improvement and development. To enhance intensity, businesses nowadays are searching for enhanced versatility, better transportability and upgraded availability; characteristics that can be satisfied with specially crafted design and development of web applications.</p>\r\n<p>Nexus Infotechno\'s web application designers and developers have an all-around characterized approach towards web application development and are highly capable in creating proficient custom solutions for organizations crosswise over assorted business spaces and their size.</p>\r\n<p>Nexus Infotechno offers custom web solutions for businesses, brand and organizations that need cutting edge applications for streamlining business functionality and increasing profitability.</p>\r\n<p>We likewise create applications utilizing Content Management Systems, for example, Joomla and WordPress to non-basic customers. We offer answers for incorporating new or existing framework with front and back-office applications.</p>\r\n<p>Give end-to-end business answer for address the help and programming support administrations. Our organization has demonstrated involvement in conveying quality seaward programming application support to business arrangements that maintain the business round the clock.</p>\r\n<p>Nexus Infotechno is one of the most trusted <strong>website design and development company in Surat, India</strong>. We know and believe that a website is the digital showroom of your business that can be accessed globally.</p>\r\n<p>Our dedicated team of experienced developers knows how to satisfy our valued clients with best web development and website designing services. Our expert uses latest technologies and industry trends to develop your websites in order to give you the best. Custom programming and development is our specialty, from e-commerce to fully customized content management systems.</p>', 1, 'Y', '2018-09-06 09:44:11', '2018-09-08 08:03:16'),
(5, 'Digital Marketing', 'digital-marketing', 'service', 0, 'Digital Marketing,Social Media, Search Engine Optimization Services in Surat', 'digital marketing agency, seo company in surat, best seo company in surat, social media marketing surat, digital marketing services surat, facebook marketing in surat, marketing agency in surat', 'Nexus Infotechno is highly experienced digital marketing company in Surat, India. We have expertise in providing result-oriented online marketing services like SEO,SMM,Content writing, email,blogging & branding services.', '<p><strong>What is Digital Marketing?</strong></p>\r\n<ul>\r\n<li>Digital Marketing is a data and information driven and target based brand promotion by utilizing the latest technologies.</li>\r\n<li>Digital Marketing is the promotion of items or brands through at least one type of electronic media, which varies from traditional advertising and marketing.</li>\r\n<li>In Digital Marketing, it utilizes channels and techniques that empower a business to analyze marketing efforts and understand which medium is working and what isn\'t with real-time reports.</li>\r\n<li>Digital Marketers or Digital marketing agency constantly monitor things like what is being seen and searched, how often and for to what extent, track sales conversion, what content is working and what\'s not, etc.</li>\r\n<li>While the Internet is the most intently connected platform with Digital marketing, others marketing forms include SMS marketing, podcasts, billboards, television, radio channels, newspaper advertisements, etc.</li>\r\n</ul>\r\n<p><strong><em>Digital media is a consistently developing source of communication and entertainment. </em></strong></p>\r\n<ul>\r\n<li>Customers nowadays are not only dependent on what your organization says in regards to your brand or products, but also keep in mind what the media, friends, relatives, and other sources are saying as well. Also, they will probably trust them more than you.</li>\r\n<li>People now days, need brands they can trust, organizations that know them, full customer-support, and offers custom-made products or services according to their needs and preferences.</li>\r\n<li>Digital Marketing Services is keenly focused around your online presence and branding.</li>\r\n<li>A digital marketing agency will work dedicatedly on developing online reputation of your business.</li>\r\n<li>A well-developed consumer-oriented website allows you to showcase your brand online.</li>\r\n</ul>\r\n<p>From here, <strong><em>best digital marketing agency in Surat - Nexus Info Techno</em></strong> will help you to monitor and determine what platforms and medium you should use to reach ideal customers.</p>\r\n<ul>\r\n<li>The usage of digital platform increases rapidly, therefore informal exchanges are no longer going to help.</li>\r\n<li>To attain the fruitfulness of online business then there is a need to take the shift to grow your business rapidly.</li>\r\n<li>SEO service is one of the necessary shift to connect the customers who in need to buy your products.</li>\r\n</ul>\r\n<p><strong>Why should you choose Nexus Info Techno for Digital Marketing Services?</strong></p>\r\n<ul>\r\n<li>Nexus Info Techno, a professional digital marketing agency in Surat will rank your company as a market leader by creating engaging content that will help you in establishing your brand online.</li>\r\n<li>Nexus Info Techno will execute latest and effective content strategies that will help in gaining organic high rank in search engines.</li>\r\n<li>Nexus Info Techno will create and implement expert social media marketing strategies that would surely gain much better revenues compared to traditional marketing strategies.</li>\r\n<li>Majority of internet users visits various websites frequently that helps in gaining high ranks on search engines. So to increase the number of website visitors on your website, you would need to focus on website\'s page ranking.</li>\r\n<li>Nexus Info Techno will help your business to get online and get noticed by various search engines through Search Engine Optimization services.</li>\r\n<li>Gaining top position in search ranking is not an easy task; it needs constant SEO activities to match the results.</li>\r\n<li>As an SEO company in Surat, our aim is to ensure our customer leverage the power of internet to the fullest extent possible.</li>\r\n<li>Search engine optimization (SEO) has been gaining lot of recognition as people around the globe has understood that having a website is just the first yet most important part of utilizing an online business opportunity.</li>\r\n<li>A decent website must include all the technical parameter so it can be search engine friendly.</li>\r\n<li>Nexus Info Techno leverages expertise as the best SEO and Digital Marketing Company in Surat. &nbsp;</li>\r\n<li>We offer best digital marketing services to our customers in Surat and other parts of the country.</li>\r\n<li>As a leading professional Digital Marketing Company in Surat our highly skilled team of Digital Marketers is dedicated to get your brand recognized on all major search engines.</li>\r\n<li>We utilize latest SEO techniques to guarantee quality results.</li>\r\n<li>Our dedicated team of experts will ensure that your brand gets the highest ranking on all major search engines for all targeted keywords.</li>\r\n</ul>\r\n<p>Nexus Info Techno believes in excellence and quality, this is the reason we have a long list of satisfied clients.</p>', 3, 'Y', '2018-09-06 10:49:58', '2018-09-07 11:54:20'),
(8, 'E-commerce Development', 'e-commerce-development', 'service', 4, 'Ecommerce Website Development India,E-Commerce Developers Surat', 'eCommerce Web Development Company, eCommerce Web Developers, top eCommerce web development company, Hire eCommerce Web Developers, custom eCommerce web development, eCommerce web development services, ecommerce development company, top ecommerce company', 'Are you looking for a top e-commerce website development company in India or Australia? Nexus Infotechno can be your best partner. We offer customized e-commerce web design and services to our clients. Professional ecommerce website developers in Surat focused to develop responsive and engaging online shopping store.', '<p>Nowadays, the internet technology has dominated everyone&rsquo;s lifestyle. Even businesses needs to have an online presence to stay alive in this competitive market.</p>\r\n<p>It has now become a necessity to have a website for your business. Online selling is trending nowadays, and no one wants to stay behind in the competition.</p>\r\n<p>Having an e-commerce website that represents your website is the best way to showcase your products and services.</p>\r\n<p>But, only having an eCommerce website is not enough, the website should be designed using the latest tools and technologies.</p>\r\n<p>A properly built ecommerce website should have a targeted goal and also should be able to attract potential customers.</p>\r\n<p>At Nexus Infotechno, our ecommerce solutions are designed in such a way that showcases your products clearly, simplified buying and selling options, payment gateway integration at the most cost-effective way.</p>\r\n<p>Our E-commerce development includes following features:</p>\r\n<ul>\r\n<li>Online product display</li>\r\n<li>Shopping cart</li>\r\n<li>Payment gateway integration</li>\r\n<li>Personalization</li>\r\n<li>Social media integration</li>\r\n<li>Customized filtrations and display</li>\r\n<li>Easy buy and sell features</li>\r\n<li>Inquiry form</li>\r\n<li>Wish list</li>\r\n<li>And much more.</li>\r\n</ul>\r\n<p>We have experienced and skilled team of web developers who understand your unique requirements regarding <strong>e-commerce website development</strong>.</p>\r\n<p>Our highly proficient custom ecommerce web solutions developers build e-commerce sites with exceedingly sophisticated functionality that is powered by vigorous customization options.</p>\r\n<p>Nexus Infotechno understand your unique ideas and transform and integrate your online business by creating a user-friendly website for your business.</p>\r\n<p>Develop your very own online shopping store by India\'s <strong>best ecommerce website development company</strong> - Nexus Infotechno with unique and customized features.</p>\r\n<p>As a <strong>leading ecommerce development experts, Nexus Infotechno</strong> has an excellent track record as well as the expertise to implement effective ecommerce strategies, integration, and support.</p>', 4, 'N', '2018-09-08 05:25:25', '2018-09-10 12:58:50'),
(9, 'Content Marketing', 'content-marketing', 'service', 5, 'Content Marketing Agency India,Content Writing,Copywriting Services Surat', 'Creative Marketing Agency, emarketing agency, emarketing agency surat, Online Marketing Company, SEO Service Provider, markteing agency in Surat, Digital Marketing Company in Surat, Digital Marketing Company Surat, Internet Marketing, Social Media Marketing, content marketing services india,content agency india, copywriting services surat', 'Content marketing is all about delivering correct information that drives the result. At Nexus Infotechno we use research, data and our experience to  showcase your stories that give people a perfect reason to buy, sell, purchase, sign up and engage with your brand', '<p>Everybody knows that content is king in today\'s internet-savvy world. Proper and relevant content on website helps in attracting more traffic, brand building and generate revenues for business.</p>\r\n<p>Content development and marketing strategy should enhance and support the business or organization\'s needs and requirements that would help in reaching more potential customers and earn trust towards your brand.</p>\r\n<p>In other words, content marketing is an inbound strategy that is focused on keeping customers need in mind.</p>\r\n<p>A successful content creation requires an extreme understanding of your targeted customers, so you may create and deliver relevant content specially designed for your customers. This would help in gaining customers trust and also helps them in engaging more with your business brand.</p>\r\n<p>At Nexus Infotechno, we create and develop quality content in SEO-friendly manner. All our content are designed to be interesting and relevant to your targeted audience that eventually benefits your business or brand.</p>\r\n<p>Our content marketing strategy includes:</p>\r\n<ul>\r\n<li>Content strategy</li>\r\n<li>Content optimization and planning</li>\r\n<li>Competitor content audit</li>\r\n<li>SEO-friendly content</li>\r\n<li>Copywriting</li>\r\n<li>And much more.</li>\r\n</ul>\r\n<p>All our content writing and content marketing services are specially tailored for keeping customers and clients in mind. Whether you are looking for website content, blog or article writing of brand management content, Nexus Infotechno has everything for you.</p>', 5, 'N', '2018-09-08 07:55:04', '2018-09-08 12:15:34'),
(12, 'Social Media Marketing', 'social-media-marketing', 'service', 5, 'Best Social Media Marketing Agency Surat,SMM,SMO,Branding Services India', 'social media marketing company, social media marketing agency Surat, social media marketing services, social media services, social media marketing company Surat, social Media Marketing Services Surat,Social Media Marketing Companies in Surat,Social Media Services in Surat,Social Media Marketing Services in Surat,Social Media Marketing Companies in India,Social Media Services in India,Social Media Marketing Services in India,Social Media Optimization Services in Surat,Social Media Optimization Services in India,SMO Services in Surat,SMO Services in India,Social Media Agencies in Surat,Social Media Agencies in India,Social Media Agency in Surat,Social Media Agency in India', 'Nexus Infotechno is among the top social media marketing company based in Surat, India. We have expertise in delivering best results through Facebook Marketing, Instagram Marketing, YouTube Marketing, Google Advertising, Twitter Marketing, LinkedIn Marketing services in India.', '<p><strong>What is Social Media Marketing?</strong></p>\r\n<p>Social Media Marketing (SMM) is an essential part of Digital Marketing. In SMM various social media platforms are used as a marketing tool to increase brand awareness of your website or business.</p>\r\n<p>The main goal of Social Media Marketing is to increase audience engagement and interact with potential customers to build trust towards your business or brand.</p>\r\n<p>Nexus Infotechno is a name to believe in among the <strong>top social media marketing company in Surat, India.</strong></p>\r\n<p>Nexus Infotechno is intended to deliver high results with our social media marketing services that is sure to boost up your brand awareness and generate revenues.</p>\r\n<p>Social media marketing services cannot rely on one platform. Our social media marketing experts make sure that they will pick most result-oriented social media platforms relevant to your business.</p>\r\n<p>Nexus Infotechno\'s <strong>social media experts</strong> <strong>in Surat</strong> are always engaged in developing new strategies for social media campaigns.</p>\r\n<p>Social media marketing can help with a various goals and strategies like:</p>\r\n<ul>\r\n<li>Increasing the traffic of the website.</li>\r\n<li>Building conversions.</li>\r\n<li>Brand awareness.</li>\r\n<li>Customer engagement with business or brand</li>\r\n<li>Search Engine Optimization</li>\r\n<li>And much more</li>\r\n</ul>\r\n<p>There are many social media platforms, some of the major platforms that we work are:</p>\r\n<p><strong>Facebook:</strong></p>\r\n<p>Facebook is one of the most significant and popular social media platform to connect and engage with potential customers. Through <strong>Facebook marketing</strong>, one can increase website traffic, generate brand awareness, reach targeted audiences and brand visibility.</p>\r\n<p><strong>Twitter:</strong></p>\r\n<p>Twitter has an in-built ability that can make your posts go \"<strong>VIRAL</strong>\". You can earn many shares, retweets and increase your twitter followers. Through <strong>Twitter marketing</strong> one can increase their social connection, build brand visibility and promote products and services attract more potential customers.</p>\r\n<p><strong>LinkedIn:</strong></p>\r\n<p>LinkedIn is one of major social media platform mostly suitable for businesses, professionals and corporates. LinkedIn helps you in building brand identity for your business, lets you stay in touch with your customers and increase engagements. Through <strong>LinkedIn marketing</strong> you can get great results for recruitment, product showcasing, company reputation and much more.</p>\r\n<p><strong>YouTube:</strong></p>\r\n<p>YouTube is second largest search engine, owned and managed by Google. Through YouTube you can do video marketing at it is the latest trend in marketing industry. Through <strong>YouTube marketing</strong> one can promote their business, showcase their products or simply share their thoughts and services. Through YouTube, you can increase the chance of appearing in search engine results with visual content.</p>\r\n<p><strong>Google Plus:</strong></p>\r\n<p>Google Plus is a social media platform offered by Google. Google plus helps you in connecting with new audiences, sell your products, customer interactions, build brand visibility and showcase your portfolio. Through <strong>Google Plus marketing</strong>, you can improve your search engine rankings, increase social media presences and build brand credibility.</p>\r\n<p>Social media platforms such as Facebook, Twitter, LinkedIn, Google +, Instagram, Pinterest, etc. are potential enough to increase your brand credibility and exposure.</p>\r\n<p>Social media expert team of Nexus Infotechno knows how to efficiently design and deliver productive social media campaigns for your business.</p>', NULL, 'N', '2018-09-10 08:00:44', '2018-09-10 08:01:20'),
(13, 'Search Engine Optimization', 'search-engine-optimization', 'service', 5, 'Search Engine Optimization Services Surat,SEO Experts,Digital Marketing Company India', 'search engine optimization services, search engine optimization company india, seo company surat, seo services, seo service india, seo company india, best seo packages, best seo company india, online marketing services, online marketing, online marketing company, online marketing companies, online marketing company india, online marketing service, seo experts, seo experts surat, surat seo experts', 'Nexus Infotechno is the best SEO Company in Surat, India that offers best digital marketing and search engine optimization services with proven results using best strategies and technologies to increase website visitors and increasing top ranking in search engine results.', '<p>Nexus Infotechno is a leading search engine optimization company based in Surat, India. We specialize in increasing brand visibility and website traffic using result-oriented digital marketing strategy.</p>\r\n<p>In today\'s competitive market, having an online presence is very important for businesses. Your website represents your online identity and is a very important key to attract customers.</p>\r\n<p>But only having a good website and creative website design is not enough. Reaching your targeted audience is not an easy task as there are many other businesses offering similar services and products online.</p>\r\n<p>Suppose, you have built a website using the latest technologies and features and ready to sell your products online, but who will buy your products if you are not visible to online customers?</p>\r\n<p><strong>Nexus Infotechno</strong> makes sure that your website ranks at top positions in search engine rankings like Google, Yahoo, Bing, etc.</p>\r\n<p>SEO is an effective technique that drives quality traffic gradually to your website, office or physical store that results in boosting your ROI.</p>\r\n<p>Nexus Infotechno has an expert team of experienced as well as qualified professionals. We have a well-built infrastructure to deliver full-fledged search engine optimization services as a part of our digital marketing strategy.</p>\r\n<p>SEO is an essential part of online marketing to mark the presence of your business online. Nexus Infotechno is a <strong>leading SEO Company in Surat, India</strong> that offers result-oriented search engine optimization services complimenting the needs and requirements of clients.</p>\r\n<p>Nexus Infotechno\'s <strong>SEO experts</strong> are dedicated to delivering organic and long-term results with top rankings on search engine results. We take major and effective steps for the project to reach the goal of our clients that would gain maximum ROI.</p>\r\n<p>In SEO, there are two types of basic strategies known as <strong>On-page SEO</strong> and <strong>Off-page SEO.</strong></p>\r\n<p>In On-page SEO, website elements such as HTML code, keyword research, image size, URL structure, content, page loading speed, internal linking etc. are taken into consideration.</p>\r\n<p>Off-page SEO refers to backlinks generated through other websites and applications in form of directory submissions, business listing, article writing and submission, guest blog posts, press release, forum posting, social bookmarking, image sharing, etc.</p>\r\n<p>Nexus Infotechno being a <strong>leading digital marketing company in India</strong> have handled the number of Digital Marketing and SEO related projects with proven results.</p>\r\n<p>We are bound to deliver long-lasting results for your project or website and ensure that your business will grow rapidly and successfully.</p>', NULL, 'N', '2018-09-17 05:08:57', '2018-09-17 05:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_category` int(11) DEFAULT NULL,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_content` text COLLATE utf8mb4_unicode_ci,
  `portfolio_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_technology` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_title`, `portfolio_category`, `portfolio_image`, `portfolio_content`, `portfolio_url`, `portfolio_technology`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Edumaster', 1, '1535019236.jpg', '<p>Edumaster Content</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'edumaster.com', 'PHP, MySql, CakePHP', 'N', 'N', '2018-08-21 04:40:21', '2018-09-17 06:07:38'),
(2, 'Test Portfolio', 2, '1535019220.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'https://www.youtube.com/', 'PHP, MySql, Laravel', 'N', 'N', '2018-08-21 04:42:52', '2018-09-17 06:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content` text COLLATE utf8mb4_unicode_ci,
  `service_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_icon`, `service_content`, `service_url`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'fas fa-keyboard', 'Web application development is an expression that covers an extensive variety of services and includes a custom approach towards improvement and development.', 'http://nexusinfotechno.com/service/website-design-development', 'N', 'Y', '2018-08-21 01:48:25', '2018-09-12 05:39:27'),
(2, 'Mobile App Development', 'fas fa-mobile-alt', 'Nexus Infotechno is a renowned offshore Mobile app development company known for developing result-oriented, high-performing and versatile mobile application for all platforms.', 'http://nexusinfotechno.com/service/mobile-app-development', 'N', 'Y', '2018-08-21 01:48:25', '2018-09-12 05:40:43'),
(3, 'Digital Marketing', 'fab fa-searchengin', 'Digital Marketers or Digital marketing agency constantly monitor things like what is being seen and searched, how often and for to what extent, track sales conversion, what content is working and what\'s not, etc.', 'http://nexusinfotechno.com/service/digital-marketing', 'N', 'Y', '2018-08-21 01:48:25', '2018-09-07 08:12:45'),
(4, 'Restaurant Marketing', 'fas fa-concierge-bell', 'When You Are Running A Restaurant Or Hotel Business, You Have To Constantly Attract People To Approach Your Restaurant Or Hotel To Make Your Business Successful And Profitable.', 'http://nexusinfotechno.com/service/restaurant-hotel-marketing', 'N', 'Y', '2018-08-21 01:48:25', '2018-09-07 08:10:52'),
(5, 'E-Commerce Development', 'fas fa-shopping-basket', 'Nowadays, The Internet Technology Has Dominated Everyone’s Lifestyle. Even Businesses Needs To Have An Online Presence To Stay Alive In This Competitive Market.', 'http://nexusinfotechno.com/service/e-commerce-development', 'N', 'Y', '2018-09-08 05:26:50', '2018-09-08 11:12:11'),
(6, 'Content Marketing', 'fas fa-pen-nib', 'Everybody Knows That Content Is King In Today\'s Internet-Savvy World. Proper And Relevant Content On Website Helps In Attracting More Traffic, Brand Building And Generate Revenues For Business.', NULL, 'N', 'Y', '2018-09-08 07:56:18', '2018-09-08 07:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content` text COLLATE utf8mb4_unicode_ci,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_content`, `slider_image`, `slider_url`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Website Development', 'Website Development', 'website_development.jpg', 'http://nexusinfotechno.com/service/website-design-development', 'N', 'Y', '2018-08-25 00:57:29', '2018-09-20 11:23:14'),
(2, 'Mobile App Development', 'Mobile App Development', 'mobile_app.jpg', 'http://nexusinfotechno.com/service/mobile-app-development', 'N', 'Y', '2018-08-25 00:58:00', '2018-09-20 11:22:50'),
(3, 'Digital Marketing', 'Digital Marketing', 'nexus.jpg', 'http://nexusinfotechno.com/service/digital-marketing', 'N', 'Y', '2018-08-25 00:58:25', '2018-09-20 11:22:26'),
(4, 'Nexus  InfoTechno', 'Nexus InfoTechno', 'digital_marketing.jpg', NULL, 'N', 'Y', '2018-09-20 07:50:17', '2018-09-20 11:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `is_delete` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `show_front` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `comment`, `rating`, `designation`, `is_approved`, `is_delete`, `show_front`, `created_at`, `updated_at`) VALUES
(1, 'Mayank Gajart', '1534745161.jpg', 'This is test Testimonial.', NULL, NULL, 'Y', 'Y', 'Y', '2018-08-20 00:36:01', '2018-08-20 00:58:02'),
(2, 'Divyang Gajjar', '1534745451.jpg', 'New Testimonial', NULL, NULL, 'N', 'Y', 'N', '2018-08-20 00:40:51', '2018-08-20 00:56:59'),
(3, 'Justin', '1535095603.jpg', 'We visited Nexus Infotechno Inc. with a vision for our website. you listened, that vision with your constructive criticism and insight, produced a very attractive website! We hear nothing but positive comments! So again, THANK YOU!', '5.0', 'Manager, The Travel Lounge', 'Y', 'N', 'Y', '2018-08-24 01:10:23', '2018-08-30 13:00:28'),
(4, 'Ashish Patel', '1535095557.jpg', 'I am a cafe owner and was looking to gain new clients for my business and was referred to Nexus Infotechno by one of my friends. I couldn’t be happier with Nexus\'s team, who helped me with SEO and continued website enhancement. I get charts monthly about how the website is doing and am given monthly strategy. They explained everything to me from the start, and when they got to work, I started getting new clients very quickly and continue to get suggestions on how to improve SEO strategy.\r\n\r\nThe whole team is very professional and shows that this is a high-class business where you do get the services for what you’re paying for. I highly recommend them and will refer any businesses that ask for SEO suggestions.', '5.0', 'Owner, The Hunger Cafe', 'Y', 'N', 'Y', '2018-08-24 01:12:15', '2018-08-30 12:56:03'),
(5, 'Bret Lehman', '1535095522.jpg', 'We are very satisfied and happy to have found Nexus Infotechno as our offshore development partner. During our project period, Nexus Infotechno has developed a good understanding of our own vision and work flows and found a way to successfully complement our operations without causing any flaws or issues on our side.', '5.0', 'Director, BRB', 'Y', 'N', 'Y', '2018-08-24 01:14:01', '2018-08-30 12:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nexus Infotechno', 'info@nexusinfotechno.com', '$2y$10$6REUacI.KEZTlF3kpxej..SuGrWROXmo6HH02J02KDuXiFlQAb.aa', 'YFqsfTydB73Aj9mYQu4Q0g41PxLctPTgs1Yi3QmGEQvi4ZoU5RNjVisDqg5p', '2018-08-17 01:31:05', '2018-08-17 01:31:05'),
(2, 'Mayank Gajjar', 'mayankgajjar888@gmail.com', '$2y$10$F8Y7XbQxiiI83vBFeMx3a.HcT4eYS9tRW/AQD9UsZBppW/eNhqJI6', 'zQIW3KtOeB1zOUh9WNL2qV2yLGcZ6XyULBnA5MHSw65J7nskkE3f66tLLjWC', '2018-08-27 12:34:23', '2018-08-27 12:34:23'),
(3, 'Mayank Gajjar', 'mayankgajjar@yopmail.com', '$2y$10$N6zBYD8DdpsIlnnpk7GbuuGWHkmXGduhb5fX/dPTRdRR3yHj2FQuW', '6HifgDtQ11pWwD9W9xlRRqHxvjMzBRvRKjPSh1ubtAM4fs4H4979fzjHMR03', '2018-08-27 12:44:38', '2018-08-27 12:44:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happyclient`
--
ALTER TABLE `happyclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobopening`
--
ALTER TABLE `jobopening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestwork`
--
ALTER TABLE `latestwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `happyclient`
--
ALTER TABLE `happyclient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobopening`
--
ALTER TABLE `jobopening`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `latestwork`
--
ALTER TABLE `latestwork`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
