<?php

class Session
{
	private $informations;
	public static $verbose = FALSE;
	
	public function __construct()
	{
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

	public function	setGameInSession($game)
	{
		$_SESSION['game'] = serialize($game);
	}
}
?>