-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 08:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressId` int(11) NOT NULL,
  `addresscol` varchar(1000) DEFAULT NULL,
  `master_subarb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressId`, `addresscol`, `master_subarb_id`) VALUES
(3, 'test address employer', 5),
(4, 'test2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateId` int(11) NOT NULL,
  `fkuserId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `professionTitle` varchar(100) DEFAULT NULL,
  `fkposition` int(11) DEFAULT NULL,
  `aboutme` mediumtext,
  `hirecount` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address_addressId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidateId`, `fkuserId`, `name`, `phone`, `email`, `professionTitle`, `fkposition`, `aboutme`, `hirecount`, `image`, `address_addressId`) VALUES
(1, 3, 'sakib rahman', '01680674598', 'sakib@gmail.com', 'web Developer', NULL, 'aasdasjhkaj aghsdhjagsdkjh jhasdj', 0, '1profileImage.png', 3),
(2, 3, 'Rumi', '122456', 'sakib@gmail.com', 'web Developer', NULL, 'aasdasjhkaj aghsdhjagsdkjh jhasdj', 0, '1profileImage.png', 4),
(3, 3, 'Rumi', '122456', 'sakib@gmail.com', 'web Developer', NULL, 'aasdasjhkaj aghsdhjagsdkjh jhasdj', 0, '1profileImage.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `candidateposition`
--

CREATE TABLE `candidateposition` (
  `id` int(11) NOT NULL,
  `fkJobtype` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commision`
--

CREATE TABLE `commision` (
  `id` int(11) NOT NULL,
  `jobtype_id` int(11) NOT NULL,
  `company_companyId` int(11) NOT NULL,
  `sn_percentage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `companyLoginId` varchar(100) NOT NULL,
  `about` mediumtext,
  `fkuserId` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(128) NOT NULL,
  `cp_email` varchar(128) DEFAULT NULL,
  `cp_phone` int(20) DEFAULT NULL,
  `address_addressId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `companyLoginId`, `about`, `fkuserId`, `image`, `contact_person_name`, `cp_email`, `cp_phone`, `address_addressId`) VALUES
(1, '', 'gfhgfhg', 4, '1profileImage.jpg', 'Rumi', 'employer@gmail.com', 1680674598, 3),
(2, '', 'gfhgfhg', 4, 'avatar05.jpg', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_branch`
--

CREATE TABLE `company_branch` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `company_companyId` int(11) NOT NULL,
  `address_addressId` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_branch`
--

INSERT INTO `company_branch` (`id`, `name`, `company_companyId`, `address_addressId`, `phone`, `email`, `image`) VALUES
(1, 'mirpur branch', 1, 3, NULL, NULL, ''),
(2, 'monipur branch', 1, 3, '016806745980', 'mujtaba.rumi@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `educationId` int(11) NOT NULL,
  `schoolName` varchar(45) DEFAULT NULL,
  `degreeName` varchar(45) DEFAULT NULL,
  `startDate` year(4) NOT NULL,
  `endDate` year(4) NOT NULL,
  `currentlyRunning` tinyint(1) DEFAULT NULL COMMENT '0=notRunning;1=Running',
  `duration` varchar(45) DEFAULT NULL,
  `fkcandidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freetime`
--

CREATE TABLE `freetime` (
  `id` int(11) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `candidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freetime`
--

INSERT INTO `freetime` (`id`, `day`, `startTime`, `endTime`, `candidateId`) VALUES
(1, 'Sunday', '16:15:00', '16:16:00', 1),
(2, 'Monday', '16:00:00', '17:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hirereport`
--

CREATE TABLE `hirereport` (
  `hireReportId` int(11) NOT NULL,
  `fkrequestJobId` int(11) NOT NULL,
  `start_code` varchar(45) DEFAULT NULL,
  `finish_code` varchar(45) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hirereport`
--

INSERT INTO `hirereport` (`hireReportId`, `fkrequestJobId`, `start_code`, `finish_code`, `startTime`, `endTime`) VALUES
(1, 1, '123', '321', '2018-07-05 00:00:00', '2018-07-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `interested_work_field`
--

CREATE TABLE `interested_work_field` (
  `id` int(11) NOT NULL,
  `candidate_candidateId` int(11) NOT NULL,
  `jobtype_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `jobName` varchar(25) DEFAULT NULL,
  `description` longtext,
  `no_of_vacancy` int(11) DEFAULT NULL,
  `job_amount` double DEFAULT NULL,
  `fkjobTypeId` int(11) NOT NULL,
  `company_branch_id` int(11) NOT NULL,
  `address_addressId` int(11) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `jobName`, `description`, `no_of_vacancy`, `job_amount`, `fkjobTypeId`, `company_branch_id`, `address_addressId`, `deadline`) VALUES
(1, 'hgkjh', 'jhkugk', 5, 6, 1, 1, 3, '2018-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `jobtime`
--

CREATE TABLE `jobtime` (
  `id` int(11) NOT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL,
  `fkjobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `id` int(11) NOT NULL,
  `typeName` varchar(45) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`id`, `typeName`, `image`) VALUES
(1, 'cook', 'xxc'),
(2, 'eqweqw', 'xcvxc'),
(3, 'mm', 'ddf'),
(4, 'zz', 'sdfsd'),
(5, 'ewerw', 'sdfsd'),
(6, 'wee', 'dfsdfsd'),
(7, 'ewwe', 'dfsdsd'),
(8, 'fret', 'ddfdgdf'),
(9, 'rtter', 'fcbvc'),
(10, 'hgvmh', 'hvjhvkj'),
(15, 'hgvmh', 'hvjhvkj'),
(16, 'hgvmh', 'hvjhvkj'),
(17, 'hgvmh', 'hvjhvkj'),
(18, 'hgvmh', 'hvjhvkj');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `id` int(11) NOT NULL,
  `loginTime` datetime DEFAULT NULL,
  `logoutTime` datetime DEFAULT NULL,
  `ipAddress` varchar(45) DEFAULT NULL,
  `browser` varchar(45) DEFAULT NULL,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_skill`
--

CREATE TABLE `master_skill` (
  `id` int(11) NOT NULL,
  `skillName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_skill`
--

INSERT INTO `master_skill` (`id`, `skillName`) VALUES
(17, 'asdf'),
(11, 'c'),
(1, 'css'),
(8, 'cvccvds'),
(7, 'dfrter'),
(9, 'fgdgdfgre'),
(4, 'fhf'),
(3, 'hddfg'),
(10, 'hkhjkhjkhjkhj'),
(2, 'html'),
(14, 'kkk'),
(13, 'mmm'),
(5, 'ns'),
(12, 'ooo'),
(16, 'php'),
(15, 'rwrwerwe'),
(6, 'sfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_state`
--

INSERT INTO `master_state` (`id`, `name`) VALUES
(1, 'New South Wales'),
(2, 'Northern Territory'),
(3, 'Queensland'),
(4, 'South Australia'),
(5, 'Tasmania'),
(6, 'Western Australia'),
(7, 'Special area');

-- --------------------------------------------------------

--
-- Table structure for table `master_subarb`
--

CREATE TABLE `master_subarb` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `master_state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_subarb`
--

INSERT INTO `master_subarb` (`id`, `name`, `master_state_id`) VALUES
(1, 'Acacia Downs', 1),
(2, 'Butha', 1),
(3, 'Aileron', 2),
(4, 'Bonya', 2),
(5, 'Benlidi', 3),
(6, 'Midgenoo', 3),
(7, 'Nonning', 4),
(8, 'Penong', 4),
(9, 'Linda', 5),
(10, 'Remine', 5),
(11, 'Paroo', 6),
(12, 'Rockwell', 6),
(13, 'Abydos', 6),
(14, 'Cane River', 6);

-- --------------------------------------------------------

--
-- Table structure for table `paidpost`
--

CREATE TABLE `paidpost` (
  `id` int(11) NOT NULL,
  `fkpost` int(11) NOT NULL,
  `fkcompany` int(11) NOT NULL,
  `amount` float NOT NULL,
  `startday` date NOT NULL,
  `endday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `idpayment_report` int(11) NOT NULL,
  `hireReport_hireReport` int(11) NOT NULL,
  `commision_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `description` mediumtext,
  `fkjobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `description`, `fkjobId`) VALUES
(1, 'gjgfjgvnbvnbvjhgfj\r\nhgj', 1),
(2, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requestjob`
--

CREATE TABLE `requestjob` (
  `requestJobId` int(11) NOT NULL,
  `fkcandidateId` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `applyTime` datetime DEFAULT NULL,
  `request_status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0=rejected;1=in progress,2=appreoved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestjob`
--

INSERT INTO `requestjob` (`requestJobId`, `fkcandidateId`, `post_id`, `applyTime`, `request_status`) VALUES
(1, 1, 1, '2018-07-05 00:00:00', 2),
(2, 1, 1, '2018-07-05 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skillId` int(11) NOT NULL,
  `skillName` varchar(255) DEFAULT NULL,
  `percentage` varchar(3) DEFAULT NULL,
  `candidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skillId`, `skillName`, `percentage`, `candidateId`) VALUES
(10, 1, NULL, '83', 3),
(11, 2, NULL, '14', 3),
(12, 3, NULL, '39', 3),
(13, 12, NULL, '79', 3),
(14, 13, NULL, NULL, 3),
(15, 14, NULL, '18', 3),
(16, 15, NULL, NULL, 3),
(17, 16, NULL, '36', 1),
(18, 17, NULL, '14', 1),
(19, 17, NULL, '25', 1),
(20, 17, NULL, '31', 1),
(21, 17, NULL, '25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `fkname` int(5) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `fkCandidateId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `socialmedianame`
--

CREATE TABLE `socialmedianame` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fkuserTypeId` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT '0' COMMENT '0=inactive;1=active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fkuserTypeId`, `email`, `password`, `remember_token`, `active`) VALUES
(3, 'emp', 'sakib@gmail.com', '$2y$10$iZulWAQ1e/CVhqnnajUZS.GeoNAk2cb6UioJ0f9d1mTchtItfcYaW', 'UqKe0emL0SdGnjyMpUMHVRpvfHkzSM7gHl18J2Fzx2cvPJZFDccPPiwGNbOM', 1),
(4, 'empr', 'employer@gmail.com', '$2y$10$iZulWAQ1e/CVhqnnajUZS.GeoNAk2cb6UioJ0f9d1mTchtItfcYaW', 'SRmSiqd5ZCjW9nI4CsJipTB4apl9XMtIMToJDyMHMtAo4FiTkJBZurPKMcUp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` varchar(5) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
('admin', 'admin'),
('emp', 'employee'),
('empr', 'employer');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `workExperienceId` int(11) NOT NULL,
  `postName` varchar(100) DEFAULT NULL,
  `comapnyName` varchar(100) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `description` mediumtext,
  `fkcandidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`workExperienceId`, `postName`, `comapnyName`, `duration`, `description`, `fkcandidateId`) VALUES
(2, 'asdas', 'vxcv', 'ascccc', 'as', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `fk_address_master_subarb1_idx` (`master_subarb_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateId`),
  ADD KEY `fk_candidate_user1_idx` (`fkuserId`),
  ADD KEY `fk_candidate_address1_idx` (`address_addressId`),
  ADD KEY `fkpositionId` (`fkposition`);

--
-- Indexes for table `candidateposition`
--
ALTER TABLE `candidateposition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commision`
--
ALTER TABLE `commision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commision_jobtype1_idx` (`jobtype_id`),
  ADD KEY `fk_commision_company1_idx` (`company_companyId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`),
  ADD KEY `fk_company_user1_idx` (`fkuserId`);

--
-- Indexes for table `company_branch`
--
ALTER TABLE `company_branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_company_branch_company1_idx` (`company_companyId`),
  ADD KEY `fk_company_branch_address1_idx` (`address_addressId`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`educationId`),
  ADD KEY `fk_education_candidate1_idx` (`fkcandidateId`);

--
-- Indexes for table `freetime`
--
ALTER TABLE `freetime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_freetime_candidate1_idx` (`candidateId`);

--
-- Indexes for table `hirereport`
--
ALTER TABLE `hirereport`
  ADD PRIMARY KEY (`hireReportId`),
  ADD KEY `fk_hireReport_requestJob1_idx` (`fkrequestJobId`);

--
-- Indexes for table `interested_work_field`
--
ALTER TABLE `interested_work_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_interested_work_field_candidate1_idx` (`candidate_candidateId`),
  ADD KEY `fk_interested_work_field_jobtype1_idx` (`jobtype_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_jobType1_idx` (`fkjobTypeId`),
  ADD KEY `fk_job_company_branch1_idx` (`company_branch_id`),
  ADD KEY `address_addressId_job` (`address_addressId`);

--
-- Indexes for table `jobtime`
--
ALTER TABLE `jobtime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jobTime_job1_idx` (`fkjobId`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loginInfo_user1_idx` (`fkuserId`);

--
-- Indexes for table `master_skill`
--
ALTER TABLE `master_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skillName` (`skillName`);

--
-- Indexes for table `master_state`
--
ALTER TABLE `master_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_subarb`
--
ALTER TABLE `master_subarb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_master_subarb_master_state1_idx` (`master_state_id`);

--
-- Indexes for table `paidpost`
--
ALTER TABLE `paidpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkpostId` (`fkpost`),
  ADD KEY `fkcompanyId` (`fkcompany`);

--
-- Indexes for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD PRIMARY KEY (`idpayment_report`),
  ADD KEY `fk_payment_report_hireReport1_idx` (`hireReport_hireReport`),
  ADD KEY `fk_payment_report_commision1_idx` (`commision_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_job1_idx` (`fkjobId`);

--
-- Indexes for table `requestjob`
--
ALTER TABLE `requestjob`
  ADD PRIMARY KEY (`requestJobId`),
  ADD KEY `fk_requestJob_candidate1_idx` (`fkcandidateId`),
  ADD KEY `fk_requestJob_post1_idx` (`post_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skill_candidate1_idx` (`candidateId`),
  ADD KEY `fk_skill_skill` (`skillId`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkcandidateId` (`fkCandidateId`),
  ADD KEY `fkname` (`fkname`);

--
-- Indexes for table `socialmedianame`
--
ALTER TABLE `socialmedianame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_userType1_idx` (`fkuserTypeId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`workExperienceId`),
  ADD KEY `fk_workExperience_candidate_idx` (`fkcandidateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `candidateposition`
--
ALTER TABLE `candidateposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commision`
--
ALTER TABLE `commision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_branch`
--
ALTER TABLE `company_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `educationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `freetime`
--
ALTER TABLE `freetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hirereport`
--
ALTER TABLE `hirereport`
  MODIFY `hireReportId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `interested_work_field`
--
ALTER TABLE `interested_work_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobtime`
--
ALTER TABLE `jobtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_skill`
--
ALTER TABLE `master_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `master_state`
--
ALTER TABLE `master_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_subarb`
--
ALTER TABLE `master_subarb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `paidpost`
--
ALTER TABLE `paidpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_report`
--
ALTER TABLE `payment_report`
  MODIFY `idpayment_report` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requestjob`
--
ALTER TABLE `requestjob`
  MODIFY `requestJobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `socialmedianame`
--
ALTER TABLE `socialmedianame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `workExperienceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_master_subard_id` FOREIGN KEY (`master_subarb_id`) REFERENCES `master_subarb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `fk_candidate_address_id` FOREIGN KEY (`address_addressId`) REFERENCES `address` (`addressId`),
  ADD CONSTRAINT `fk_candidate_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkpositionId` FOREIGN KEY (`fkposition`) REFERENCES `candidateposition` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commision`
--
ALTER TABLE `commision`
  ADD CONSTRAINT `fk_commision_company1` FOREIGN KEY (`company_companyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company_branch`
--
ALTER TABLE `company_branch`
  ADD CONSTRAINT `fk_company_address_id` FOREIGN KEY (`address_addressId`) REFERENCES `address` (`addressId`),
  ADD CONSTRAINT `fk_company_branch_company1` FOREIGN KEY (`company_companyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `fk_education_candidate1` FOREIGN KEY (`fkcandidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `freetime`
--
ALTER TABLE `freetime`
  ADD CONSTRAINT `fk_freetime_candidate1` FOREIGN KEY (`candidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hirereport`
--
ALTER TABLE `hirereport`
  ADD CONSTRAINT `fk_hireReport_requestJob1` FOREIGN KEY (`fkrequestJobId`) REFERENCES `requestjob` (`requestJobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `interested_work_field`
--
ALTER TABLE `interested_work_field`
  ADD CONSTRAINT `fk_interested_work_field_candidate1` FOREIGN KEY (`candidate_candidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `address_addressId_job` FOREIGN KEY (`address_addressId`) REFERENCES `address` (`addressId`),
  ADD CONSTRAINT `fk_job_company_branch1` FOREIGN KEY (`company_branch_id`) REFERENCES `company_branch` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jobtype` FOREIGN KEY (`fkjobTypeId`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobtime`
--
ALTER TABLE `jobtime`
  ADD CONSTRAINT `fk_jobTime_job1` FOREIGN KEY (`fkjobId`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD CONSTRAINT `fk_loginInfo_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `master_subarb`
--
ALTER TABLE `master_subarb`
  ADD CONSTRAINT `fk_master_sate_id` FOREIGN KEY (`master_state_id`) REFERENCES `master_state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paidpost`
--
ALTER TABLE `paidpost`
  ADD CONSTRAINT `fkcompanyId` FOREIGN KEY (`fkcompany`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkpostId` FOREIGN KEY (`fkpost`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD CONSTRAINT `fk_payment_report_commision1` FOREIGN KEY (`commision_id`) REFERENCES `commision` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_report_hireReport1` FOREIGN KEY (`hireReport_hireReport`) REFERENCES `hirereport` (`hireReportId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_job1` FOREIGN KEY (`fkjobId`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requestjob`
--
ALTER TABLE `requestjob`
  ADD CONSTRAINT `fk_requestJob_candidate1` FOREIGN KEY (`fkcandidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requestJob_post1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `fk_skill_candidate1` FOREIGN KEY (`candidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_skill_skill` FOREIGN KEY (`skillId`) REFERENCES `master_skill` (`id`);

--
-- Constraints for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `fkcandidateId` FOREIGN KEY (`fkCandidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkname` FOREIGN KEY (`fkname`) REFERENCES `socialmedianame` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_userType1` FOREIGN KEY (`fkuserTypeId`) REFERENCES `usertype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD CONSTRAINT `fk_workExperience_candidate` FOREIGN KEY (`fkcandidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
