<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['db_name'] = 'battle-for-warp';

	require_once 'class/Database/Database.class.php';
	require_once 'class/Database/requestCreate.php';
	$db = new Database();

	if (empty($_POST['login']) || empty($_POST['pwd']) || empty($_POST['submit']))
	{
		include 'templates/install.html';
	}
	else if ($_POST['submit'] == "Connexion")
	{
		if ($bdd = mysqli_connect('phpmyadmin.local.42.fr', $_POST['login'], $_POST['pwd']))
		{
			$_SESSION['mamp_login'] = $_POST['login'];
			$_SESSION['mamp_pwd'] = $_POST['pwd'];
			echo "Server connected<br>";
			$request = createDb();
			$error = NULL;
			$i = 0;
			foreach ($request as $elem)
			{
				if ($elem)
				{
					if (!mysqli_query($bdd, $elem))
					{
						$error .= "Error creating table: ".$elem.mysqli_error($bdd)."<br>";
						++$i;
						if ($i == 8)
						{
							$error = NULL;
							break ;
						}
						else if ($i > 8)
							break ;
					}
				}
			}
			if ($error)
				print($error . "<a href='install.php'>Page de connexion</a>");
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
