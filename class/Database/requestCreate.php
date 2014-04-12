<?php
	function createDb()
	{
		$request[0] = "CREATE DATABASE `" . $_SESSION['db_name'] . "`;";
		$request[1] = "USE `" . $_SESSION['db_name'] . "`;";
		$request[2] = "CREATE TABLE `races` (
		  `id_race` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  PRIMARY KEY (`id_race`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$request[3] = "INSERT INTO `races` (`id_race`, `name`) VALUES
		(1, 'Tau'),
		(2, 'Eldars Noirs');";
		$request[4] = "CREATE TABLE `ships` (
		  `id_ship` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `size` varchar(20) NOT NULL,
		  `pc` int(11) NOT NULL,
		  `pm` int(11) NOT NULL,
		  `speed` int(11) NOT NULL,
		  `manoeuvre` int(11) NOT NULL,
		  `shield` int(11) NOT NULL,
		  `bonus` int(11) NOT NULL,
		  `race` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`id_ship`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$request[5] = "INSERT INTO `ships` (`id_ship`, `name`, `size`, `pc`, `pm`, `speed`, `manoeuvre`, `shield`, `bonus`, `race`) VALUES
		(1, 'Tigershark', '4x2', 10, 11, 15, 3, 0, '', 1),
		(2, 'Tigershark AX-1-0', '4x2', 10, 11, 15, 3, 0, '', 1);";
		$request[6] = "CREATE TABLE `weapons` (
		  `id_weapon` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `Name` varchar(50) NOT NULL,
		  `pp` int(11) NOT NULL,
		  PRIMARY KEY (`id_weapon`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$request[7] = "CREATE TABLE `weapship` (
		  `id_playship` int(11) unsigned NOT NULL,
		  `id_ship` int(11) unsigned NOT NULL,
		  `id_weapon` int(11) unsigned NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$request[8] = "CREATE TABLE `player` (
		  `id_player` int(11) unsigned NOT NULL,
		  `name` varchar(50) NOT NULL,
		  PRIMARY KEY (`id_player`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$request[9] = "CREATE TABLE `playship` (
		  `id_playship` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `id_player` int(11) unsigned NOT NULL,
		  `id_ship` int(11) unsigned NOT NULL,
		  `ship_name` varchar(50) NOT NULL,
		  `pc` int(11) unsigned NOT NULL,
		  `shield` int(11) unsigned NOT NULL,
		  `inertia` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`id_playship`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		return ($request);
	}
?>