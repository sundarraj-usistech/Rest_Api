-- Adminer 4.8.1 MySQL 10.4.24-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `task_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `task_management`;

DROP TABLE IF EXISTS `table_employees`;
CREATE TABLE `table_employees` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `employee_personal_email` varchar(50) NOT NULL,
  `employee_official_email` varchar(50) NOT NULL,
  `employee_contact_number` varchar(20) NOT NULL,
  `employee_date_of_birth` date NOT NULL,
  `employee_date_of_joining` date NOT NULL,
  `employee_years_of_experience` tinyint(2) NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `table_employees` (`employee_id`, `employee_name`, `employee_personal_email`, `employee_official_email`, `employee_contact_number`, `employee_date_of_birth`, `employee_date_of_joining`, `employee_years_of_experience`, `employee_address`, `employee_designation`, `employee_password`) VALUES
(1,	'name1',	'prname1@test.com',	'ofname1@test.com',	'9123456789',	'1998-03-01',	'2022-03-14',	1,	'North Street,\r\nChinnathadagam.',	'Junior Software Dveloper',	'name1'),
(2,	'name1',	'prname1@test.com',	'ofname1@test.com',	'9123456789',	'1998-03-01',	'2022-03-14',	1,	'North Street,\r\nChinnathadagam.',	'Junior Software Dveloper',	'name1'),
(3,	'name1',	'prname1@test.com',	'ofname1@test.com',	'9123456789',	'1998-03-01',	'2022-03-14',	1,	'North Street,\r\nChinnathadagam.',	'Junior Software Dveloper',	'name1'),
(4,	'name1',	'prname1@test.com',	'ofname1@test.com',	'9123456789',	'1998-03-01',	'2022-03-14',	1,	'North Street,\r\nChinnathadagam.',	'Junior Software Dveloper',	'name1'),
(5,	'name2',	'prname2@test.com',	'ofname2@test.com',	'9123456789',	'2000-03-23',	'2021-10-01',	1,	'South Car Street, Thoothukudi.',	'Junior Software Dveloper',	'name2'),
(6,	'name3',	'prname3@test.com',	'ofname3@test.com',	'9123456789',	'1999-02-05',	'2022-06-01',	1,	'Balaji Nagar,Chinnathadagam.',	'Junior Software Dveloper',	'name3'),
(7,	'name4',	'prname4@test.com',	'ofname4@test.com',	'9123456789',	'1990-02-05',	'2020-06-29',	2,	'Old Bank Street, Chinnathadagam.',	'HR Manager',	'name4'),
(8,	'name5',	'prname5@test.com',	'ofname5@test.com',	'9123456789',	'2001-04-02',	'2022-05-30',	0,	'South Street,\r\nChinnnathadagam.',	'Junior Software Dveloper',	'$2y$10$O8VjybHJQgaSbChdPUwVqOlA/emv/T.3/KiUuC7G5WdxjUfNKOQHy');

DROP TABLE IF EXISTS `table_projects`;
CREATE TABLE `table_projects` (
  `project_id` int(10) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(300) NOT NULL,
  `project_owner` varchar(30) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `table_projects` (`project_id`, `project_name`, `project_description`, `project_owner`) VALUES
(1,	'Project 1',	'Description for Project 1',	'ofname2@test.com'),
(2,	'Project 2',	'Description for Project 2',	'ofname2@test.com'),
(3,	'Project 3',	'Description for Project3',	'ofname3@test.com'),
(4,	'Project 3',	'Description for Project3',	'ofname3@test.com'),
(5,	'Project 4',	'Project 4 description',	'ofname4@test.com');

DROP TABLE IF EXISTS `table_tasks`;
CREATE TABLE `table_tasks` (
  `task_id` int(10) NOT NULL AUTO_INCREMENT,
  `task_project_name` varchar(100) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_description` varchar(300) NOT NULL,
  `task_owner` varchar(30) NOT NULL,
  `task_due_date` date NOT NULL,
  `task_completed_date` date NOT NULL,
  `task_followup_date` date NOT NULL,
  `task_followup_comments` varchar(300) NOT NULL,
  `task_followed_employee` varchar(30) NOT NULL,
  `task_colour` varchar(7) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `table_tasks` (`task_id`, `task_project_name`, `task_name`, `task_description`, `task_owner`, `task_due_date`, `task_completed_date`, `task_followup_date`, `task_followup_comments`, `task_followed_employee`, `task_colour`) VALUES
(1,	'Project 1',	'Task 1',	'Description for Task 1',	'name1',	'2022-08-27',	'2022-08-26',	'2022-08-25',	'Progressed well',	'name2',	'#f59494'),
(2,	'Project 1',	'Task 2',	'Description for Task 2',	'name2',	'2022-08-27',	'2022-08-26',	'2022-08-24',	'In Progress',	'name1',	'#000000'),
(3,	'Project 2',	'Task 3',	'Description for Task 3',	'name2',	'2022-08-27',	'2022-08-26',	'2022-08-24',	'In Progress',	'name1',	'#adf5da'),
(4,	'Project 4',	'Task 1',	'Task 1 Description',	'name4',	'2022-08-31',	'2022-08-30',	'2022-08-25',	'In Progress',	'name1',	'#fa7000'),
(5,	'Project 4',	'Task 2',	'Task 2 Description',	'name4',	'2022-08-31',	'2022-08-30',	'2022-08-25',	'In Progress',	'name1',	'#fa7000'),
(6,	'Project 4',	'Task 3',	'Task 3 Description',	'name4',	'2022-08-31',	'2022-08-30',	'2022-08-25',	'In Progress',	'name1',	'#fa7000'),
(7,	'Project 4',	'Task 4',	'Task 4 Description',	'name4',	'2022-08-31',	'2022-08-30',	'2022-08-25',	'In Progress',	'name1',	'#fa7000');

DROP TABLE IF EXISTS `table_users`;
CREATE TABLE `table_users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `table_users` (`user_id`, `user_name`, `user_password`, `user_role`) VALUES
(1,	'admin',	'admin',	1),
(2,	'ofname1@test.com',	'name1',	2),
(3,	'ofname2@test.com',	'name2',	2),
(4,	'ofname3@test.com',	'name3',	2),
(5,	'ofname4@test.com',	'name4',	2),
(6,	'ofemail@test.com',	'$2y$10$O8VjybHJQgaSbChdPUwVqOlA/emv/T.3/KiUuC7G5Wd',	2);

-- 2022-08-26 03:04:16
