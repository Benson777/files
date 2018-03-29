<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First Web App</title>
</head>
<body>

	<?php require_once"nav.php"?>
	<h1>Homepage</h1>
	<form action="process.php" method="POST">
		<li>FullName:<input type="text" name="firstName" placeholder="FullName"><br></li>
		<li>Email:<input type="text" name="lastName" placeholder="@gmail.com..."><br></li>
		<li>Message<input type="text" name="your message*" placeholder="your message*"><br></li>
		<li>Male:<input type="radio" name="gender" value="male">Female:<input type="radio" name="gender" value="female"><br></li>
		<br>
		<input type="submit" value="submit">
	</form>
	<?php require_once"footer.php"?>
	</body>
</html>
