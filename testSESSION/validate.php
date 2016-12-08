<?php
	
	$myemail = "magjohansson@outlook.com";
	$mypass = "12345";
	$db = mysqli_connect('localhost', 'root', '', 'admindatabase');

	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$rem = $_POST['remember'];
		
		$elogin = SELECT * FROM emailuser WHERE email = '$email' AND password = '$pass';

		if( $email == $myemail and $pass == $mypass) {
			if( isset($_POST['remember']) ) {
				setcookie('email', $email, time()+60*60*7);
				setcookie('pass', $pass, time()+60*60*7);
			}
			session_start();
			$_SESSION['email'] = $email;
			header("location: welcome.php");

		} else {
			echo "Email or Password is incorrect! <br> Click here to <a href='login.php'> try again</a>";
		}

	} else {
		header("location: login.php");
	}

?>