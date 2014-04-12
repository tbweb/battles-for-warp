<?php
	session_start();

	require_once 'class/Tools/Session.class.php';
	require_once 'class/Game/Game.class.php';
	require_once 'class/Database/Database.class.php';
	$verbose_global = TRUE;
	if ($verbose_global)
		Database::$verbose = TRUE;
	$session = new Session();
	$db = new Database();
	$game = $session->getGameInSession();
	if ($game && !empty($_GET['action']) && $_GET['action'] == "resume")
	{
		header('location: game.php');
	}
	else if (!empty($_GET['action']) && $_GET['action'] == "new")
	{
		if (!empty($_POST['player1']) && !empty($_POST['player2']) && !empty($_POST['racePlayer1']) && !empty($_POST['racePlayer2']))
			$game = new Game($_POST['player1'], $_POST['player2'], $_POST['racePlayer1'], $_POST['racePlayer2']);
		if ($game)
		{
			echo "tito";
			$session->setGameInSession($game);
			header('location: game.php');
		}
	}
	$query = "SELECT name FROM races";
	if (!$db->connect_db())
		header('location: install.php');
	$tabRaces = $db->getContentInDb($query);
	$db->close_db();
	if ($verbose_global)
	{
		print_r($game);
	}
	include "templates/index.php";
?>
