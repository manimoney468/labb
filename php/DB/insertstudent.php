<?php
$con = mysqli_connect("localhost","root","root","srikanth");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ivcse", $con);

$sql="INSERT INTO login (name, password, email, phno)
VALUES
('$_POST[fname]','$_POST[pwd]','$_POST[email]','$_POST[ph]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";
echo "<br><br>";
echo "You want to register another user, Click <a href='register.html'>here</a>";

mysqli_close($con);
?>