<?php  
session_start();  
?>  
<html>  
<body>  
<?php  
echo "THis Session user is: ".$_SESSION["user"]; 
echo "<br> your session id: ".$_SESSION["id"]; 
?>  
</body>  
</html>  