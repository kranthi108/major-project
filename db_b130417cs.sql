-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 05:23 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_b130417cs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aoi`
--

CREATE TABLE IF NOT EXISTS `aoi` (
  `uname` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  PRIMARY KEY (`uname`,`area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aoi`
--

INSERT INTO `aoi` (`uname`, `area`) VALUES
('billa4', 'Data Structures'),
('billa4', 'php'),
('billa4', 'WEB PROGRAMMING'),
('kranthi108', 'css'),
('kranthi108', 'DBMS'),
('kranthi108', 'php'),
('kranthi108', 'web development'),
('surendar4', 'css'),
('surendar4', 'Data Structures'),
('surendar4', 'DBMS'),
('surendar4', 'JAVA'),
('surendar4', 'networks'),
('surendar4', 'operating systems'),
('surendar4', 'php'),
('vimal108', 'Data Structures'),
('vimal108', 'JAVA'),
('vimal108', 'WEB PROGRAMMING'),
('vivek@gmail.com', 'Data Structures'),
('vivek@gmail.com', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `areaofinterest`
--

CREATE TABLE IF NOT EXISTS `areaofinterest` (
  `area` varchar(50) NOT NULL,
  UNIQUE KEY `area` (`area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areaofinterest`
--

INSERT INTO `areaofinterest` (`area`) VALUES
('css'),
('Data Structures'),
('DBMS'),
('JAVA'),
('networks'),
('operating systems'),
('php'),
('WEB PROGRAMMING');

-- --------------------------------------------------------

--
-- Table structure for table `messagge`
--

CREATE TABLE IF NOT EXISTS `messagge` (
  `mid` varchar(50) NOT NULL,
  `sendid` varchar(50) NOT NULL,
  `recid` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pid` varchar(50) NOT NULL DEFAULT 'p0000',
  `uname` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pid`,`uname`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `uname`, `sdate`, `comment`, `sno`) VALUES
('P100015', 'surendar4', '2017-02-03', NULL, 15),
('P100016', 'surendar4', '2017-02-14', NULL, 16),
('P100017', 'kranthi108', '2017-02-12', NULL, 17),
('P100018', 'surendar4', '2017-02-13', NULL, 18),
('P100019', 'surendar4', '2017-02-20', NULL, 19),
('P100024', 'kranthi108', '2016-01-13', NULL, 24),
('P100025', 'vimal108', '2016-06-14', NULL, 25),
('P100026', 'vimal108', '2015-11-09', NULL, 26);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `rid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `state` varchar(25) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `pid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `field` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(25) NOT NULL,
  `file` blob,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`pid`, `name`, `field`, `description`, `pdate`, `status`, `file`) VALUES
('P100015', 'NITC Educenter', 'web-development', 'The idea is to develop an online portal for the students to interact with seniors and faculty for project works. This project deals with developing a web based application in order to facilitate students discuss project related ideas and works. The system is capable of maintaining various details of projects works (completed, ongoing or new projects), handling users, updating the store and provides interaction between students and other users (students, faculty and seniors). The system maintains databases of users and projects. The user interface is created using Ruby on Rails. Flexibility is maintained to make any changes during implementation.			Mainly useful for the students to constructively use their time by involving in some projects according to their areas of interests. It also helps students to know the hot domain works done by the people in the institution. It also provides a scope to develop applications for the institution with the help of faculties.', '2017-02-21 18:56:02', 'Completed', NULL),
('P100016', 'Big Data for Development', 'COMPUTER SCIENCE', 'Innovations in technology and greater affordability of digital devices have presided over todayâ€™s Age of Big Data, an umbrella term for the explosion in the quantity and diversity of high frequency digital data.\r\n\r\nThese data hold the potential as yet largely untapped to allow decision makers to track development progress, improve social protection, and understand where existing policies and programmes require adjustment.\r\n\r\nTurning BigData call logs, mobile banking transactions, online user generated content such as blog posts and Tweets, online searches, satellite images, etc. into actionable information requires using computational techniques to unveil trends and patterns within and between these extremely large socioeconomic datasets.With the promise come questions about the analytical value and thus policy relevance of this data including concerns over the relevance of the data in developing country contexts, its representativeness, its reliability as well as the over arching privacy issues of utilising personal data.', '2017-02-21 18:59:22', 'InProgress', NULL),
('P100017', 'Tapjacking Threats and Mitigation Techniques for A', 'DBMS', 'With the increased dependency on web applications through mobile devices, malicious attack techniques have now shifted from traditional web applications running on desktop or laptop (allowing mouse click-based interactions) to mobile applications running on mobile devices (allowing touch-based interactions).Clickjacking is a type of malicious attack originating in web applications, where victims are lured to click on seemingly benign objects in web pages. However, when clicked, unintended actions are performed without the userâ€™s knowledge. In particular, it is shown that users are lured to touch an object of an application triggering unintended actions not actually intended by victims.This new form of clickjacking on mobile devices is called tapjacking. There is little research that thoroughly investigates attacks and mitigation techniques due to tapjacking in mobile devices. In this thesis, we identify coding practices that can be helpful for software practitioners to avoid malicious attacks and define a detection techniques to prevent the consequence of malicious attacks for the end users.We first find out where tapjacking attack type falls within the broader literature of malware, in particular for Android malware. In this direction, we propose a classification of Android malware. Then, we propose a novel technique based on Kullback-Leibler Divergence (KLD) to identify possible tapjacking behavior in applications.We validate the approach with a set of benign and malicious android applications. We also implemented a prototype tool for detecting tapjacking attack symptom using the KLD based measurement. The evaluation results show that tapjacking can be detected effectively with KLD.Source: Kennesaw State UniversityAuthor: Vanessa Cooper', '2017-02-21 19:21:01', 'Completed', NULL),
('P100018', 'Forensic Analysis of Social Networking Application', 'cse', 'The increased use of social networking applications on smartphones makes these devices a goldmine for forensic investigators. Potential evidence can be held on these devices and recovered with the right tools and examination methodsThis paper focuses on conducting forensic analyses on three widely used social networking applications on smartphones: Facebook, Twitter, and MySpace. The tests were conducted on three popular smartphones: BlackBerrys, iPhones, and Android phones. The tests consisted of installing the social networking applications on each device, conducting common user activities through each application, acquiring a forensically sound logical image of each device, and performing manual forensic analysis on each acquired logical image.The forensic analyses were aimed at determining whether activities conducted through these applications were stored on the device internal meThe increased use of social networking applications on smartphones makes these devices a goldmine for forensic investigators. Potential evidence can be held on these devices and recovered with the right tools and examination methodsThis paper focuses on conducting forensic analyses on three widely used social networking applications on smartphones: Facebook, Twitter, and MySpace. The tests were conducted on three popular smartphones: BlackBerrys, iPhones, and Android phones. The tests consisted of installing the social networking applications on each device, conducting common user activities through each application, acquiring a forensically sound logical image of each device, and performing manual forensic analysis on each acquired logical image.The forensic analyses were aimed at determining whether activities conducted through these applications were stored on the device internal memory. If so, the extent, significance, and location of the data that could be found and retrieved from the logical image of each device were determined. The results show that no traces could be recovered from BlackBerry devices. However, iPhones and Android phones store a significant amount of valuable data that could be recovered and used by forensic investigators.Source: University of New Haven mory. If so, the extent, significance, and location of the data that could be found and retrieved from the logical image of each device were determined. The results show that no traces could be recovered from BlackBerry devices. However, iPhones and Android phones store a significant amount of valuable data that could be recovered and used by forensic investigators.Source: University of New Haven', '2017-02-21 19:48:11', 'inprogress', ''),
('P100019', 'A Real Time Indoor Navigation and Monitoring Syste', 'cse', 'Firefighting is a dangerous job to perform as there can be several unexpected hazards while rescuing victims. Since the firefighters do not have any knowledge about the internal structure of the fire ridden building, they will not be able to find the location of the EXIT door, a fact that can prove to be fatal.  We introduce an indoor location tracking and navigation system (FIREGUIDE) using RFID technology integrated with augmented reality. FIREGUIDE assists the firefighters to find the nearest exit location by providing the navigation instructions to the exits as well as an Augmented Reality view of the location and direction of the exits.  The system also presents the Incident Commander the current firefighterâ€™s location superimposed on a map of the building floor. We envision that the FIREGUIDE system will save a significant number of firefighters and victimsâ€™ lives.', '0000-00-00 00:00:00', 'inprogress', ''),
('P100024', 'Towards a Classification of Design Patterns for We', 'PHP ', 'The evolution of WWW leads to continuous growth of demands that are placed on web applications that results in creating sophisticated web architectures.  To minimize the complexity behind their design, software frameworks were introduced. There are hundreds of web frameworks, hence the choice of the right framework can be seen as searching for the holy grail.  This thesis investigates the possibility of creating and validates usefulness of a classification scheme which organizes well-known object-oriented design patterns found in popular web frameworks: Apache Struts, Ruby on Rails, CakePHP and Zend Framework.  The proposed classification scheme is based on two criteria: purpose and scope. The classification of such patterns that capture design rationale behind the decisions and best practices, is potentially important for building or restructuring a generic web framework, for capturing expertise knowledge and for orientation purposes in the problem domain â€“ web engineering.  The methodology used in this thesis is based on case studies and the identification of design patterns in web frameworks uses manual approaches.  The results revealed popular design patterns in web frameworks and that the proposed classification scheme in a form of a 2D matrix must be refined, because relationships among design patterns in web frameworks are important and have a tendency to be formed as complex hierarchies. It is proposed to use a classification scheme in a form of a map or a tree when refining the scheme.', '2017-02-22 06:57:03', 'InProgress', NULL),
('P100025', 'Fingerprint Verification based on Fusion of Minuti', 'Image processing', 'With the increasing emphasis on the automatic personal identification applications, biometrics especially fingerprint identification is the most reliable and widely accepted technique. In this paper Fingerprint Verification based on fusion of Minutiae and Ridges using Strength Factors (FVMRSF) is presented.  In the preprocessing stage the Fingerprint is Binarised and Thinned. The Minutiae Matching Score is determined using Block Filter and Ridge matching score is estimated using Hough Transform.  The strength factors Alpha (Î±) and Beta (Î²) are used to generate Hybrid matching score for matching of fingerprints. The proposed algorithm has better matching percentage for different fingerprints compared to the existing algorithms.', '2017-02-22 10:57:24', 'Completed', NULL),
('P100026', 'Data Leakage Detection â€“ 2', 'Data Mining', 'This paper contains the results of implementation of Data Leakage Detection Model. Currently watermarking technology is being used for the data protection. But this technology doesnâ€™t provide the complete security against date leakage.  This paper includes the difference between the watermarking & data leakage detection modelâ€™s technology. This paper leads for the new technique of research for secured data transmission & detection, if it gets leaked.  Introduction: Data leakage is the big challenge in front of the industries & different institutes. Though there are number of systems designed for the data security by using different encryption algorithms, there is a big issue of the integrity of the users of those systems. It is very hard for any system administrator to trace out the data leaker among the system users. It creates a lot many ethical issues in the working environment of the office.  The data leakage detection industry is very heterogeneous as it evolved out of ripe product lines of leading IT security vendors. A broad arsenal of enabling technologies such as firewalls, encryption, access control, identity management, machine learning content/context based detectors and others have already been incorporated to offer protection against various facets of the data leakage threat.', '2017-02-22 10:58:26', 'Completed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(25) NOT NULL,
  PRIMARY KEY (`uname`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `password`, `fname`, `lname`, `email`, `dob`, `dept`) VALUES
('9jafar', 'itsjafar1', 'jafar', 'basha', '8891390989@gmail.com', '2017-02-22', 'computer science'),
('admin', 'admin', 'admin', 'admin', 'admin@admin.com', '2017-02-01', 'computer science'),
('billa4', 'asdfg', 'billa', 'd', 'billa@gmail.com', '2017-02-13', 'Production'),
('kranthi108', 'aaaaaaaa', 'kranthi', 'kiran', 'kranthiramireddy@gmail.com', '0000-00-00', 'cse'),
('mahi', 'asdf', 'mahi', 'd', 'mahi@gmail.com', '1995-10-25', 'computer science'),
('Premnitw09', 'premnitw09', 'Prem', 'Chand', 'premnitw09@gmail.com', '2017-10-25', 'Chemical'),
('sdfsf', 'itsjafar', 'sddf', 'jkj', 'mysite@gmail.b', '2017-02-21', 'computer science'),
('sdsd', 'sdsff', 'dsf', 'dsfs', 'mysite..a@gmail.com', '2017-02-07', 'computer science'),
('surendar1006', '123456', 'Surendar', 'Dharavath', 'surendar8254@gmail.com', '1995-06-10', 'computer science'),
('surendar4', '123456', 'surendar', 'dharavath', 'surendar1006@gmail.com', '1995-06-10', 'computer science'),
('vimal108', 'aaaaaaaa', 'vimal', 'krishnan', 'vimalkrishnans@gmail.com', '1995-01-08', 'cse'),
('vivek@gmail.com', '1234', 'vivek', 'manchikatla', 'vivek@nitc.ac.in', '2017-02-20', 'computer science');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
