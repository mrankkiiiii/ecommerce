<?php require ('./include/common.php'); 
   
    if(!isset($_SESSION['email'])){
    header('location: login.php');
}
	$oldpassword = MD5(mysqli_real_escape_string($con,$_POST['oldpassword']));
	$new = MD5(mysqli_real_escape_string($con,$_POST['new']));
	$new1 = MD5(mysqli_real_escape_string($con,$_POST['new1']));


	$query = "SELECT email , password from users where email ='" . $_SESSION['email'] . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));

	$row = mysqli_fetch_array($result);
	$original_pass = $row['password'];

	if ($new != $new1) {
	    header('location: setting.php?error=<span><strong>The two passwords don\'t match</strong></span>');
	} else {
	    if ($oldpassword == $original_pass) {
	    	$user_updation_query = "UPDATE  users SET password = '" . $new1 . "' WHERE email = '" . $_SESSION['email'] . "'";
	        $user_submit = mysqli_query($con, $user_updation_query) or die($mysqli_error($con));
	        header('location: setting.php?error=<span><strong>Password Updated</strong></span>');
	    }
	    else
	        header('location: setting.php?error=<span><strong>Wrong Old Password</strong></span>');
	}

?> 