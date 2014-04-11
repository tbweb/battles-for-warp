<?php
	session_start();

	require_once 'class/Tools/Session.class.php';
	require_once 'class/Game/Game.class.php';
	require_once 'class/Tools/Database.class.php';

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
	if ($db_conn = $db->connect_db())
	{
		$query = "SELECT name FROM races";
		$res = mysqli_query($db_conn, $query);
		while ($req = mysqli_fetch_assoc($res))
			$tabRaces[] = $req;
	}
	mysqli_close($db_conn);
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
			foreach ($tabRaces as $races)
				echo "<option value='".$races['name']."'>".$races['name']."</option>";
		?>
		</select><br>
		Name player 2 : <input type="text" name="player2" value=""/><br>
		Race player 2 :
		<select name="racePlayer2">
		<?php
			foreach ($tabRaces as $races)
				echo "<option value='".$races['name']."'>".$races['name']."</option>";
		?>
		</select><br>
		<input type="submit" value="Send"/>
	</form>
</body>
</html>