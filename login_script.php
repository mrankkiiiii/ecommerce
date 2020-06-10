<?php require ('./include/common.php'); 

$email = $_POST['email'];
$password = $_POST['password'];


if(strlen($password)<6)
{
	header('location: index.php?password_error=enter correct password');
}

$email = mysqli_real_escape_string($con, $email);
$password = MD5(mysqli_real_escape_string($con, $password));

$login_query = "select id,email from users where email='$email' and password='$password'";
$result = mysqli_query($con,$login_query) or die(mysqli_error($con));

	if(mysqli_num_rows($result)==0)
	{
		$error = "<span><strong>Please Enter correct E-mail id and Password</strong></span>";
		 header('location: index.php?error=' . $error);
	}
	else
	{
		$row = mysqli_fetch_array($result);
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];
		header('location: products.php');
	}
?>