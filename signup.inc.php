<?php

if (isset($_POST['signup-submit'])){

	//require 'connect/connect.php';
	require 'connect/connect.php';

	$username = $_POST['uid'];
	$email = $_POST['emailUsers'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	//check all fields are filled
	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){

		header("Location: signup.php?error=emptyfields&uid=".$username."&emailUsers=".$email);
		//if empty fields
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: signup.php?error=invalidmailuid");
	}
	//check invalid email
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	//check username
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	//if the two password does't mach each other
	else if ($password !== $passwordRepeat){
		header("Location: signup.php?error=passwordcheck&uid=".$username."&emailUsers=".$email);
		exit();
	}
	//username already taken
	else {

		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		//check errors
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: signup.php?error=sqlerror");
		exit();

		}
		//add information to DB
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);

			if ($resultCheck > 0) {
			//username already taken
			header("Location: signup.php?error=usertaken&mail=".$email);
			exit();
			}
			//signup into website
			else{

				$sql = "INSERT INTO users (uidUsers, emailUsers, pwd) VALUES (?, ?, ?)";
				//new statement inside the DB
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: signup.php?error=sqlerror");
				exit();

				}
				else {
					//encode password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					//send to the page with sucess message
					header("Location: signup.php?signup=success");
					exit();

				}

			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else {
	header("Location: signup.php");
	exit();
}