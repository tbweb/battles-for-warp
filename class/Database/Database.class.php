<?php

class Database
{
	private $_db = NULL;
	private	$_login;
	private	$_password;
	private	$_database;
	public static $verbose = FALSE;

	public function __construct()
	{
		if (!empty($_SESSION['mamp_login']) && !empty($_SESSION['mamp_pwd'])  && !empty($_SESSION['db_name']))
		{
			$this->_login = $_SESSION['mamp_login'];
			$this->_password = $_SESSION['mamp_pwd'];
			$this->_database = $_SESSION['db_name'];
			if ($this::$verbose === TRUE)
			{
				print($_SESSION['mamp_login']);
	// 			print($_SESSION['mamp_pwd']);
				print($_SESSION['db_name']);
			}
		}
	}

	public function connect_mysql()
	{
		if ($mysql_connect = mysqli_connect('phpmyadmin.local.42.fr', $this->_login, $this->_password))
		{
			return ($mysql_connect);
		}
	}

	public function	connect_db()
	{
		$mysqlConnect = $this->connect_mysql();
		if (mysqli_select_db($mysqlConnect, $this->_database))
		{
			$this->_db = $mysqlConnect;
			return ($mysqlConnect);
		}
		else
		{
			echo "Error: bad login/password<br><a href='install.php'>Page de connexion</a>";
			return (NULL);
		}
	}
	
	public function close_db()
	{
		mysqli_close($this->_db);
	}

	public function getContentInDb($query)
	{
		$content = array();
		if ($db_conn = $this->_db)
		{
			if ($res = mysqli_query($db_conn, $query))
			{
				while ($req = mysqli_fetch_assoc($res))
					$content[] = $req;
			}
		}
		return ($content);
	}
	
	public function getDb() {
		return $this->_db;
	}
	
}
?>
