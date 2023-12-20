<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$fn=$_POST["t1"];
$ln=$_POST["t2"];
$pwd=$_POST["t3"];
$cn=$_POST["t4"];
$mail=$_POST["t5"];
$add=$_POST["t6"];
$gen=$_POST["gender"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
else
{
$sql = "INSERT INTO register (FirstName,LastName,Password,Contact,email,address,gender)
VALUES ('$fn','$ln','$pwd','$cn','$mail','$add','$gen')";
if (mysqli_query($conn, $sql))
{
 echo "New record created successfully";
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
  mysqli_close($conn); 
?>