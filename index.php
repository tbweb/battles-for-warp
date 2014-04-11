<?php
	session_start();

	require_once 'class/Game/Session.class.php';
	require_once 'class/Game/Game.class.php';
	$session = new Session();
	$game = $session->getGameInSession();
	if (!$game)
	{
		if (!empty($_POST['player1']) && !empty($_POST['player2']))
			$game = new Game($_POST['player1'], $_POST['player2']);
		if ($game)
			$game->playGame();
	}
	if ($bdd = mysqli_connect('phpmyadmin.local.42.fr', $_POST['login'], $_POST['pwd']))
	{
		$query = "SELECT name FROM races;";
		if (!mysqli_query($bdd, $elem))
			die("Error creating table: ".$elem.mysqli_error($bdd)."<br><a href='install.php'>Page de connexion</a>");
		$conn = mysqli_connect($host, $user, $password, $database, $port, $socket);
		$req = mysqli_query($conn, $query);
		while ($races = mysqli_fetch_assoc($req))
		{
			echo $race['nom'];
		}
	}
	else
		echo "Error: bad login/password<br><a href='install.php'>Page de connexion</a>";
	mysqli_close($bdd);
?>
<html>
<head>

</head>
<body>
	<h1>Game</h1>
	<form action="">
		Name player 1 : <input type="text" name="player1" value=""/><br>
		Name player 2 : <input type="text" name="player2" value=""/>
	</form>
</body>
</html>