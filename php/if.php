<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello World!";

$t = date("d");

if ($t < "20") {
    echo "Have a good day!";
echo $t;
}
?>
</body>
</html>
