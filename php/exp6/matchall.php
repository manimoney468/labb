<html>
<body>

<?php
$str = "PHP HYPERTEXT PRE PROCESSOR . php SERVER SIDE SCRIPPING, php was developed by radalf";
$pattern = "/PHP/i";
echo preg_match_all($pattern, $str); 
?>

</body>
</html>