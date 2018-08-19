-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 08:13 PM
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
  `addresscol` varchar(45) DEFAULT NULL,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateId` int(11) NOT NULL,
  `aboutme` mediumtext,
  `hirecount` int(11) DEFAULT NULL,
  `fkjobtypeId` varchar(11) NOT NULL,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `about` mediumtext,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `educationId` int(11) NOT NULL,
  `schoolName` varchar(45) DEFAULT NULL,
  `degreeName` varchar(45) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `hirereport`
--

CREATE TABLE `hirereport` (
  `hireReport` int(11) NOT NULL,
  `fkrequestJobId` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `finishcode` varchar(45) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `jobName` varchar(25) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `fkjobTypeId` varchar(11) NOT NULL,
  `companyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobfee`
--

CREATE TABLE `jobfee` (
  `id` int(11) NOT NULL,
  `jobFeeEmp` varchar(45) DEFAULT NULL,
  `jobFeeSn` varchar(45) DEFAULT NULL,
  `fkjobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` varchar(11) NOT NULL,
  `typeName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loginaccess`
--

CREATE TABLE `loginaccess` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginaccess`
--

INSERT INTO `loginaccess` (`id`, `email`, `password`, `fkuserId`) VALUES
(0, 'admin@gmail.com', '$2y$10$iZulWAQ1e/CVhqnnajUZS.GeoNAk2cb6UioJ0f9d1mTchtItfcYaW', 1);

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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `description` mediumtext,
  `fkjobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestjob`
--

CREATE TABLE `requestjob` (
  `requestJobId` int(11) NOT NULL,
  `fkcandidateId` int(11) NOT NULL,
  `fkcompanyId` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `applyTIme` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skillId` int(11) NOT NULL,
  `skillName` varchar(45) DEFAULT NULL,
  `percentage` varchar(45) DEFAULT NULL,
  `candidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `fkuserTypeId` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `fkuserTypeId`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com');

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
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `workExperienceId` int(11) NOT NULL,
  `postName` varchar(45) DEFAULT NULL,
  `comapnyName` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `description` mediumtext,
  `fkcandidateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `fk_address_user1_idx` (`fkuserId`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateId`),
  ADD KEY `fk_candidate_jobtype1_idx` (`fkjobtypeId`),
  ADD KEY `fk_candidate_user1_idx` (`fkuserId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`),
  ADD KEY `fk_company_user1_idx` (`fkuserId`);

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
  ADD PRIMARY KEY (`hireReport`),
  ADD KEY `fk_hireReport_requestJob1_idx` (`fkrequestJobId`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_jobType1_idx` (`fkjobTypeId`),
  ADD KEY `fk_job_company1_idx` (`companyId`);

--
-- Indexes for table `jobfee`
--
ALTER TABLE `jobfee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jobFee_job1_idx` (`fkjobId`);

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
-- Indexes for table `loginaccess`
--
ALTER TABLE `loginaccess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loginAccess_user_idx` (`fkuserId`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loginInfo_user1_idx` (`fkuserId`);

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
  ADD KEY `fk_requestJob_company1_idx` (`fkcompanyId`),
  ADD KEY `fk_requestJob_post1_idx` (`post_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillId`),
  ADD KEY `fk_skill_candidate1_idx` (`candidateId`);

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
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidateId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `workExperienceId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `fk_candidate_jobtype1` FOREIGN KEY (`fkjobtypeId`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidate_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_company1` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_jobType1` FOREIGN KEY (`fkjobTypeId`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobfee`
--
ALTER TABLE `jobfee`
  ADD CONSTRAINT `fk_jobFee_job1` FOREIGN KEY (`fkjobId`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobtime`
--
ALTER TABLE `jobtime`
  ADD CONSTRAINT `fk_jobTime_job1` FOREIGN KEY (`fkjobId`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loginaccess`
--
ALTER TABLE `loginaccess`
  ADD CONSTRAINT `fk_loginAccess_user` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD CONSTRAINT `fk_loginInfo_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_requestJob_company1` FOREIGN KEY (`fkcompanyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requestJob_post1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `fk_skill_candidate1` FOREIGN KEY (`candidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
