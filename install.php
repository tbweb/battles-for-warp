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
  `id_race` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_race`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;";
			$request[3] = "INSERT INTO `races` (`id_race`, `nom`) VALUES
(1, 'Tau'),
(2, 'Eldars Noirs');";
			$request[4] = "CREATE TABLE `ships` (
  `id_vaisseau` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `taille` varchar(20) NOT NULL,
  `pc` int(11) NOT NULL,
  `pm` int(11) NOT NULL,
  `vitesse` int(11) NOT NULL,
  `manoeuvre` int(11) NOT NULL,
  `bouclier` int(11) NOT NULL,
  `bonus` varchar(50) NOT NULL,
  `race` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_vaisseau`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;";
			$request[5] = "INSERT INTO `ships` (`id_vaisseau`, `nom`, `taille`, `pc`, `pm`, `vitesse`, `manoeuvre`, `bouclier`, `bonus`, `race`) VALUES
(1, 'Tigershark', '4x2', 10, 11, 15, 3, 0, '', 1),
(2, 'Tigershark AX-1-0', '4x2', 10, 11, 15, 3, 0, '', 1);";
			$request[6] = "CREATE TABLE `weapons` (
  `id_arme` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `PP` int(11) NOT NULL,
  PRIMARY KEY (`id_arme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
			$request[7] = "CREATE TABLE `weapship` (
  `id_weapship` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idvaisseau` int(10) unsigned NOT NULL,
  `idweapon` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_weapship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
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
