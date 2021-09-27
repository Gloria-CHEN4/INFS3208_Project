SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- database： `deco3208`
--

-- --------------------------------------------------------

--
-- table: `user_data`
--

CREATE TABLE `user_data` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Storing data into the table `user`
--

INSERT INTO `user_data` (`username`, `password`, `email`, `active`, `question`, `answer`) VALUES
('Dolly', '$2y$10$TX2.Fsn.F.yoJJ94Vu3iXOTHeAjNfJag.nFn3k7IoFY9lbvnZ20tm', 'Dolly@gmail.com', '0', 'what is your name', '$2y$10$4osFk3ha2FXmzCkjsP.btOGs3QkyyyBg1T7I3ucamVqJ8IQdJpIk6'),
('Amy', '$2y$10$PJWpoChYNXWtKrZ.by/Tkutlub9tWqvvgR1jSVgVzMtUHGuq/EaAa', 'Amy@gmail.com', '0', 'what is your name', '$2y$10$gLdhRYfNYhoDUmvGgLlTXObmH2.bODcQO0c6XkZgEm1W.5jOfnO7'),
('Cathy', '$2y$10$wzHLp3t4z0YX2IbsqG2UZe2oBCPp1IwUZey6aWztWoshtTMD.nYCG', 'Cathy@gmail.com', '0', 'what is your favorite color', '$2y$10$ckivbjLKbw1IgxCTgBSl9eTFojwibkT9g78fwAgvf6.HsYRm/mdfG'),
('Gigi', '$2y$10$bpwhgS4BW1h6M6SAs1n2YuWIlFYwUNAWqcb7eRc8EU9w1rPhVhnE2', 'Gigi@qq.com', '0', 'what is your mother''s name', '$2y$10$.u4.SX4KZmBuKKz247BwAOUE1k74hjSmkBlyXGitn1xgyJkoPfAB.'),
('Bob', '$2y$10$VbgToPIanBYh8u3FJxz9UOUfvk5iT5XqoK/LW4ubEwhtI87LCcY0W', 'Bob@gmail.com', '0', 'What is your name?', '$2y$10$14Kxquo/kbueK5ezFtncJuGVrwjaC1CbSEb592wT9qYXjVtGzUNzq');
--
-- primary key of table: `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`username`);
--
-- table: `event`
--
CREATE TABLE `event` (
  `event_id` int(50) NOT NULL,
  `holder` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `voting` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Storing data into the table `event`
--
INSERT INTO `event` (`holder`, `event_id`, `place`, `title`, `date`, `voting`) VALUES
('1', 'DAS Health & Fitness', 'Splash ''nPlay Adventure Park • South Ripley, QLD', 'DAS Health & Fitness Bootcamp', '2021-11-01', '0'),
('2', 'Brisbane City Council Active Parks Program', 'Majestic Park • Coorparoo, QLD', 'Free Boxercise Class', '2021-10-19', '0'),
('3', 'O&M Health and Fitness', '54 Teal Circuit • Greenbank, QLD', 'O&M Thursdays - Strength and Conditioning', '2021-10-25', '0'),
('4', 'Brisbane City Council Active Parks Program', 'Bulimba Riverside Park • Bulimba, QLD', 'Free Flexibility Class (Suitable for seniors)', '2021-10-19', '0');


--
-- primary key of table: `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);
  
  


--
-- table: `calendar`
--
CREATE TABLE `calendar` (
  `username` varchar(50) NOT NULL,
  `event_id` int(50) NOT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `event` (`username`, `event_id`) VALUES
('Bob', '1'),
('Dolly', '3'),
('Dolly', '2'),
('Gigi', '1'),
('Gigi', '2');
 
COMMIT;
