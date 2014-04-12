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

		$request[3] = "CREATE TABLE `ships` (
		  `id_ship` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `size` varchar(20) NOT NULL,
		  `pc` int(11) NOT NULL,
		  `pm` int(11) NOT NULL,
		  `speed` int(11) NOT NULL,
		  `move` int(11) NOT NULL,
		  `shield` int(11) NOT NULL,
		  `bonus` int(11) NOT NULL,
		  `id_race` int(11) unsigned NOT NULL,
		  `img` varchar(255) NOT NULL,
		  PRIMARY KEY (`id_ship`),
		  FOREIGN KEY (`id_race`) REFERENCES races(`id_race`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[4] = "CREATE TABLE `weapons` (
		  `id_weapon` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `pp` int(11) NOT NULL,
		  PRIMARY KEY (`id_weapon`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[5] = "CREATE TABLE `players` (
		  `id_player` int(11) unsigned NOT NULL,
		  `name` varchar(50) NOT NULL,
		  PRIMARY KEY (`id_player`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[6] = "CREATE TABLE `games` (
		  `id_game` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `end_game` boolean NOT NULL DEFAULT false,
		  PRIMARY KEY (`id_game`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[7] = "CREATE TABLE `playship` (
		  `id_playship` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `id_game` int(11) unsigned NOT NULL,
		  `id_player` int(11) unsigned NOT NULL,
		  `id_ship` int(11) unsigned NOT NULL,
		  `ship_name` varchar(50) NOT NULL,
		  `way` char NOT NULL,
		  `x` int(11) unsigned NOT NULL,
		  `y` int(11) unsigned NOT NULL,
		  `pc` int(11) unsigned NOT NULL,
		  `shield` int(11) unsigned NOT NULL,
		  `inertia` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`id_playship`),
		  FOREIGN KEY (`id_game`) REFERENCES games(`id_game`),
		  FOREIGN KEY (`id_player`) REFERENCES players(`id_player`),
		  FOREIGN KEY (`id_ship`) REFERENCES ships(`id_ship`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[8] = "CREATE TABLE `weapship` (
		  `id_playship` int(11) unsigned NOT NULL,
		  `id_ship` int(11) unsigned NOT NULL,
		  `id_weapon` int(11) unsigned NOT NULL,
		  FOREIGN KEY (`id_playship`) REFERENCES playship(`id_playship`),
		  FOREIGN KEY (`id_ship`) REFERENCES ships(`id_ship`),
		  FOREIGN KEY (`id_weapon`) REFERENCES weapons(`id_weapon`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[9] = "INSERT INTO `races` (`id_race`, `name`) VALUES
		(1, 'Tau'),
		(2, 'Eldars Noirs');";

		$request[10] = "INSERT INTO `ships` (`id_ship`, `name`, `size`, `pc`, `pm`, `speed`, `move`, `shield`, `bonus`, `id_race`) VALUES
		(1, 'Tigershark', '4x2', 10, 11, 15, 3, 0, '', 1),
		(2, 'Tigershark AX-1-0', '4x2', 10, 11, 15, 3, 0, '', 1);";

		return ($request);
	}
?>