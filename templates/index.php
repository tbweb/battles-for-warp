<html>
	<head>
		<title>Awesome Starships Battles II - Acceuil</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<h1>AWESOME STARSHIPS BATTLES II</h1>
		<div class="connect">
		<form action="index.php?action=new" method="POST">
			<?php
				$option = "";
				foreach ($tabRaces as $race)
					$option .= "<option value='".$race['name']."'>".$race['name']."</option>";
				$i = 1;
				while ($i <= 4)
				{
					print("<div id='block_connect'>\n");
					print("<h3>Player $i</h3>\n");
					print("<label for='username".$i."'>Username: </label>\n");
					print("<input type='text' name='player".$i."' id='username".$i."' value=''/><br \>\n");
					print("<label for='password".$i."'>Password: </label>\n");
					print("<input type='password' name='pwdPlayer".$i."' id='password".$i."' value=''/><br>\n");
					print("<label for='race".$i."'>Race: </label>\n");
					print("<select name='racePlayer".$i."' id='race".$i."'>\n");
					print($option."\n");
					print("</select></div>\n");
					$i++;
				}
			?>
			<br \>
			<input type="submit" value="Jouer" id="play"/>
		</form>
<?php
	if ($game)
	{
		$gameId = $game->getIdGame();
		echo "<h2>Partie en cours - numero $gameId</h2>";
		$formatName = "Name : %s <br>";
		$formatRace = "Race : %s <br>";
		$i = 1;
		foreach ($game->getPlayers() as $player)
		{
			print("<h3>Player $i</h3>");
			printf($formatName, $player->getName());
			printf($formatRace, $player->getRace());
			print("Ship name : " . $player->getPlayShip()->getShipName());
			print("<br>Ship size : " . $player->getPlayShip()->getShip()->getSize());
			++$i;
		}
		echo  '
		<form action="index.php?action=resume" method="POST">
			<input type="submit" value="Reprendre la partie"/>
		</form>'
		;
	}
?>
	</body>
</html>
