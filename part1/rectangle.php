<?php

$values=fgets(STDIN);

$values=explode(" ",$values);

$area=$values[0]*$values[1];
$cir=(($values[0]*2)+($values[1]*2));

echo $area;
echo " ";
echo $cir;
echo "\n";

?>