<html>
	<head>
		<title>ASBII - Acceuil</title>
		<link rel="stylesheet" type="text/css" href="/css/index.css">
	</head>
	<body>
		<h1>AWESOME STARSHIPS BATTLES II</h1>
		<div class="connect">
			<form action="index.php?action=new" method="POST">
				<?php
					$option = "";
					foreach ($tabRaces as $race)
					{
						$option .= "<option value='" .$race['name']. "'>" .$race['name']. "</option>\n						";
					}
					$i = 1;
					while ($i <= 4)
					{
						print("				<div id='block_connect'>\n");
						print("					<h3>Player" .$i. "</h3>\n");
						print("					<label for='username" .$i. "'>Username: </label>\n");
						print("					<input type='text' name='player" .$i. "' id='username" .$i. "' value=''/><br \>\n");
						print("					<label for='password" .$i. "'>Password: </label>\n");
						print("					<input type='password' name='pwdPlayer" .$i. "' id='password" .$i. "' value=''/><br>\n");
						print("					<label for='race" .$i. "'>Race: </label>\n");
						print("					<select name='racePlayer" .$i. "' id='race" .$i. "'>\n");
						print("						$option");
						print("</select>\n");
						print("				</div>\n");
						$i++;
					}
				?>
				<br>
				<input type="submit" value="Jouer" class="button"/>
			</form>
			<form action="index.php?action=subscribe" method="POST">
				<input type="submit" value="S'inscrire" class="button"/>
			</form>
		</div>
		<hr>
		<?php
			if ($game)
			{
				$gameId = $game->getIdGame();
				print("<span id='curgame'>\n");
				print("			<h2 id='title_curgame'>Partie en cours ($gameId)</h2>\n");
				$i = 1;
				foreach ($game->getPlayers() as $player)
				{
					if ($i == 1 || $i == 3)
						print("				<div id='block_players'>\n");
					print("					<h3 id='subtitle_curgame'>Player " .$i. "</h3>\n");
					print("					<span>Name: " .$player->getName(). "</span><br>\n");
					print("					<span>Race: " .$player->getRace(). "</span>\n");
					print("					<br>\n");
					print("					<br>\n");
					if ($i == 2 || $i == count($game->getPlayers()))
						print("				</div>\n");
					$i++;
				}
				print("				<br>\n");
				print("			<form action='index.php?action=resume' method='POST'>\n");
				print("				<input type='submit' value='Reprendre la partie' id='resume' />\n");
				print("			</form>\n");
				print("			<form action='index.php?action=delete' method='POST'>\n");
				print("				<input type='submit' value='Supprimer la partie' id='delete' />\n");
				print("			</form>\n");
				print("		</span>\n");
			}
			?>
	</body>
</html>
