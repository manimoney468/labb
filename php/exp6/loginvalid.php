<?php
$u=$_POST["un"];
$p=$_POST["ps"];

$msg="";
$flag=true;
if($u=="")
{	
	$flag=false;
	$msg="Please enter Username";
}
else if($p=="")
{	
	$flag=false;
	$msg="Please enter Password";
}
else if(strlen($p)<6)
{
	$flag=false;
	$msg="Password should be minimum of 6 characters";
}


if($flag==false)
	echo $msg;
else
	echo"Login Success <br> Welcome $u";

?>

