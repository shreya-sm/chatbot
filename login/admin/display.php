<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample PHP Database Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</head>
<body>

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

$sql = "SELECT * FROM chatbot";
$result = $conn->query($sql);
echo "<div class='container mt-3'>";

echo "<button type='button' class='btn btn-success mb-2' style = 'float:right'>";
echo "<a href='adminsuccess.html' style = 'color: white; font-weight: bold;'>";
echo "Go Back";
echo "</a>";
echo "</button>";
echo "<h2> All Queries from the Database </h2>";


			echo "<div class='table-responsive'>";

				echo "<table class='table table-hover table-inverse'>";

				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Queries</th>";
				echo "<th>Replies</th>";
				echo "</tr>";

if ($result->num_rows > 0) {
  /*echo "<table>
  <tr>
  <th>ID</th>
  <th>Queries</th>
  <th>Replies
  </th>
  </tr>";*/
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["queries"] . "</td>";
    echo "<td>" . $row["replies"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
echo "</div>";

$conn->close();
?>
</body>
</html>
