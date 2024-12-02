<?php
session_save_path('C:\xampp\htdocs\harsikaEv3');
session_start();
//  session time out after 1 minute of inactivity
?>

<html>
	<body>
		<form method = "post">
			<label>firstName</label></br>
				<input name="firstName"></br>
			<label>lastName</label></br>
				<input name="lastName"> </br>
			<label>email</label></br>
				<input name="email"></br>
			<input name="submit" value="submit" type="submit">
		</form>
	</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST["firstName"];
	$email = $_POST["email"];
	$_SESSION["username"] = $username;
	$_SESSION["email"] = $email;
}
if(isset($_SESSION["last_activity"])){
	$session_time = 60;
	$session_lifetime= time()-$_SESSION["last_activity"];
	if($session_time > $session_lifetime) {
		session_unset();
		session_destroy();
		echo "Session inactive";
	}else {
		echo "session will end in 1 min";
	}
}
?>