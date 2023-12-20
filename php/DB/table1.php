<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eswar1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Student (
sno INT(10) ,
sname VARCHAR(30) NOT NULL,
tot INT(3)
)";
if (mysqli_query($conn, $sql)) 
{
 echo "Table Student created successfully";
} 
else 
{
 echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>