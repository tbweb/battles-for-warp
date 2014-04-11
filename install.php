<!DOCTYPE html>
<?php
   session_start();
   if (!isset($_POST['db_name'])
		|| !isset($_POST['login'])
		|| !isset($_POST['pwd'])
		|| !isset($_POST['submit']))
   {
?>
<html>
	<head>
		<title>Initialisation</title>
		<style>
			.zone
			{
				position: relative;
				text-align: center;
			}
			.connect
			{
				border-radius: 10px;
				box-shadow: 5px 5px 5px #000;
				border: 1px solid;
				width: 350px;
				margin-left: auto;
				margin-right: auto;
			}
			table
			{
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<h1 style="text-align: center;">Initialisation de la base de donn&eacute;es<br>
		pour pr&eacute;parer la partie</h1><br>
		<div class="zone">Veuillez lancer le server MySQL Database<br>
			avant de se connecter<br><hr>
			<form name="log" action="install.php" method="POST">
				<div class="connect">
					<table>
						<tr>
							<td style="text-align: right;">Nom de la base de donn&eacute;es :</td>
							<td><input type="text" name="db_name"></td>
						</tr>
						<tr>
							<td style="text-align: right;">mamp login :</td>
							<td><input type="text" name="login"></td>
						</tr>
						<tr>
							<td style="text-align: right;">mamp password :</td>
							<td><input type="password" name="pwd"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit" value="Connect"></td>
						</tr>
					</table>
				</div>
			</from>
		</div>
<?PHP
	}
	else if ($_POST['db_name'] != "")
	{
		if ($bdd = mysqli_connect('phpmyadmin.local.42.fr', $_POST['login'], $_POST['pwd']))
		{
			$_SESSION['mamp_login'] = $_POST['login'];
			$_SESSION['mamp_pwd'] = $_POST['pwd'];
			$_SESSION['db_name'] = $_POST['db_name'];
			echo "Server connected<br>";
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
  `vitesse` int(11) NOT NULL,
  `manoeuvre` int(11) NOT NULL,
  `shield` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `race` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_ship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$request[5] = "INSERT INTO `ships` (`id_ship`, `name`, `size`, `pc`, `pm`, `vitesse`, `manoeuvre`, `shield`, `bonus`, `race`) VALUES
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
			foreach ($request as $elem)
			{
				if ($elem)
				{
					if (!mysqli_query($bdd, $elem))
						die("Error creating table: ".$elem.mysqli_error($bdd)."<br><a href='install.php'>Page de connexion</a>");
				}
			}
			echo "Database created<br>";
			mysqli_close($bdd);
			header('location: index.php');
		}
		else
			echo "Error: bad login/password<br><a href='install.php'>Page de connexion</a>";
	}
	else
		header('location: install.php');
?>
	</body>
</html>
