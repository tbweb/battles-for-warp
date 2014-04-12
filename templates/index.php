<html>
<head>
<style>
	div.form_content
	{
		width: 80%;
		height: 110px; 
	}
	div.form_content h3
	{
		margin-top: 0px;
	}
</style>
</head>
<body>
<h1>Game</h1>
	<form action="index.php?action=new" method="POST">
		<div class="form_content">
		<?php
			$option = "";
			foreach ($tabRaces as $race)
				$option .= "<option value='".$race['name']."'>".$race['name']."</option>";
			$i = 1;
			while ($i <= 4)
			{
				print('<div class="player-info" style="float: left; margin-right: 15px;">');
				print("<h3>Player $i</h3>");
				print('Name : <input type="text" name="player'.$i.'" value=""/><br>');
				print('Race : <select name="racePlayer'.$i.'">');
				print($option);
				print("</select></div>");
				$i++;
			}
		?>
		</div>
		<input type="submit" value="Jouer"/>
	</form>
	<h2>Partie en cours</h2>
	<?php
		$formatName = "Name : %s <br>";
		$formatRace = "Race : %s <br>";
		$i = 1;
		foreach ($game->getPlayers() as $player)
		{
			print("<h3>Player $i</h3>");
			printf($formatName, $player->getName());
			printf($formatRace, $player->getRace());
			$i++;
		}
		
	?>
	<form action="index.php?action=resume" method="POST">
		<input type="submit" value="Reprendre la partie"/>
	</form>
</body>
</html>