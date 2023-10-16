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

CREATE TABLE IF NOT EXISTS `created_notes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes_to_read`
--

CREATE TABLE IF NOT EXISTS `notes_to_read` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `HASH` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL UNIQUE KEY,
  `REQUESTED_ACCESS` datetime DEFAULT NULL,
  `GRANT_ACCESS` datetime DEFAULT NULL,
  `DENIED_ACCESS` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `read_notes`
--

CREATE TABLE IF NOT EXISTS `read_notes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;