<?php

class Session
{
	private $informations;
	public static $verbose = FALSE;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Session.doc.txt"))
			$file = file_get_contents("./Session.doc.txt");
		return ($file);
	}

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
