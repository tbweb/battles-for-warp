<?php
	session_start();

	require_once 'class/Tools/Session.class.php';
	require_once 'class/Game/Game.class.php';
	require_once 'class/Database/Database.class.php';

	Database::$verbose = FALSE;
	$session = new Session();
	$db = new Database();
	$game = $session->getGameInSession();
	if (empty($game))
	{
		if (!empty($_POST['player1']) && !empty($_POST['player2']) && !empty($_POST['racePlayer1']) && !empty($_POST['racePlayer2']))
			$game = new Game($_POST['player1'], $_POST['player2'], $_POST['racePlayer1'], $_POST['racePlayer2']);
		if ($game)
		{
			$game->playGame();
			$session->setGameInSession($game);
		}
	}
	else
		$session->setGameInSession($game);
	$query = "SELECT name FROM races";
	$db->connect_db();
	$tabRaces = $db->getContentInDb($query);
	$db->close_db();
?>
<html>
<head>

</head>
<body>
	<h1>Game</h1>
	<?php
//		echo $game->getPlayer1()->getPlayerName();
//		echo $game->getPlayer2()->getPlayerName();
//		echo $game->getPlayer1()->getPlayerRace();
//		echo $game->getPlayer2()->getPlayerRace();
	?>
	<form action="index.php" method="POST">
		Name player 1 : <input type="text" name="player1" value=""/><br>
		Race player 1 :
		<select name="racePlayer1">
		<?php
			print_r($tabRaces);
			foreach ($tabRaces as $race)
				echo "<option value='".$race[0]['name']."'>".$race['name']."</option>";
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
</body>
</html>
