<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BOOKSTORE";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('jaahnaviCSEA', 'ANAND', 'Anand@gmail.com')";
if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); ?>