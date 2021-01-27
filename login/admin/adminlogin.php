<?php
include('db.php');
//session_start();
$user=$_POST['username'];
$pass=$_POST['password_1'];
$query="select * from admin where username='$user' and password='$pass'";
$result=mysqli_query($db,$query);
$count=mysqli_num_rows($result);
if($count>0){
//$_SESSION["username"]=$user;
?>
<script>
window.location='adminsuccess.html';
</script>
<?php	
}
else {
?>
<script>
alert('Username or password invalid');
window.location='admin.html';
</script>	
	
	
<?php
}
?>