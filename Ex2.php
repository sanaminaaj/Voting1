<?php
$a="hi";
$b=&$a;
$a= "Hey $b";
echo $a;
echo $b;
?>