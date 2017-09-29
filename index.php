<?php
	$Name = $_POST['Name'];
	$PWD = $_POST['password'];
	
	echo "Das Passwort von " . $Name . " war '" . $PWD . "'";
?>
<html>
	<head>
		<title>Input</title>
	</head>
	<body>
		<h1>Eingaben</h1>
		<p>Hier sind einige Eingabefelder</p>
		<form action="#" method="POST">
			<label>Name:</label>
				<input type="text" name="Name" />
			<label>Passwort</label>
				<input type="password" name="password" />
			<input type="submit" value="Absenden" />
		</form>
	</body>
</html>