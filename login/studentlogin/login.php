<?php
session_start();
include('db.php');
$user=$_POST['username'];
$pass=$_POST['password_1'];
$query="select * from student where username='$user' and password='$pass'";
$result=mysqli_query($db,$query);
$count=mysqli_num_rows($result);
if($count>0){
$_SESSION["username"]=$user;
?>
<script>
window.location='loginsuccess.php'; 
</script>
<?php	
}
else {
?>
<script>
alert('Username or password invalid');
window.location='login.html';
</script>
<?php
}
?>