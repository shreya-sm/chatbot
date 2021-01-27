<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['login-btn']))
{
$queries=$_POST['queries'];
$replies=$_POST['replies'];
$errors=array();

//check db for existing query
$user_check_query="SELECT * FROM chatbot WHERE queries='$queries'";
$results=mysqli_query($conn,$user_check_query);
$user=mysqli_fetch_assoc($results);

/* if($queries)
{
	if($queries['queries']===$queries)
	{
		?><script> alert("Query already exists");</script><?php
		array_push($errors,"Query already exists");
		header('refresh:0; url=add_query.html');
	}

}	*/
//register the user if no error
if(count($errors)==0)
{

	$query="INSERT INTO chatbot (queries,replies)VALUES('$queries','$replies')";
	mysqli_query($conn,$query); ?>
	<script> alert("Record added to chatbot!!");</script>

<?php
header('refresh:0; url=adminsuccess.html');
}
}
?>
