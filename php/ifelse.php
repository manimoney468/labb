<?php
$today=date("d");
echo $today."<br>";
$t = date("H");
echo $t."<br>";
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "22") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>