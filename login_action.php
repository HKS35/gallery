<?php
include('connection.php');
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select * from registration where email ='$email' and password = '$password'";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_affected_rows($conn);
	if ($count > 0) {
		session_start();
		$_SESSION['name'] = "hello";
		 mysqli_close($conn);
		 header('location:users_dashboard.php');
	}else{
		echo "unsucess";
	}
}
		?>