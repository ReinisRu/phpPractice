<?php include "../bootcamp_app/components/head.php"; ?>
<title>contacts</title>

<?php include "../bootcamp_app/components/navigation.php"; ?>

<h3>DB test page</h3>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "DB connected<br>";

$sql = "SELECT id, model, color FROM cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["model"]. " " . $row["color"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>