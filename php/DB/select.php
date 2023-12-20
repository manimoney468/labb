<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT sno, sname FROM student";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
 echo "SNO: " . $row[sno]. " - SName: " . $row["sname"].  "<br>";
 }
} else {
 echo "0 results";
}
mysqli_close($conn); ?>