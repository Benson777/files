<?php session_start();?>
<!doctype html><html>
<head>
		<meta charset="utf-8">
	<title>My First Web App</title>
</head>
<body>
	<?php require_once"nav.php"?>
	<h1>Profile</h1>
	<?php
	echo $_SESSION["n"];
	echo $_SESSION["l"];
	echo $_SESSION["o"];
	?>
	<?php require_once"footer.php"?>

</body>
</html> 