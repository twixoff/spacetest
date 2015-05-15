-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.37-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных spacetest
CREATE DATABASE IF NOT EXISTS `spacetest` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `spacetest`;


-- Дамп структуры для таблица spacetest.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `name` varchar(100) NOT NULL COMMENT 'Имя',
  `inPlace` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'На месте',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы spacetest.employees: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `name`, `inPlace`) VALUES
	(1, 'Иванов', 0),
	(2, 'Петров', 1),
	(3, 'Сидоров', 1),
	(4, 'Анищенко', 0),
	(5, 'Агофонова', 1),
	(6, 'Лещенко', 0);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;


-- Дамп структуры для таблица spacetest.employee_groups
CREATE TABLE IF NOT EXISTS `employee_groups` (
  `employee_id` int(11) NOT NULL COMMENT 'Сотрудник',
  `group_id` int(11) NOT NULL COMMENT 'Группа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы spacetest.employee_groups: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `employee_groups` DISABLE KEYS */;
INSERT INTO `employee_groups` (`employee_id`, `group_id`) VALUES
	(1, 2),
	(1, 4),
	(3, 2),
	(3, 3),
	(2, 2),
	(2, 3),
	(4, 3),
	(6, 4),
	(5, 1),
	(5, 2),
	(5, 3),
	(5, 4);
/*!40000 ALTER TABLE `employee_groups` ENABLE KEYS */;


-- Дамп структуры для таблица spacetest.employee_skills
CREATE TABLE IF NOT EXISTS `employee_skills` (
  `employee_id` int(11) NOT NULL COMMENT 'Сотрудник',
  `skill_id` int(11) NOT NULL COMMENT 'Навык'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы spacetest.employee_skills: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `employee_skills` DISABLE KEYS */;
INSERT INTO `employee_skills` (`employee_id`, `skill_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(3, 2),
	(4, 1),
	(4, 2),
	(4, 3),
	(6, 2),
	(6, 3),
	(5, 2);
/*!40000 ALTER TABLE `employee_skills` ENABLE KEYS */;


-- Дамп структуры для таблица spacetest.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `name` varchar(50) DEFAULT NULL COMMENT 'Имя группы',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы spacetest.groups: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`) VALUES
	(1, '1'),
	(2, '2'),
	(3, '3'),
	(4, '4');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Дамп структуры для таблица spacetest.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `name` varchar(100) NOT NULL COMMENT 'Навык',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы spacetest.skills: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`) VALUES
	(1, 'a'),
	(2, 'b'),
	(3, 'c');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
