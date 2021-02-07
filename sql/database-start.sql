SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int UNSIGNED NOT NULL PRIMARY KEY,
  `userEmail` varchar(60) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userFirstName` varchar(50),
  `userLastName` varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `entry`;
CREATE TABLE `entry` (
  `entryId` int UNSIGNED NOT NULL PRIMARY KEY,
  `userId` int NOT NULL,
  `entryTitle` varchar(50) NOT NULL,
  `entryText` varchar(50),
  `enrtyPicture` varchar(50),
  `entryDate` date NOT NULL,
  `enrtyCategoryOne` varchar(30),
  `enrtyCategoryTwo` varchar(30),
  CONSTRAINT fk_entry_1 FOREIGN KEY (`userId`) REFERENCES `users`(`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
