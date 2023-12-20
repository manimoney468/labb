<?php
function table($a,$n)
{
     for($i=1;$i<=$n;$i++)
        echo $i."*".$a."=".$i*$a."<br>";
}
table(4,20);
?>

