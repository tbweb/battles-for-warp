<?php

require_once 'class/Doc.class.txt';

class Session
{
	private $informations;
	public static $verbose = FALSE;

	use Doc;

	public function __construct()
	{
		session_start();
		if (!empty($_SESSION['game']) && self::$verbose === TRUE)
		{
			print($_SESSION['game']);
		}
	}

	public function	getGameInSession()
	{
		if (!empty($_SESSION['game']))
			return (unserialize($_SESSION['game']));
	}

	public function deleteGameInSession()
	{
		unset($_SESSION['game']);
	}

	public function	setGameInSession($game)
	{
		$_SESSION['game'] = serialize($game);
	}
}
?>
