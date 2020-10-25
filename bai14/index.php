<?php
session_start();
if(isset($_POST['submit'])){
	$input = $_POST['input'];
	if($input == $_SESSION['captcha'])
		$_SESSION['message'] = "* Right captcha !!!";
	else{
		$_SESSION['message'] = "* Wrong captcha !!!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CAPTCHA</title>
        <link href="template/css.css" type="text/css" rel="stylesheet">
</head>
<body>
	<form action="" method="POST">
		<h2>CAPTCHA - WEB</h2>
		<p>Please enter the captcha:</p>
		<input type="text" name="input"><img src="captcha.php" title="" alt="" /><br />
		<input type="submit" name="submit" value="Send">
		<p id="message"><?php if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		} ?></p>
	</form>
</body>
</html>
