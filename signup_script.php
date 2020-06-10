<?php require './include/common.php'; 

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);



$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$duplicate_email_query="select * from users where email='$email'";
$duplicate_email_result=mysqli_query($con,$duplicate_email_query);
$num = mysqli_num_rows($duplicate_email_result);

if ($num != 0) {
    $error = "<span><strong>Email Already Exists</strong></span>";
    header('location: signup.php?error=' . $error);
} else if (!preg_match($regex_email, $email)) {
    $error = "<span><strong>Not a valid Email Id</strong></span>";
    header('location: signup.php?error=' . $error);
} else if (!preg_match($regex_num, $contact)) {
    $error = "<span><strong>Not a valid phone number</strong></span>";
    header('location: signup.php?error=' . $error);
}
else if (strlen($password)<6){
    $error = "<span><strong>Password should have at-least 6 characters long</strong></span>";
    header('location: signup.php?error=' . $error);
}

$password = MD5($password); 
$user_registration_query = " insert into users(name,email,password,contact,city,address) 
values ('$name','$email','$password','$contact','$city','$address')";

$user_registration_submit= mysqli_query($con,$user_registration_query)
or die(mysqli_error($con));

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
header('location: products.php');
?>  