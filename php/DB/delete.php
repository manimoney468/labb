<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BOOKSTORE";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "delete from student where firstname='jaahnavi'";
if (mysqli_query($conn, $sql))
{
 echo "Your Delete  record  successfully";
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); ?>