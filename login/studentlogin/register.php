<?php 
include('db.php');

$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
$contact=mysqli_real_escape_string($db,$_POST['contact']);
$fullname=mysqli_real_escape_string($db,$_POST['fullname']);
$course=mysqli_real_escape_string($db,$_POST['course']);
$year=mysqli_real_escape_string($db,$_POST['year']); 
$errors=array();
//form validation
/*if(empty($username)) array_push($errors,"Username required");
if(empty($email)) array_push($errors,"Email required");
if(empty($password_1)) array_push($errors,"Password required");
if($password_1!= $password_2) array_push($errors,"Passwords do not match");*/

//check db for existing user with same username
$user_check_query="SELECT * FROM student WHERE username='$username' or email='$email' LIMIT 1"; //LIMIT is 1 as we will need only 1 instance to detect same usernames

$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);

if($user)
{
	if($user['username']===$username) 
	{
		?><script> alert("Username already exists");</script><?php
		array_push($errors,"Username already exists");
		header('refresh:0; url=register.html');
	}
	if($user['email']===$email)
	{
		?><script> alert("EmailId already exists");</script><?php
		array_push($errors,"This email id already has a registered username");
		header('refresh:0; url=register.html');
	}
	
}	
//register the user if no error 
if(count($errors)==0)
{
	$query="INSERT INTO student(username,email,password,contact,fullname,course,year)VALUES('$username','$email','$password_1','$contact','$fullname','$course','$year')";
	mysqli_query($db,$query);
	header('refresh:0; url=login.html'); ?>
	<script> alert("Registration successful!!");</script>
<?php	
}
?>