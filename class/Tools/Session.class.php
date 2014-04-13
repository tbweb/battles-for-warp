<?php

require_once 'class/Doc.class.php';

class Session
{
	private $filename = "session.sss";
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
		$game = "";
		if (file_exists($this->filename))
			$game .= file_get_contents($this->filename)."\n";
		return (unserialize($game));
	}

	public function	setGameInSession($game)
	{
		print_r($game);
		file_put_contents($this->filename, serialize($game))."\n";
	}

	public function deleteGameInSession()
	{
		unset($_SESSION['game']);
	}
}
?>
