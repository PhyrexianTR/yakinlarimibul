<?php
$servername = "localhost";
$username = "username_db";
$password = "password_db";
$dbname = "dbname_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Change the character set to utf8mb4
mysqli_set_charset($conn, "utf8");

// SQL query to create table
$sql = "CREATE TABLE deprem (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(50) NOT NULL,
  Surname VARCHAR(50) NOT NULL,
  CurrentLocation VARCHAR(200) NOT NULL,
  Phone VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  RelatedPerson VARCHAR(100) NOT NULL,
  Message VARCHAR(250) NOT NULL,
  IPAddress VARCHAR(250) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table creation is done!";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
