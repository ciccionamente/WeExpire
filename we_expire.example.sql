SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we_expire`
--

-- --------------------------------------------------------

--
-- Table structure for table `created_notes`
--

CREATE TABLE `created_notes` (
  `ID` int(11) NOT NULL,
  `DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes_to_read`
--

CREATE TABLE `notes_to_read` (
  `ID` int(11) NOT NULL,
  `HASH` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `REQUESTED_ACCESS` datetime DEFAULT NULL,
  `GRANT_ACCESS` datetime DEFAULT NULL,
  `DENIED_ACCESS` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `read_notes`
--

CREATE TABLE `read_notes` (
  `ID` int(11) NOT NULL,
  `DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `created_notes`
--
ALTER TABLE `created_notes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notes_to_read`
--
ALTER TABLE `notes_to_read`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `HASH` (`HASH`);

--
-- Indexes for table `read_notes`
--
ALTER TABLE `read_notes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `created_notes`
--
ALTER TABLE `created_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes_to_read`
--
ALTER TABLE `notes_to_read`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `read_notes`
--
ALTER TABLE `read_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
