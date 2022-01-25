--
-- Database: `jaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', 'admin', 'Jorge Icotanim');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `hardware` varchar(30) NOT NULL,
  `snum` varchar(30) NOT NULL,
  `stat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `tag`, `hardware`, `snum`, `stat`) VALUES
(18, 2, 'Keyboard', '12312312', 'On Delivery'),
(19, 3, 'Laptop', '010405', 'On Delivery'),
(20, 4, 'Mouse', '13579', 'On Delivery'),
(21, 5, 'Wire', '099914', 'On Delivery'),
(22, 6, 'Cellphone', '01345566', 'On Delivery'),
(28, 7, 'Headset', '76289364', 'On Delivery'),
(29, 8, 'HDMI', '123543332', 'On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `asset_transmittal`
--

CREATE TABLE `asset_transmittal` (
  `asset_transmittal_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `emp_no` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL,
  `deployed` varchar(50) NOT NULL,
  `fr` varchar(50) NOT NULL,
  `recipient` varchar(50) NOT NULL,
  `ticket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_transmittal`
--

INSERT INTO `asset_transmittal` (`asset_transmittal_id`, `name`, `company`, `emp_no`, `phone`, `email`, `checkout`, `deployed`, `fr`, `recipient`, `ticket`) VALUES
(11, 'Mitch Arkeen Dela Cruz Salvador', 'JAKA Investment Corporation', '12341234', '+639367750136', 'oxmiko@gmail.com', '06/15/21', '2021-06-16', 'JAKA', 'ABC', '2021602322'),
(12, 'JA Ortega', 'JAKA Investment Corporation', '45343512', '09677501380', 'johnarthurortega@gmail.com', '06/15/21', '2021-06-16', 'JAKA', 'ABC', '2021196267'),
(13, 'Ej Aquino', 'JAKA Investment Corporation', '45343512123', '09677554722', 'ej@gmail.com', '06/21/21', '2021-06-22', 'manila', 'makati', '2021294677');

-- --------------------------------------------------------

--
-- Table structure for table `transmittal_details`
--

CREATE TABLE `transmittal_details` (
  `transmittal_details_id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `ticket` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmittal_details`
--

INSERT INTO `transmittal_details` (`transmittal_details_id`, `tag`, `qty`, `ticket`, `comment`) VALUES
(66, '2', 1, '2021196267', 'N/A'),
(67, '3', 1, '2021196267', 'N/A'),
(68, '4', 1, '2021196267', 'N/A'),
(69, '5', 1, '2021602322', 'N/A'),
(70, '8', 1, '2021602322', 'N/A'),
(71, '6', 1, '2021602322', 'N/A'),
(72, '7', 1, '2021602322', 'N/A'),
(73, '2', 1, '2021294677', 'N/A'),
(74, '3', 1, '2021294677', 'N/A'),
(75, '4', 1, '2021294677', 'N/A'),
(76, '6', 1, '2021294677', 'N/A'),
(77, '7', 1, '2021294677', 'N/A'),
(78, '5', 1, '2021294677', 'N/A'),
(79, '8', 1, '2021294677', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(70) NOT NULL,
  `phone` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `department`, `phone`) VALUES
(6, 'Jorge Icotanim', 'admin', 'admin', 'Administrator', '09677501380'),
(14, 'Mitch Arkeen Dela Cruz Salvador', 'komir', 'user123', 'Administrator', '09677501361');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`tag`) USING BTREE;

--
-- Indexes for table `asset_transmittal`
--
ALTER TABLE `asset_transmittal`
  ADD PRIMARY KEY (`asset_transmittal_id`);

--
-- Indexes for table `transmittal_details`
--
ALTER TABLE `transmittal_details`
  ADD PRIMARY KEY (`transmittal_details_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `asset_transmittal`
--
ALTER TABLE `asset_transmittal`
  MODIFY `asset_transmittal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `transmittal_details`
--
ALTER TABLE `transmittal_details`
  MODIFY `transmittal_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
