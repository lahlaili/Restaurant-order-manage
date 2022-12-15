<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		<div class="log">
			<h1>login</h1>
			<form class="" action="index.php" method="POST">
				<input type="text" name="gmail" placeholder="gmail :"><br>
				<input type="text" name="pass" placeholder="password :"><br>
				<input type="submit" name="btn" >
			</form>
		</div>
	</center>
	<?php
		if(isset($_POST["btn"])){
			$gmail = $_POST["gmail"];
			$pass = $_POST["pass"];
			
		}
	 ?>

</body>
</html>
