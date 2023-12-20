<?php
$x = 15; // global scope
function myTest() 
{
$y=30;
global $x;
$x.=$y;

     echo "<p>Variable x inside function is: $x</p>";
var_dump($x);

} 
myTest();
echo "<p>Variable x outside function is: $x</p>";

var_dump($x);
$x="null";
var_dump($x);
?>
