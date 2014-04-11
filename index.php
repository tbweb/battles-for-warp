<?php
	session_start();

	require_once 'class/Game/Session.class.php';
	require_once 'class/Game/Game.class.php';
	require_once 'class/Database/Database.class.php';

	Database::$verbose = FALSE;
	$session = new Session();
	$db = new Database();
	$game = $session->getGameInSession();
	if (!$game)
	{
		if (!empty($_POST['player1']) && !empty($_POST['player2']))
			$game = new Game($_POST['player1'], $_POST['player2']);
		if ($game)
			$game->playGame();
	}
	if ($db_conn = $db->connect_db())
	{
		$query = "SELECT nom FROM races";
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
	<form action="">
		Name player 1 : <input type="text" name="player1" value=""/><br>
		
		<?php 
			foreach ($tabRaces as $races)
			{
				echo $races['nom'];
			}
		?>
		Name player 2 : <input type="text" name="player2" value=""/>
	</form>
</body>
</html>