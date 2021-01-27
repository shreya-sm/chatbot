<?php
session_start();
include "db.php";
$user=$_SESSION['username'];
$query="select * from student where username='$user'";
$result=mysqli_query($db,$query);
/*if(isset($_SESSION['username']))
{
	$_SESSION['msg']="You must login first to view this page";
	header("location:login.html");
}
if(isset($_GET['logout']))
{
	//session_destroy();
	//unset($_SESSION['username']);
	//header("location:login.html");
}*/
?>


 <!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="studentlogin.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/568f472307.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <!-- <link rel="stylesheet" type="text/css" href="style.css">   -->
</head>
<style>


.img1{
  margin-top: 20px;
  margin-bottom: 5px;
  height: 115px;
  width: 120px;
  margin-left: 140px;
}

.heading{
  margin-top: 15px;
  text-align: center;
float: right;
margin-right: 220px;
margin-bottom: 5px;
}

.heading h2{
  margin-bottom: 0;
  font-size:20px;
  color:green;
}
.heading p{
  margin: 10px;
  text-align: center;
  font-weight: bold;
  font-size:18px;
}

.logout{
	color: red;
}
.suc-div{
	margin:50px auto;
	padding:25px 15px 10px 15px;
	border:1px solid black;
	border-radius:5px;
	font-family: 'Castoro', serif;
	color:white;
}


</style>

<body>


<!--HEADER START -->
<div class="container" style="margin-top:0; margin-bottom:20px">
<div class="row">
  <div class="col-lg-2">
    <img class="mx-auto d-block img1" src="../../img/logo.jpg" >
  </div>
  <div class="col-lg-10" >

    <div class=" heading">
      <h4>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h4>
      <p>
        (Established by Govt. of Delhi wide Act 9 of 2012)
      </p>
      <p>
        (Formerly Indira Gandhi Institute of Technology)
      </p>
    </div>
  </div>
</div>
</div>
<!-- HEADER END -->

<!--	<div class="hero">
		<div class="container">
            <div class="row"> -->


            <div class="middle-content mx-2">
            <div class="container-fluid bg-dark mx-auto py-2 rounded-sm">

            <button type="button" class="btn btn-success float-right mr-4"><a href="logout.php" style = "color: white; font-weight: bold;">Logout</a></button>
            <?php // endif ?>
            <h3 class="ml-4" style="color:white;">Welcome Student! </h3>
            </div>
          </div>

          <div class="container">
            <h2 class= "mt-4">Your Information!</h2>

            <div class="card bg-light mx-auto mt-4" style="width:400px">
              <div class="card-body">
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                	//displaying data
                   echo "<b> Name: </b>" . $row['fullname'] ;
                	// echo $row['fullname'];
                   echo "<br><b> Course: </b>" ;
                	 echo $row['course'];
                   echo "<br><b> Year: </b>" ;
                	 echo $row['year'];
                }
                ?>
                <br>
                <a href="#" class="btn btn-secondary stretched-link mt-3">See Result!</a>
              </div>
            </div>
          </div>







</body>
</html>
