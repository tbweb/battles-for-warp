<html>
<head>

</head>
<body>
<h1>Game</h1>
	<form action="index.php?action=new" method="POST">
		Name player 1 : <input type="text" name="player1" value=""/><br>
		Race player 1 :
		<select name="racePlayer1">
		<?php
			print_r($tabRaces);
			foreach ($tabRaces as $race)
				echo "<option value='".$race['name']."'>".$race['name']."</option>";
		?>
		</select><br>
		Name player 2 : <input type="text" name="player2" value=""/><br>
		Race player 2 :
		<select name="racePlayer2">
		<?php
			foreach ($tabRaces as $race)
				echo "<option value='".$race['name']."'>".$race['name']."</option>";
		?>
		</select><br>
		<input type="submit" value="Send"/>
	</form>
	<h2>Partie en cours</h2>
	<?php
		
		$formatName = "Name : %s <br>";
		$formatRace = "Race : %s <br>";
		print("<h3>Player 1</h3>");
		printf($formatName, $game->getPlayer1()->getPlayerName());
		printf($formatRace, $game->getPlayer1()->getPlayerRace());
		print("<h3>Player 2</h3>");
		printf($formatName, $game->getPlayer2()->getPlayerName());
		printf($formatRace, $game->getPlayer2()->getPlayerRace());
	?>
	<form action="index.php?action=resume" method="POST">
		<input type="submit" value="Reprendre la partie"/>
	</form>
</body>
</html>