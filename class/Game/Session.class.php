<?php

class Session
{
	private $informations;
	public static $verbose = FALSE;
	
	public function __construct()
	{
		if (!empty($_SESSION['game']) && $this->verbose === TRUE)
		{
			print($_SESSION['game']);
		}
	}
	
	public function	getGameInSession()
	{
		if (!empty($_SESSION['game']))
			return (serialize($game));
	}
	
	public function	setGameInSession($game)
	{
		return ($_SESSION['game'] = unserialize($game));
	}
}
?>