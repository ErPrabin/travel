<?php
session_start();
include 'db_conn.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	echo $password;
	echo "auth";

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	} else if (empty($password)) {
		header("Location: login.php?error=Password is required&email=$email");
	} else {
		$stmt = $conn->prepare("SELECT * FROM traveluser WHERE UserName=?");
		$stmt->execute([$email]);

		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();
			echo "User: " . $user;

			$user_id = $user['UID'];
			$user_email = $user['UserName'];
			$user_password = $user['Pass'];
			echo $user_password;

			if ($email === $user_email) {
				if ($user_password === $password) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_email'] = $user_email;
					$_SESSION['user_full_name'] = $user_full_name;
					header("Location: index.php");
				} else {
					header("Location: login.php?error=Incorect User name or password&email=$email");
				}
			} else {
				header("Location: login.php?error=Incorect User name or password&email=$email");
			}
		} else {
			header("Location: login.php?error=Incorect User name or password&email=$email");
		}
	}
}
