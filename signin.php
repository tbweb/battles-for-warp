<!DOCTYPE html>
<html>
	<head>
		<title>ASBII - Inscription</title>
		<link rel="stylesheet" type="text/css" href="/css/signin.css">
	</head>
	<body>
		<section>
			<h1>Inscription</h1>
			<div>
<?php

require_once("class/Database/Database.class.php");

	if (!empty($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['pwd']) && !empty($_POST['email']) && $_POST['submit'] == "Sign up")
	{
		session_start();
		$db = new database();
		$db->connect_db();
		$pw = htmlspecialchars(addslashes($_POST['pwd']));
		$login = htmlspecialchars(addslashes($_POST['login']));
		$email = htmlspecialchars(addslashes($_POST['email']));
		$hashpass = hash("whirlpool", $pw);
		if (($query = mysqli_query($db->getDb(), "SELECT `name`, `email` FROM `players` WHERE `name` = '$login' OR email = '$email'")) != FALSE)
		{
			if (mysqli_affected_rows($db->getDb()) == 0)
			{
				if (($query = mysqli_query($db->getDb(), "INSERT INTO `players` (`name`, `pwd`, `email`) VALUES ('$login', '$hashpass', '$email')")) != FALSE)
				{
					$_SESSION['login_rush'] = $login;
					$_SESSION['pwd_rush'] = $hashpass;
					header('location: index.php');
				}
				else
				{
					print(mysqli_error($db->getDb()));
					print("<span class='error'>Error in signin up, please retry.</span>\n");
				}
			}
			else
				print("<span class='error'>Username/Email already taken...</span>\n");
		}
		else
			print("<span class='error'>Error in signin up, please retry.3</span>\n");
	}

?>
				<form action="signin.php" method="post">
					<label for="login">Username:</label>
					<input type="text" name="login" id="login">
					<br>
					<label for="pwd">Password:</label>
					<input type="password" name="pwd" id="pwd">
					<br>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email">
					<br>
					<input type="submit" name="submit" value="Sign up" id="button">
				</form>
			</div>
		</section>
	</body>
</html>
