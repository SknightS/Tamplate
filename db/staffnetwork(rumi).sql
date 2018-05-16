-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 10:02 PM
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
  `master_subarb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidateId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `professionTitle` varchar(100) DEFAULT NULL,
  `aboutme` mediumtext,
  `hirecount` int(11) DEFAULT NULL,
  `fkuserId` int(11) NOT NULL,
  `address_addressId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commision`
--

CREATE TABLE `commision` (
  `id` int(11) NOT NULL,
  `commision_id` varchar(45) NOT NULL,
  `jobtype_id` varchar(11) NOT NULL,
  `company_companyId` int(11) NOT NULL,
  `sn_percentage` double DEFAULT NULL
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
-- Table structure for table `company_branch`
--

CREATE TABLE `company_branch` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `company_companyId` int(11) NOT NULL,
  `address_addressId` int(11) NOT NULL
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
  `start_code` varchar(45) DEFAULT NULL,
  `finish_code` varchar(45) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` varchar(45) DEFAULT NULL,
  `no_of_vacancy` int(11) DEFAULT NULL,
  `job_amount` double DEFAULT NULL,
  `fkjobTypeId` varchar(11) NOT NULL,
  `company_branch_id` int(11) NOT NULL
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
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_subarb`
--

CREATE TABLE `master_subarb` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `master_state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `idpayment_report` int(11) NOT NULL,
  `commision_commision_id` varchar(45) NOT NULL,
  `hireReport_hireReport` int(11) NOT NULL
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
  `post_id` int(11) NOT NULL,
  `applyTIme` datetime DEFAULT NULL,
  `request_status` binary(1) DEFAULT NULL
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
  `fkuserTypeId` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fkuserTypeId`, `email`, `password`, `remember_token`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$6uyV1sPMpuqEQR4iFbdFp.HsIxfquF67nk3zdJlYma8U1Mw6ZZ9E6', ''),
(2, 'emp', 'sakib@gmail.com', '$2y$10$6uyV1sPMpuqEQR4iFbdFp.HsIxfquF67nk3zdJlYma8U1Mw6ZZ9E6', 'vJpMuEYvXFtEYHxeDfrlBTCCcvi1UVCTYYDSlfnkSVRiDluQaWIoH065XH4C');

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
('emp', 'Employe'),
('empr', 'Employer');

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
  ADD KEY `fk_address_master_subarb1_idx` (`master_subarb_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidateId`),
  ADD KEY `fk_candidate_user1_idx` (`fkuserId`),
  ADD KEY `fk_candidate_address1_idx` (`address_addressId`);

--
-- Indexes for table `commision`
--
ALTER TABLE `commision`
  ADD PRIMARY KEY (`commision_id`),
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
  ADD PRIMARY KEY (`hireReport`),
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
  ADD KEY `fk_job_company_branch1_idx` (`company_branch_id`);

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
-- Indexes for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD PRIMARY KEY (`idpayment_report`),
  ADD KEY `fk_payment_report_commision1_idx` (`commision_commision_id`),
  ADD KEY `fk_payment_report_hireReport1_idx` (`hireReport_hireReport`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `fk_address_master_subarb1` FOREIGN KEY (`master_subarb_id`) REFERENCES `master_subarb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `fk_candidate_address1` FOREIGN KEY (`address_addressId`) REFERENCES `address` (`addressId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidate_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commision`
--
ALTER TABLE `commision`
  ADD CONSTRAINT `fk_commision_company1` FOREIGN KEY (`company_companyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commision_jobtype1` FOREIGN KEY (`jobtype_id`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company_branch`
--
ALTER TABLE `company_branch`
  ADD CONSTRAINT `fk_company_branch_address1` FOREIGN KEY (`address_addressId`) REFERENCES `address` (`addressId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_interested_work_field_candidate1` FOREIGN KEY (`candidate_candidateId`) REFERENCES `candidate` (`candidateId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_interested_work_field_jobtype1` FOREIGN KEY (`jobtype_id`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_company_branch1` FOREIGN KEY (`company_branch_id`) REFERENCES `company_branch` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_jobType1` FOREIGN KEY (`fkjobTypeId`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_master_subarb_master_state1` FOREIGN KEY (`master_state_id`) REFERENCES `master_state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD CONSTRAINT `fk_payment_report_commision1` FOREIGN KEY (`commision_commision_id`) REFERENCES `commision` (`commision_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_report_hireReport1` FOREIGN KEY (`hireReport_hireReport`) REFERENCES `hirereport` (`hireReport`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
