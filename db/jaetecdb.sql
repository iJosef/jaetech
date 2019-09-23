-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2019 at 01:14 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaetecdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `commenter` varchar(200) NOT NULL,
  `eMail` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `commenttime` varchar(200) NOT NULL,
  `postid` int(11) NOT NULL,
  `slugged_title` varchar(255) NOT NULL,
  PRIMARY KEY (`commentid`),
  KEY `postid` (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolioid` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  `title` varchar(700) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`portfolioid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolioid`, `photo`, `title`, `website`) VALUES
(6, '../uploads/evt.png', 'Department of Environmental Technology, FUTO.', 'http://www.evtfuto.com'),
(12, 'wexchange.png', 'weXchange', 'http://www.wexchange.ng');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `posttitle` varchar(700) NOT NULL,
  `attachedfile` varchar(300) NOT NULL,
  `blogPost` varchar(6000) NOT NULL,
  `slugged_title` varchar(400) NOT NULL,
  `dateTime` varchar(100) NOT NULL,
  `hitz` int(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `posttitle`, `attachedfile`, `blogPost`, `slugged_title`, `dateTime`, `hitz`) VALUES
(11, 'google launches google station for free wifi in nigeria, updates “go” initiative in africa', 'google.jpg', '<p>Google hosted its second Google for Nigeria event where it made a number of big announcements aimed at helping more people in Nigeria, and across Africa, benefit from the opportunities the web has to offer.</p>\r\n<p>In a bid to make the internet more easily accessible to people in Nigeria, Google is launching<strong>&nbsp;</strong><a href="https://station.google.com/" target="_blank" rel="noopener">Google Station</a>&nbsp;for Nigeria: a program to provide high quality, high-speed Wi-Fi hotspots in partnership with 21st Century, one of the largest fibre network providers in Nigeria.</p>\r\n<p>&nbsp;&ldquo;Google Station will be rolling out in 200 locations in five cities across Nigeria by the end of 2019, bringing Wi-Fi to millions of people,&rdquo; says Google Nigeria Country Director,&nbsp;Juliet Ehimuan-Chiazor.&nbsp;&ldquo;Sites include markets, transport hubs, shopping malls, universities, and more. Nigeria is the fifth country to get Google Station, after India, Indonesia, Thailand and Mexico.&rdquo;</p>\r\n<p>Google also announced the update of several products from its &ldquo;Go&rdquo; initiative, which were launched in the past year.</p>\r\n<p><img src="images/googleGo.jpg" alt="google Go" /></p>\r\n<p>The Go product suite aims to give people with low bandwidth connections and low-RAM devices the best possible Google experience. These new features include:</p>\r\n<p>&middot;&nbsp;<a href="https://africa.googleblog.com/2018/04/introducing-google-go-lighter-faster.html" target="_blank" rel="noopener">Google Go</a>: will soon read web pages out loud and highlight each word so users can follow along.</p>\r\n<p>&middot;&nbsp;<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.youtube.mango&amp;hl=en" target="_blank" rel="noopener">YouTube Go</a>: users will be able to browse downloaded YouTube Go videos, saved as .yt files, right from the gallery on their phones.</p>\r\n<p>&middot;&nbsp;<a href="https://support.google.com/maps/answer/7566112?hl=en" target="_blank" rel="noopener">Google Maps Go</a>: will now provide users with turn-by-turn directions, whether they&rsquo;re travelling by car, by bus or on foot.</p>\r\n<p>&middot;&nbsp;<a href="https://www.android.com/versions/oreo-8-0/go-edition/" target="_blank" rel="noopener">Android Go</a>: Launched in Nigeria and 29 other African countries earlier this year, the Go OS gives people coming online for the first time a powerful and reliable smartphone experience.&nbsp;Across Africa, Transsion, Nokia, Huawei, and Mobicel have launched various devices, starting under $50.</p>\r\n<p>Over 2.5 million of the 10 million Africans Google promised to train by 2022 have been trained through the&nbsp;<a href="https://learndigital.withgoogle.com/digitalskills" target="_blank" rel="noopener">Digital Skills Programme</a>. Google has trained a further 9,000 Africans in mobile app development and Google&rsquo;s&nbsp;<a href="https://africa.googleblog.com/2018/03/launchpad-accelerator-africa-growing.html" target="_blank" rel="noopener">Launchpad Accelerator Africa</a>&nbsp;initiative graduated 12 promising startups from across the continent in June.&nbsp;</p>\r\n<p>The application process of the ongoing<a href="https://africa.googleblog.com/2018/05/google-impact-challenge-africa.html" target="_blank" rel="noopener">&nbsp;Google Impact Challenge</a>, part of Google&rsquo;s $20m Google.org commitment to Africa over the next five years, closed with over 5,500 entries. The process of selecting the 36 finalists has begun.</p>\r\n<p>&nbsp;&ldquo;We are offering new solutions to improve and expand access in Nigeria and across Africa; these launches demonstrate our commitment to Africa through products built to help people in Africa to make the most of the Internet,&rdquo; concludes&nbsp;Ehimuan-Chiazor.</p>', 'google-launches-google-station-for-free-wifi-in-nigeria-updates-go-initiative-in-africa', 'Aug-29-2018 05:06', 3),
(12, 'ai offers many opportunities but poses threats to jobs', 'hqdefault.jpg', '<p>Artificial intelligence (AI) and machine learning are the most exciting developments in business today, they offer many ways to personalise at scale and draw actionable insights from huge pools of customer data.</p>\r\n<p>However, the threats posed to jobs by the advent of AI and machine learning are a serious concern. Any job that primarily entails analysis and processing of data is at risk of being automated out of existence. This is according to Bluegrass Digital managing director Nick Durrant.</p>\r\n<p>AI-powered personalisation seems to offer the prospect of fulfilling &ndash; at the level of the individual &ndash; the very definition of marketing: creating, communicating, and delivering offerings that have value for customers.</p>\r\n<p>Marketing and merchandising professionals could be forgiven for wondering where this development leaves them. The answer is that AI reaffirms their place in the driver&rsquo;s seat, fully in control, adding value where AI cannot.</p>\r\n<p>That&rsquo;s not to deny the likelihood that AI will prompt a significant and undoubtedly large-scale realignment of roles and responsibilities in many organisations. AI drastically reduces the resources required to interpret data, build and manage static segments, deploy and manage internal campaigns or devise content and product permutations.</p>\r\n<p>Conversely there&rsquo;s a greater role for AI-trained data scientists &ndash; whether in-house or third party &ndash; who are able to use their technical skills and curiosity to push the boundaries of what AI can do.</p>\r\n<p>Taking a broader view, successful marketing is heavily dependent on context. Applied AI is, by definition, less successful at analysing context. Empathy, creativity and even broader problem-solving skills are missing. The capacity to synthesise business goals, devise strategies, select KPIs and orchestrate tactical marketing efforts: this is all the domain of humans.</p>\r\n<p>Ultimately, the algorithms at the heart of AI-led personalisation are computer programs, written by humans. Determining the right algorithms to use, the desired output, and determining their role in the purchase process is a job that only a marketer or merchandiser can do.</p>\r\n<p>When you combine the expertise of marketers with the algorithms of AI, however, you can present relevant, engaging experiences at a level that was never before possible. Content and campaigns can now be personalised at the individual level. This is important because engagement and conversions are increasingly linked to the quality of your digital experiences.</p>\r\n<p>For commerce companies, great experiences are often what sets them apart from competitors. With AI you can present intelligent campaigns and individualised content that lead to big results.</p>\r\n<p>Companies with a large and growing inventory are particularly well-suited to AI-powered marketing. Near-endless product permutations are possible, far beyond the capabilities of any team.</p>\r\n<p>Whereas merchandisers might previously have matched categories against audiences, for example, a machine learning algorithm will match at the most granular level available: individual against product, informed by every data point held. With the right technology, ingesting new SKUs is immediate, with machine learning driving revenue from day one.</p>\r\n<p>But Average Order Value and other financial metrics aren&rsquo;t the only KPIs that matter. Marketers and merchandisers bring the insight and knowledge to tailor the presentation of these algorithmically-driven product selections so that other objectives can be met, for example the need to respect commercial agreements around product presentation (don&rsquo;t show product X against product Y).</p>\r\n<p>The desire to pursue long-term brand equity at the expense of short-term revenue (don&rsquo;t surface final reductions at the same time as the debut of a new collection). This is achieved through rule engines, weighting and scoring, and prioritisation of campaigns themselves &ndash; all of which can be manually configured by those who know their customers, suppliers and market.</p>\r\n<p>The critical role of content marketing throughout the digital experience can be greatly enhanced with AI-led personalisation, addressing questions such as:</p>\r\n<ul>\r\n<li>Should this user be presented with a brand video or other rich content to drive conversion?</li>\r\n<li>Will an article on accessories in this user&rsquo;s email reduce the prospect of an abandoned basket?</li>\r\n<li>Do people who search for this particular term want product specs or user generated content?</li>\r\n</ul>\r\n<p>Content creation is demanding and resource-intensive, but project collaboration and workflow tools can lighten the load. Episerver is a platform that goes one step further by embedding these tools into the CMS itself, reducing the workload still further.</p>\r\n<p>But quality still trumps quantity. Time taken previously to content tag and match is now best used to identify high priority customer journeys and corresponding user segments that stand to gain the most from content - a task made easier through machine learning-led analysis &ndash; and create the highest quality content that time and resource affords.</p>\r\n<p>Done well, personalised campaigns can generate a significant return by improving order values, driving down abandoned carts and enriching data that will be used on subsequent visits. Real-time personalisation has much to offer here.</p>\r\n<p>With knowledge of what a visitor has already seen and possibly bought, personalisation powered by AI can serve up banners, recommendations, tailored promotions and rich media to drive conversions. Triggered messages can also be particularly effective.</p>\r\n<p>There are many trigger opportunities available, such when a visitor gives their email in-store, browses certain pages or places specific products in their cart. Messages can be sent via texts, email, with an in-app alert, or via a consum', 'ai-offers-many-opportunities-but-poses-threats-to-jobs', 'Aug-29-2018 05:25', 5),
(13, 'reasons why your business should have a website', 'happy.jpg', '<p>A website enables you to provide information about your business, products and services on the internet. This will enable potential customers or clients to access information about your products and services 24/7. A website will also enable you receive feedback on your products and services this will enable you satisfy your customers better. A website is a must for today&rsquo;s business.</p>\r\n<p>The email is a great tool for business but is limited in the sense that before someone will read your mail you must specifically send it to that person. For you to make your information available on the internet and readable by anybody on the internet you need to have a website.</p>\r\n<p>A website when combined with the email can be a great marketing tool. You can use your website to collect emails and phone numbers of your visitors. This information will help you if you want to embark on a direct marketing campaigns. You can advertise your website using email sent to your mail list.</p>\r\n<p>Having a website is an important part of going online. A website makes your business visible to the growing number of consumers online. Here are more reasons why you need to build a website for your business.</p>\r\n<h2>Increase Sales</h2>\r\n<p>A website will enable you provide information about your products and services online. Consumers are increasingly searching online for information about products and services they are interested in buying. A website will make your business accessible to these high value consumers who are educated and responsible for making buying decisions.</p>\r\n<p>With a website your business is no longer limited to its brick and mortar locations. This gives your business more visibility with the resultant increase in sales. A website enables you use techniques like Search Engine Optimisation (SEO), Search Engine Marketing (SEM), Email Marketing (EM), and Social Media Marketing (SMM) to target consumers who are more likely to be interested in your products and services increasing conversion rate and boosting sales.</p>\r\n<p>With SEO, SEM, and SMM you can drive targeted traffic to your website. Combine these with good landing pages and the only direction sales will be going is up. There are also other opportunities offered by the internet to increase sales, but you will never actualise their full potential if you do not have a website.</p>\r\n<h2>Promote your offices &amp; Contacts</h2>\r\n<p>A business website will enable you populate the web with your office addresses and other channels through which customers can reach you.</p>\r\n<p>Consumers who have heard of your business from a friend or from your offline campaigns may want to reach you. Can they? If they cannot reach you, they will most definitely reach your competitor who has made the smart investment on a website.</p>\r\n<h2>Your competitors are already online</h2>\r\n<p>This one is meant to scare you. And you should be scared if your competitors have websites and you don&rsquo;t. Your competitors are already taking advantage of the huge opportunities that being online provides to grow their businesses and you are still doing what your forefathers did: waiting in your office for customers to come. &lsquo;Nwanne&rsquo;, you ought to be scared.</p>\r\n<p>You may be wondering why customers are walking past your office location and heading straight to your competitors. You may even be planning to go and get some black magic to boost your business. You don&rsquo;t need black magic, what you need is a website with targeted online campaigns and you could be smiling like your competitors.</p>\r\n<p>Even if your competitors do not have business websites yet, they may be considering one. You need to be a trend setter in your industry, so you should start drawing up your going online plan and a website should be somewhere in there.</p>\r\n<h2>Become More Customer Friendly</h2>\r\n<p>A website makes your business more customer friendly. Customers deserve to know what is going on in your business like new products, price changes, new offices, changes in contact phone number and email, etc and your website is a good platform to inform and educate customers.</p>\r\n<p>Without a website, customers can&rsquo;t get up to date information about your business. Imagine a customer not being able to reach you through an old phone number you left in an old ad campaign. That is very wicked of you. The <strong>customer is king</strong> and should not be toyed with.</p>\r\n<h2>Take Advantage of free viral marketing</h2>\r\n<p>Word of mouth sells. People are more likely to buy stuff if recommended by a friend. Although word of mouth sales can also occur offline, the internet creates the possibility of speedy viral marketing. An interesting news about your business or a product you just launched can go viral on social media sites.</p>\r\n<p>Your business website makes it easier for people to spread information about your business. They can easily share links from your website with their friends and their friends with their friends and so on on BBM, WhatsApp, Facebook, etc. And you do not have to pay for it they are doing it because it is interesting to them.</p>\r\n<h2>Save Cost</h2>\r\n<p>A website also has a cost saving benefit. It saves cost on marketing since you can now target consumers more accurately online and benefit from viral marketing from social media. A website also reduces the cost of educating and informing customers.</p>\r\n<p>You no longer need to spend so much on printed materials as some of your customers can access information from your website. Just update your website and it is accessible to all.</p>\r\n<p>&nbsp;</p>\r\n<p><em>We, at <strong>JaeTech</strong>, can help you and your business scale pass this hurdle. Simply get in touch with us through any of our contacts. We are always available to assist.</em></p>\r\n<p>&nbsp;</p>', 'reasons-why-your-business-should-have-a-website', 'Aug-29-2018 07:15', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'admin001', '7c6a180b36896a0a8c02787eeafb0e4c'),
(2, 'admin002', '7c6a180b36896a0a8c02787eeafb0e4c');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`) ON DELETE CASCADE;
