<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
	</head>
	<body class="bg_img">
		<section>
			<h1>Inscription</h1>
<?php
	require_once("class/Database/Database.class.php");
	if (!empty($_POST['submit']) && !empty($_POST['login'])
		&& !empty($_POST['pwd']) && !empty($_POST['pwd_verif'])
		&& !empty($_POST['email']) && $_POST['submit'] == "Enregistrer")
	{
		session_start();
		$db = new database();
		$db->connect_db();
		$request[0] = "SELECT name, email FROM players WHERE name='" . $_POST['login'] . "' OR email='" . $_POST['email'] . "';";
		$request[1] = "INSERT INTO players (name, pwd, email) VALUES ('" . $_POST['login'] . "', '" . $_POST['pwd'] . "', '" . $_POST['email'] . "');";
		if ($_POST['pwd'] != $_POST['pwd_verif'])
			echo "Mauvais mot de passe...<br>";
		else if (!mysqli_fetch_assoc(mysqli_query($db->getDb(), $request[0])))
		{
			if (mysqli_query($db->getDb(), $request[1]))
			{
				$_SESSION['login_rush'] = $_POST['login'];
				$_SESSION['pwd_rush'] = $_POST['pwd'];
				header('location: index.php');
			}
		}
		else
			echo "Identifiant/email d&eacute;j&agrave; utilis&eacute;...<br>";
	}
?>
			<form name="input" action="signin.php" method="post">
				<table class="formulaire">
					<tr>
						<td>identifiant:</td>
						<td><input type="text" name="login"></td>
					</tr>
					<tr>
						<td>Mot de passe:</td>
						<td><input type="password" name="pwd"></td>
					</tr>
					<tr>
						<td>V&eacute;rifier le mot de passe:</td>
						<td><input type="password" name="pwd_verif"></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center">
							<input type="submit" name="submit" value="Enregistrer">
						</td>
					</tr>
				</table>
			</form>
		</section>
	</body>
</html>
