<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BOOKSTORE";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
 echo "Table student created successfully";
} else {
 echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>