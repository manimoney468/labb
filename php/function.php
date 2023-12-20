<?php
function counter()
{
    static $count = 0;
    echo $count;
    $count++;
}
for($i=1;$i<10;$i++)  
counter();
?>

