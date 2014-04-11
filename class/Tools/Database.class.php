<?php

class Database
{
	private	$_login;
	private	$_password;
	private	$_database;
	public static $verbose = FALSE;
	
	public function __construct()
	{
		if (!empty($_SESSION['mamp_login']) && !empty($_SESSION['mamp_pwd']) && $this::$verbose === TRUE)
		{
			print($_SESSION['mamp_login']);
			print($_SESSION['mamp_pwd']);
			print($_SESSION['db_name']);
		}
	}
	
	public function	getLoginInSession()
	{
		if (!empty($_SESSION['mamp_login']))
			$this->_login = $_SESSION['mamp_login'];
	}

	public function	getPasswordInSession()
	{
		if (!empty($_SESSION['mamp_pwd']))
			$this->_password = $_SESSION['mamp_pwd'];
	}
	
	public function getDatabaseInSession()
	{
		if (!empty($_SESSION['db_name']))
			$this->_database = $_SESSION['db_name'];
	}

	public function	connect_db()
	{
		$this->getLoginInSession();
		$this->getPasswordInSession();
		$this->getDatabaseInSession();
		if ($bdd = mysqli_connect('phpmyadmin.local.42.fr', $this->_login, $this->_password, $this->_database))
		{
			return ($bdd);
		}
		else
		{
			echo "Error: bad login/password<br><a href='install.php'>Page de connexion</a>";
			return (NULL);
		}
	}
}
?>