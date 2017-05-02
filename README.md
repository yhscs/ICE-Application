# ICE-Application
An application for Yorkville's ICE program.

Database:
```SQL
CREATE TABLE `adminTable` (
  `ID` int(1) UNSIGNED NOT NULL,
  `ADMIN_NAME` varchar(256) NOT NULL,
  `ADMIN_PASS` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Ice Answers`
--

CREATE TABLE `Ice Answers` (
  `ID` int(1) UNSIGNED NOT NULL,
  `DATE` date DEFAULT NULL,
  `NAME` varchar(256) DEFAULT NULL,
  `CURRENT_GRADE` varchar(20) DEFAULT NULL,
  `DATE_OF_BIRTH` date DEFAULT NULL,
  `AGE` int(20) DEFAULT NULL,
  `HOME_NUMBER` varchar(15) DEFAULT NULL,
  `CELL_NUMBER` varchar(15) DEFAULT NULL,
  `ADDRESS_STREET` varchar(50) DEFAULT NULL,
  `ADDRESS_CITY` varchar(50) DEFAULT NULL,
  `ADDRESS_STATE` varchar(50) DEFAULT NULL,
  `MOTHER_NAME` varchar(20) DEFAULT NULL,
  `FATHER_NAME` varchar(20) DEFAULT NULL,
  `PARENT_ADDRESS_STREET` varchar(50) DEFAULT NULL,
  `PARENT_ADDRESS_CITY` varchar(50) DEFAULT NULL,
  `PARENT_ADDRESS_STATE` varchar(50) DEFAULT NULL,
  `HEIGHT` varchar(20) DEFAULT NULL,
  `WEIGHT` varchar(20) DEFAULT NULL,
  `WEAR_GLASSES` varchar(10) DEFAULT NULL,
  `PHYSICAL_HANDICAPS` varchar(10) DEFAULT NULL,
  `TECHNICAL_SCHOOL` varchar(10) DEFAULT NULL,
  `COLLEGE` varchar(10) DEFAULT NULL,
  `BUSINESS_SCHOOL` varchar(10) DEFAULT NULL,
  `WORK` varchar(10) DEFAULT NULL,
  `OTHER` varchar(10) DEFAULT NULL,
  `CAREER_INTEREST_1` varchar(50) DEFAULT NULL,
  `CAREER_REASON_1` varchar(200) DEFAULT NULL,
  `CAREER_INTEREST_2` varchar(50) DEFAULT NULL,
  `CAREER_REASON_2` varchar(200) DEFAULT NULL,
  `TRANSPORTATION` varchar(256) DEFAULT NULL,
  `PERSON_1` varchar(20) DEFAULT NULL,
  `RELATIONSHIP_1` varchar(20) DEFAULT NULL,
  `WORK_PHONE_1` varchar(15) DEFAULT NULL,
  `HOME_PHONE_1` varchar(15) DEFAULT NULL,
  `PERSON_2` varchar(20) DEFAULT NULL,
  `RELATIONSHIP_2` varchar(20) DEFAULT NULL,
  `WORK_PHONE_2` varchar(15) DEFAULT NULL,
  `HOME_PHONE_2` varchar(15) DEFAULT NULL,
  `COMPANY_1` varchar(50) DEFAULT NULL,
  `JOB_DUTIES_1` varchar(50) DEFAULT NULL,
  `DATES_WORKED_1` varchar(50) DEFAULT NULL,
  `COMPANY_2` varchar(50) DEFAULT NULL,
  `JOB_DUTIES_2` varchar(50) DEFAULT NULL,
  `DATES_WORKED_2` varchar(50) DEFAULT NULL,
  `COMPANY_3` varchar(50) DEFAULT NULL,
  `JOB_DUTIES_3` varchar(50) DEFAULT NULL,
  `DATES_WORKED_3` varchar(50) DEFAULT NULL,
  `PARAGRAPH` varchar(2560) DEFAULT NULL,
  `TRANSCRIPT` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminTable`
--
ALTER TABLE `adminTable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Ice Answers`
--
ALTER TABLE `Ice Answers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminTable`
--
ALTER TABLE `adminTable`
  MODIFY `ID` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `Ice Answers`
--
ALTER TABLE `Ice Answers`
  MODIFY `ID` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
