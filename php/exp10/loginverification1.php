<?php
$uname=$_POST['t'];
$pwd=$_POST['p'];
$servername="localhost";
$username="root";
$password="";
$dbname="BOOKSTORE";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
$res=mysqli_query($conn,"select * from user");
while($temp=mysqli_fetch_array($res))
{
$runame=$temp['uname'];
$rpwd=$temp['password'];
}
if($runame==$uname)
	{
	if($rpwd==$pwd)
{
session_start();
$_SESSION['user']=$uname;
header("Location:welcome.php");
}
}
header("Location:failure.php");

echo "</center>";
mysqli_close($conn);
?>