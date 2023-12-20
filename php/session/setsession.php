<?php  
session_start();  
?>  
<html>  
<body>  
<?php  
$_SESSION["user"] = "Anandsai";
$_SESSION["id"]="12345A1";  
echo "Session information are set successfully.<br/>";  
?>  
<a href="sessioncount.php">Visit next page</a>  
</body>  
</html>  