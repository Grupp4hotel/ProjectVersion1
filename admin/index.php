<?php require "includes/session.php";?>

<!DOCTYPE html>
<html lang="sv">
<head>
	<title> Glada Geten | Admin</title>
	<?php include "../includes/head.php";?>
</head>

<body class="body">

	<?php if (!$_SESSION["adminLoggedIn"]): ?>
		<h2>Logga in</h2>

		<form action="/admin/login.php" method="post">
			<label for="username">Användarnamn:</label>
			<input type="username" name="username" id="username">

			<label for="password">Lösenord:</label>
			<input type="password" name="password" id="password">
			<button type="submit">Logga in</button>
		</form>

		<?php if (isset($_GET["invalid"])): ?>
			<p>Ditt användarnamn och / eller lösenord stämmer inte.</p>
		<?php endif ?>

	<?php else: ?>
		<p>Inloggad</p>

		<h3>Aktiviteter</h3>

		<span>Lägg till aktivitet</span>

		<form action="/admin/activities.php" method="post">
			<input type="text" name="title" placeholder="Titel"><br><br>
			<textarea name="summary" cols="30" rows="10" placeholder="Text"></textarea><br>
			<button name="add_activity" type="submit">Lägg till</button>
		</form>

	<?php endif ?>

</body>
</html>
