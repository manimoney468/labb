<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$un=$_POST["t1"];
$pwd=$_POST["t2"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO login (UserName,Password)
VALUES ('$un','$pwd')";
if (mysqli_query($conn, $sql))
{
 echo "New record created successfully";
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); ?>