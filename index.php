<?php
	session_start();

	require_once 'class/Tools/Session.class.php';
	require_once 'class/Game/Game.class.php';
	require_once 'class/Database/Database.class.php';
	$verbose_global = FALSE;
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
		if (!empty($_POST['player1']) && !empty($_POST['racePlayer1']) && !empty($_POST['pwdPlayer1'])
				&& !empty($_POST['player2']) && !empty($_POST['racePlayer2']) && !empty($_POST['pwdPlayer2']))
		{
			$i = 1;
			$arrayPlayers = array();
			while ($i <= 4 && !empty($_POST['player'.$i]) && !empty($_POST['racePlayer'.$i]) && !empty($_POST['pwdPlayer'.$i]))
			{
				$arrayPlayers[] = new Player($_POST['player'.$i], $_POST['racePlayer'.$i], $_POST['pwdPlayer'.$i]);
				$i++;
			}
			$game = new Game($arrayPlayers);
			if ($game)
			{
				$session->setGameInSession($game);
				header('location: game.php');
			}
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
// 		foreach($game->getPlayers() as $player)
// 		{
// 			echo $player->getIdGame();
// 			echo $player->getName();
// 		}
	}
	include "templates/index.php";
?>
