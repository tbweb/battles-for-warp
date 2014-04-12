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
		  `id_weapon1` int(11) unsigned NOT NULL,
		  `id_weapon2` int(11) unsigned,
		  PRIMARY KEY (`id_ship`),
		  FOREIGN KEY (`id_race`) REFERENCES races(`id_race`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[4] = "CREATE TABLE `weapons` (
		  `id_weapon` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(50) NOT NULL,
		  `pp` int(11) NOT NULL,
		  `srange` varchar(5) NOT NULL,
		  `mrange` varchar(5) NOT NULL,
		  `lrange` varchar(5) NOT NULL,
		  `bonus` varchar(255),
		  `effect` varchar(255) NOT NULL,
		  PRIMARY KEY (`id_weapon`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[5] = "CREATE TABLE `players` (
		  `id_player` int(11) unsigned NOT NULL,
		  `name` varchar(50) NOT NULL,
		  `pwd` varchar(255) NOT NULL,
		  `email` varchar(255) NOT NULL,
		  `img` varchar(255) NOT NULL,
		  `victories` int(11) unsigned NOT NULL,
		  `defeats` int(11) unsigned NOT NULL,
		  `last_game_time` varchar(255) NOT NULL,
		  PRIMARY KEY (`id_player`),
		  UNIQUE KEY (`name`)
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
		  `played` boolean NOT NULL DEFAULT false,
		  PRIMARY KEY (`id_playship`),
		  FOREIGN KEY (`id_game`) REFERENCES games(`id_game`),
		  FOREIGN KEY (`id_player`) REFERENCES players(`id_player`),
		  FOREIGN KEY (`id_ship`) REFERENCES ships(`id_ship`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$request[8] = "INSERT INTO `races` (`name`) VALUES
		('Garde Imperiale'),
		('Eldars Noirs'),
		('Tau');";

		$request[9] = "INSERT INTO `ships` (`name`, `size`, `pc`, `pm`, `speed`, `move`, `shield`, `bonus`, `id_race`, `img`) VALUES
		('Vendetta', '2x1', 5, 10, 20, 2, 0, '', 1, '../../sprites/Imperials/Hunter_imperials.png'),
		('Thuderbolt', '5x1', 10, 15, 15, 4, 0, '', 1, '../../sprites/Imperials/Cruiser_imperials.png'),
		('Valkyrie', '7x3', 20, 25, 10, 8, 2, '', 1, '../../sprites/Imperials/Heavy_imperials.png'),
		('Hemlock Wraithfighter', '2x1', 5, 10, 20, 2, 0, '', 2, '../../sprites/Eldars/HUnter_eldars.png'),
		('Aurora Class', '5x1', 10, 15, 15, 4, 0, '', 2, '../../sprites/Eldars/Cruiser_eldars.png'),
		('Void Stalker', '7x3', 20, 25, 10, 8, 2, '', 2, '../../sprites/Eldars/Heavy_eldars.png'),
		('Barracuda', '2x1', 5, 10, 20, 2, 0, '', 3, '../../sprites/Tau/Hunter_tau.png'),
		('Tigershark', '5x1', 10, 15, 15, 4, 0, '', 3, '../../sprites/Tau/Cruiser_tau.png'),
		('Manta', '7x3', 20, 25, 10, 8, 2, '', 3, '../../sprites/Tau/Heavy_tau.png');";

		$request[10] = "INSERT INTO `weapons` (`name`, `pp`, `srange`, `mrange`, `lrange`, `bonus`, `effect`) VALUES
		('Batterie laser de flancs', 0, '1-10', '11-20', '21-30', '', 'spray'),
		('Lance navale', 0, '1-30', '31-60', '61-90', '', 'ray'),
		('Lance navale lourde', 3, '1-30', '31-60', '61-90', 'pierce', 'ray'),
		('Mitrailleuses super lourdes de proximité', 5, '1-3', '4-7', '8-10', '', 'close'),
		('Macro canon', 0, '1-10', '11-20', '21-30', 'explode', 'ray');";

		return ($request);
	}
?>
