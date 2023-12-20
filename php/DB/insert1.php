<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eswar1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO student (sno,sname,tot)
VALUES (3, 'aditya', 98)";
if (mysqli_query($conn, $sql))
{
 echo "New record created successfully";
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); ?>