<!DOCTYPE html>
<?php
	session_start();

	require_once 'class/Database/Database.class.php';
	require_once 'class/Database/requestCreate.php';
	$db = new Database();

	if (empty($_POST['db_name']) || empty($_POST['login'])
		|| empty($_POST['pwd']) || empty($_POST['submit']))
	{
		include 'templates/install.html';
	}
	else if (!empty($_POST['db_name']))
	{
		echo $_SESSION['mamp_login'];
		if ($bdd = mysqli_connect('phpmyadmin.local.42.fr', $_POST['login'], $_POST['pwd']))
		{
			$_SESSION['mamp_login'] = $_POST['login'];
			$_SESSION['mamp_pwd'] = $_POST['pwd'];
			$_SESSION['db_name'] = $_POST['db_name'];
			echo "Server connected<br>";
			$request = createDb();
			$error = NULL;
			foreach ($request as $elem)
			{
				if ($elem)
				{
					if (!mysqli_query($bdd, $elem))
					{
						$error .= "Error creating table: ".$elem.mysqli_error($bdd)."<br><a href='install.php'>Page de connexion</a>\n";
						break;
					}
				}
			}
			if ($error)
				print ($error);
			else
			{
				echo "Database created<br>";
				mysqli_close($bdd);
				header('location: index.php');
			}
		}
		else
			echo "Error: bad login/password<br><a href='install.php'>Page de connexion</a>";
	}
	else
		header('location: install.php');
?>
